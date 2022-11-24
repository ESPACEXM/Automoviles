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
<script src="assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>AGREGAR NUEVA<br>VENTA</h2>
            </section>
            
        </section>

        <form action="" class="form_contact">
            <h2>Ingresar datos</h2>
            <div class="user_info">
            <label for="text">Cliente</label>
                <label> <select name="" class="form-control">
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
                <label for="text">Vendedor</label>
                <input name="vendedor" type="text" id="vendedor">

     <br>
                <label for="text">Vehiculo</label>
                <label> <select name="" class="form-control">
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

                <label for="text">Forma de Pago</label>
              <label> <select name="pago" class="form-control">
              <option>Seleccione Forma de Pago</option>
              <option  value="Efectivo">Efectivo</option>
              <option  value="Cuotas">Cuotas</option>


                </select></label>



                <br><br> <br><br>

               

                <button class="button-guardar">Siguiente</button>
            </div>
        </form>

    </section>

</body>
    