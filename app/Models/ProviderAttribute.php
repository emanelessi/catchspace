<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'value',
        'provider_id',
        'attribute_id',

    ];
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id')->withTrashed();
    }
    public function attributes()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id')->withTrashed();
    }
}
