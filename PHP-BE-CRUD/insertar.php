<?php

$conexion=mysqli_connect('localhost','root','','crud');

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$dni = $_GET['dni'];

echo $nombre;

echo $apellido;

$insertar = "insert into invitados(nombre, apellido, dni) values ('$nombre','$apellido','$dni')";

$insert = mysqli_query($conexion, $insertar);

header('Location: panelControlNovios.php');
