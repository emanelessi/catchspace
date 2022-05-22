<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workSpaceAttributes()
    {
        return $this->belongsTo(WorkSpaceAttribute::class, 'work_space_id')->withTrashed();
    }
}
