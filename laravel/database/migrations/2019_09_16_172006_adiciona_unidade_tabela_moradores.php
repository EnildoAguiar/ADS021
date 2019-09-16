<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaUnidadeTabelaMoradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moradores', function (Blueprint $table) {
            $table->integer('unidade_id') ->unsigned()
                    ->nullable();
            $table->foreign('unidade_id')
                    ->references('id')
                    ->on('unidades');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('moradores', function (Blueprint $table) {
            $table->dropForeign('moradores_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });
    }
}
