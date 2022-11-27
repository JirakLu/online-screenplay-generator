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
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.cz',
            'password' => "admin"
        ]);

        User::factory(10)->create();

        $this->call([
            SceneTypeSeeder::class,
            ShotTypeSeeder::class,
            ShotParamSeeder::class,
        ]);

        foreach (User::all() as $user) {
            $user->scripts()->save(Script::factory()
                ->for($user)
                ->has(
                    Character::factory()
                        ->count(fake()->numberBetween(9, 20))
                )
                ->has(
                    Scene::factory()
                        ->count(fake()->numberBetween(1, 3))
                        ->has(
                            Shot::factory()
                                ->count(fake()->numberBetween(1, 5))
                                ->hasAttached(
                                    ShotParam::inRandomOrder()->limit(5)->get()
                                )
                                ->has(
                                    Sound::factory()
                                        ->count(fake()->numberBetween(1, 5))
                                )
                                ->has(
                                    Comment::factory()
                                        ->count(fake()->numberBetween(1, 2))
                                )
                        )
                )
                ->create());
        }

        foreach (Scene::all() as $scene) {
            // get script characters
            $characters = $scene->script->characters;
            // assign characters to scene
            $scene->characters()->attach($characters->random(fake()->numberBetween(1, $characters->count())));
        }

        Monolog::factory()->count(Shot::count() * 2)->create();

    }
}
