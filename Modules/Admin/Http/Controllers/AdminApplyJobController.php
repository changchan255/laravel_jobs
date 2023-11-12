<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminApplyJobController extends Controller
{
    public function index()
    {
        $applyJobs = ApplyJob::with('job:id,j_name,j_hash_slug,j_address,j_slug')
            ->orderByDesc('id')
            ->paginate(10);
        $viewData = [
            'applyJobs' => $applyJobs
        ];
        return view('admin::apply_job.index', $viewData);
    }

    public function delete($id)
    {
        ApplyJob::find($id)->delete();
        return redirect()->back();
    }
}
