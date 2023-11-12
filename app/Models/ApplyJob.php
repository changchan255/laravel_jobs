<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;
    protected $table = 'apply_job';
    protected $guarded = [''];

    public function  job()
    {
        return $this->belongsTo(Job::class,'aj_job_id');
    }
}
