<?php
class Conexion{
    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "John1313@";
        $dbname = "sistema_alumnos";
        $port = 3306;

        $conn = new mysqli($host, $user, $password, $dbname, $port);

        if ($conn->connect_error) {
            die("Error de conexión MySQL: " . $conn->connect_error);
        }

        return $conn;
    }
}
