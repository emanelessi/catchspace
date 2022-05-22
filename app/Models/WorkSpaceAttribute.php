<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpaceAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workSpaces()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id', 'id')->withTrashed();
    }
    public function attributes()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id', 'id')->withTrashed();
    }


}
