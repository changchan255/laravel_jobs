<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Career
 *
 * @property int $id
 * @property string $c_name
 * @property string|null $c_slug
 * @property string|null $c_avatar
 * @property int $c_hot
 * @property int $c_total_job
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Career newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career query()
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCTotalJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Career extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'careers';
    const HOT = 1;
}
