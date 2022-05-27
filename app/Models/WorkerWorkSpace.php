<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerWorkSpace extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'work_space_id',
        'work_space_addon_id',
        'pricing_id',

    ];

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }
    public function workers()
    {
        return $this->belongsTo(Worker::class, 'worker_id')->withTrashed();
    }
    public function pricing()
    {
        return $this->belongsTo(Pricing::class, 'pricing_id')->withTrashed();
    }
    public function workSpaceAddons()
    {
        return $this->belongsTo(WorkSpaceAddons::class, 'work_space_addon_id')->withTrashed();
    }
}
