<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSpace extends Model
{
    use HasFactory;
    public function workSpaceType()
    {
        return $this->belongsTo(WorkSpaceType::class, 'work_space_type_id');
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
