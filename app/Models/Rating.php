<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'work_space_id',
        'mac_address',
        'rate',

    ];
    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }
    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id')->withTrashed();
    }
}
