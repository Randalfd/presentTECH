<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Users</title>
	<script src="https://kit.fontawesome.com/adead18d3c.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url('img/logonegro.png') ?>">
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-4xl p-8 space-y-8 bg-gray-800 text-white rounded-lg shadow-lg">
    <h2 class="mt-6 text-center text-3xl font-extrabold text-white">Resultados de la búsqueda</h2>
    <?php if (count($users) > 0): ?>
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DNI</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo Electrónico</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rol</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($users as $user): ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->id_user ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->first_name ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->last_name ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->DNI ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->email ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-black"><?= $user->rol_name ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p class="text-center text-red-500">No se encontraron usuarios.</p>
    <?php endif; ?>
  </div>
</body>
</html>