<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Instanciamos la librería Faker
    	$faker = \Faker\Factory::create() ;

    	// Generamos la información a insertar
    	$datos = [] ;
    	for($i = 0; $i < 75; $i++)
    		array_push($datos, [
    								'idUsu'      => $faker->numberBetween(1,25),
    								'idTab'      => $faker->numberBetween(1,10),
    								'texto'      => $faker->text(100),
    								'completada' => $faker->boolean(40),
    						   ]) ;
    	
    	// Insertamos la información en la tabla
        DB::table('nota')->insert($datos) ;
    }
}
