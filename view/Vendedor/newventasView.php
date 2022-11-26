<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getCliente();
$result2 = $usrClass->getVehiculos();

?>
<script src="../../assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>AGREGAR NUEVA<br>VENTA</h2>
            </section>
            
        </section>

        <form method="POST" action="../../controller/Datos_Registro/addventasController.php" class="form_contact">
            <h2>Ingresar datos</h2>
            <div class="user_info">
            <label for="text">Cliente</label>
                <label> <select name="cliente" class="form-control">
               <?php
                while ($fila = mysqli_fetch_array($result)){
    ?>
        <option value="<?php echo $fila['nombre'] ?>"><?php echo $fila['nombre']?></option>

    <?php 
    }
    ?>
                </select></label>
<br>
<br>
                <h2 for="text">Vendedor</h2>
                <?php echo $_SESSION['user_nombre']; ?>

     <br>
     <br>
                <label for="text">Vehiculo</label>
                <label> <select name="vehiculo" id="vehiculo" class="form-control">
               <?php
                while ($fila = mysqli_fetch_array($result2)){
    ?>
        <option value="<?php echo $fila['numero_chasis'] ?>"><?php echo $fila['numero_chasis']?></option>

    <?php 
    }
    ?>
   
                </select></label>
                <br><br>
                <br><br>

               <label for="text">Observaciones</label>
               <input name="observaciones" type="text" id="observaciones">
             
               


                <br><br> <br><br>

                
             <button name="btn-siguiente" class="button-guardar">Siguiente</button>
            
               
                  
               
                
            </div>
        </form>

    </section>

</body>
    