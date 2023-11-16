<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCompanyController extends Controller
{
    public function index(Request $request)
    {
        $query_params = $request->query();
        $companies = Company::where(function($query) use ($query_params) {
            if (isset($query_params['search'])) {
                $string_query = '%'.$query_params['search'].'%';
                $query->where('c_name', 'like', $string_query);
            }
        })
            ->select('id', 'c_name', 'c_email', 'c_phone','created_at')
            ->orderBy('id', 'desc')
            ->paginate(20)
            ->appends($query_params);
        $viewData = [
            'companies' => $companies,
            'query' => $query_params,
        ];
        return view('admin::company.index', $viewData);
    }

    public function search(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $companies = $request->get('c_name');
        }
    }

    public function delete($id)
    {
        Company::find($id)->delete();
        return redirect()->back();
    }
}
