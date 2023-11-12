<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserInfoController extends Controller
{
    public function index()
    {
        $user = User::find(get_data_user('users'));

        return view('user::pages.info.index', compact('user'));
    }

    public function update(Request $request)
    {
        try {
            $id = get_data_user('users');
            User::find($id)->update($request->except('_token'));
        }catch (\Exception $exception)
        {
            Log::error($exception->getMessage());
        }
        return redirect()->back();
    }
}
