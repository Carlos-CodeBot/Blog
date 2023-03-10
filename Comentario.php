<?php require_once 'Conexion.php';
$con = conectar();


$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];
$fecha = date('Y-m-d H:i:s');

$crear_preparacion = "INSERT INTO comentarios(nombre,comentario,fecha) VALUES ('$nombre','$comentario', '$fecha');";
$resultado = mysqli_query($con, $crear_preparacion);
if ($resultado == 1) {
    header('Location: Blog.html');
} else {
    echo 0;
}