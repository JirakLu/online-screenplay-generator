<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('scene_types', function (Blueprint $table) {
            $table->id();

            $table->string('full');
            $table->string('short');
        });
    }

    public function down()
    {
        Schema::dropIfExists('scene_types');
    }
};
