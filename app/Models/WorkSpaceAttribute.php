<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpaceAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id')->withTrashed();
    }
}
