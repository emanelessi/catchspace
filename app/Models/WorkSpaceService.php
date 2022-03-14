<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpaceService extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'value',
        'work_space_id',
        'service_id'

    ];
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id');
    }
}
