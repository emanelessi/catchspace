<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workerWorkSpace()
    {
        return $this->hasMany(WorkerWorkSpace::class, 'worker_id')->withTrashed();
    }
}
