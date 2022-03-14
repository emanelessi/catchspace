<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',

    ];
    public function workSpaceAddons()
    {
        return $this->hasMany(WorkSpaceAddons::class, 'addon_id', 'id');
    }
}
