<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");



$result = array();
$resultRoles = array();
 




        
?>

<link rel="stylesheet" href="../../assets/css/temas.css">
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>SU VENTA<br>ESTÁ EN PROCESO</h2>
            </section>
            
        </section>
     

        <form method="POST" action="../../controller/Datos_Registro/addclienteController.php" class="form_contact">
           
            <div class="user_info">
                
            <h2 for="text">Total a Pagar:</h2>
               <?php $cliente = $_POST[""];?>
                <label for="text"> 
                
               

                


                

                <button class="button-guardar">Pagar</button>
            </div>
        </form>

    </section>

</body>

<?php
               

       
?> 