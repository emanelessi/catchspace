<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class Provider extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users()
    {
        return $this->hasMany(User::class, 'provider_id', 'id')->withTrashed();
    }

    public function roles()
    {
        return $this->hasMany(Role::class, 'provider_id', 'id')->withTrashed();
    }

    public function policies()
    {
        return $this->hasMany(Policies::class, 'provider_id', 'id')->withTrashed();
    }



    public function workSpaces()
    {
        return $this->hasMany(WorkSpace::class, 'provider_id', 'id')->withTrashed();
    }

}
