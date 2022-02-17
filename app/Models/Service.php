<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function workSpaceServices()
    {
        return $this->hasMany(WorkSpaceService::class, 'service_id', 'id');
    }
}
