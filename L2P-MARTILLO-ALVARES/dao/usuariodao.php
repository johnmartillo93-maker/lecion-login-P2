<?php
require_once 'bd/conexion.php';
require_once 'modelo/Usuario.php';

class UsuarioDao {

    public function autenticar($usuario, $clave) {

        $conexion = new Conexion();
        $conn = $conexion->conectar(); // ← mysqli

        // Preparar consulta
        $stmt = $conn->prepare(
            "SELECT id, usuario, clave 
             FROM usuarios 
             WHERE usuario = ? AND clave = ?"
        );

        if ($stmt === false) {
            die("Error en prepare(): " . $conn->error);
        }

        // Enlazar parámetros
        $stmt->bind_param("ss", $usuario, $clave);

        // Ejecutar
        if (!$stmt->execute()) {
            die("Error en execute(): " . $stmt->error);
        }

        // Obtener resultado
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_assoc();

        if ($fila) {
            $user = new Usuario();
            $user->id = $fila['id'];
            $user->usuario = $fila['usuario'];
            return $user;
        }

        return null;
    }
}
?>
