

$(function () {

    $('#select-nombre').on('change', metodo_listar_proveedores);

});

function metodo_listar_proveedores() {
    var proveedor = ' ';
    var producto = document.getElementById("select-nombre").value;
    console.log('producto id: ' + producto)

    $.get('lista_productos/' + producto + '', function (data) {
        var html_select = '<option value="">SELECCIONE</option>';
        var html_select2 = '<option value="">SELECCIONE</option>';
        var html_select3 = '<option value="">SELECCIONE</option>';
        for (var i = 0; i < data.length; i++) {
            proveedor = data[i].proveedor;

            html_select += '<option value="' + data[i].id + '">' + data[i].proveedor + '</option>'
            html_select2 += '<option value="' + data[i].id + '">' + data[i].precio_unitario + '</option>'
            html_select3 += '<option value="' + data[i].id + '">' + data[i].precio_venta + '</option>'
        }
        $('#select-proveedor').html(html_select);
        $('#select-precio-unitario').html(html_select2);
        $('#select-precio-venta').html(html_select3);

        getProveedor(proveedor);
    });

    //var x = document.getElementsByName("idproveedor");


}

function getProveedor(proveedor) {
    console.log("pro " + proveedor);

    $.get('lista_proveedores/' + proveedor + '', function (data) {
        var html_select = '<option value="">SELECCIONE</option>';

        for (var i = 0; i < data.length; i++) {
            html_select += '<option value="' + data[i].id + '">' + data[i].razon_social + '</option>'

        }
        $('#select-prove-id').html(html_select);


    });


}
