<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class TableroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Instanciamos la librería Faker
    	//$faker = \Faker\Factory::create() ;

    	// Generamos la información a insertar
    	//$datos = [] ;
    	//for($i = 0; $i < 10; $i++)
    	//	array_push($datos, [  ]) ;
    	
    	// Insertamos la información en la tabla
        // DB::table('tablero')->insert($datos) ;

        \App\Models\Tablero::factory(10)->create() ;
    }
}
