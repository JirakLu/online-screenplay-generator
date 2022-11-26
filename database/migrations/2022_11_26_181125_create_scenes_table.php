<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('scenes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('script_id')->constrained()->cascadeOnDelete();
            $table->integer('number');
            $table->string('location');
            $table->string('description');
            $table->foreignId('scene_type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scenes');
    }
};
