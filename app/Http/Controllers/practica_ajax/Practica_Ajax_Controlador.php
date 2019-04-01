<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/25/2019
 * Time: 4:44 PM
 */

namespace App\Http\Controllers\practica_ajax;



use App\Http\Controllers\Controller;
use App\Models\PW\ModeloAlumno;
use App\Models\PW\ModeloSexo;

class Practica_Ajax_Controlador extends Controller
{

    public function listado_alumnos($genero){
        $sexo = ModeloAlumno::select('id','nombre_completo','sexo')->where('sexo',$genero)->get();
        return $sexo;
    }

    public function formu(){
        $enviar = ModeloSexo::pluck('sexo','id');
        return view('PW.vista_ajax')->with('sex',$enviar);
    }
}