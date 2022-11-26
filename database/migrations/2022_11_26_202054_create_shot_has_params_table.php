<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('shot_has_params', function (Blueprint $table) {

            $table->foreignId('shot_id')->constrained()->cascadeOnDelete();
            $table->foreignId('shot_param_id')->constrained()->cascadeOnDelete();
            $table->primary(['shot_id', 'shot_param_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('shot_has_param');
    }
};
