<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCareer extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'company_careers';
}
