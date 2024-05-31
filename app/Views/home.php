<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Presentech</title>
    <script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>
<body class="bg-gray-100">

    <header class="bg-gray-400 p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="<?= base_url('home') ?>">
                <img src="<?= base_url('img/logonegro.png') ?>" alt="Botón" class="h-12"/>
            </a>
            <h1 class="ml-4 text-xl font-semibold text-black">PresenTECH</h1>
        </div>

        <div class="flex space-x-4">
            <ul class="bg-gray-800 text-white p-2 rounded">
                <li><a href="<?php echo base_url('login') ?>" class="hover:text-gray-300">Iniciar Sesión</a></li>
            </ul>
            <ul class="bg-gray-800 text-white p-2 rounded">
                <li><a href="<?php echo base_url('register') ?>" class="hover:text-gray-300">Registrarse</a></li>
            </ul>
        </div>
    </header>

    <div class="relative bg-cover bg-center" style="background-image: url('<?= base_url('img/imagenhome.jpg') ?>'); height: 500px;">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
            <img src="<?= base_url('img/logonegrofondoblanco.png') ?>" alt="Logo PresenTECH" class="h-40 mb-4">
            <h2 class="text-4xl text-white font-bold">PresenTECH</h2>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center mb-8">
            <img src="<?= base_url('img/rfid-home.png') ?>" alt="Sobre el Proyecto" class="w-1/3 mr-8">
            <div>
                <h3 class="text-2xl font-bold mb-4">Sobre el Proyecto</h3>
                <p class="text-gray-700" style="text-indent: 2em;">
                    Este proyecto final de Informática es un esfuerzo culminante que demuestra la habilidad para aplicar los conceptos y técnicas aprendidas durante el curso. En este proyecto, nos enfocaremos en desarrollar una solución informática para una problemática real, utilizando las mejores prácticas de programación y diseño de sistemas. A lo largo de este proceso, tendremos en cuenta la importancia de la documentación, la colaboración en equipo y la gestión eficaz de proyectos.
                </p>
            </div>
        </div>

        <hr class="border-t border-gray-300 mb-8">

        <div class="flex items-center mb-8">
            <div class="mr-8">
                <h3 class="text-2xl font-bold mb-4">Sobre Nosotros</h3>
                <p class="text-gray-700" style="text-indent: 2em;">
                    El equipo detrás de PresenTECH está compuesto por un grupo de profesionales apasionados por la
                    tecnología y el diseño. Con experiencia en desarrollo de software, diseño gráfico y comunicación,
                    nos comprometemos a ofrecer la mejor herramienta para la creación de presentaciones.
                </p>
            </div>
            <img src="<?= base_url('img/grupo-home.png') ?>" alt="Sobre los Creadores" class="w-1/3">
        </div>

        <hr class="border-t border-gray-300 mb-8">

    </div>

</body>
</html>