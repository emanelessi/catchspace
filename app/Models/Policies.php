<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    use HasFactory;

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
