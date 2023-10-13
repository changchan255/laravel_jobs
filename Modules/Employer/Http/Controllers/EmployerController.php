<?php

namespace Modules\Employer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployerController extends Controller
{
    
    public function index()
    {
        return view('employer::index');
    }

    
}
