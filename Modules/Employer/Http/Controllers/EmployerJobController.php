<?php

namespace Modules\Employer\Http\Controllers;

use App\Models\Attribute;
use App\Models\Career;
use App\Models\Company;
use App\Models\Job;
use Carbon\Carbon;
use Hashids\Hashids;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Employer\Http\Requests\EmployerJobRequest;

class EmployerJobController extends Controller
{

    public function index()
    {
        $jobs = Job::where('j_employer_id', get_data_user('users'))
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'jobs' => $jobs
        ];
        return view('employer::job.index', $viewData);
    }

    public function create() {
        $experience = Attribute::where('a_type', Attribute::TYPE_EXPERIENCE)->get();
        $ranks = Attribute::where('a_type', Attribute::TYPE_RANK)->get();
        $formOfWork = Attribute::where('a_type', Attribute::TYPE_FORM_OF_WORK)->get();
        $careers = Career::all();
        $viewData = [
            'experience' => $experience,
            'careers' => $careers,
            'ranks' => $ranks,
            'formOfWork' => $formOfWork,
        ];
        return view('employer::job.create', $viewData);
    }

    public function store(EmployerJobRequest $request)
    {
        $data = $request->except('_token');
        $data['j_slug'] = Str::slug($request->j_name);
        $data['created_at'] = Carbon::now();
        $job = Job::create($data);
        if ($job) {
            $job->j_employer_id = get_data_user('users');
            $job->save();

            $hashids = new Hashids(config('app._token_id'));
            $hashID = $hashids->encode(1, 10, 112, 1212, 12, 2, 1, 2, $job->id);
            $job->j_hash_slug = $hashID;
            $job->save();

            $company = Company::where('c_employer_id', get_data_user('users'))->first();
            if ($company)
            {
                $job->j_company_id = $company->id;
                $job->save();
            }
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $job = Job::where([
            'id' => $id,
            'j_employer_id' => get_data_user('users')
        ])->first();
        if(!$job) return abort(404);

        $experience = Attribute::where('a_type', Attribute::TYPE_EXPERIENCE)->get();
        $ranks = Attribute::where('a_type', Attribute::TYPE_RANK)->get();
        $formOfWork = Attribute::where('a_type', Attribute::TYPE_FORM_OF_WORK)->get();
        $careers = Career::all();
        $viewData = [
            'experience' => $experience,
            'careers' => $careers,
            'ranks' => $ranks,
            'job' => $job,
            'formOfWork' => $formOfWork,
        ];
        return view('employer::job.update', $viewData);
    }

    public function update(EmployerJobRequest $request, $id) {
        $job = Job::where([
            'id' => $id,
            'j_employer_id' => get_data_user('users')
        ])->first();
        if(!$job) return abort(404);

        $data = $request->except('_token');
        $data['j_slug'] = Str::slug($request->j_name);
        $data['updated_at'] = Carbon::now();
        $job->fill($data)->save();

        return redirect()->back();
    }
}
