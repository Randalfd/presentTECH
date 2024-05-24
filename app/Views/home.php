<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Presentech</title>
    <script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('img/Logo_BlancoyGris.png') ?>">
</head>
<body class="bg-gray-100">

    <header class="bg-gray-300 p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="<?= site_url('home') ?>">
                <img src="<?= base_url('img/Logo_BlancoyGris.png') ?>" alt="Botón" class="h-12"/>
            </a>
            <h1 class="ml-4 text-xl font-semibold text-gray-600">PresenTECH</h1>
        </div>

        <div>
            <ul class="bg-gray-600 text-white p-2 rounded">
                <li><a href="<?php echo base_url('login') ?>" class="hover:text-gray-300">Iniciar Sesión</a></li>
            </ul>
        </div>
    </header>

</body>

</html>