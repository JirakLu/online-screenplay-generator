<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('script_id')->constrained()->cascadeOnDelete();

            $table->string('first_name');
            $table->string('last_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
