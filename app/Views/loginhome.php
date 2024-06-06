<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>

<body class="bg-gray-100">

	

	<div class="relative bg-cover bg-center" style="background-image: url('<?= base_url('img/banner2.jpg') ?>'); height: 500px;">
		<div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
			<img src="<?= base_url('img/logonegrofondoblanco.png') ?>" alt="Logo PresenTECH" class="h-40 mb-4">
			<h2 class="text-4xl text-white font-bold">PresenTECH</h2>
		</div>
	</div>

	<div class="container mx-auto px-4 py-8">
		<div class="flex items-center mb-8">
			<img src="<?= base_url('img/asistencia.png') ?>" alt="Sobre el Proyecto" class="w-1/4 mr-7">
			<div>
				<h3 class="text-2xl font-bold mb-4">Historial de Asistencias</h3>
				<p class="text-gray-700" style="text-indent: 2em;">
					Aquí podrás ver el historial de tus asistencias registradas. Te proporcionaremos detalles sobre tus ingresos y salidas.
				</p>
			</div>
		</div>

		<hr class="border-t border-gray-300 mb-8">

		<div class="flex items-center mb-8">
			<div class="mr-8">
				<h3 class="text-2xl font-bold mb-4">Datos Personales y Médicos</h3>
				<p class="text-gray-700" style="text-indent: 2em;">
					Administra tus datos personales y médicos aquí. Mantén tu información actualizada para que puedan brindarte una atención adecuada en caso de emergencia.
				</p>
			</div>
			<img src="<?= base_url('img/datosmedicos.png') ?>" alt="Sobre los Creadores" class="w-1/3">
		</div>

		<hr class="border-t border-gray-300 mb-8">
	</div>
	</div>

</body>

</html>