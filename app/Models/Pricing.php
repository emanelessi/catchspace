<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    public function WorkSpace(){
        return $this->belongsTo(WorkSpace::class,'work_space_id');
    }
    public function RentType(){
        return $this->belongsTo(RentType::class,'rent_type_id');
    }
}
