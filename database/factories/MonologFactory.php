<?php

namespace Database\Factories;

use App\Models\Monolog;
use App\Models\Shot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MonologFactory extends Factory
{

    protected $model = Monolog::class;

    public function definition(): array
    {
        //get random shot
        $shot = Shot::inRandomOrder()->first();

        return [
            'number' => -1,
            'text' => fake()->text(40),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
