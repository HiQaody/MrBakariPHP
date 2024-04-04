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
        Schema::create('alertes_stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_service_id');
            $table->foreign('station_service_id')->references('id')->on('station_services');
            $table->string('type_carburant');
            $table->integer('quantite_min_alerte');
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
        Schema::dropIfExists('alertes_stock');
    }
};
