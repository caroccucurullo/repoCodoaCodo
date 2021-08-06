<?php session_start(); 


?>

<?php $conexion = mysqli_connect('localhost', 'root', '', 'crud'); ?>

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

    <div class="bg-black container-flex px-4 px-lg-5 text-center pb-5">

        <h2 class="text-white">Tu DNI es correcto!</h2>

        <p class="text-white">

            <!-- Session-->
            <?php
            if (isset($_POST['dni'])) {
                $_SESSION['dni'] = $_POST['dni'];
                echo "Bienvenido! Has iniciado sesion con el DNI:<b> " . $_POST['dni'] . "</b>";
            } else {
                if (isset($_SESSION['dni'])) {
                    echo "Has iniciado Sesion con el DNI: " . $_SESSION['dni'];
                } else {
                    echo "No estas en la lista! manda un mail a Isa_Joaco@mail.com para que te agreguen";
                }
            }
            ?>

        </p>

    </div>

    <!-- Elegir menu y confirmación -->
    <section class="bg-black">
        <div class="container px-4 px-lg-5 text-black-50">

            <table id="lista">

                <tr id="titulosLista">
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Menú</th>
                    <th>Confirmación</th>
                    <th></th>
                </tr>

                <?php
                $dni = $_SESSION['dni'];
                $query = "SELECT * from invitados where dni = $dni";
                $result = mysqli_query($conexion, $query);
                $value = mysqli_fetch_array($result);
                if ($value == false) {
                    header('Location: dniNoEncontrado.php');
                }
                ?>

                    <form action="update.php" method="POST">

                        <tr>
                            <input type="hidden" name="dni" value="<?php echo $value['dni'] ?>" />
                            <th><?php echo $value['dni'] ?></th>
                            <th><?php echo $value['nombre'] ?></th>
                            <th><?php echo $value['apellido'] ?></th>
                            <th> <select name="menu">
                                    <option value="clasico">Clásico</option>
                                    <option value="celiaco">Celíaco</option>
                                    <option value="vegetariano">Vegetariano</option>
                                    <option value="hipertenso">Hipertenso</option>
                                </select></th>
                            <th> <select name="confirmacion">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select></th>
                            <th>
                                <button class="inputInvitado" type="submit"><i class="fas fa-check-circle"></i></button>
                            </th>
                        </tr>

                    </form>
             
            </table>

        </div>
    </section>
    <div class="bg-black container-flex px-4 px-lg-5 text-center pb-5 pt-5">
        <p><a href='cerrarSesion.php'>Cerrar Sesion</a></p>
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