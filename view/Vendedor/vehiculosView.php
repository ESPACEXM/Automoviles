<?php

session_start();

if (!$_SESSION['user_id']){

    header("location: ../../index.php");
}
include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$result = array();
$result2 = array();
$result = $usrClass->getVehiculos();
$result2 = $usrClass->getModelo();
$result3 = $usrClass->getMarcas();


?>


<!DOCTYPE html>
<html lang="en">
    
<head>
<link rel="stylesheet" href="../../assets/css/temas.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Cambiar Roles</title>
</head>


<section class="webdesigntuts-workshop">
      </form>
      <div class="container-fluid">
    <form>
      <input class="form-control me-2 light-table-filter" style="width: 500px; text-align:center;" data-table="table_id" type="text" 
      placeholder="Buscar Vehiculo">
      <hr>
      </form>
      </section>

  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  


 
      <table class="table table-striped table-dark table_id " >

                   
                        <thead>    
                        <tr>
                        <th>Id</th>
                        <th>Puertas</th>
                        <th>Color</th>
                        <th>Año</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        </tr>
                        </thead>
                        <tbody>

				<?php


while ($fila = mysqli_fetch_array($result)){
   
    ?>
        <tr>
            <th><?php echo $fila['id_vehiculo']; ?></th>
            <td><?php echo $fila['puertas']?></td>
            <td><?php echo $fila['color']; ?></td>
            <td><?php echo $fila['año']; ?></td>
            <td><?php echo $fila['modelo']; ?></td>
            <td><?php echo $fila['marca']; ?></td>
            
    
        </tr>

    <?php 
    }


    
?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>
<script src="../js/acciones.js"></script>
<script src="../../assets/js/buscador.js"></script>
		<?php include('../index.php'); ?>
</html>