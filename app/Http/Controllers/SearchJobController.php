<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Service\JobFilterService;
use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::with('company:id,c_name,c_logo')->whereRaw(1);
        if($title = $request->t)  // t = title
            $jobs->where('j_name', 'like', '%'.$title.'%');

        // Tim kiếm theo title Job
        if($title = $request->t)
            $jobs->where('j_name', 'like', '%'.$title.'%');

        if($l = $request->l)
            $jobs->where('j_address','like', '%'.$l.'%');

        if($r = $request->r)
            $jobs->where('j_rank_id', $r);

        if($e = $request->e)
            $jobs->where('j_experience_id', $e);

        if($f = $request->f)
            $jobs->where('j_form_of_work_id', $f);

        $jobs = $jobs->orderByDesc('id')
            ->paginate(10);

        $filterJob = JobFilterService::getFilterJob();
        $viewData = [
            'jobs' => $jobs,
            'query' => $request->query(),
            'filterJob' => $filterJob
        ];
        return view('job.index', $viewData);
    }
}
