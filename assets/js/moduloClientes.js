function eliminarCliente(id){

    $.ajax({
        type: 'POST',
        data: "eliminar_cliente=1&cliente_id=" + id,
        url: '../../controller/Clientes/clientesController.php',
        dataType: 'json',
        success: function (data) {
            var resultado = data.resultado;
            if (resultado === 1) {                
                alert('Cliente Eliminado exitosamente');
                cargarContenido('../view/Propietario/deleteclienteView.php');
            } else {
                alert('No se pudo eliminar el usuario seleccionado');
            }
        }
    });

}