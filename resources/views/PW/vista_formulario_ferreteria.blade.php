<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        {!! Form::open(['url' => 'insertar_ferreteria', 'method' => 'post']) !!}
        	{!! Form::label('ID ') !!}
            {!! Form::text('id', null) !!}
            
            {!! Form::label('NOMBRE DE LA EMPRESA') !!}
            {!! Form::text('nombre_empresa',null) !!}

            {!! Form::label('NOMBRE DEL DUENO') !!}
            {!! Form::text('nombre_dueno', null) !!}

            {!! Form::label('DIRECCION DEL DUENO') !!}
            {!! Form::text('direccion_dueno',null) !!}

            {!! Form::label('RF') !!}
            {!! Form::text('rfc',null) !!}

        {!! Form::close() !!}
    </body>
</html>