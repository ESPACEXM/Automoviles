<?php
include_once("../../model/functions.php");

session_start();

$puertas=$_POST["puertas"];
$color=$_POST["color"];
$año=$_POST["año"];
$vin=$_POST["vin"];
$chasis=$_POST["chasis"];
$placas=$_POST["placas"];

$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
$sql_into = "INSERT INTO sistema.vehiculos
(puertas, color, año, numero_vin, numero_chasis, numero_placas)
VALUES('$puertas', '$color', '$año', '$vin', '$chasis','$placas');";
    
    if(mysqli_query($conexion,$sql_into)){
        header("location: ../../main.php");
    
    }else{
        echo "Error:".$sql_into."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

   
?>
