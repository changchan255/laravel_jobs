<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestRegister;

class RegisterController extends Controller
{
    public function postRegister(RequestRegister $request)
    {
        if($request->ajax())
        {
            $data = $request->except('_token');
            return response()->json($data);
        }
    }
}
