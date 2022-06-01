<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $guarded=[];
    protected $hidden = [
        'password',
    ];
    public function workerWorkSpace()
    {
        return $this->hasMany(WorkerWorkSpace::class, 'worker_id')->withTrashed();
    }
    public function rating()
    {
        return $this->hasMany(Rating::class, 'work_space_id')->withTrashed();
    }
}
