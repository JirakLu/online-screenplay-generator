<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SceneType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'full',
        'short'
    ];

    public function scenes(): HasMany
    {
        return $this->hasMany(Scene::class);
    }
}
