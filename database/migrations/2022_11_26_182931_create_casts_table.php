<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {

            $table->foreignId('scene_id')->constrained()->cascadeOnDelete();
            $table->foreignId('character_id')->constrained()->cascadeOnDelete();
            $table->primary(['scene_id', 'character_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('casts');
    }
};
