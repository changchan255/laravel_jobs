<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestRegister;
use App\Models\User;

class RegisterController extends Controller
{
    public function postRegister(RequestRegister $request)
    {
        if($request->ajax())
        {
            $data = $request->except('_token');
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            if($user) {
                \Auth::guard('users')->login($user);
            }
            return response()->json($data);
        }
    }
}
