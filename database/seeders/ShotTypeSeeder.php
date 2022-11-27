<?php

namespace Database\Seeders;

use App\Models\ShotType;
use Illuminate\Database\Seeder;

class ShotTypeSeeder extends Seeder
{

    public function run()
    {
        $shotTypes = [
            'VC' => 'Velký celek',
            'C' => 'Celek',
            'AM' => 'Americký plán',
            'PC' => 'polocelek',
            'D' => 'Detail',
            'VD' => 'Velký detail',
        ];

        foreach ($shotTypes as $short => $full) {
            ShotType::create([
                'short' => $short,
                'full' => $full,
            ]);
        }
    }
}
