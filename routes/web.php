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
Route::get("insertar_alumno", "practica_actualizar_controlador\practica5_controlador@ver_formulario");
Route::post("insertar_alumno_BD", "practica_actualizar_Controlador\practica5_controlador@insertar_alumno");
//actualizar el dato
Route::get('actualizar/{id}', 'practica_actualizar_controlador\practica5_controlador@ver_editar_datos');
Route::put('actualizar_datos/{id}', 'practica_actualizar_controlador\practica5_controlador@actualizar_datos');


//eliminar
Route::get('eliminar/{id}', 'practica_eliminar_controlador\practica6_controlador@ver_eliminar_datos');
Route::put('eliminar_datos/{id}', 'practica_eliminar_controlador\practica6_controlador@eliminar_datos');


//tabla
Route::get('vertabla', 'practica_tabla\PracticaTablaController@ver_tabla');




//CRUD de Ferreteria

Route::get('new_ferreteria', 'Ferreteria_Controlador\Ferreteria_Controlador@ver_formulario_ferreteria');
Route::get('cambiar_ferreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@edit_datos_ferreteria');
Route::post('insertar_ferreteria', 'Ferreteria_Controlador\Ferreteria_Controlador@insertar_ferreteria');
Route::put('actualizar_ferreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@actualizar_datos_ferreteria');




Route::put('eliminar_ferreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@delete_datos_ferreteria');
Route::get('eliminarFerreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@delete_ferreteria');

Route::put('borrar_ferreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@borrar_datos_ferreteria');
Route::get('borrarFerreteria/{id}', 'Ferreteria_Controlador\Ferreteria_Controlador@vista_borrar_ferreteria');

Route::get('verFerreteria', 'Ferreteria_Controlador\Ferreteria_Controlador@ver_tabla_ferreteria');




//AJAX
Route::get('lista_alumnos/{genero}', 'practica_ajax\Practica_Ajax_Controlador@listado_alumnos');
Route::get('ajax', 'practica_ajax\Practica_Ajax_Controlador@formu');

//AJAX MATERIAS
Route::get('lista_materias/{semestre}', 'practica_ajax_materias\MateriasControlador@listado_materias');
Route::get('formulario_materias', 'practica_ajax_materias\MateriasControlador@formulario_materias');
Route::get('verEstudiantes', 'practica_ajax_materias\MateriasControlador@verEstudiantes');

Route::post('insertar_estudiante', 'practica_ajax_materias\MateriasControlador@insertar_estudiante');



//ajax producto
Route::get('lista_productos/{producto}', 'practica_ajax_producto\Producto_Controlador@listado_productos');
Route::get('formulario_producto', 'practica_ajax_producto\Producto_Controlador@formulario_producto');
Route::get('lista_proveedores/{proveedor}', 'practica_ajax_producto\Producto_Controlador@listado_proveedores');

Route::get('insertar_producto', 'practica_ajax_producto\Producto_Controlador@formulario_insertar_producto');
Route::post('insertar_producto_bd', 'practica_ajax_producto\Producto_Controlador@insertar_producto_base');



//examen
Route::get('lista_productos/{producto}', 'examen\EmpresaControlador@listado_productos');
Route::get('cambiar_empresa/{id}', 'examen\EmpresaControlador@edit_datos_empresa');
Route::put('actualizar_empresa/{id}', 'examen\EmpresaControlador@actualizar_empresa');
Route::get('vista_eliminar_empresa/{id}', 'examen\EmpresaControlador@vista_borrar_empresa');
Route::put('eliminar_empresa/{id}', 'examen\EmpresaControlador@eliminar_empresa');
Route::get('verEmpresa', 'examen\EmpresaControlador@ver_tabla_empresa');


Route::get('verVentas', 'examen\EmpresaControlador@formulario_venta');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//api webservice
Route::get('ws/{id}', 'Auth\LoginController@obtieneApi');

Route::get('/insertar_ws', 'Auth\LoginController@apiRegistra');
Route::get('/actualizar_ws/{id}', 'Auth\LoginController@apiActualiza');
Route::get('/eliminar_ws/{id}', 'Auth\LoginController@apiElimina');
Route::get('/buscar_ws/{id}', 'Auth\LoginController@apiBusca');
//learn
