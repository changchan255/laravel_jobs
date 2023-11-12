<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\Job;
use Carbon\Carbon;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxApplyJobController extends Controller
{
    public function applyJob(Request $request)
    {
        if ($request->ajax())
        {
            $hashSlug = $request->hash_slug;
            //Giải mã id
            $hashids = new Hashids(config('app._token_id'));
            $hashID = $hashids->decode($hashSlug) ?? [];
            // array_pop lấy ra $hashID truyền vào $idJob
            $idJob = array_pop($hashID);
            if(!$idJob){
                return response([
                    'status' => 404,
                    'messages' => 'Dữ liệu không tồn tại'
                ]);
            }

            $job = Job::find($idJob);
            if(!$job)
            {
                return response([
                    'status' => 404,
                    'messages' => 'Dữ liệu không tồn tại'
                ]);
            }

            Log::info($request->file);
            // Kiểm tra user đã ứng tuyển vào Job này chưa
            $userID = get_data_user('users') ? get_data_user('users') : 0;
            if($userID)
            {
                $jobApply = ApplyJob::where([
                    'aj_user_id' => $userID,
                    'aj_job_id' => $idJob
                ])->first();
                if($jobApply)
                {
                    return response([
                        'status' => 200,
                        'messages' => 'Bạn đã ứng tuyển công việc này'
                    ]);
                }
            }
            if($request->hasFile('file'))
            {
                //Có thể upload thêm nhiều file khác ['']
                $image = upload_image('file','',['docx','txt','pdf']);
                if ($image['code'] == 1)
                    $data['aj_file_cv'] = $image['name'];
            }

            $applyJob = $this->createApplyJob($request, $job);
            if($applyJob){
                return response([
                    'status' => 200,
                    'messages' => 'Bạn đã ứng tuyển thành công'
                ]);
            }
            return response([
                'status' => 201,
                'messages' => 'Bạn đã ứng tuyển thất bại'
            ]);
        }
    }
    public function createApplyJob($request, $job)
    {
        try {
            $file = null;
            if($request->hasFile('file'))
            {
                //Có thể upload thêm nhiều file khác ['']
                $image = upload_image('file','',['docx','txt','pdf']);
                if ($image['code'] == 1)
                    $file = $image['name'];
            }
            return ApplyJob::create([
                'aj_name' => $request->name,
                'aj_phone' => $request->phone,
                'aj_email' => $request->email,
                'aj_user_id' => get_data_user('users') ? get_data_user('users') :0,
                'aj_job_id' => $job->id,
                'aj_hash_slug' => $job->j_hash_slug,
                'aj_company_id' => $job->j_company_id,
                'aj_employer_id' => $job->j_employer_id,
                'aj_about' => $request->about,
                'aj_file_cv' => $file,
                'created_at' => Carbon::now()
            ]);
        }catch (\Exception $exception)
        {
            Log::error($exception->getMessage());
        }
        return null;
    }
}
