<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('shot_params', function (Blueprint $table) {
            $table->id();
            $table->string('text');

        });
    }

    public function down()
    {
        Schema::dropIfExists('shot_params');
    }
};
