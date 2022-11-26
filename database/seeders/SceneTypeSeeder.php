<?php

namespace Database\Seeders;

use App\Models\SceneType;
use Illuminate\Database\Seeder;

class SceneTypeSeeder extends Seeder
{

    public function run()
    {
        $sceneTypes = [
            'INT' => 'Interiér',
            'EXT' => 'Exteriér',
            'CGI' => 'Počítačová grafika',
        ];

        foreach ($sceneTypes as $short => $full) {
            SceneType::create([
                'short' => $short,
                'full' => $full,
            ]);
        }
    }
}
