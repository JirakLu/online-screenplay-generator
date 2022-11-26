<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Comment;
use App\Models\Monolog;
use App\Models\Scene;
use App\Models\Script;
use App\Models\Shot;
use App\Models\ShotParam;
use App\Models\Sound;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function __construct()
    {

    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            SceneTypeSeeder::class,
            ShotTypeSeeder::class,
            ShotParamSeeder::class,
        ]);
        for ($i = 0; $i < 10; $i++) {
            User::factory()->has(
                Script::factory()
                    ->has(
                        Character::factory()
                            ->count($faker->numberBetween(9, 20))
                    )
                    ->has(
                        Scene::factory()
                            ->count($faker->numberBetween(1, 3))
                            ->has(
                                Shot::factory()
                                    ->count($faker->numberBetween(1, 5))
                                    ->hasAttached(
                                        ShotParam::all()->random(5)
                                    )
                                    ->has(
                                        Sound::factory()
                                            ->count($faker->numberBetween(1, 5))
                                    )
                                    ->has(
                                        Comment::factory()
                                            ->count($faker->numberBetween(1, 2))
                                    )
                            )
                    )
            )->create();
        }

        foreach (Scene::all() as $scene) {
            // get script characters
            $characters = $scene->script->characters;
            // assign characters to scene
            $scene->characters()->attach($characters->random($faker->numberBetween(1, $characters->count())));
        }

        Monolog::factory()->count(Shot::count() * 2)->create();

    }
}
