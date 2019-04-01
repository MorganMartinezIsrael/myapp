<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/17/2019
 * Time: 11:25 PM
 */

namespace App\Http\Controllers\Ferreteria_Controlador;
use App\Models\Ferreteria\ModeloFerreteria;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
class Ferreteria_Controlador extends Controller
{
    public function ver_formulario_ferreteria()
    {
        return view('Ferreteria.insertar_ferreteria');

    }

    public function insertar_ferreteria(Request $request)
    {
        $nombre_empresa = $request->input('nombre_empresa');
        $nombre_dueno = $request->input('nombre_dueno');
        $direccion_dueno = $request->input('direccion_dueno');
        $rfc = $request->input('rfc');
        $fecha_registro = $request->input('fecha_registro');
        $bandera = 1;


        ModeloFerreteria::create(['nombre_empresa'=>$nombre_empresa,'nombre_dueno'=>$nombre_dueno,'direccion_dueno'=>$direccion_dueno,'rfc'=>$rfc,'fecha_registro'=>$fecha_registro,'bandera'=>$bandera]);

        return redirect()->to('verFerreteria');
    }


    public function edit_datos_ferreteria($id)
    {
        $registro_actualizar = ModeloFerreteria::
        where('id',$id)->take(1)->first();
        return view('Ferreteria.actualizar_ferreteria')->with('registro_actualizar',$registro_actualizar);
    }

    public function actualizar_datos_ferreteria(Request $request,$id)
    {
        $registro_ferreteria = ModeloFerreteria::find($id);

        $registro_ferreteria->nombre_empresa = $request->nombre_empresa;
        $registro_ferreteria->nombre_dueno = $request->nombre_dueno;
        $registro_ferreteria->direccion_dueno = $request->direccion_dueno;
        $registro_ferreteria->rfc = $request->rfc;
        $registro_ferreteria->fecha_registro = $request->fecha_registro;
        $registro_ferreteria->bandera = 1;

        $registro_ferreteria->save();

        return redirect()->to('verFerreteria');
        
    }


    public function delete_ferreteria($id)
    {
        $registro_eliminar = ModeloFerreteria::
        where('id',$id)->take(1)->first();

        return view('Ferreteria.eliminar_ferreteria')->with('registro_eliminar',$registro_eliminar);
    }


    public function delete_datos_ferreteria($id)
    {
        $registro_eliminar = ModeloFerreteria::find($id);
        $registro_eliminar->delete();
        return redirect()->to('verFerreteria');
    }

    //Eliminar por bandera

    public function borrar_datos_ferreteria($id)
    {
        $registro_eliminar = ModeloFerreteria::find($id);

        $registro_eliminar->bandera = 0;

        $registro_eliminar->save();

        return redirect()->to('verFerreteria');
    }

    public function vista_borrar_ferreteria($id)
    {
        $registro_eliminar = ModeloFerreteria::
        where('id',$id)->take(1)->first();

        return view('Ferreteria.borrar_ferreteria')->with('registro_eliminar',$registro_eliminar);
    }

    public function ver_tabla_ferreteria()
    {
        $datos = ModeloFerreteria::
        where('bandera','1')->get();

        return view('Ferreteria.tabla_ferreteria')->with('datos',$datos);

    }
}