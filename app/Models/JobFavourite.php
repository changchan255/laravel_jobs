<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFavourite extends Model
{
    use HasFactory;
    protected $table = 'job_favourite';
    protected $guarded = [''];
}
