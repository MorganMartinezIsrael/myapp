<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table border=1>
        <tr>
            <td><a href="new_ferreteria">[Insertar]</a></td>
        </tr>
          <tr>
            <td>ID</td>
            <td>Nombre Empresa</td>
            <td>Nombre Dueno</td>
            <td>Direccion Dueno</td>
            <td>RFC</td>
            <td>Fecha Registro</td>


            <td colspan="3" align="center">Acción</td>

          <tr>
          @foreach($datos as $d)
              <tr>
                  <td>{{ $d ->id }}</td>
                  <td>{{ $d ->nombre_empresa }}</td>
                  <td>{{ $d ->nombre_dueno }}</td>
                  <td>{{ $d ->direccion_dueno }}</td>
                  <td>{{ $d ->rfc }}</td>
                  <td>{{ $d ->fecha_registro }}</td>



                  <td><a href = "cambiar_ferreteria/{{ $d ->id}}">[Editar]</a></td>
                  <td><a href = "eliminarFerreteria/{{ $d ->id}}">[Eliminar]</a></td>
                  <td><a href = "borrarFerreteria/{{ $d ->id}}">[Borrar por bandera]</a></td>
              </tr>
          @endforeach
    </table>

  </body>
</html>
