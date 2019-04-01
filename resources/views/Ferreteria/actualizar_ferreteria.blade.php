<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    {!!Form::open(array('url'=>'actualizar_ferreteria/'.$registro_actualizar->id,'method'=>'PUT','autocomplete'=>'off'))!!}

    {!!Form::label('Nombre Empresa: ')!!}
    <br>
    {!!form::text('nombre_empresa',$registro_actualizar->nombre_empresa)!!}
    <br>
    {!!Form::label('Nombre Dueno: ')!!}
    <br>
    {!!form::text('nombre_dueno',$registro_actualizar->nombre_dueno)!!}
    <br>
    {!!Form::label('Direccion Dueno: ')!!}
    <br>
    {!!form::text('direccion_dueno',$registro_actualizar->direccion_dueno)!!}
    <br>
    {!!Form::label('RFC: ')!!}
    <br>
    {!!form::text('rfc',$registro_actualizar->rfc)!!}
    <br>
    {!!Form::label('Fecha Registro: ')!!}
    <br>
    {!!Form::date('fecha_registro', \Carbon\Carbon::now())!!};
    <br>


    {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}

    {!!Form::close()!!}

  </body>
</html>
