<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="<?php echo base_url('img/logos/logonegrosinfondo.png') ?>">
  <link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>

<body class="bg-gray-300 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md p-8 space-y-8 bg-gray-800 text-white rounded-lg shadow-lg relative">
    <a href="<?= base_url('/') ?>" class="absolute top-4 left-4 flex items-center text-white hover:text-gray-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      Regresar
    </a>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-white">Registrarse</h2>
    <form class="mt-8 space-y-6" action="<?= base_url('/register') ?>" method="POST">
      <div class="rounded-md shadow-sm -space-y-px">
        <div class="py-2">
          <label for="first_name" class="sr-only">Nombre</label>
          <input id="first_name" name="first_name" type="text" autocomplete="given-name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
        </div>
        <div class="py-2">
          <label for="last_name" class="sr-only">Apellido</label>
          <input id="last_name" name="last_name" type="text" autocomplete="family-name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Apellido">
        </div>
        <div class="py-2">
          <label for="DNI" class="sr-only">DNI</label>
          <input id="DNI" name="DNI" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="DNI">
        </div>
        <div class="py-2">
          <label for="email" class="sr-only">Correo electrónico</label>
          <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo electrónico">
        </div>
        <div class="py-2">
          <label for="gender" class="sr-only">Género</label>
          <select id="gender" name="gender" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
            <option value="" disabled selected>Seleccione su género</option>
            <option value="0">Masculino</option>
            <option value="1">Femenino</option>
          </select>
        </div>
        <div class="py-2">
          <label for="password" class="sr-only">Contraseña</label>
          <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contraseña">
        </div>
        <div class="py-2">
          <label for="repeat_password" class="sr-only">Repetir Contraseña</label>
          <input id="repeat_password" name="repeat_password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-600 placeholder-gray-400 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Repetir Contraseña">
        </div>
      </div>
      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Registrarse
        </button>
      </div>
      <div class="flex items-center justify-between">
        <div class="text-sm">
          <a href="<?= base_url('login') ?>" class="font-medium text-indigo-600 hover:text-indigo-500">Iniciar sesión</a>
        </div>
      </div>
      <div class="text-sm text-red-500">
        <?php if (session()->getFlashdata("errors") != ""): ?>
          <?= session()->getFlashdata("errors") ?>
        <?php endif; ?>
      </div>
    </form>
  </div>
</body>

</html>