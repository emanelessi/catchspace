<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSpaceAddons extends Model
{
    use HasFactory;
    public function WorkSpace(){
        return $this->belongsTo(WorkSpace::class,'work_space_id');
    }
    public function Addon(){
        return $this->belongsTo(Addons::class,'addon_id');
    }
}
