<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', '\App\Http\Controllers\TableroController@index') ;




// EJERCICIO
Route::view('ejemplo', 'ejemplo', 
	[
		'param'   => 'Bienvenido/a a la plantilla de ejemplo',
		'x'       => 52,
		'y'       => 100,
		'dia'     => 1, 	// día de la semana (1- lunes, 2- martes, ...)
		'nombres' => ['Luis', 'Laura', 'Lola', 'Lorenzo', 'Ana', 'Alvaro', 'Borja',],
	]) ;


// -------------------------------------------------------------------------- 


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// -------------------------------------------------------------------------- 



Route::fallback(function() 
{ 
	return view('404') ; 
}) ;
