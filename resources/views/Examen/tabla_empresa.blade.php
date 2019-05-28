<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<table border=1>

    <tr>
        <td>ID</td>
        <td>Razon Social</td>
        <td>rfc</td>
        <td>Direccion Fiscal</td>
        <td>Apoderado Legal</td>
        <td>Telefono</td>


        <td colspan="3" align="center">Acción</td>

    <tr>
    @foreach($datos as $d)
        <tr>
            <td>{{ $d ->id }}</td>
            <td>{{ $d ->razon_social }}</td>
            <td>{{ $d ->rfc }}</td>
            <td>{{ $d ->direccion_fiscal }}</td>
            <td>{{ $d ->apoderado_legal }}</td>
            <td>{{ $d ->telefono }}</td>



            <td><a href = "cambiar_empresa/{{ $d ->id}}">[Editar]</a></td>
            <td><a href = "vista_eliminar_empresa/{{ $d ->id}}">[Eliminar por bandera]</a></td>

        </tr>
    @endforeach
</table>

</body>
</html>
