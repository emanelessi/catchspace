<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerWorkSpace extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }
    public function workers()
    {
        return $this->belongsTo(Worker::class, 'work_space_id')->withTrashed();
    }
}
