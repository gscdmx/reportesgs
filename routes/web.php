<?php

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

//LOGOUT Y REDIRECT
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'HomeController@Index')->middleware('auth');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {

//INICO
Route::get('/home', 'HomeController@index')->name('home');

//RUTAS USUARIO
Route::get('/nuevoUsuario', 'UserController@nuevo_usuario');
Route::get('/listadosUsuarios', 'UserController@listadoUsuario');
Route::get('/edicionUsuario/{id}', 'UserController@editar_usuario');
Route::post('/guardarEdicionUsuario/{id}', 'UserController@save_edicion__usuario');
Route::post('/guardarUsuario', 'UserController@save_usuario');
	});

//reportes primer formulario TARJETAS REPORTES
Route::get('/reporte', 'formulariosController@reporte');
Route::post('/guardar_cuestionario_reportes', 'formulariosController@save_cuestionario_reportes');
Route::get('/getlistadoreportes', 'formulariosController@view_listado_reportes');
Route::get('/getexcel_reportes', 'formulariosController@excel_reportes');//descargar el excel
Route::get('/getlistadoreportes/misarchivos2/{id}', 'formulariosController@mi_repositorio2');

//REPORTES SEGUNDO FORMULARIO DE SEGUIMIENTO DE TARJETAS
Route::get('/seguimientorjg', 'formulariosController@tracingrjg');
Route::post('/guardar_cuestionario_tracing', 'formulariosController@save_cuestionario_tracing');
Route::get('/getlistadoseguimiento', 'formulariosController@view_listado_seguimiento');
Route::get('/getexcel_seguimiento', 'formulariosController@excel_seguimiento');//descargar el excel



//REPORTES TERCER FORMULARIO DE MINUTAS
Route::get('/minutasrjg', 'formulariosController@minutas');
Route::post('/guardar_cuestionario_minutas', 'formulariosController@save_cuestionario_minutas');
Route::get('/getlistadominutas', 'formulariosController@view_listado_minutas');
Route::get('/getexcel_minutas', 'formulariosController@excel_minutas');//descargar el excel


//REPORTES CUARTO FORMULARIO DE SEGUIMIENTO DE MINUTAS

Route::get('/seguimientominutas', 'formulariosController@seguimiento_minutas');
Route::post('/guardar_cuestionario_seguimientominutas', 'formulariosController@save_cuestionario_seguimiento_minutas');
Route::get('/getlistadoseguimientominutas', 'formulariosController@view_listado_seguimiento_minutas');
Route::get('/getexcel_seguimientominutas', 'formulariosController@excel_seguimiento_minutas');//descargar el excel

//DESCARGA DE REPORTES GENERALES DE LOS USUARIOS POR ALCALDIAS

Route::get('/reportes_generales', 'formulariosController@reporte_general');
Route::get('/getexcel_reportes_reportesrjg', 'formulariosController@reporterjg_general');//descargar el excel
Route::get('/getexcel_reportes_reportes_seguimiento', 'formulariosController@reporterjg_seguimiento_general');//descargar el excel
Route::get('/getexcel_reportes_reportes_minutas', 'formulariosController@minutas_general');//descargar el excel
Route::get('/getexcel_reportes_reportes_seguimiento_minutas', 'formulariosController@minutas_seguimiento_general');//descargar el excel


//DESCARGA DE REPORTES GENERALES DE LOS USUARIOS PARA TODAS LAS COORDINACIONES TERRITORIALES

Route::get('/reportes_generales_todos', 'formulariosController@reporte_general_todos');
Route::get('/getexcel_reportes_reportesrjg_todos', 'formulariosController@reporterjg_general_todos');//descargar el excel
Route::get('/getexcel_reportes_reportes_seguimiento_todos', 'formulariosController@reporterjg_seguimiento_general_todos');//descargar el excel
Route::get('/getexcel_reportes_reportes_minutas_todos', 'formulariosController@minutas_general_todos');//descargar el excel
Route::get('/getexcel_reportes_reportes_seguimiento_minutas_todos', 'formulariosController@minutas_seguimiento_general_todos');//descargar el excel



//ARCHIVOS POR ALCALDIA

Route::get('/usuarioimagenView', 'formulariosController@usuario_archivos');

//TODOS LOS ARCHIVOS

Route::get('/usuarioimagenView_todos', 'formulariosController@usuario_archivos_todos');

