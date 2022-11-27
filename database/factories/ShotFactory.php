<?php

namespace Database\Factories;

use App\Models\Shot;
use App\Models\ShotType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShotFactory extends Factory
{

    protected $model = Shot::class;

    public function definition(): array
    {
        return [
            'number' => fake()->numberBetween(1, 10),
            'shot_type_from' => ShotType::inRandomOrder()->first()->id,
            'shot_type_to' => ShotType::inRandomOrder()->first()->id,
        ];
    }
}
