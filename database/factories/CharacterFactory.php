<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Script;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{

	protected $model = Character::class;

	public function definition(): array
	{
		return [
			'first_name' => $this->faker->firstName(),
			'last_name' => $this->faker->lastName(),
		];
	}
}
