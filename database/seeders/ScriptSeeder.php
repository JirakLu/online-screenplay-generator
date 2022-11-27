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

            // Create scripts
            $scripts = Script::factory(fake()->numberBetween(1, 3))->make([
                'user_id' => $user->id,
            ]);

            // iterate over scripts

            $scripts->each(function (Script $script) {
                //Create characters
                $characters = Character::factory(fake()->numberBetween(1, 20))->make([
                    'script_id' => $script->id,
                ]);
                // Create Scenes
                $scenes = Scene::factory(fake()->numberBetween(1, 5))->make([
                    'script_id' => $script->id,
                ]);
                // iterate over scenes
                $scenes->each(function (Scene $scene, int $sceneIndex) use ($characters) {

                    //number Scenes
                    $scene->number = $sceneIndex + 1;
                });
                $script->save();
                $script->characters()->saveMany($characters);
                $script->scenes()->saveMany($scenes);
                // iterate over scenes
                $scenes->each(function (Scene $scene) use ($script) {
                    // assign characters to scenes min 1 max 3 (if there are any)
                    $scene->characters()->attach($script->characters->random(
                        fake()->numberBetween(1, min(3, $script->characters->count()))
                    ));

                    // Factory

                    // Create shots
                    $shots = Shot::factory(fake()->numberBetween(1, 5))->make([
                        'scene_id' => $scene->id,
                    ]);
                    // iterate over shots
                    $shots->each(function (Shot $shot, int $shotIndex) {
                        //number Shots
                        $shot->number = $shotIndex + 1;
                    });

                    $scene->shots()->saveMany($shots);

                    // iterate over shots
                    $shots->each(function (Shot $shot) use ($scene) {
                        // Create shot params
                        $shotParams = ShotParam::inRandomOrder()->limit(fake()->numberBetween(0, 2))->get();
                        $shot->shotParams()->saveMany($shotParams);
                        // Factory sound for shot
                        Sound::factory(fake()->numberBetween(0, 2))->create(['shot_id' => $shot->id]);
                        // Factory comments for shot
                        Comment::factory(fake()->numberBetween(0, 2))->create(['shot_id' => $shot->id]);
                        // make monolog for shot
                        $monologs = Monolog::factory(fake()->numberBetween(0, 2))->make(['shot_id' => $shot->id, 'character_id' => $scene->characters->random()->id]);
                        // foreach monolog
                        $monologs->each(function (Monolog $monolog, int $monologIndex) {
                            //number monologs
                            $monolog->number = $monologIndex + 1;
                        });

                        // save monologs
                        $shot->monologs()->saveMany($monologs);
                    });
                });
            });
        });
    }
}
