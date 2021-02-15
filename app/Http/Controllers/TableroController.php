<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablero ;

class TableroController extends Controller
{
    /**
     * @param  Request
     * @return [type]
     */
    public function index(Request $req)
    {
        // Solicito al modelo todos los tableros contenidos 
        // en la base de datos.
        $tableros = Tablero::all() ;

    	return view('index', [ 'tableros' => $tableros ]) ;
    }

    
    public function error()
    {
    	echo "La página no se ha encontrado. Busca bien." ;
    }
}
