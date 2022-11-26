<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sound extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'shot_id',
        'text',
    ];

    public function shot(): BelongsTo
    {
        return $this->belongsTo(Shot::class);
    }
}
