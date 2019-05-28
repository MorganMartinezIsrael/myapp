<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 4/1/2019
 * Time: 4:36 PM
 */

namespace App\Http\Controllers\practica_ajax_producto;

use App\Http\Controllers\Controller;
use App\Models\PW\ModeloProducto;
use App\Models\PW\ModeloProveedor;
use Illuminate\Http\Request;
class Producto_Controlador extends Controller
{
    public function listado_productos($id){
        $producto = ModeloProducto::select('id','nombre','tipo','proveedor','precio_unitario','precio_venta')->where('id',$id)->get();
        return $producto;
    }
    //formulario
    public function formulario_producto(){
        $enviar = ModeloProducto::pluck('nombre','id');
        return view('PW.vista_producto')->with('producto',$enviar);
    }

    public function listado_proveedores($id){
        $proveedor = ModeloProveedor::select('id','razon_social')->where('id',$id)->get();
        return $proveedor;
    }

    public function formulario_insertar_producto(){
        $enviar = ModeloProveedor::pluck('razon_social','id');
        return view('PW.vista_insertar_producto')->with('proveedores',$enviar);
    }

    public function insertar_producto_base(Request $request)
    {
        $nombre = $request->input('nombre');
        $tipo = $request->input('tipo');
        $proveedor = $request->input('idproveedores');
        $precio_unitario = $request->input('precio_unitario');
        $precio_venta = $request->input('precio_venta');



        ModeloProveedor::create(['nombre'=>$nombre,'tipo'=>$tipo,'proveedor'=>$proveedor,'precio_unitario'=>$precio_unitario,'precio_venta'=>$precio_venta]);

        return redirect()->to('verProductos');
    }

}