<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaMoradoresTabelaUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->integer('moradore_id') ->unsigned()
                    ->nullable();
            $table->foreign('moradore_id')
                    ->references('id')
                    ->on('moradores');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->dropForeign('unidades_moradore_id_foreign');
            $table->dropColumn('moradore_id');
        });
    }
}
