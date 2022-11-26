function cancelarVenta(id){
    swal({
        title: "Realmente quiere Cancelar la venta?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Venta Cancelada", {
            icon: "success",
          });
        } else {
          swal("Venta no cancelada");
        }
      });
}

function cerrarVenta(id){
    swal({
        title: "Realmente quiere cerrar la venta?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Venta Cerrada", {
            icon: "success",
          });
        } else {
          swal("Acción no realizada");
        }
      });
}

function anularVenta(id){
    swal({
        title: "Realmente quiere anular la venta?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Venta Anulada", {
            icon: "success",
          });
        } else {
          swal("Acción no realizada");
        }
      });
}

function eliminarUsuario(){
  swal({
      title: "Realmente quiere eliminar el cliente?",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Usuario eliminado", {
          icon: "success",
        });
      } else {
        swal("Acción no realizada");
      }
    });
}



