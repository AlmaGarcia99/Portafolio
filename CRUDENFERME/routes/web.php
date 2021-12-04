<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
| Rutas del administrador
*/

Route::resource('/exercises','EjerciciosController');
Route::get('/obtenerEjercicios','EjerciciosController@datatable')->name('datatable.ejercicios');


//Categorias
Route::resource('/categories','CategoriasController');
Route::get('/obtenerCategorias','CategoriasController@datatable')->name('datatable.categorias');

//Dietas----
Route::resource('/diets','DietasController');
Route::get('/obtenerDietas','DietasController@datatable')->name('datatable.dietas');

//ClasificaEjercicios
Route::resource('/ClassifyE','ClasificaEController');
Route::get('/obtenerClasificaE','ClasificaEController@datatable')->name('datatable.clasifica_ejercicios');


//------
Route::resource('/clasificaciones','ClasificacionesController');
Route::get('/obtenerClasificaciones','ClasificacionesController@datatable')->name('datatable.clasificaciones');

Route::resource('/enfermedades','EnfermedadesController');
Route::get('/obtenerEnfermedades','EnfermedadesController@datatable')->name('datatable.enfermedades');


Route::resource('/routines','RutinasController');
Route::get('/obtenerRutinas','RutinasController@datatable')->name('datatable.rutinas');


/*
| Rutas del usuario
*/

Route::get('/misRutinas','RutinaUsuario@rutinas');
Route::get('/rutina','RutinaUsuario@rutina');

