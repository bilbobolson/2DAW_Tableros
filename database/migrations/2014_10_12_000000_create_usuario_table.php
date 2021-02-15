<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) 
        {
            $table->increments('idUsu') ;   // clave primaria
            $table->string('nombre', 100) ;
            $table->string('apellidos', 100)->nullable() ;
            $table->string('email')->unique() ;            
            $table->string('password') ;
            $table->string('foto')->nullable() ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
