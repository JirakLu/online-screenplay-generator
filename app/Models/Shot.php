<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shot extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'scene_id',
        'shot_type_from',
        'shot_type_to',
    ];

    public $timestamps = false;

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function monologs(): HasMany
    {
        return $this->hasMany(Monolog::class);
    }

    public function scene(): BelongsTo
    {
        return $this->belongsTo(Scene::class);
    }

    public function shotParams(): BelongsToMany
    {
        return $this->belongsToMany(ShotParam::class, 'shot_has_params');
    }

    public function shotTypeFrom(): BelongsTo
    {
        return $this->belongsTo(ShotType::class, 'shot_type_from', 'id');
    }

    public function shotTypeTo(): BelongsTo
    {
        return $this->belongsTo(ShotType::class, 'shot_type_to', 'id');
    }

    public function sounds(): HasMany
    {
        return $this->hasMany(Sound::class);
    }
}
