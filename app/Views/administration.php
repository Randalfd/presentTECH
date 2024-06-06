<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Administración</title>
	<script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>
<body>

<header class="bg-gray-400 p-4 flex items-center justify-between">
    <div class="flex items-center">
        <a href="<?= base_url('administration') ?>">
            <img src="<?= base_url('img/logonegro.png') ?>" alt="Botón" class="h-12"/>
        </a>
        <h1 class="ml-4 text-xl font-semibold text-black">PresenTECH</h1>
    </div>

    <div class="flex space-x-4">
        <a href="<?= base_url('logout') ?>" class="bg-gray-800 text-white p-2 rounded hover:text-gray-300">
			<i class="fas fa-arrow-left"></i> <!-- Icono de flecha hacia atrás -->
			Cerrar Sesion
		</a>
    </div>
</header>



<section class="features">
        <div class="feature">
        <a href="<?php echo base_url('cuenta') ?>">
            <i class="fas fa-users"></i></a> <h3>Gestiona Cuentas</h3>
            <p>Administra cuentas de clientes y empleados de manera simple</p>
        </div>

        <div class="feature">
        <a href="<?php echo base_url('inicio2') ?>">
            <i class="fas fa-home"></i></a> <h3>Página Principal</h3>
            <p>Mira los cambios en la página principal.</p>
        </div>
        
        <div class="feature">
        <a href="<?php echo base_url(' controlarcompras') ?>">
            <i class="fas fa-shopping-cart"></i></a> <h3>Ventas Realizadas</h3>
            <p>Ver y gestionar los compras de todos los usuarios.</p>
        </div>
        <div class="feature">
        <a href="<?php echo base_url('gestionproductos') ?>">
            <i class="fas fa-couch"></i></a> <h3>Gestiona Productos</h3>
            <p>Administra los productos de tu catálogo y mantén actualizado de manera sencilla.</p>
        </a>
        <div class="feature">
        <a href="<?php echo base_url('insertarprod') ?>">
            <i class="fas fa-couch"></i></a> <h3>Ingresa Productos</h3>
            <p>Agrega nuevos productos a tu catálogo y mantén actualizado tu inventario.</p>
        </div>
</section>

</body>
</html>