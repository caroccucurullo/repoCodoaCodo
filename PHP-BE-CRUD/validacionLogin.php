<?php
session_start();

$conexion=mysqli_connect('localhost','root','','crud');

$nombre = $_POST['nombre'];
$password = $_POST['password'];



$query = "select * from novio where usuario = '$nombre' and password = '$password'";

$result = mysqli_query($conexion, $query);


$value = mysqli_fetch_array($result);
if ($value == false) {
    header('Location: usuarioNoEncontrado.php');
}
else{
    $_SESSION['nombre'] = $_POST['nombre'];
header('Location: panelControlNovios.php');
}
