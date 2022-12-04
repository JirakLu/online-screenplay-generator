<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('shots', function (Blueprint $table) {
            $table->id();

            $table->foreignId('scene_id')->constrained()->cascadeOnDelete();
            $table->integer('number');
            $table->foreignId('shot_type_from')->constrained('shot_types');
            $table->string('comment')->nullable();
            $table->foreignId('shot_type_to')->constrained('shot_types');

        });
    }

    public function down()
    {
        Schema::dropIfExists('shots');
    }
};
