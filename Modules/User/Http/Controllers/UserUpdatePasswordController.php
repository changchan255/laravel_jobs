<?php

namespace Modules\User\Http\Controllers;

use App\Http\Requests\RequestUpdatePassword;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserUpdatePasswordController extends Controller
{
    public function index()
    {
        $user = User::find(get_data_user('users'));
        return view('user::pages.password.index', compact('user'));
    }

    public function update(RequestUpdatePassword $request)
    {
        try {
            if (!Hash::check($request->password_old, get_data_user('users','password'))) {
                return back()->with('password_old', 'Mật khẩu cũ không đúng');
            }
            // bcrypt Mã hóa mật khẩu
            $id = get_data_user('users');
            User::find($id)->update([
                'password' => bcrypt($request->password)
            ]);
            // Đổi mật khẩu thành công sẽ logout
            return redirect()->route('get.logout');
        }catch (\Exception $exception)
        {
            Log::error($exception->getMessage());
        }
        return redirect()->back();
    }
}
