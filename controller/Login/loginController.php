<?php
ob_start();
session_start();

include_once("../../model/functions.php");

$loginModel = new loginModel();

$usuario = $_POST['inUsuario'];
$clave = $_POST['inPassword'];




$result = $loginModel->autenticar($usuario, $clave,);


if($row = mysqli_fetch_array($result)){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nombre'] = $row['nombres'];
    $_SESSION['user_apellido'] = $row['apellidos'];
    $_SESSION['username'] = $row['usuario'];
    $_SESSION['roles'] = $row['roles_id'];
          

    switch($_SESSION['roles']){
        case 1:
            header('location: ../../main.php');
            break;
        case 2:
            header('location: ../../vendedor.php');
            break;
    }
    
    
}else{

    echo "<script>
            alert('AUTENTICACIÓN FALLIDA, AL PARECER SU USUARIO O CLAVE SON INVÁLIDOS');
            history.back();
        </script>";
    exit(-1);
    
}




ob_end_flush();
?>