<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dashboard/post', 'PostController');

// Trabajo de Rutas Diapositivas 
// *********************************************************************** // 


// Route::get('saludo/{nombre}', function($nombre){
//     return "Saludos grupo de ".$nombre;
// });

// Route::get('saludo/{nombre?}', function($nombre="saludos grupo de invitado en el sistema"){
//     return "Saludos grupo de ".$nombre;
// });

// Route::get('contacto', function(){
//     return "Hola desde la pagina de contacto";
// });

// Route::get('contactos', function(){
//     return "Seccion de contactos";
// });

// Route::get('/', function(){
//     echo "<a href='/contactos'>Contacto 1</a><br>";
//     echo "<a href='/contactos'>Contacto 2</a><br>";
//     echo "<a href='/contactos'>Contacto 3</a><br>";
//     echo "<a href='/contactos'>Contacto 4</a><br>";
// });

// Route::get('contactame', function(){
//     return "Secion de contactos";
// })->name('contactos');

// Route::get('/', function(){
//     echo "<a href='". route( 'contactos') ."'>Contacto 1</a><br>";
//     echo "<a href='". route( 'contactos') ."'>Contacto 2</a><br>";
//     echo "<a href='". route( 'contactos') ."'>Contacto 3</a><br>";
//     echo "<a href='". route( 'contactos') ."'>Contacto 4</a><br>";
// });

// Retornar vista con parametro utilizando with //
// Route::get('/', function(){
//     $nombre = "Ingenieria software II";
//     return view('home')->with('nombre', $nombre);
// })->name('home');

// Retornar vista con parametro utilizando array
// Route::get('/', function(){
//     $nombre = "Ingenieria software II";
//     return view('home', ['nombre' => $nombre]);
// })->name('home');

// Retornar vista con parametro utilizando el metodo compact
// Route::get('/', function(){
//     $nombre = "Ingenieria software II";
//     return view('home', compact('nombre'));
// })->name('home');

// Rutas que retonar vistas con parametros codigo mas corto //
// Route::view('/', 'home', ['nombre'=>'Ingeneria de software']);

// Route::view('/', 'home')->name('home');

// Route::get('/', function(){
//     $nombre = "Ingeneria de Software";
//     return view('home', compact('nombre'));
// })->name('home');


// Trabajo Rutas 29/05/2020
// ******************************************************************************
// 1.

Route::get('mensajePlano/', function(){
    return "Mi nombre es Juan Pablo Trejos Valencia Adsi-1835271";
});

// ******************************************************************************
// 2.

// Route::view('/EjercicioDos', 'EjercicioDos', ['nombre'=>'Ingeneria de software']);

Route::get('/EjercicioDos/{nombre}', function($nombre){
    return view('EjercicioDos')->with('nombreVariable', $nombre);
})->name('EjercicioDos');


// ******************************************************************************
// 3.

Route::get('/EjercicioTres/{nombre?}', function($nombre = "Invitado"){
    return view('EjercicioTres')->with('nombreVariable', $nombre);
})->name('EjercicioTres');

// clase 1/06/2020
// Llamar al controlador invoke, que solo contiene un metodo por ende no se especifica con Controlador@metodo
//Route::get('/portafolio', 'PortfolioController')->name('portafolio');


// no es la recomendable // 
// Route::get('/portafolio_dos', 'PortfolioDosController@index')->name('portafolio_dos');

// forma recomendable // 
// Route::resource('projects', 'PortfolioDosController')->only(['index', 'show']);
// Route::resource('/projects', 'PortfolioDosController')->except(['index', 'show']);

// Route::apiResource('');




