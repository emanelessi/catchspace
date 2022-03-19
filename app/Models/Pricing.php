<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pricing extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'price',
        'work_space_id',
        'rent_type_id',

    ];
    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }

    public function rentType()
    {
        return $this->belongsTo(RentType::class, 'rent_type_id')->withTrashed();
    }
}
