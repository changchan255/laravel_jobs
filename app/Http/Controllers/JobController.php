<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

        $job = Job::with('career:id,c_name','company:id,c_name,c_logo,c_address,c_about')
            ->where('j_status', Job::STATUS_SUCCESS)
            ->find($idJob);
        if(!$job) return abort(404);

        $company = Company::with('careers')->find($job->j_company_id);

        $jobsSuggest = Job::where('j_career_id', $job->j_career_id)
            ->orderByDesc('id')
            ->Limit(10)
            ->get();

        $job->increment('j_view');

        $viewData = [
            'job' => $job,
            'hashIDJob' => $id,
            'company' => $company,
            'jobsSuggest' => $jobsSuggest

        ];
        return view('job_detail.index', $viewData);
    }
}
