<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

{!!Form::open(array('url'=>'actualizar_empresa/'.$registro_actualizar->id,'method'=>'PUT'))!!}

{!!Form::label('Razon Social: ')!!}
<br>
{!!form::text('razon_social',$registro_actualizar->razon_social)!!}
<br>
{!!Form::label('rfc: ')!!}
<br>
{!!form::text('rfc',$registro_actualizar->rfc)!!}
<br>
{!!Form::label('Direccion Fiscal: ')!!}
<br>
{!!form::text('direccion_fiscal',$registro_actualizar->direccion_fiscal)!!}
<br>
{!!Form::label('Apoderado legal ')!!}
<br>
{!!form::text('apoderado_legal',$registro_actualizar->rfc)!!}
<br>
{!!Form::label('Telefono: ')!!}
<br>
{!!Form::text('telefono', $registro_actualizar->telefono)!!};
<br>


{!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}

{!!Form::close()!!}

</body>
</html>
