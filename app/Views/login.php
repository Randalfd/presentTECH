<!DOCTYPE html>
<html>
<head>
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="<?php echo base_url('csss/login.css') ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('img/logos/logonegrosinfondo.png') ?>">
</head>
<body>
    <div class="login-container">
        <h2>Inicia Sesion</h2>

    <form method="post" action="<?= base_url('verificarUsuario') ?>">
      
      <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
      </div>

      <div class="form-group">
         <label>Contraseña</label>
         <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" required>
         <p style="color: rgba( 110, 44, 0); font-size: 15px"><?php
            if(session()->getFlashdata("error") != "") {
               echo session()->getFlashdata("error");
            }
         ?></p>
      </div>

      <div class="form-group">
         <button type="submit" name="grabar" id="guardar"> Iniciar sesión </button>
      </div>

      <div class="form-group">
        <label>¿No tenes cuenta?</label><a href="<?= base_url('register') ?>"> registrate</a>
      </div>

   </form>

</body>
</html>