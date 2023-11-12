<?php

namespace Modules\User\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserApplyJobController extends Controller
{
    public function index()
    {
        $applyJobs = ApplyJob::with('job:id,j_name,j_hash_slug,j_address,j_slug')->where('aj_user_id', get_data_user('users'))
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'applyJobs' => $applyJobs
        ];
        return view('user::pages.job_apply.index', $viewData);
    }

    public function delete($id)
    {
        ApplyJob::find($id)->delete();
        return redirect()->back();
    }
}
