<?php

namespace Database\Factories;

use App\Models\Sound;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoundFactory extends Factory
{

    protected $model = Sound::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->text(),
        ];
    }
}
