<?php

namespace Modules\Employer\Http\Controllers;

use App\Models\Career;
use App\Models\CompanyCareer;
use Carbon\Carbon;
use Hashids\Hashids;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Employer\Http\Requests\CompanyRequest;
use App\Models\Company;

class EmployerCompanyController extends Controller
{
    public function index()
    {
        $scale = (new Company())->scale;
        $working_time = (new Company())->working_time;
        $careers = Career::all();
        $company = Company::where('c_employer_id', get_data_user('users'))->first();
        $careersCompany = CompanyCareer::where('cc_company_id', $company->id ?? 0)->pluck('cc_careers_id')->toArray();

        $viewData = [
            'scale' => $scale,
            'careers' => $careers,
            'company' => $company,
            'careersCompany' => $careersCompany,
            'working_time' => $working_time
        ];
        return view('employer::company.index', $viewData);
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->except('_token', 'logo');
        $data['c_slug'] = Str::slug($request->c_name);
        $data['created_at'] = Carbon::now();
        if ($request->logo) {
            $image = upload_image('logo');
            if ($image['code'] == 1)
                $data['c_logo'] = $image['name'];
        }
        $company = Company::where('c_employer_id', get_data_user('users'))->first();
        if ($company) {
            $company->fill($data)->save();
            $this->syncCareers($request->careers, $company->id);
            return redirect()->back();
        }
        $company = Company::create($data);
        if ($company)
        {
            $company->c_employer_id = get_data_user('users');
            $company->save();
            $hashids = new Hashids(config('app._token_id'));
            $hashID = $hashids->encode(1,10,112,1212,12,2,1,2,$company->id);
            $company->c_hash_slug = $hashID;
            $company->save();
        }
        $this->syncCareers($request->careers, $company->id);
       return redirect()->back();
    }

    public function syncCareers($careers, $companyID)
    {
        if (!empty($careers))
        {

           try {
               CompanyCareer::where('cc_company_id', $companyID)->delete();
               foreach ($careers as $item)
               {
                   CompanyCareer::create([
                       'cc_company_id' => $companyID,
                       'cc_careers_id' => $item
                   ]);
               }
           } catch (\Exception $exception) {

           }
        }

    }
}
