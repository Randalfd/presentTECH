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

    <header class="bg-gray-400 p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="<?= base_url('loginhome') ?>">
                <img src="<?= base_url('img/logonegro.png') ?>" alt="Botón" class="h-12"/>
            </a>
            <h1 class="ml-4 text-xl font-semibold text-black">Bienvenido,  <?= session()->get('user_name') ?></h1>
        </div>

        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Buscar usuarios..." class="bg-white border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <a href="#" class="bg-gray-800 text-white p-2 rounded hover:text-gray-300">
                <i class="fas fa-user"></i> <!-- Icono de usuario -->
                Perfil
            </a>
            <a href="<?= base_url('logout') ?>" class="bg-gray-800 text-white p-2 rounded hover:text-gray-300">
                <i class="fas fa-arrow-left"></i> <!-- Icono de flecha hacia atrás -->
                Salir
            </a>
            <button onclick="window.location.reload();" class="bg-gray-800 text-white p-2 rounded hover:text-gray-300" title="Recargar página"><i class="fas fa-sync-alt"></i></button>
        </div>
    </header>

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

        <div class="text-center">
            <h3 class="text-2xl font-bold mb-4">Síguenos en Redes Sociales</h3>
            <div class="flex justify-center space-x-4 mb-4">
                <a href="https://www.facebook.com" target="_blank" class="text-blue-600 hover:text-blue-800">
                    <i class="fab fa-facebook-f fa-2x"></i>
            </a>
                <a href="https://www.twitter.com" target="_blank" class="text-blue-400 hover:text-blue-600">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-pink-600 hover:text-pink-800">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" class="text-blue-700 hover:text-blue-900">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
            </div>

            <h3 class="text-2xl font-bold mb-4">Contáctanos</h3>
            <p class="text-gray-700">Email: presentech@gmail.com</p>
            <p class="text-gray-700">Teléfono: +54 3571 00-0000</p>
        </div>
    </div>
</div>

</body>
</html>