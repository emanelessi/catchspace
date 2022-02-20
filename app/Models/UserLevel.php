<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLevel extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function users()
    {
        return $this->hasMany(User::class, 'user_level_id','id');
    }
}
