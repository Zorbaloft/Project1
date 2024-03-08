<!DOCTYPE html>
<html lang="pt">
<title>Eixorientador</title>

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

        <div class="container text-center ">
            <div class="main-logo">
                <a href="../index.php">
                    <img src="../img/imagensLogos/logotype.svg" alt="logo" class="img-fluid w-75">
                </a>
            </div>
            <div class="bg-white border">
                <div class="register-form">
                    <div class="title my-3">
                        <h3>Sem Conta? Registe-se</h3>
                        <p>O registro leva menos de um minuto, mas um oferece controlo total sobre os seus
                            pedidos.
                        </p>
                    </div>
                    <form class="row" method="post" action="../auth/register.php">
                        <div class="col-sm-6">
                            <div class="form-group my-3">
                                <label for="reg-fn">Primeiro Nome</label>
                                <input class="form-control" type="text" name="reg-fn" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group my-3">
                                <label for="reg-ln">Último Nome</label>
                                <input class="form-control" type="text" name="reg-ln">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group my-3">
                                <label for="reg-email">E-mail <span class="required">*</span></label>
                                <input class="form-control" type="email" name="reg-email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group my-3">
                                <label for="reg-phone">Número Telemóvel <span class="required">*</span></label>
                                <input class="form-control" type="text" name="reg-phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group my-3">
                                <label for="reg-pass">Password <span class="required">*</span></label>
                                <input class="form-control" type="password" name="reg-pass" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group col-md-12 my-3">
                                <label>Confirmar Palavra Passe <span class="required">*</span></label>
                                <input required="" class="form-control square" name="reg-cpassword" type="password">
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-outline-primary rounded-pill border" type="submit">Registar</button>
                        </div>
                        <p class="outer-link">Já tem conta? <a href="Login.php">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        </div>


    </main>


    <script src="../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/js.php"></script>

</body>

</html>