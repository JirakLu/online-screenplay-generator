<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monolog extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'text',
        'shot_id',
        'character_id',
        'number',
    ];

    public function shot(): BelongsTo
    {
        return $this->belongsTo(Shot::class);
    }

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

}
