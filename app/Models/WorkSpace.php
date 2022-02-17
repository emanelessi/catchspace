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

    public function workers()
    {
        return $this->hasMany(Worker::class, 'work_space_id', 'id');
    }

    public function workSpaceAddons()
    {
        return $this->hasMany(WorkSpaceAddons::class, 'work_space_id', 'id');
    }

    public function pricing()
    {
        return $this->hasMany(Pricing::class, 'work_space_id', 'id');
    }

    public function workSpaceServices()
    {
        return $this->hasMany(WorkSpaceService::class, 'work_space_id', 'id');
    }
}
