<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Facades\DB ;

class UsuarioTableSeeder extends Seeder
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
    	for($i = 0; $i < 25; $i++)
    		array_push($datos, [
    								'nombre'    => $faker->firstName(),
    								'apellidos' => $faker->lastName,
    								'email'     => $faker->unique()->email,
    								'password'  => Hash::make('12345678'),
    								'foto' 		=> $faker->imageUrl(200, 200),
    						   ]) ;
    	
    	// Insertamos la información en la tabla
        DB::table('usuario')->insert($datos) ;
    }
}
