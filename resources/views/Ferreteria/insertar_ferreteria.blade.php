<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    {!!Form::open(array('url'=>'insertar_ferreteria','method'=>'POST','autocomplete'=>'off'))!!}


    {!!Form::label('Nombre Empresa: ')!!}
    <br>
    {!!form::text('nombre_empresa',null)!!}
    <br>
    {!!Form::label('Nombre Dueno: ')!!}
    <br>
    {!!form::text('nombre_dueno',null)!!}
    <br>
    {!!Form::label('Direccion Dueno: ')!!}
    <br>
    {!!form::text('direccion_dueno',null)!!}
    <br>
    {!!Form::label('RFC: ')!!}
    <br>
    {!!form::text('rfc',null)!!}
    <br>
    {!!Form::label('Fecha Registro: ')!!}
    <br>
    {!!Form::date('fecha_registro', \Carbon\Carbon::now())!!};


    {!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Registrar</span>'])!!}

    {!!Form::close()!!}
  </body>
</html>
