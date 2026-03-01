<?php
$conexion = new mysqli("localhost","ale","1234","Inventario");

if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
?>