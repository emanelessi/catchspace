<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    public function providerAttribute()
    {
        return $this->hasMany(ProviderAttribute::class, 'provider_id', 'id');
    }
}
