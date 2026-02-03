<?php
require_once 'bd/conexion.php';

class Usuario{

    public function obtenerTodos() {
        $conn = (new Conexion())->conectar();
        $result = $conn->query("SELECT * FROM Sesiones ORDER BY id DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerPorId($id) {
        $conn = (new Conexion())->conectar();
        $stmt = $conn->prepare("SELECT * FROM Sesiones WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object();
    }

    public function guardar($a) {
        $conn = (new Conexion())->conectar();
        $stmt = $conn->prepare(
            "INSERT INTO Sesiones
            (id, IdUsuario , fecha)
            VALUES (?,?,?,?,?,?)"
        );
        $stmt->bind_param(
            "ssssss",

            $a->id,
            $a->IdUsuario,
            $a->fecha,
        );
        $stmt->execute();
    }



}
