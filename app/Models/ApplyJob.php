<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class ApplyJob extends Model
{
    use HasFactory;
    protected $table = 'apply_job';
    protected $guarded = [''];

    protected $apply = [
        1 => [
            'name' => "Đã phê duyệt"
        ],
        0 => [
            'name' => "Đang chờ duyệt"
        ],
        -1 => [
            'name' => "Loại"
        ],
    ];
    public function getApply()
    {
        return Arr::get($this->apply, $this->aj_apply,[]);
    }

    public function  job()
    {
        return $this->belongsTo(Job::class,'aj_job_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'aj_user_id');
    }
}
