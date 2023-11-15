<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $query_params = $request->query();
        $users = User::where(function($query) use ($query_params) {
            if (isset($query_params['search'])) {
                $string_query = '%'.$query_params['search'].'%';
                $query->where('name', 'like', $string_query);
            }
        })
            ->select('id', 'name', 'email', 'phone','created_at')
            ->orderBy('id', 'desc')
            ->paginate(20)
            ->appends($query_params);
        $viewData = [
            'users' => $users,
            'query' => $query_params,
        ];
        return view('admin::user.index', $viewData);
    }

    public function search(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $users = $request->get('name');
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
