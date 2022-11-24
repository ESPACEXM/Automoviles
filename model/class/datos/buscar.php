<?php

$connClass = new Tools();
$conexion = $connClass->conectar();

$salida ="";
$query = "SELECT * FROM users ORDER By id";


if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT id , usuario,nombres,apellidos FROM users
    WHERE nombres LIKE '%".$q. "%' OR nombres LIKE '%".$q."%' OR usuario LIKE '%".$q."%'";
}



$resultado= $mysqli->query($query);

if($resultado->num_rows > 0){

       $salida.="<table class="table">
       <thead>
           <tr>
               <td>ID</td>
               <td>USUARIO</td>
               <td >NOMBRE</td>
               <td >APELLIDOS</td>
            
               
           </tr>
       </thead>
       <tbody>";

       while($fila = $resultado->fetch_assoc()){
        $salida.="<tr>
            <td>".$fila['id']."</td>
            <td>".$fila['usuario']."</td>
            <td>".$fila['nombres']."</td>
            <td>".$fila['apellidos']."</td>

        </tr>";
       }

       $salida.="</tbody></table>"

}else{

    $salida.="NO HAY DATOS";

}
echo $salida;
$mysqli->close();

?>