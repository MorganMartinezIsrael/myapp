<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    {!!Form::open(array('url'=>'eliminar_ferreteria/'.$registro_eliminar->id,'method'=>'PUT','autocomplete'=>'off'))!!}

    {!!Form::label('Nombre Empresa: ')!!}
    <br>
    {!!form::text('nombre_empresa',$registro_eliminar->nombre_empresa)!!}
    <br>
    {!!Form::label('Nombre Dueno: ')!!}
    <br>
    {!!form::text('nombre_dueno',$registro_eliminar->nombre_dueno)!!}
    <br>
    {!!Form::label('Direccion Dueno: ')!!}
    <br>
    {!!form::text('direccion_dueno',$registro_eliminar->direccion_dueno)!!}
    <br>
    {!!Form::label('RFC: ')!!}
    <br>
    {!!form::text('rfc',$registro_eliminar->rfc)!!}
    <br>
    {!!Form::label('Fecha Registro: ')!!}
    <br>
    {!!Form::date('fecha_registro', \Carbon\Carbon::now())!!};
    <br>


    {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}

    {!!Form::close()!!}

  </body>
</html>
