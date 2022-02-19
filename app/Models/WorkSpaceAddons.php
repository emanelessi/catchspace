<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpaceAddons extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id');
    }

    public function addon()
    {
        return $this->belongsTo(Addons::class, 'addon_id');
    }
}
