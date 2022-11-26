<?php
include_once("../../model/functions.php");

session_start();

$observaciones=$_POST["observaciones"];
$estado= "abierta";
$cliente_id = $_SESSION['user_id'];
$vehiculo_id = $__POST['vehiculo'];



$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
$sql_into = "INSERT INTO sistema.venta_vehiculo
(observaciones, estado, cliente_id)
VALUES('$observaciones', '$estado', $cliente_id);";
    
    if(mysqli_query($conexion,$sql_into)){
        header("location: ../../view/Vendedor/pagar.php");
    
    }else{
        echo "Error:".$sql_into."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

   
?>