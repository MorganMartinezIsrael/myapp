<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<table border=1>
    <tr>
        <td><a href="formulario_materias">[Insertar]</a></td>
    </tr>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Numero de Control</td>
        <td>Semestre</td>
        <td>Materia</td>

    <tr>
    @foreach($datos as $d)
        <tr>
            <td>{{ $d ->id }}</td>
            <td>{{ $d ->nombre }}</td>
            <td>{{ $d ->n_control }}</td>
            <td>{{ $d ->semestre }}</td>
            <td>{{ $d ->materia }}</td>

        </tr>
    @endforeach
</table>

</body>
</html>
