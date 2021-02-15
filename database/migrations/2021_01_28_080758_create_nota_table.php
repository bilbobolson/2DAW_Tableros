<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creamos la tabla con sus campos
        Schema::create('nota', function (Blueprint $table) 
        {
            $table->increments('idNot');        // clave primaria
            $table->unsignedInteger('idUsu') ;  // clave foránea a USUARIO
            $table->unsignedInteger('idTab') ;  // clave foránea a TABLERO

            $table->text('texto') ;
            $table->boolean('completada') ;
            $table->timestamps();
        });

        // Definimos las claves foráneas
        Schema::table('nota', function (Blueprint $table)
        {
            $table->foreign('idUsu')
                  ->references('idUsu')->on('usuario')
                  ->onDelete('cascade') ;

            $table->foreign('idTab')
                  ->references('idTab')->on('tablero')
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
        Schema::dropIfExists('nota');
    }
}
