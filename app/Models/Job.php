<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [''];

    const STATUS_PROCESS = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_CANCEL = -2;
    const STATUS_REQUEST = -1;

    public $status = [
        self::STATUS_PROCESS => [
            'class' => 'btn-warning',
            'class-text' => 'text-warning',
            'name' => 'Chờ duyệt'
        ],
        self::STATUS_SUCCESS => [
            'class' => 'btn-success',
            'class-text' => 'text-success',
            'name' => 'Đã duyệt'
        ],
        self::STATUS_CANCEL  => [
            'class' => 'btn-danger',
            'class-text' => 'text-danger',
            'name' => 'Đã hủy'
        ],
        self::STATUS_REQUEST => [
            'class' => 'btn-primary',
            'class-text' => 'text-primary',
            'name' => 'Yêu cầu duyệt lại'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->j_status, []);
    }

    public function career()
    {
        return $this->belongsTo(Career::class, 'j_career_id');
    }

    public function getAttributeJob()
    {
        return $this->belongsTo(Attribute::class, 'j_form_of_work_id');
    }

    public function company()  //tra ve ten cong ty trong muc job.index
    {
        return $this->belongsTo(Company::class, 'j_company_id');
    }

    public function favourites()
    {
        return $this->belongsToMany(User::class, 'job_favourite', 'jf_job_id', 'jf_user_id');
    }

}
