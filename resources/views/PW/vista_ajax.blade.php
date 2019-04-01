<html>
    <head>
        <title>AJAX</title>
    </head>
    <script src="js/jquery.min.js"></script>
    <script src="js/cargar_alumnos.js"></script>
    <body>
        <table>
            <tr>
                <td>{{Form::select('idsexo',$sex,null,['id'=> 'select-genero','placeholder'=> 'SELECCIONE'])}}</td>
            </tr>

            <td>
                <select name="idgenero" id="select-genero2">
                    <option value="">SELECCIONE</option>
                </select>
            </td>
        </table>
    </body>
</html>