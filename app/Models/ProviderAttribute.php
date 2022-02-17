<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderAttribute extends Model
{
    use HasFactory;
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
