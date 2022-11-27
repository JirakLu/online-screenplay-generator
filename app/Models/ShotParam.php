<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ShotParam extends Model
{

    protected $fillable = [
        'shot_id',
        'text',
    ];

    public $timestamps = false;

    public function shot(): BelongsToMany
    {
        return $this->belongsToMany(Shot::class, 'shot_has_params');
    }

}
