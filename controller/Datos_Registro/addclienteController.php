<?php
include_once("../../model/functions.php");

session_start();

$nombre=$_POST["nombre"];
$NIT=$_POST["NIT"];
$estado =$_POST["estado"];



$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
$sql_into = "INSERT INTO sistema.cliente
(nombre, nit, estado)
VALUES('$nombre', '$NIT', '$estado');";
    
    if(mysqli_query($conexion,$sql_into)){
        header("location: ../../vendedor.php");
    
    }else{
        echo "Error:".$sql_into."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

   
?>