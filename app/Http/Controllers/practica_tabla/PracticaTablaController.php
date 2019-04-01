<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/13/2019
 * Time: 4:15 PM
 */

namespace App\Http\Controllers\practica_tabla;
use App\Http\Controllers\Controller;
use App\Models\PW\ModeloAlumno;

class PracticaTablaController extends Controller
{
    public function ver_tabla(){
        $vertodo = ModeloAlumno::all();
        return view('PW.ver_tabla')->with('usuario',$vertodo);

        //por bandera
        //$vertodo = ModeloAlumno::where('bandera','1')->get();
    }
}