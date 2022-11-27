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

class ScriptSeeder extends Seeder
{

    public function run()
    {
        User::all()->each(function ($user) {

            foreach (range(0, fake()->numberBetween(0, 2)) as $i) {
                Script::factory()
                    ->for($user)
                    ->has(
                        Character::factory()
                            ->count(fake()->numberBetween(2, 20))
                    )
                    ->has(
                        Scene::factory()
                            ->count(fake()->numberBetween(1, 3))
                            ->has(
                                Shot::factory()
                                    ->count(fake()->numberBetween(1, 5))
                                    ->hasAttached(
                                        ShotParam::inRandomOrder()->limit(fake()->numberBetween(0, 3))->get()
                                    )
                                    ->has(
                                        Sound::factory()
                                            ->count(fake()->numberBetween(0, 1))
                                    )
                                    ->has(
                                        Comment::factory()
                                            ->count(1)
                                    )
                            )
                    )
                    ->create();
            }
        });

        // Iterate through all scripts
        Script::with('scenes', 'scenes.shots', 'scenes.characters')->get()->each(function (Script $script) {
            // Iterate through all scenes
            $script->scenes()->each(function (Scene $scene, int $sceneIndex) {
                // Attach characters to scene
                $scene->characters()->attach($scene->script->characters->random(fake()->numberBetween(1, min(3, $scene->script->characters->count()))));
                // Increment scene number
                $scene->number = $sceneIndex + 1;
                $scene->save();
                // Iterate through all shots
                $scene->shots()->each(function (Shot $shot, int $shotIndex) {
                    $shot->number = $shotIndex + 1;
                    // Create monologs collection
                    $monologs = Monolog::factory()->count(fake()->numberBetween(0, 3))->make([
                        'character_id' => $shot->scene->characters()->inRandomOrder()->first()->id,
                    ]);

                    // Number monologs
                    $monologs->each(function (Monolog $monolog, int $monologIndex) {
                        $monolog->number = $monologIndex + 1;
                    });

                    $shot->monologs()->saveMany($monologs);
                    $shot->save();
                });
            });
        });

    }
}
