<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class UserLevel extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function users()
    {
        return $this->hasMany(User::class, 'user_level_id','id')->withTrashed();
    }
    public function roles()
    {
        return $this->hasMany(Role::class, 'user_level_id', 'id')->withTrashed();
    }
}
