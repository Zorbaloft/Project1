<?php
session_start();
include('auth/db_conn.php');
include('api/cart.php') ?>
<!DOCTYPE html>
<html lang="pt">
<title>Eixorientador</title>

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
    <main>

        <?php
        if (isset($_GET['IDB']) & !empty($_GET['IDB'])) {
            $idb = $_GET['IDB'];
            $blogSql = "SELECT * FROM blog WHERE IDB=$idb";
            $blogResult = mysqli_query($mysqli, $blogSql);
            $blogData = mysqli_fetch_assoc($blogResult);
        }
        ?>
        <section class="section blog-single overflow-hidden">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="single-inner">
                            <div class="post-details">
                                <div class="main-content-head">
                                    <div class="post-thumbnils overflow-hidden position-relative ">
                                        <img src="img\imagensMiguel\Banners\<?= $blogData["img"] ?>" alt="#"
                                            class="img-fluid">
                                    </div>
                                    <div class="meta-information bg-white pb-4 ps-4">
                                        <h2 class="post-title">
                                            <h1>
                                                <?= $blogData["title"] ?>
                                            </h1>
                                        </h2>
                                        <ul class="meta-info ">
                                            <li class="me-4 pe-4 position-relative d-inline-block">
                                                <span> <i class="fa-solid fa-user"></i>
                                                    <?= $blogData["author"] ?>
                                                </span>
                                            </li>
                                            <li class="me-4 pe-4 position-relative d-inline-block">
                                                <span><i class="fa-solid fa-calendar-days"></i>
                                                    <?= $blogData["date"] ?>
                                                </span>
                                            </li>
                                            <li class="me-4 pe-4 position-relative d-inline-block">
                                                <span><i class="fa-solid fa-tag"></i>
                                                    <?= $blogData["category"] ?>
                                                </span>
                                            </li>
                                            <li class="me-4 pe-4 position-relative d-inline-block">
                                                <span><i class="fa-solid fa-clock"></i>
                                                    <?= $blogData["read_time"] ?> minutes
                                                </span>
                                            </li>
                                        </ul>
                                        <!-- End Meta Info -->
                                    </div>
                                    <div class="detail-inner bg-white p-5">
                                        <p>
                                            <?= $blogData["main_content"] ?>
                                        </p>

                                        <figure class="text-center border mt-5 ">
                                            <div class="icon d-inline-block bg-primary-subtle w-100  ">
                                                <i class="fa-solid fa-quote-right  fs-1 text-light "></i>
                                            </div>
                                            <blockquote class="blockquote">
                                                <p>  <?= $blogData["quote"] ?></p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                               <cite title="Source Title"><?= $blogData["quote_author"] ?></cite>
                                            </figcaption>
                                        </figure>
                                        <div class="socials">
                                            <!-- Post Social Share -->
                                            <div class=" d-inline-block">
                                                <h5 class="share-title">Partilhar :</h5>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="fa-brands fa-facebook"></i>
                                                            <span>Facebook</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                            <span>Linkedin</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="fa-brands fa-instagram"></i>
                                                            <span>Instagram</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="fa-brands fa-whatsapp"></i>
                                                            <span>Whatsapp</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer_area bg-light py-5">
        <?php require_once("includes/footer.php") ?>
    </footer>
    <!-- swiper -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Testimonials -->
    <script type="text/javascript" src="https://testimonial.to/js/iframeResizer.min.js"></script>

    <!-- JS Theme -->
    <script src="js/js.php"></script>

</body>

</html>