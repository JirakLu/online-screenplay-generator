<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scene extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'scene_type_id',
    ];

    public $timestamps = false;

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, 'casts');
    }

    public function sceneType(): BelongsTo
    {
        return $this->belongsTo(SceneType::class);
    }

    public function script(): BelongsTo
    {
        return $this->belongsTo(Script::class);
    }

    public function shots(): HasMany
    {
        return $this->hasMany(Shot::class);
    }

}
