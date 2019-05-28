<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
</head>
<script src="js/jquery.min.js"></script>
<script src="js/cargar_producto.js"></script>
<body>
{!! Form::open(array('url'=>'insertar_producto','method'=>'POST')) !!}

<table>

    <tr>
        <td>{!! Form::label('Nonmbre Producto: ') !!}</td>
        <td>{{Form::select('idnombre',$producto,null,['id'=> 'select-nombre','placeholder'=> 'SELECCIONE'])}}</td>
    </tr>


    <tr>
        <td>{!! Form::label('Precio venta: ') !!}</td>
        <td><select name="idprecio_venta" id="select-precio-venta"></select></td>
    </tr>

    <tr>
        <td>{!! Form::label('Cantidad: ') !!}</td>
        <td><select name="idcantidad" id="select-cantidad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>{!! Form::label('Total') !!}</td>
        <td>
            <select name="idtotal" id="select-total">
                <option value="">SELECCIONE</option>
            </select>
        </td>
    </tr>

</table>


{!! Form::close() !!}
</body>
</html>




