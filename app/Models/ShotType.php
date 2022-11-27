<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShotType extends Model
{

    protected $fillable = [
        'short',
        'full',
    ];

    public $timestamps = false;

    public function shots(): HasMany
    {
        return $this->hasMany(Shot::class);
    }
}
