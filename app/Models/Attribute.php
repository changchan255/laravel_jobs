<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $a_name
 * @property string $a_slug
 * @property int $a_type
 * @property int $a_total_job
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereASlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereATotalJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    protected $guarded = [''];

    const TYPE_EXPERIENCE = 1; // king nghiem
    const TYPE_RANK = 2; // cap bac
    const TYPE_FORM_OF_WORK = 3; // hinh thuc lam viec
}
