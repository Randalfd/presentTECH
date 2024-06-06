<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>

<body>
  <header class="bg-gray-400 p-4 flex items-center justify-between">
    <div class="flex items-center">
      <a href="<?= base_url('loginhome') ?>">
        <img src="<?= base_url('img/logonegro.png') ?>" alt="Botón" class="h-12" />
      </a>
      <h1 class="ml-4 text-xl font-semibold text-black">Bienvenido, <?= session()->get('user_name') ?></h1>
    </div>

    <div class="flex items-center space-x-4">
      <input type="text" placeholder="Buscar usuarios..." class="bg-white border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
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
</body>

</html>