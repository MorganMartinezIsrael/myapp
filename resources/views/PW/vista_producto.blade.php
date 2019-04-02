<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
</head>
<script src="js/jquery.min.js"></script>
<script src="js/cargar_proveedores.js"></script>
<body>
{!! Form::open(array('url'=>'insertar_producto','method'=>'POST','autocomplete'=>'off')) !!}

<table>

    <tr>
        <td>{!! Form::label('Nonmbre Producto: ') !!}</td>
        <td>{{Form::select('idnombre',$producto,null,['id'=> 'select-nombre','placeholder'=> 'SELECCIONE'])}}</td>
    </tr>

    <tr>
        <td>{!! Form::label('Tipo: ') !!}</td>
        <td>{!! Form::text('tipo',null) !!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('Proveedor: ') !!}</td>
        <td>
            <select name="idproveedor" id="select-proveedor" hidden>
                <option value="">SELECCIONE</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>
            <select name="idproveedor-nombre" id="select-prove-id">
                <option value="">SELECCIONE</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>{!! Form::label('Precio_unitario: ') !!}</td>
        <td><select name="idprecio_unitario" id="select-precio-unitario">
                <option value="">SELECCIONE</option>
            </select></td>
    </tr>

    <tr>
        <td>{!! Form::label('Precio venta: ') !!}</td>
        <td><select name="idprecio_venta" id="select-precio-venta"></select></td>
    </tr>

</table>


{!! Form::close() !!}
</body>
</html>




