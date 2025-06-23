<?php

require('../model/conexion.php');
require('constante.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : '';
$password = isset($_POST['Contraseña']) ? $_POST['Contraseña'] : '';

$con = new conexion();

if (isset($_POST['tipo_seleccionado'])) {
    // Ya seleccionó el tipo de usuario
    $_SESSION['tipo'] = $_POST['tipo_seleccionado'];
    $_SESSION['id_usu'] = $_POST['id_usuario'];
    $_SESSION['nombre'] = $_POST['nombres'];
    $_SESSION['foto'] = $_POST['foto'];
    // Redirigir según tipo
    if ($_SESSION['tipo'] == 'ADMINISTRADOR') {
        header('Location: ../views/WellcomeAdmin.php');
    } else {
        header('Location: ../views/WellcomeEmpleado.php');
    }
    exit;
}

// Primer acceso: validar usuario y mostrar selección de perfiles
$searchUser = $con->getUser($usuario, $password);

if (empty($searchUser)) {
    echo '
        <script language="javascript">
            alert("Usuario o Contraseña incorrectos, por favor intente de nuevo");
            self.location = "../index.php";
        </script>
    ';
    exit;
}

// Guardar datos en sesión para la selección
$_SESSION['perfiles'] = $searchUser;
header('Location: ../views/SelectProfile.php');
exit;