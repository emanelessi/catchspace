<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function policies()
    {
        return $this->hasMany(Policies::class, 'provider_id', 'id');
    }
    public function providerAttributes()
    {
        return $this->hasMany(ProviderAttribute::class, 'provider_id', 'id');
    }
    public function workSpaces()
    {
        return $this->hasMany(WorkSpace::class, 'provider_id', 'id');
    }
}
