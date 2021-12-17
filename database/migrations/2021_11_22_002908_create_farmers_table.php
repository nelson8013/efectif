<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('farmer_code', 50);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('account_number')->unique();
            $table->string('bvn')->unique();
            $table->unsignedInteger('zone_id')->nullable();
            $table->unsignedInteger('association_id')->nullable();
            $table->decimal('lat', 10, 7);
            $table->decimal('long', 10, 7);
            $table->integer('hecter');
            $table->string('nok');
            $table->string('nok_phone');
            $table->string('nok_address');
            $table->string('relationship_with_nok');
            $table->boolean('is_active');
            $table->timestamps();

            //$table->foreign('zone_id')->references('id')->on('zones')->onUpdate('cascade')->onDelete('restrict');
            //$table->foreign('association_id')->references('id')->on('cooperatives')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
