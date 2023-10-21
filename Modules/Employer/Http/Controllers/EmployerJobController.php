<?php

namespace Modules\Employer\Http\Controllers;

use App\Models\Attribute;
use App\Models\Career;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Employer\Http\Requests\EmployerJobRequest;

class EmployerJobController extends Controller
{

    public function index()
    {

        return view('employer::job.index');
    }

    public function create() {
        $experience = Attribute::where('a_type', Attribute::TYPE_EXPERIENCE)->get();
        $careers = Career::all();
        $viewData = [
            'experience' => $experience,
            'careers' => $careers,
        ];
        return view('employer::job.create', $viewData);
    }

    public function store(EmployerJobRequest $request) {

    }
}
