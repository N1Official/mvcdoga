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
        Schema::create('characters', function (Blueprint $table) {
            $table->id()->autoIncrement(true);
            $table->string("name",100);
            $table->string("gender",6);
            $table->string("job",255);
            $table->string("wand",50);
            $table->string("patronus",50)->nullable();
            $table->string("species",50);
            $table->date("birth")->nullable();
            $table->date("death")->nullable();
            $table->foreign("house_id")->references('id')->on("house");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
