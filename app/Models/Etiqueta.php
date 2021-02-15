<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    protected $table      = "etiqueta" ;
    protected $primaryKey = "idEti" ;

    public $timestamps = false ;

    /**
     */
    public function notas()
    {
    	return $this->belongsToMany('\App\Models\Nota', 'nota_etiqueta', 
    								'idEti', 'idNot') ;
    }

}
