<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSpaceType extends Model
{
    use HasFactory;

    public function workSpaces()
    {
        return $this->hasMany(WorkSpace::class, 'work_space_type_id', 'id');
    }
}
