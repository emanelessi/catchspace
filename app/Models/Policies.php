<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Policies extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
