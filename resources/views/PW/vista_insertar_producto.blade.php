<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
</head>
<body>
{!! Form::open(array('url'=>'insertar_producto_bd','method'=>'POST')) !!}

{!! Form::label('Nombre: ') !!}
<br>
{!! Form::text('nombre', null) !!}
<br>

{!! Form::label("Tipo: ") !!}
<br>
{!! Form::text("tipo", null) !!}
<br>
{!! Form::label("Proveedor: ") !!}
<br>
{{Form::select('idproveedores',$proveedores,null,['id'=> 'select-prov','placeholder'=> 'SELECCIONE'])}}

<br>
{!! Form::label('Precio unitario: ') !!}
<br>
{!! Form::number('precio_unitario',null) !!}
<br>
{!! Form::label('Precio de venta: ') !!}
<br>
{!! Form::number('precio_venta',null) !!}
<br>
{!!form::submit('Insertar',['name'=>'grabar', 'id'=>'grabar',
'content'=>'<span>Insertar</span>'])!!}

{!! Form::close() !!}
</body>
</html>




