<html>
    <head>
        <title>AjAX MATERIA</title>
    </head>
    <script src="js/jquery.min.js"></script>
    <script src="js/cargar_materias.js"></script>
    <body>
        {!!Form::open(array('url' => 'insertar_estudiante','method'=>'POST')) !!}

        {!!Form::label('NOMBRE: ') !!}
        <br>
        {!! Form::text('nombre',null) !!}
        <br>
        {!! Form::label('NUMERO DE CONTROL: ') !!}
        <br>
        {!! Form::text('n_control',null) !!}
        <br>
        <table>
            <tr>
                <td>{!! Form::label('SEMESTRE: ') !!}</td>
            </tr>
            <tr>
                <td>{{Form::select('idsemestre',$semestre,null,['id'=> 'select-semestre','placeholder'=> 'SELECCIONE'])}}</td>
            </tr>
            <tr>
                <td>{!! Form::label('MATERIA') !!}</td>
            </tr>
            <td>
                <select name="idmateria" id="select-materias">
                    <option value="">SELECCIONE</option>
                </select>
            </td>
        </table>
        <br>
        {!!form::submit('Insertar',['name'=>'grabar', 'id'=>'grabar',
            'content'=>'<span>Insertar</span>'])!!}

        {!! Form::close() !!}
    </body>
</html>