$(function () {

    $('#select-genero').on('change', metodo_listar);
 
 });

function metodo_listar()
{
    var genero = document.getElementById("select-genero").value;

    $.get('lista_alumnos/'+genero+'', function (data){
        var html_select = '<option value="">SELECCIONE</option>';
        for (var i = 0; i < data.length; i++)
          html_select += '<option value="'+data[i].id+'">'+data[i].nombre_completo+'</option>'
          $('#select-genero2').html(html_select);
        console.debug(html_select);
      });
}