<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Job;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request, $slug)
    {
        $career = Career::where('c_slug', $slug)->first();
        if(!$career) return abort(404);

        $jobs = Job::with('company:id,c_name')->where([
            'j_career_id' => $career->id,
            'j_status' => Job::STATUS_SUCCESS
        ])->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'jobs' => $jobs,
            'career' => $career
        ];
        return view('job.index', $viewData);
    }
}
