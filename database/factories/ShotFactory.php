<?php

namespace Database\Factories;

use App\Models\Shot;
use App\Models\ShotParam;
use App\Models\ShotType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShotFactory extends Factory
{

    protected $model = Shot::class;

    public function definition(): array
    {
        $this->hasAttached(
            ShotParam::inRandomOrder()->limit(fake()->numberBetween(1, 3))->make(),
        );
        return [
            'number' => -1,
            'shot_type_from' => ShotType::inRandomOrder()->first()->id,
            'shot_type_to' => ShotType::inRandomOrder()->first()->id,
        ];
    }
}
