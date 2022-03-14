<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'type',

    ];
    public function pricing()
    {
        return $this->hasMany(Pricing::class, 'rent_type_id', 'id');
    }
}
