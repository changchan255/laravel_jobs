<?php

namespace Modules\Employer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployerJobController extends Controller
{
   
    public function index()
    {
        return view('employer::job.index');
    }

    public function create() {
        return view('employer::job.create');
    }
}
