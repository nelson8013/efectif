<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLgaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('state_id');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('state')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lga');
    }
}
