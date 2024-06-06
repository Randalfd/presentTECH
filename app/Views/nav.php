<header class="bg-gray-400 p-4 flex items-center justify-between">
  <div class="flex items-center">
    <a href="<?= base_url('home') ?>">
      <img src="<?= base_url('img/logonegro.png') ?>" alt="Botón" class="h-12" />
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