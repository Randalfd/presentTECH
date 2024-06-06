<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-4xl p-8 space-y-8 bg-gray-800 text-white rounded-lg shadow-lg">
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <img src="<?= base_url('img/profile.png') ?>" alt="Profile Picture" class="w-20 h-20 rounded-full">
        <div>
          <h2 class="text-2xl font-bold"><?= $user['first_name'] . ' ' . $user['last_name'] ?></h2>
          <p class="text-gray-400">@guest</p>
          <p class="text-gray-400">active 6 minutes ago</p>
        </div>
      </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-black">
      <h3 class="text-xl font-semibold mb-4">Basic Info</h3>
      <p><strong>ID:</strong> <?= $user['id_user'] ?></p>
      <p><strong>Nombre:</strong> <?= $user['first_name'] ?></p>
      <p><strong>Apellido:</strong> <?= $user['last_name'] ?></p>
      <p><strong>DNI:</strong> <?= $user['DNI'] ?></p>
      <p><strong>Correo Electrónico:</strong> <?= $user['email'] ?></p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-black">
      <h3 class="text-xl font-semibold mb-4">Personal Info</h3>
      <p><strong>Género:</strong> <?= $user['gender'] == 0 ? 'Masculino' : 'Femenino' ?></p>
      <p><strong>Rol:</strong> <?= $user['id_rol'] ?></p>
    </div>
  </div>
</body>
</html>