<?php
require('../model/conexion.php');
require('constante.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : '';
$password = isset($_POST['Contraseña']) ? $_POST['Contraseña'] : '';



$con = new conexion();
$searchUser = $con->getUser($usuario, $password);

if (empty($searchUser)) {
    // Usuario no encontrado
    echo '
        <script language="javascript">
            alert("Usuario o Contraseña incorrectos, por favor intente de nuevo");
            self.location = "../index.php";
        </script>
    ';
    exit;
} else {
    // Usuario encontrado, inicializar variables y guardar en sesión
    $user = $searchUser[0];
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $foto = $user['foto'];

    // Guardar datos en sesión
    $_SESSION['id_usuario'] = $id_usuario;
    $_SESSION['nombres'] = $nombres;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['foto'] = $foto;

    // Redirigir según el tipo de usuario
    if ($tipo == 'VENTAS') {
        require('../views/WellcomeVentas.php');
    } else if ($tipo == 'ADMINISTRADOR') {
        $urlViews = URL_VIEWS;
        require('../views/Wellcome.php');
    } else {
        // Tipo de usuario desconocido
        echo '
            <script language="javascript">
                alert("Tipo de usuario no reconocido.");
                self.location = "../index.php";
            </script>
        ';
        exit;
    }
}