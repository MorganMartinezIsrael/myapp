<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/14/2019
 * Time: 4:13 PM
 */

namespace App\Http\Controllers\practica_crud_controlador;


use App\Http\Controllers\Controller;
use App\Models\PW\ModeloFerreteria;

class PracticaCrudController extends Controller
{

    //muestra el formulario antes de insertar
    public function ver_formulario()
    {
        return view('PW\vista_formulario_ferreteria');

    }
    //inserta en la base de datos
    public function insertar_alumno(Request $request)
    {
        $nombre = $request->input('nombre');
        $rfc = $request->input('rfc');
        $curp = $request->input('curp');
        $fecha_registro = $request->input('fecha_registro');
        $materia1 = $request->input('materia1');
        $materia2 = $request->input('materia2');
        $promedio = $request->input('promedio');


        ModeloAlumno::create(['nombre'=>$nombre,'rfc'=>$rfc,'curp'=>$curp,
            'fecha_registro'=>$fecha_registro,'materia1'=>$materia1,
            'materia2'=>$materia2,'promedio'=>$promedio]);
        // $dato_insertado = ModeloAlumno::select('*')->take(1)->first();
        $dato_insertado = ModeloAlumno::orderBy('id', 'desc')->first();
        return redirect()->to('actualizar/'.$dato_insertado->id);

    }

    //muestra un dato de acuerdo a un id
    public function ver_editar_datos($id)
    {
        $registro = ModeloAlumno::where('id',$id)->take(1)->first();
        return view('PW\vista_actualizar')->with('registro',$registro);
    }
    //actualiza un dato de acuerdo a un id
    public function actualizar_datos(Request $request, $id)
    {
        $registro = ModeloAlumno::find($id);

        $registro->nombre = $request->nombre;
        $registro->rfc = $request->rfc;
        $registro->curp = $request->curp;
        $registro->fecha_registro = $request->fecha_registro;
        $registro->materia1 = $request->materia1;
        $registro->materia2 = $request->materia2;
        $registro->promedio = $request->promedio;

        $registro->save();

        return redirect()->to('actualizar/'.$registro->id)->with('registro',$registro);
    }

    public function ver_tabla(){
        $vertodo = ModeloFerreteria::where('bandera',1);
        return view('PW.ver_tabla_ferreteria')->with('usuario',$vertodo);

        //por bandera
        //$vertodo = ModeloAlumno::where('bandera','1')->get();
    }
}