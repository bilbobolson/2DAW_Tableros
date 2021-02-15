<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    use HasFactory;

    // Definimos el nombre de nuestra tabla
    protected $table = "tablero" ;

    // Definimos el nombre de la clave primaria
    protected $primaryKey = "idTab" ;

    // Indicamos que los campos created_at y  updated_at 
    // no existen en la tabla.
    public $timestamps = false ;


	/**
	 * Relación UNO A MUCHOS entre TABLERO y NOTA
	 */
    public function notas()
    {
    	return $this->hasMany('App\Models\Nota','idTab')->get() ;
    }

    

}
