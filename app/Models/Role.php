<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected  $fillable =['name'];
    public const Is_Provider=1;
    public const Is_Super_Admin=2;
    public const Is_Test=3;
}
