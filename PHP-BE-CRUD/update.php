<?php

$conexion=mysqli_connect('localhost','root','','crud');

$dni = $_POST['dni'];
$menu =  $_POST['menu'];
$confirmacion =  $_POST['confirmacion'];



$query = "UPDATE invitados SET menu = '$menu' , confirmacion = '$confirmacion' WHERE dni = $dni";


$result = mysqli_query($conexion, $query);


header('Location: confirmacionInvitados.php');




?>