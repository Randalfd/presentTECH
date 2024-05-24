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

    <form method="post" action="<?= base_url('/loginn') ?>">
      
      <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
      </div>

      <div class="form-group">
         <label>Contraseña</label>
         <input type="password" name="password" id="contrasena" placeholder="Ingrese su contraseña" required>
         
      </div>

      <div class="form-group">
         <button type="submit" name="grabar" id="guardar"> Iniciar sesión </button>
      </div>

      <div class="form-group">
        <label>¿No tenes cuenta?</label><a href="<?= base_url('loginhome') ?>"> registrate</a>
      </div>

   </form>

</body>
</html>