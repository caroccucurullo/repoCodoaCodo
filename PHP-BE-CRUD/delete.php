<?php

$conexion=mysqli_connect('localhost','root','','crud');

$dni = $_GET['dni'];

$query = "DELETE FROM invitados WHERE dni = $dni";

$result = mysqli_query($conexion, $query);

header('Location: panelControlNovios.php');



?>