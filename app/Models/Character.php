<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Character extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'scene_id',
    ];

    public $timestamps = false;

    public function monologs(): HasMany
    {
        return $this->hasMany(Monolog::class);
    }

    public function scenes(): BelongsToMany
    {
        return $this->belongsToMany(Scene::class, 'casts');
    }

    public function script(): BelongsTo
    {
        return $this->belongsTo(Script::class);
    }
}
