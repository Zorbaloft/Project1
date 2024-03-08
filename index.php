<?php
session_start();
include('auth/db_conn.php');
include ('api/cart.php');
 ?>

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
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- Fontawsome -->
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free-6.4.2-web/css/all.css">
    <!-- swiper -->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">

    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- CSS Styles and Themes -->
    <link rel="stylesheet" type="text/css" href="css/css.php">
    <link rel="icon" type="image/x-icon" href="img\imagensMiguel\Favicon\favicon.ico">
</head>

<body>


    <header>
        <?php require_once("includes/Header.php") ?>
    </header>
    <header>
        <?php require_once("includes/Hero.php") ?>
    </header>
    <main >
        <?php require_once("includes/Main.php") ?>
    </main>

    <footer>
        <?php require_once("includes/footer.php") ?>
    </footer>



    <!-- swiper -->
    <script src="vendor\swiper\swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Theme -->
    <script src="js/js.php"></script>
</body>

</html>