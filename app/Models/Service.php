<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',

    ];

    public function workSpaceServices()
    {
        return $this->hasMany(WorkSpaceService::class, 'service_id', 'id')->withTrashed();
    }
}
