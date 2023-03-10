<?php
ini_set('date.timezone', 'America/Bogota');
function conectar()
{
    $usuario = "sebas";
    $contra = "sebas13";
    $ip = "localhost";
    $bd = "blog_ciberseguridad";
    $port = "3306";

    $conexion = new mysqli($ip, $usuario, $contra, $bd, $port);

    if ($conexion->connect_errno) {
        return "Error en la conexion.";
    } else {
        return $conexion;
    }
}