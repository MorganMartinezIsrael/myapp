<!DOCTYPE html>

<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Actualizar datos</title>
</head> 

<body>
    
    {!!Form::open(array('url'=>'eliminar_datos/'.$registro->id,'method'=>'PUT', 'autocomplete'=>'off'))!!}

   {{-- 'id','nombre', 'rfc', 'curp', 'fecha_registro','materia1', 'materia2', 'promedio' --}}
    {!!Form::label('Nombre: ') !!}
    <br>
    {!!Form::text('nombre',$registro->nombre)!!}
    <br>

    {!!Form::label('RFC: ') !!}
    <br>
    {!!Form::text('rfc',$registro->rfc)!!}
    <br>

        
    {!!Form::label('CURP: ') !!}
    <br>
    {!!Form::text('curp',$registro->curp)!!}
    <br>

    {!!Form::label('Fecha de Registro: ') !!}
    <br>
    {!!form::text('fecha_registro',$registro->fecha_registro)!!}

    <br>
    {!! Form::label('Materia 1: ') !!}
    <br>
    {!! Form::select('materia1',array('Ingles'=>'Ingles','Geometria'=>'Geometria','Programacion Web'=>'Programacion Web',
                    'Calculo Diferencial'=>'Calculo Diferencial','Patrones de Diseno'=>'Patrones de Diseno'),''.$registro->materia1) !!}
    <br>
    {!! Form::label('Materia 2: ') !!}
    <br>
    {!! Form::select('materia2',array('Inteligencia Artificial'=> 'Inteligencia Artificial',
                    'Administracion'=>'Administracion','Mecanica Clasica'=>'Mecanica Clasica'),''.$registro->materia2) !!}
    <br>
    
    {!! Form::label("Promedio: ") !!}
    <br>
    {!! Form::text("promedio", $registro->promedio) !!}
    <br>

    {!!form::submit('Eliminar',['name'=>'grabar', 'id'=>'grabar', 
    'content'=>'<span>Eliminar</span>'])!!}


    {!!form::close()!!}


</body>

</html>













