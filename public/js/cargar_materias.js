$(function () {

    $('#select-semestre').on('change', metodo_listar);

});

function metodo_listar()
{
    var semestre = document.getElementById("select-semestre").value;

    $.get('lista_materias/'+semestre+'', function (data){
        var html_select = '<option value="">SELECCIONE</option>';
        for (var i = 0; i < data.length; i++)
            html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
        $('#select-materias').html(html_select);

    });
}