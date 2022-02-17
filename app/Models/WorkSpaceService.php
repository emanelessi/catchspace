<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSpaceService extends Model
{
    use HasFactory;
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
    public function workSpace(){
        return $this->belongsTo(WorkSpace::class,'work_space_id');
    }
}
