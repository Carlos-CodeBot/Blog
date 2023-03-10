<?php require_once 'Conexion.php';
$con = conectar();


$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$fecha = date('Y-m-d');

$crear_preparacion = "INSERT INTO publicaciones(titulo,contenido,fecha) VALUES ('$titulo','$contenido', '$fecha');";
$resultado = mysqli_query($con, $crear_preparacion);
if ($resultado == 1) {
    echo 1;
} else {
    echo 0;
}