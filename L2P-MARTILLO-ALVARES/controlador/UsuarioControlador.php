<?php
require_once __DIR__ . '/../dao/usuariodao.php';

class UsuarioControlador {

    public function procesarLogin($usuario, $clave) {
        $userDao = new UsuarioDao();
        $userObj = $userDao->autenticar($usuario, $clave);

        if ($userObj) {
            session_start();
            $_SESSION['usuario'] = $userObj->usuario;
            header("Location: index.php?accion=menu&ok=1");
        } else {
            header("Location: index.php?accion=login&error=1");
        }
        exit;
    }

    /* 🔥 FUNCIÓN PARA CERRAR SESIÓN */
    public function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location: ../vista/login.php?logout=1");
        exit;
    }
}

/* 🔥 Detectar la acción desde la URL */
if (isset($_GET['accion']) && $_GET['accion'] === 'cerrar') {
    $control = new UsuarioControlador();
    $control->cerrarSesion();
}
?>
