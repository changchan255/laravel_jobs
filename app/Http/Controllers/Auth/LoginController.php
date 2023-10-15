<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestLogin;

class LoginController extends Controller
{
    public function postLogin(RequestLogin $request)
    {
        if($request->ajax())
        {
            $data = $request->except('_token');
            return response()->json($data);
        }
    }
}
