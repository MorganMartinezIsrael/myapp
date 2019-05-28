var cantidad;
var precio;

$(function () {

    $('#select-nombre').on('change', metodo_listar);

});

$(function () {

    $('#select-cantidad').on('change', metodo_cantidad);

});
function metodo_listar() {

    var producto = document.getElementById("select-nombre").value;

    console.log('producto id: ' + producto)

    $.get('lista_productos/' + producto + '', function (data) {
        var html_select = '<option value="">SELECCIONE</option>';

        for (var i = 0; i < data.length; i++) {
            precio = data[i].precio_venta;

            html_select += '<option value="' + data[i].id + '">' + data[i].precio_venta + '</option>'
        }
        $('#select-precio-venta').html(html_select);


    });

    //var x = document.getElementsByName("idproveedor");


}

function metodo_cantidad() {

    cantidad = document.getElementById("select-cantidad").value;

    setTotal(precio,cantidad);
}

function setTotal(precio,cantidad) {


    var html_select = '<option value="">SELECCIONE</option>';

    html_select += '<option value="' + precio * cantidad + '">' + precio * cantidad + '</option>'

    $('#select-total').html(html_select);

}
