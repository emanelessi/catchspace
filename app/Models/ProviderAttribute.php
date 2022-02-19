<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
