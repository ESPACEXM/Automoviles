<?php 
session_start();
if (!$_SESSION['user_id']){
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
$usrClass = new usuariosModel();
$result = 0;
$respuesta = array();

$obtenerRol = (isset($_POST['obtener_rol'])) ? $_POST['obtener_rol'] : "0";
$eliminarRol = (isset($_POST['eliminar_rol'])) ? $_POST['eliminar_rol'] : "0";


if($obtenerRol == 1){
    $id = (isset($_POST['id'])) ? $_POST['id'] : "0";
        
    $result = $usrClass->getUsuarioById($user_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['nombres'] = $fila['nombres'];
        $respuesta['apellidos'] = $fila['apellidos'];
        $respuesta['usuario'] = $fila['usuario'];
        $respuesta['password'] = $fila['password'];
    }

    echo json_encode($respuesta);
}

if($crearUsuario == 1){
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
        
    $result = $usrClass->crearUsuario($nombres, $apellidos, $usuario, $password, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($actualizarUsuario == 1){
    $user_id = (isset($_POST['id'])) ? $_POST['id'] : "0";
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
        
    $result = $usrClass->actualizarUsuario($nombres, $apellidos, $usuario, $password, $_SESSION['user_id'], $user_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($eliminarUsuario == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";

    $result = $usrClass->eliminarUsuario($user_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}
?>