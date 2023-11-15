<?php

namespace Modules\Employer\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployerApplyJobController extends Controller
{
    public function index(Request $request)
    {
        $applyJobs = ApplyJob::with('job:id,j_name,j_hash_slug,j_address,j_slug')->where('aj_employer_id', get_data_user('users'));
        if($username = $request->n)
        {
            $applyJobs->whereHas('user', function ($query) use ($username){
                $query->where('name','like','%'.$username.'%');
            });
        }
        $applyJobs = $applyJobs->orderByDesc('id')
            ->paginate(10);
        $viewData = [
            'applyJobs' => $applyJobs,
            'query' => $request->query()
        ];
        return view('employer::apply_job.index', $viewData);
    }

    public function delete($id)
    {
        ApplyJob::find($id)->delete();
        return redirect()->back();
    }

    public function success($id) {

       $applyJob =  ApplyJob::find($id);
       $applyJob->aj_apply = 1;
       $applyJob->save();
        return redirect()->back();
    }

    public function cancel($id) {

        $applyJob =  ApplyJob::find($id);
        $applyJob->aj_apply = -1;
        $applyJob->save();
        return redirect()->back();
    }

    public function note($id) {
        $applyJob = ApplyJob::find($id);
        return view('employer::apply_job.note', compact('applyJob'));
    }

    public function postNote(Request $request, $id) {
        $applyJob =  ApplyJob::find($id);
        $applyJob->aj_note = $request->aj_note;
        $applyJob->save();
        return redirect()->back();
    }
}
