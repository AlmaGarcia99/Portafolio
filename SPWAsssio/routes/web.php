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
Route::resource('/routines','RutinasController');
Route::get('/obtenerRutinas','RutinasController@datatable')->name('datatable.rutinas');
Route::get('/get-tipos','RutinasController@tiposEjercicios');
Route::get('/ejercicios/{id}','RutinasController@ejercicios');
Route::get('/ejercicio/{id}','RutinasController@obtenerEjercicio');
Route::get('/idRutina','RutinasController@obtenerIdRutina');
Route::post('/insertExercises','RutinasController@insertExercises');
Route::get('/idExacto/{slug}','RutinasController@idExacto');
Route::get('/edit-exercises/{id}','RutinasController@editExercises');
Route::get('/get-exercises/{id}','RutinasController@getExercises');
Route::get('/get-rutina/{id}','RutinasController@getRutina');
Route::post('/quitar-rutina/{id}','RutinasController@removerRutina');
Route::post('/edit-routine/{id}','RutinasController@editRoutine');
Route::get('/asignar-rutinas','RutinasController@assignRoutine');
Route::get('/obtener-grupos','RutinasController@obtenerGrupos');
Route::get('obtener-usuarios/{id}','RutinasController@obtenerUsuarios');
Route::get('/todos-usuarios','RutinasController@todosLosUsuarios');
Route::get('/obtener-rutinas','RutinasController@obtenerRutinas');
Route::get('/obtener-dietas','RutinasController@obtenerDietas');
Route::post('/asignarRutina','RutinasController@asignarRutina');
Route::post('/asignarDieta','RutinasController@asignarDieta');
Route::post('/asignacionMasiva','RutinasController@asignacionMasiva');
Route::post('/generarNueva','RutinasController@generarNuevaRutina');
//Categorias
Route::resource('/categories','CategoriasController');
Route::get('/obtenerCategorias','CategoriasController@datatable')->name('datatable.categorias');
//Dietas----
Route::resource('/diets','DietasController');
Route::get('/obtenerDietas','DietasController@datatable')->name('datatable.dietas');
//Tips----
Route::resource('/tips','TipsController');
Route::post('upload_image','CKeditorController@uploadImage')->name('upload');
Route::get('/tipsS','TipsController@datatable')->name('datatable.contenido');
//Modal de evaluacion de la rutina----
Route::post('calificar','RutinaUsuario@evaluacion');
//ClasificaEjercicios
Route::resource('/ClassifyE','ClasificaEController');
Route::get('/obtenerClasificaE','ClasificaEController@datatable')->name('datatable.clasifica_ejercicios');
Route::post('/deleteGroup/{grupo}','ClasificacionesController@deleteGroup');
//------
Route::resource('/clasificaciones','ClasificacionesController');
Route::get('/obtenerClasificaciones','ClasificacionesController@datatable')->name('datatable.clasificaciones');
//Usuarios Opciones administrativas
Route::resource('/users','UsersController');
Route::get('/users/{user}/details', 'UsersController@detalles')->name('users.detalles');
Route::get('/obtenerUsers','UsersController@datatable')->name('datatable.users');
Route::get('/rutinas-usuario/{user}','UsersController@obtenerRutinasDeUsuario');
Route::get('/revisarObservaciones/{user}','UsersController@mostrarObservaciones');
Route::post('/deleteUser/{user}','UsersController@delete');
Route::get('/obtenerUsersBajas','UsersController@datatableBajas')->name('datatable.usersBajas');
Route::get('/inactive-users','UsersController@inactiveUsers');
Route::post('/recover/{user}','UsersController@recovery');
/*
| Rutas del usuario
*/
Route::get('/misRutinas','RutinaUsuario@rutinas');
Route::get('/rutina/{rutina}','RutinaUsuario@rutina');
Route::get('/misAjustes', 'PerfilesController@ajustes')->name('ajustes.user');
Route::get('/obtenerDatos','PerfilesController@obtenerUser');
Route::get('/verificarDatos','PerfilesController@verificarPerfil');
Route::get('/obtenerMisRutinas','RutinaUsuario@misRutinas');
Route::post('/actualizarDatos','PerfilesController@actualizarDatos');
//------
Route::resource('/clasificaciones','ClasificacionesController');
Route::get('/obtenerClasificaciones','ClasificacionesController@datatable')->name('datatable.clasificaciones');
Route::resource('/enfermedades','EnfermedadesController');
Route::get('/obtenerEnfermedades','EnfermedadesController@datatable')->name('datatable.enfermedades');
Route::resource('/routines','RutinasController');
Route::get('/obtenerRutinas','RutinasController@datatable')->name('datatable.rutinas');
Route::resource('/Dietas', 'DietaUcontroller');
//Route::resource('/misRutinas','RutinasController');
//Route::get('/rutina','RutinaUsuario')->name('datatable.rutinas');
//Route::get('/misRutinas','RutinaU@rutinas');
//Route::get('/rutina','RutinaU@rutina');
//subete

