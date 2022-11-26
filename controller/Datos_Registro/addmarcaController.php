<?php
include_once("../../model/functions.php");

session_start();

$nombre=$_POST["nombre"];
$estado=$_POST["estado"];


$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
$sql_into = "INSERT INTO sistema.marca
(nombre, estado)
VALUES('$nombre', '$estado');";
    
    if(mysqli_query($conexion,$sql_into)){
        header("location: ../../main.php");
    
    }else{
        echo "Error:".$sql_into."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

   
?>
