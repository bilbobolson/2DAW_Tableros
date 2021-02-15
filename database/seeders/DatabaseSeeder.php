<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Poblamos los usuarios
        \App\Models\Usuario::factory(10)->create();

        // Poblamos los tableros
        \App\Models\Tablero::factory(15)->create() ;

        // Poblamos las notas
        \App\Models\Nota::factory(75)->create() ;

        // Poblamos las etiquetas
        \App\Models\Etiqueta::factory(75)->create() ;

        // Poblamos la relación entre NOTA y ETIQUETA
        $this->call([ NotaEtiquetaSeeder::class, ]) ;
    }
}
