<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estantes', function (Blueprint $table) {
            $table->id();
            $table->string('tema',40);
            $table->string('comlumna',40);
            $table->string('fila',40);
            $table->unsignedBigInteger('tema_id');
            $table->timestamps();
            $table->foreign('tema_id')->references('id')->on('temas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estantes');
    }
};
