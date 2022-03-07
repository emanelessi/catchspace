<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpace extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'provider_id',
        'work_space_type_id',
        'capacity',

    ];
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
