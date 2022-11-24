<?php?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Automoviles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/diseño.css">
    <link rel="stylesheet" href="assets/css/style_boton.css">
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    
</head>
<body>

<div class="login-box">
  <h2>Bienvenido</h2>
  <form class="form" method="POST" action="controller/Login/loginController.php">
    <div class="user-box">
      <input id="inUsuario" type="user" name="inUsuario" >
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input id="inPassword" type="password" name="inPassword" required="">
      <label>Clave</label>
    </div>
    <button>
    <span>Login</span>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
</button>
<p class="message">No estás registrado? <a href="model/class/Usuarios/registro.php">Crear una cuenta</a></p>
  </form>
</div>
</body>
</html>
<script src="assets/js/message.js"></script>