<?php 
session_start();
if (!$_SESSION['user_id']){
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
$usrClass = new usuariosModel();
$result = 0;
$respuesta = array();

$eliminarCliente = (isset($_POST['eliminar_cliente'])) ? $_POST['eliminar_cliente'] : "0";

if($obtenerCliente == 1){
    $cliente_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";
        
    $result = $usrClass->getClienteById($user_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['nombre'] = $fila['nombre'];
        $respuesta['estado'] = $fila['estado'];
    }

    echo json_encode($respuesta);
}



if($eliminarCliente == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";

    $result = $usrClass->eliminarCliente($user_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}
?>