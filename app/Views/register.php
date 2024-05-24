<!DOCTYPE html>
<html>

<head>
	<title>Registrate</title>
	<link rel="stylesheet" href="<?php echo base_url('csss/login.css') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('img/logos/logonegrosinfondo.png') ?>">
</head>
<body>
<div class="login-container">
	<h2>Registrate</h2>
	<form method="post" action="<?= base_url('/register') ?>">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="first_name" placeholder="Ingrese su nombre" required>
		</div>

		<div class="form-group">
			<label>Apellido</label>
			<input type="text" name="last_name" placeholder="Ingrese su apellido" required>
		</div>

		<div class="form-group">
			<label>DNI</label>
			<input type="text" name="DNI" placeholder="Ingrese su DNI" required>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Ingrese su correo electrónico" required pattern="[^@\s]+@[^@\s]+">
		</div>

		<div class="form-group">
			<label>Genero</label>
			<input type="text" name="gender" placeholder="Ingrese su genero" required>
		</div>

		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Ingrese su contraseña" required>
		</div>
		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" name="repeat_password" placeholder="Ingrese su contraseña" required>
		</div>

		<div class="form-group">
			<button type="submit" name="sumbit"> Registrarse </button>
		</div>
			
		<div class="form-group">
			<label>¿Ya te registraste?</label><a href="<?= base_url('login') ?>">iniciar sesion</a>
		</div>
</form>

</body>

</html>