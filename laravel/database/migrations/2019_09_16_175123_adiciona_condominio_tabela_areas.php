<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCondominioTabelaAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
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
        Schema::table('areas', function (Blueprint $table) {
            $table->dropForeign('areas_condominio_id_foreign');
            $table->dropColumn('condominio_id');
        });
    }
}
