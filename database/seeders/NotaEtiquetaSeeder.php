<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class NotaEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create() ;

        //
        $datos = [] ;
        for ($i=0; $i < 200; $i++)
        	array_push($datos, 
        	[
        		'idNot' => $faker->numberBetween(1,75),
        		'idEti' => $faker->numberBetween(1,75),
        	]) ;


        DB::table('nota_etiqueta')->insert($datos) ;



    }
}
