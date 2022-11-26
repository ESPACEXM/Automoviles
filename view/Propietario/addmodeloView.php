<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();


?>
<script src="assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>AGREGAR<br>MODELO</h2>
            </section>
            
        </section>

        <form method="POST" action="../../controller/Datos_Registro/addmodeloController.php" class="form_contact">
            <h2>Ingresar datos</h2>
            <div class="user_info">
                <label for="names">Nombre</label>
                <input name="nombre" type="text" id="nombre" required="">

                <label for="names">Estado</label>
                <input name="estado" type="text" id="estado">

                <button class="button-guardar">Guardar</button>
            </div>
        </form>

    </section>

</body>