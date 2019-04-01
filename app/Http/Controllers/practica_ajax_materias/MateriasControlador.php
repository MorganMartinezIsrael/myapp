<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/28/2019
 * Time: 10:29 AM
 */

namespace App\Http\Controllers\practica_ajax_materias;


use App\Http\Controllers\Controller;
use App\Models\PW\ModeloEstudiante;
use App\Models\PW\ModeloMateria;
use App\Models\PW\ModeloSemestre;

use Illuminate\Http\Request;

class MateriasControlador extends Controller{

    //muestra la tabla de estudiantes
    public function verEstudiantes(){
        $datos = ModeloEstudiante::all();

        return view('PW.vista_estudiantes')->with('datos',$datos);
    }
    //llamado en el metodo post al presionar el boton insertar
    public function insertar_estudiante(Request $request)
    {
        $nombre = $request->input('nombre');
        $n_control = $request->input('n_control');
        $semestre = $request->input('idsemestre');
        $materia = $request->input('idmateria');


        ModeloEstudiante::create(['nombre'=>$nombre,'n_control'=>$n_control,'semestre'=>$semestre,'materia'=>$materia]);

        return redirect()->to('verEstudiantes');
    }

    //obetiene todas las materias de acuerdo al semestre
    public function listado_materias($semestre){
        $materia = ModeloMateria::select('id','nombre','semestre')->where('semestre',$semestre)->get();
        return $materia;
    }
    //envia todos los semestres a la vista_ajax_materias
    public function formulario_materias(){
        $enviar = ModeloSemestre::pluck('semestre','id');
        return view('PW.vista_ajax_materias')->with('semestre',$enviar);
    }

}