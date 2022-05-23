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
        'name',
        'location',
        'image',

    ];


    public function scopeCheckProvider ($query) {
        if (auth()->user()->user_level_id == config('constants.user_levels.provider')) {
            $query->where('provider_id', auth()->user()->provider->id);
        }
    }


    public function workSpaceType()
    {
        return $this->belongsTo(WorkSpaceType::class, 'work_space_type_id')->withTrashed();
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id')->withTrashed();
    }
    public function workerWorkSpace()
    {
        return $this->hasMany(WorkerWorkSpace::class, 'work_space_id')->withTrashed();
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'work_space_id')->withTrashed();
    }

    public function workSpaceRating()
    {
        return $this->hasMany(WorkSpaceRating::class, 'work_space_id')->withTrashed();
    }



    public function workSpaceAddons()
    {
        return $this->hasMany(WorkSpaceAddons::class, 'work_space_id', 'id')->withTrashed();
    }

    public function pricing()
    {
        return $this->hasMany(Pricing::class, 'work_space_id', 'id')->withTrashed();
    }

    public function workSpaceServices()
    {
        return $this->hasMany(WorkSpaceService::class, 'work_space_id', 'id')->withTrashed();
    }

}
