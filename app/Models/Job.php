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
            'name' => 'Chờ duyệt'
        ],
        self::STATUS_SUCCESS => [
            'class' => 'btn-success',
            'name' => 'Đã duyệt'
        ],
        self::STATUS_CANCEL  => [
            'class' => 'btn-danger',
            'name' => 'Đã hủy'
        ],
        self::STATUS_REQUEST => [
            'class' => 'btn-primary',
            'name' => 'Yêu cầu duyệt lại'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->j_status, []);
    }
}
