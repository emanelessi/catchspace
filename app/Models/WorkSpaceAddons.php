<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSpaceAddons extends Model
{
    use HasFactory;
    public function workSpace(){
        return $this->belongsTo(WorkSpace::class,'work_space_id');
    }
    public function addon(){
        return $this->belongsTo(Addons::class,'addon_id');
    }
}
