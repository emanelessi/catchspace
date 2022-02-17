<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentType extends Model
{
    use HasFactory;
    public function pricing(){
        return $this->hasMany(Pricing::class,'rent_type_id','id');
    }
}
