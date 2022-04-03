<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkSpaceRating extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'work_space_id',
        'rate_avg',
        'rate_count',

    ];
    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id')->withTrashed();
    }
}
