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
        Schema::create('rapport_ventes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_service_id');
            $table->foreign('station_service_id')->references('id')->on('station_services');
            $table->date('date_rapport');
            $table->decimal('montant_total_ventes', 8, 2);
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
        Schema::dropIfExists('rapport_ventes');
    }
};
