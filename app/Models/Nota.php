<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = "Nota" ;
    protected $primaryKey = "idNot" ;

    /**
     */
    public function tablero()
    {
    	return $this->belongsTo('\App\Models\Tablero', 'idTab') ;    	
    }

    /**
     */
    public function etiquetas()
    {
    	return $this->belongsToMany('\App\Models\Etiqueta', 'nota_etiqueta', 
    								'idNot', 'idEti')->withTimestamps() ;
    }
}
