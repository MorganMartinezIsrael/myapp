<?php


namespace App\Http\Controllers\examen;

use App\Http\Controllers\Controller;
use App\Models\PW\ModeloProducto;
use App\Models\PW\ModeloProveedor;
use Illuminate\Http\Request;

class EmpresaControlador extends Controller
{

    public function listado_productos($id){
        $producto = ModeloProducto::select('id','nombre','tipo','proveedor','precio_unitario','precio_venta')->where('id',$id)->get();
        return $producto;
    }
    //formulario
    public function formulario_venta(){
        $enviar = ModeloProducto::pluck('nombre','id');
        return view('Examen.vista_ventas')->with('producto',$enviar);
    }


    //llama a la vista y le pasa el dato que eliminara
    public function edit_datos_empresa($id)
    {
        $registro_actualizar = ModeloProveedor::
        where('id',$id)->take(1)->first();
        return view('Examen.vista_editar_empresa')->with('registro_actualizar',$registro_actualizar);
    }

    public function actualizar_empresa(Request $request,$id)
    {
        $registro_empresa = ModeloProveedor::find($id);

        $registro_empresa->razon_social = $request->razon_social;
        $registro_empresa->rfc = $request->rfc;
        $registro_empresa->direccion_fiscal = $request->direccion_fiscal;
        $registro_empresa->apoderado_legal = $request->apoderado_legal;
        $registro_empresa->telefono = $request->telefono;
        $registro_empresa->bandera = 1;

        $registro_empresa->save();

        return redirect()->to('verEmpresa');

    }


    //Eliminar por bandera

    public function eliminar_empresa($id)
    {
        $registro_eliminar = ModeloProveedor::find($id);

        $registro_eliminar->bandera = 0;

        $registro_eliminar->save();

        return redirect()->to('verEmpresa');
    }

    public function vista_borrar_empresa($id)
    {
        $registro_eliminar = ModeloProveedor::
        where('id',$id)->take(1)->first();

        return view('Examen.vista_eliminar_empresa')->with('registro_eliminar',$registro_eliminar);
    }


    public function ver_tabla_empresa()
    {
        $datos = ModeloProveedor::
        where('bandera','1')->get();

        return view('Examen.tabla_empresa')->with('datos',$datos);

    }


}