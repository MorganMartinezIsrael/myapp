<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<title>Formulario</title>
</head>
<body>
	{!! Form::open(array('url'=>'insertar_alumno_BD','method'=>'POST','autocomplete'=>'off')) !!}
	
	{!! Form::label('Nombre: ') !!}
	<br>
	{!! Form::text('nombre', null) !!}
	<br>

	{!! Form::label('RFC', null) !!}
	<br>
	{!! Form::text('rfc', null) !!}
	<br>

	{!!Form::label('CURP: ') !!}
    <br>
    {!!Form::text('curp', null)!!}
    <br>

    {!!Form::label('Fecha de Registro: ') !!}
    <br>
    {{-- {!!form::text('fecha_registro', null)!!} --}}
    {!!Form::date('fecha_registro', \Carbon\Carbon::now())!!};
    <br>

	{!! Form::label("Materia 1: ") !!}
	<br>
    {!! Form::select('materia1',array('Ingles'=> 'Ingles','Geometria'=>'Geometria','Programacion Web'=>'Programacion Web',
                    'Calculo Diferencial'=>'Calculo Diferencial','Patrones de Diseno'=>'Patrones de Diseno')) !!}
	<br>
	{!! Form::label("Materia 2: ") !!}	                    
    <br>
    {!! Form::select('materia2',array('Inteligencia Artificial'=> 'Inteligencia Artificial',
                    'Administracion'=>'Administracion','Mecanica Clasica'=>'Mecanica Clasica')) !!}
    <br>
    
    {!! Form::label("Promedio: ") !!}
    <br>
    {!! Form::text("promedio", null) !!}
    <br>

    {!!form::submit('Insertar',['name'=>'grabar', 'id'=>'grabar', 
    'content'=>'<span>Insertar</span>'])!!}

	{!! Form::close() !!}
</body>
</html>




