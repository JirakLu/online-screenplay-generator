<?php

namespace Database\Seeders;

use App\Models\Character;
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
            'password' => "admin",
        ]);

        User::factory(3)->create();

        $this->call([
            SceneTypeSeeder::class,
            ShotTypeSeeder::class,
            ShotParamSeeder::class,
            ScriptSeeder::class,
        ]);

    }
}
