<?php

namespace Database\Seeders;

use App\Models\ShotParam;
use Illuminate\Database\Seeder;

class ShotParamSeeder extends Seeder
{

	public function run()
	{
        $shotParam = [
          'Statický záběr',
            'Dynamický záběr',
            'Jízda',
            'Jeřáb',
            'steadicam',
            'Dron',
            'zoom',
            'přeostření',
            'střih',
            'ztmívačka',
            'roztmívačka'
        ];

        foreach ($shotParam as $param) {
            ShotParam::create([
                'text' => $param,
            ]);
        }
	}
}
