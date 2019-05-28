<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

{!!Form::open(array('url'=>'eliminar_empresa/'.$registro_eliminar->id,'method'=>'PUT','autocomplete'=>'off'))!!}

{!!Form::label('Razon Social: ')!!}
<br>
{!!form::text('razon_social',$registro_eliminar->razon_social)!!}
<br>
{!!Form::label('rfc: ')!!}
<br>
{!!form::text('rfc',$registro_eliminar->rfc)!!}
<br>
{!!Form::label('Direccion Fiscal: ')!!}
<br>
{!!form::text('direccion_fiscal',$registro_eliminar->direccion_fiscal)!!}
<br>
{!!Form::label('Apoderado legal ')!!}
<br>
{!!form::text('apoderado_legal',$registro_eliminar->rfc)!!}
<br>
{!!Form::label('Telefono: ')!!}
<br>
{!!Form::text('telefono', $registro_eliminar->telefono)!!};
<br>



{!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>'])!!}

{!!Form::close()!!}

</body>
</html>
