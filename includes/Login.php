<!DOCTYPE html>
<html lang="pt">
<title>Eixorientador</title>
<!-- ======================================
   Trabalho Realizador Por:
   Miguel Gaspar 2020135599
   Gonçalo Carvalho Grilo 2020152821 
   Abraão Pedra 2018068666
======================================== -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- Fontawsome -->
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome-free-6.4.2-web/css/all.css">
    <!-- swiper -->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- CSS Styles and Themes -->
    <link rel="stylesheet" type="text/css" href="css/css.php">
    <link rel="icon" type="image/x-icon" href="img\imagensMiguel\Favicon\favicon.ico">
</head>


<body>

    <main>
        <div class="container-fluid p-5 w-75 text-center  ">
            <div class="main-logo ">
                <a href="../index.php">
                    <img src="../img/imagensLogos/logotype.svg" alt="logo" class="img-fluid w-75">
                </a>
            </div>
            <form class="card login-form mt-5 w-75 text-center mx-auto" action="../auth/login.php" method="post">
                <div class="card-body ">
                    <h3 class="text-center mb-5">Login</h3>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="text-danger">
                            <?php echo $_GET['error']; ?>
                        </p>
                    <?php } ?>
                    <div class="form-group input-group  ">
                        <label for="email" class="me-5">E-mail</label>
                        <input class="form-control " type="text" id="email" name="email" required>
                    </div>
                    <div class="form-group input-group ">
                        <label for="password" class="me-4 mt-5">Password</label>
                        <input class="form-control mt-5" type="password" id="password" name="password" required>
                    </div>
                    <div class=" mt-5">
                        <button class="btn btn-md btn-outline-primary rounded-pill border  "
                            type="submit">Login</button>
                    </div>
                    <p class=" mt-5">Não tens conta? <a href="register.php">Regista-te aqui!</a>
                    </p>
                </div>
            </form>

        </div>
    </main>



    <script src="../vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="../js/js.php"></script>

</body>

</html>