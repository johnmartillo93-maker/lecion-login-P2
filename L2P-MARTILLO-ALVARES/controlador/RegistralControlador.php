<?php
require_once 'dao/usuarioDao.php';
require_once 'modelo/registraUsuario.php';

class AlumnoControlador {

    public static function obtenerTodos() {
        return (new Usuario())->obtenerTodos();
    }

    public static function obtenerPorId() {
        return (new Usuario())->obtenerPorId($_GET['id']);
    }

    public static function guardar() {
        $a = new Usuario();
     $a->id = $_POST['id'];
     $a->IdUsuario = $_POST['IdUsuario'];
     $a->fecha = $_POST['fecha'];



}  

}