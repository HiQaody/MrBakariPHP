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
        Schema::create('pompes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_service_id');
            $table->foreign('station_service_id')->references('id')->on('station_services');
            $table->string('type_carburant');
            $table->decimal('prix', 8, 2);
            $table->integer('capacite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pompes');
    }
};
