<html>
    <head>
        <title>App Name</title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Accion</td>
            </tr>

            @foreach($usuario as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nombre}}</td>
                <td><a href="actualizar/{{$c->id}}">[Editar]</a></td>
                <td><a href="eliminar/{{$c->id}}">[Eliminar total]</a></td>
                <td><a href="eliminar_bandera/{{$c->id}}">[Eliminar bandera]</a></td>
            </tr>
            @endforeach

        </table>
    </body>
</html>