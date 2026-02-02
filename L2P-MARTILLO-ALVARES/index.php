<?php
// ===============================
// INICIO DE SESIÓN
// ===============================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ===============================
// CONTROLADORES
// ===============================

require_once 'controlador/UsuarioControlador.php';


$accion = $_GET['accion'] ?? 'login';

switch ($accion) {


    // ---------- LOGIN ----------
    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarlogin':
        $usuario = $_POST['usuario'];
        $clave   = $_POST['clave'];
        (new UsuarioControlador())->procesarLogin($usuario, $clave);
        break;

    case 'logout':
        session_destroy();
        header("Location: index.php?accion=login");
        exit;

    // ---------- MENÚ ----------
    case 'menu':
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=login");
            exit;
        }
        include 'vista/menu.php';
        break;

   }

?>