<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

	public function up()
	{
		Schema::create('monologs', function (Blueprint $table) {
			$table->id();
            $table->foreignId('character_id')->constrained()->cascadeOnDelete();
			$table->foreignId('shot_id')->constrained()->cascadeOnDelete();
            $table->integer('number');
            $table->string('text');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('monologs');
	}
};
