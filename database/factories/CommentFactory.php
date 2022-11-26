<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Shot;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

	protected $model = Comment::class;

	public function definition(): array
	{
		return [
			'text' => $this->faker->text(20),
		];
	}
}
