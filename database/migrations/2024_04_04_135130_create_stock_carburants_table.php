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
        Schema::create('stock_carburants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_service_id');
            $table->foreign('station_service_id')->references('id')->on('station_services');
            $table->string('type_carburant');
            $table->integer('quantite_stock');
            $table->timestamp('date_mise_a_jour')->nullable();
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
        Schema::dropIfExists('stock_carburants');
    }
};
