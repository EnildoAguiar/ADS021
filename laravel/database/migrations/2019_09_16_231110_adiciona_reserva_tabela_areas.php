<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaReservaTabelaAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->integer('reserva_id') ->unsigned()
                    ->nullable();
            $table->foreign('reserva_id')
                    ->references('id')
                    ->on('reservas');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->dropForeign('areas_reserva_id_foreign');
            $table->dropColumn('reserva_id');
        });
    }
}
