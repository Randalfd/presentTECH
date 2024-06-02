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
    <h2 class="mt-6 text-center text-3xl font-extrabold text-white">Perfil de Usuario</h2>
    <div class="bg-white p-6 rounded-lg shadow-lg text-black">
      <p><strong>ID:</strong> <?= $user['id_user'] ?></p>
      <p><strong>Nombre:</strong> <?= $user['first_name'] ?></p>
      <p><strong>Apellido:</strong> <?= $user['last_name'] ?></p>
      <p><strong>DNI:</strong> <?= $user['DNI'] ?></p>
      <p><strong>Correo Electrónico:</strong> <?= $user['email'] ?></p>
      <p><strong>Género:</strong> <?= $user['gender'] == 0 ? 'Masculino' : 'Femenino' ?></p>
      <p><strong>Rol:</strong> <?= $user['id_rol'] ?></p>
    </div>
  </div>
</body>
</html>