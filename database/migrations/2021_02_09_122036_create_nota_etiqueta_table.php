<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_etiqueta', function (Blueprint $table) 
        {
            $table->unsignedInteger('idNot') ;
            $table->unsignedInteger('idEti') ;            
        });

        // Definimos las claves foráneas
        Schema::table('nota_etiqueta', function (Blueprint $table)
        {
            $table->foreign('idNot')
                  ->references('idNot')->on('nota')
                  ->onDelete('cascade') ;

            $table->foreign('idEti')
                  ->references('idEti')->on('etiqueta')
                  ->onDelete('cascade') ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_etiqueta');
    }
}
