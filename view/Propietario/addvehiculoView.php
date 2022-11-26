<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();

?>
<script src="assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>AGREGAR<br>VEHICULO</h2>
            </section>
            
        </section>
        
        <form method="POST" action="../../controller/Datos_Registro/addvehiculosController.php" class="form_contact">
            <h2>Ingresar datos</h2>
            <div class="user_info">
                <label for="text">Puertas</label>
                <input name="puertas" type="text" id="puertas" required="">

                <label for="text">Color</label>
                <input name="color" type="text" id="color">

                <label for="text">Año</label>
                <input name="año" type="text" id="año">

                <label for="numero">Numero de Vin</label>
                <input name="vin" id="vin"></input>

                <label for="numero">Numero de Chasis</label>
                <input name="chasis" id="chasis"></input>

                <label for="numero">Numero de Placa</label>
                <input name="placas" id="placas"></input>

                <button class="button-guardar">Guardar</button>
            </div>
        </form>

    </section>

</body>