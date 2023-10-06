<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    protected $guarded = [''];

    const TYPE_EXPERIENCE = 1; // king nghiem
    const TYPE_RANK = 2; // cap bac
    const TYPE_FORM_OF_WORK = 3; // hinh thuc lam viec
}
