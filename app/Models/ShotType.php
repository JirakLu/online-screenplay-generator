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

    public function shotsFrom(): HasMany
    {
        return $this->hasMany(Shot::class, 'shot_type_from');
    }

    public function shotsTo(): HasMany
    {
        return $this->hasMany(Shot::class, 'shot_type_to');
    }
}
