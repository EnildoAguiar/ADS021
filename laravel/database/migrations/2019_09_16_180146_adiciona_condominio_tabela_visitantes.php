<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCondominioTabelaVisitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('visitantes', function (Blueprint $table) {
            $table->integer('condominio_id') ->unsigned()
                    ->nullable();
            $table->foreign('condominio_id')
                    ->references('id')
                    ->on('condominios');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visitantes', function (Blueprint $table) {
            $table->dropForeign('visitantes_condominio_id_foreign');
            $table->dropColumn('condominio_id');
        });
    }
}
