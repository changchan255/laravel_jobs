<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::whereRaw(1);
        if($title = $request->t)  // t = title
            $jobs->where('j_name', 'like', '%'.$title.'%');
        $jobs = $jobs->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'jobs' => $jobs,
            'query' => $request->query()
        ];
        return view('job.index', $viewData);
    }
}
