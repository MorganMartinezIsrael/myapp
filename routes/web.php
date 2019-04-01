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

//insertar el dato
Route::get("insertar_alumno","practica_actualizar_controlador\practica5_controlador@ver_formulario");
Route::post("insertar_alumno_BD","practica_actualizar_Controlador\practica5_controlador@insertar_alumno");
//actualizar el dato
Route::get('actualizar/{id}','practica_actualizar_controlador\practica5_controlador@ver_editar_datos');
Route::put('actualizar_datos/{id}','practica_actualizar_controlador\practica5_controlador@actualizar_datos');


//eliminar
Route::get('eliminar/{id}','practica_eliminar_controlador\practica6_controlador@ver_eliminar_datos');
Route::put('eliminar_datos/{id}','practica_eliminar_controlador\practica6_controlador@eliminar_datos');


//tabla
Route::get('vertabla','practica_tabla\PracticaTablaController@ver_tabla');




//CRUD de Ferreteria

Route::get('new_ferreteria','Ferreteria_Controlador\Ferreteria_Controlador@ver_formulario_ferreteria');
Route::get('cambiar_ferreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@edit_datos_ferreteria');
Route::post('insertar_ferreteria','Ferreteria_Controlador\Ferreteria_Controlador@insertar_ferreteria');
Route::put('actualizar_ferreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@actualizar_datos_ferreteria');




Route::put('eliminar_ferreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@delete_datos_ferreteria');
Route::get('eliminarFerreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@delete_ferreteria');

Route::put('borrar_ferreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@borrar_datos_ferreteria');
Route::get('borrarFerreteria/{id}','Ferreteria_Controlador\Ferreteria_Controlador@vista_borrar_ferreteria');

Route::get('verFerreteria','Ferreteria_Controlador\Ferreteria_Controlador@ver_tabla_ferreteria');




//AJAX
Route::get('lista_alumnos/{genero}','practica_ajax\Practica_Ajax_Controlador@listado_alumnos');
Route::get('ajax','practica_ajax\Practica_Ajax_Controlador@formu');

//AJAX MATERIAS
Route::get('lista_materias/{semestre}','practica_ajax_materias\MateriasControlador@listado_materias');
Route::get('formulario_materias','practica_ajax_materias\MateriasControlador@formulario_materias');
Route::get('verEstudiantes','practica_ajax_materias\MateriasControlador@verEstudiantes');

Route::post('insertar_estudiante','practica_ajax_materias\MateriasControlador@insertar_estudiante');