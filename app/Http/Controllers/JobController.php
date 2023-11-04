<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Hashids\Hashids;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request, $slug, $id)
    {
        $hashids = new Hashids(config('app._token_id'));
        $hashID = $hashids->decode($id);
        $idJob = array_pop($hashID);
        if(!$idJob) return abort(404);

        $job = Job::with('career:id,c_name','company:id,c_name')->find($idJob);
        if(!$job) return abort(404);

        $viewData = [
            'job' => $job,
            'hashIDJob' => $id
        ];
        return view('job_detail.index', $viewData);
    }
}
