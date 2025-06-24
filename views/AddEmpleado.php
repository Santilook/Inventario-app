<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Añadir Empleado</title>
</head>
<body class="bg-gray-900 min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-md mx-auto py-10">
        <h2 class="text-3xl font-bold text-white mb-8 text-center">Añadir nuevo empleado</h2>
        <form action="../controller/GuardarEmpleado.php" method="post" enctype="multipart/form-data" class="bg-gray-800 rounded-lg shadow-lg p-8 space-y-6">
            <!-- Nombre -->
            <div>
                <label class="block text-white mb-2" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required class="w-full px-4 py-2 rounded bg-gray-700 text-white focus:outline-none">
            </div>
            <!-- Tipo -->
            <div>
                <label class="block text-white mb-2" for="tipo">Tipo</label>
                <select name="tipo" id="tipo" required class="w-full px-4 py-2 rounded bg-gray-700 text-white focus:outline-none">
                    <option value="EMPLEADO">Empleado</option>
                </select>
            </div>
            <!-- Foto -->
            <div>
                <label class="block text-white mb-2" for="foto">Foto de perfil</label>
                <input type="file" name="foto" id="foto" accept="image/*" class="w-full text-white">
            </div>
            <!-- Botón -->
            <div class="flex justify-center">
                <button type="submit" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded transition">Guardar</button>
            </div>
        </form>
        <div class="text-center mt-6">
            <a href="SelectProfile.php" class="text-blue-400 hover:underline">Volver a selección de perfiles</a>
        </div>
    </div>
</body>
</html>