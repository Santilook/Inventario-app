<?php
require_once '../model/conexion.php';

$nombre = $_POST['nombre'] ?? '';
$tipo = $_POST['tipo'] ?? '';
$foto = '';

// 1. Procesa la foto si se subió
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $foto = 'user_' . uniqid() . '.' . $ext;
    $ruta_destino = '../model/img/' . $foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_destino);
} else {
    $foto = 'PerfilDefault.jpg'; // Foto por defecto si no se sube ninguna
}

// 2. Inserta en la tabla usuarios
$con = new conexion();
$db = $con->getConnection();

// 3. Inserta en la tabla clientes
$stmt2 = $db->prepare("INSERT INTO clientes (nombre, tipo, foto) VALUES (?, ?, ?)");
$stmt2->bind_param("sss", $nombre, $tipo, $foto);
$stmt2->execute();


// 4. Redirige de vuelta a la selección de perfiles
header("Location: ../views/SelectProfile.php");
exit;