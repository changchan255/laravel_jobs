<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminJobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::with('career:id,c_name');
        //Tìm kiếm công việc
        if($n = $request->n)
            $jobs->where('j_name', 'like','%'.$n.'%');
        $jobs = $jobs->orderByDesc('id')
            ->paginate('10');
        $viewData = [
            'jobs' => $jobs,
            'query' => $request->query()
        ];
        return view('admin::job.index', $viewData);
    }

   public function edit($id)
   {
       $job = Job::find($id);
       $status = (new Job())->getStatus();
       $viewData = [
           'job' => $job,
           'status' => $status
       ];
       return view('admin::job.update', $viewData);
   }

   public function update(Request $request, $id)
   {
        $job = Job::find($id);
        $job->j_status = $request->j_status;
        $job->j_admin_id = 0;
        $job->save();
        return redirect()->route('get_admin.job.index');
   }

   public function delete($id) {
       $job = Job::find($id);
       if ($job) $job->delete();
       return redirect()->back();
   }

}
