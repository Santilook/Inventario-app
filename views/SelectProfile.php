<?php
session_start();
require_once '../model/conexion.php';
$con = new conexion();
$db = $con->getConnection(); 

$clientes = [];
$result = $db->query("SELECT id_cliente, id_usu, nombre, tipo, foto FROM clientes ORDER BY tipo, nombre");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $clientes[] = $row;
    }
}
// Agrupar por tipo
$administradores = array_filter($clientes, function($c) { return strtoupper($c['tipo']) === 'ADMINISTRADOR'; });
$empleados = array_filter($clientes, function($c) { return strtoupper($c['tipo']) === 'EMPLEADO'; });
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Selecciona tu perfil</title>
</head>
<body class="bg-gradient-to-br from-[#1c2f43] via-[#526468] to-[#2b4766] min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-3xl mx-auto py-10">
        <h1 class="text-5xl font-extrabold text-red-600 text-center mb-8 tracking-widest">INVENTARIO</h1>
        <h2 class="text-2xl font-bold text-white mb-4 text-center">ADMINISTRADORES</h2>
        <div class="flex flex-wrap justify-center gap-8 mb-10">
            <?php if (empty($administradores)): ?>
                <p class="text-white text-center w-full">No hay administradores registrados.</p>
            <?php else: ?>
                <?php foreach ($administradores as $admin): ?>
    <form method="post" action="../controller/AccessUsers.php">
        <input type="hidden" name="tipo_seleccionado" value="<?php echo htmlspecialchars($admin['tipo']); ?>">
        <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars($admin['id_usu']); ?>">
        <input type="hidden" name="nombres" value="<?php echo htmlspecialchars($admin['nombre']); ?>">
        <input type="hidden" name="foto" value="<?php echo htmlspecialchars($admin['foto'] ?: 'PerfilDefault.jpg'); ?>">
        <button type="submit" class="flex flex-col items-center bg-gray-800 rounded-xl shadow-lg p-6 hover:bg-gray-700 transition transform hover:scale-105 focus:outline-none w-40">
            <img src="../model/img/<?php echo htmlspecialchars($admin['foto'] ?: 'PerfilDefault.jpg'); ?>" 
                alt="Foto de perfil" 
                class="w-24 h-24 rounded-md border-4 border-white mb-3 object-cover shadow-md bg-white">
            <span class="text-lg font-semibold text-white mb-1 text-center"><?php echo htmlspecialchars($admin['nombre']); ?></span>
        </button>
    </form>
<?php endforeach; ?>
            <?php endif; ?>
        </div>
        <h2 class="text-2xl font-bold text-white mb-4 text-center">EMPLEADOS</h2>
        <div class="flex flex-wrap justify-center gap-8 mb-8">
            <?php if (empty($empleados)): ?>
                <p class="text-white text-center w-full">No hay empleados registrados.</p>
            <?php else: ?>
                <?php foreach ($empleados as $emp): ?>
                    <form method="post" action="../controller/AccessUsers.php">
                        <input type="hidden" name="tipo_seleccionado" value="<?php echo htmlspecialchars($emp['tipo']); ?>">
                        <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars($emp['id_usu']); ?>">
                        <input type="hidden" name="nombres" value="<?php echo htmlspecialchars($emp['nombre']); ?>">
                        <input type="hidden" name="foto" value="<?php echo htmlspecialchars($emp['foto'] ?: 'PerfilDefault.jpg'); ?>">
                        <button type="submit" class="flex flex-col items-center bg-gray-800 rounded-xl shadow-lg p-6 hover:bg-gray-700 transition transform hover:scale-105 focus:outline-none w-40">
                            <img src="../model/img/<?php echo htmlspecialchars($emp['foto'] ?: ''); ?>" alt="Foto de perfil" class="w-24 h-24 rounded-md border-4 border-white mb-3 object-cover shadow-md bg-white">
                            <span class="text-lg font-semibold text-white mb-1 text-center"><?php echo htmlspecialchars($emp['nombre']); ?></span>
                        </button>
                    </form>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- Botón para añadir nuevo empleado -->
            <a href="AddEmpleado.php" class="flex flex-col items-center justify-center bg-green-700 rounded-xl shadow-lg p-6 hover:bg-green-600 transition transform hover:scale-105 focus:outline-none w-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="text-lg font-semibold text-white mb-1 text-center">Añadir empleado</span>
            </a>
        </div>
    </div>
</body>
</html>