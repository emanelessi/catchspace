<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addons extends Model
{
    use HasFactory;
    public function WorkSpaceAddons(){
        return $this->hasMany(WorkSpaceAddons::class,'addon_id','id');
    }
}
