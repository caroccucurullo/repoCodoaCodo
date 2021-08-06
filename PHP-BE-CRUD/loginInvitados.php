<?php session_start(); 
if (isset($_SESSION['dni'])){
header('Location: panelControlInvitados.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https: //fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <title>Isabel & Joaquín</title>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Isabel & Joaquín</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Información</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginInvitados.php">Invitados</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginNovios.php">Novios</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Isabel<br> & <br>Joaquín</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Nos casamos...</h2>
                </div>
            </div>
        </div>
    </header>

    <?php

    if (isset($_SESSION['dni'])) {
        echo "<p>Has iniciado sesion con el DNI: " . $_SESSION['dni'] . "";
        echo "<p><a href='cerrarSesion.php'>Cerrar Sesion</a></p>";
        echo "<br><p><a href='panelControlInvitados.php'>Ir al panel de control</a>";
    } else {
    ?>
        <section class="agregarInvitados-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4">
                        <form action="panelControlInvitados.php" method="POST">
                            <h3 class="text-white mb-4">Introduce tu DNI para confirmar asistencia</h3>
                            <div>
                                <label for="validationDefault05" class="form-label">DNI</label>
                                <input type="number" class="form-control inputInvitado" id="validationDefault05" name="dni" placeholder="DNI" required>
                            </div>
                            <div>
                                <button class="inputInvitado" type="submit"><i class="fas fa-check-circle"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <div class="bg-black container-flex text-center pt-3 pb-3">
        <p class="text-white-50">PRIMERO HAY QUE INGRESAR LOS INVITADOS Y LUEGO HACER LA CONSULTA</p>
    </div>

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; <a href="#">Carolina Cucurullo para Codo a Codo</a> 2021
        </div>
    </footer>

    <!-- Script-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>