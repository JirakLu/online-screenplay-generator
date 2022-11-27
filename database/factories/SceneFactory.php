<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Scene;
use App\Models\SceneType;
use App\Models\Script;
use Illuminate\Database\Eloquent\Factories\Factory;

class SceneFactory extends Factory
{

    protected $model = Scene::class;

    public function definition(): array
    {
        return [
            'number' => fake()->numberBetween(1, 10),
            'location' => fake()->country(),
            'description' => fake()->text(),
            'scene_type_id' => SceneType::inRandomOrder()->first()->id,
        ];
    }
}
