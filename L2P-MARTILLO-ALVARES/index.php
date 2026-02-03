<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


require_once __DIR__ . '/controlador/UsuarioControlador.php';


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

        case 'consulta':
        include 'vista/Usuario/consulta.php';
        break;

        

    
    // ---------- ERROR ----------
    default:
        header("Location: index.php?accion=login");
        exit;

}
