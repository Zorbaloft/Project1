<?php
include('auth/db_conn.php');
session_start();
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
        <section >
            <div class="container my-4">
                <div class="contact-head">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-info-head d-none d-lg-block bg-light p-4 border rounded">
                                    <div class="single-info text-start">
                                        <i class="fas fa-map text-primary fs-2"></i>
                                        <h3>Endereço:</h3>
                                        <ul>
                                            <li>Rua Bairro Nascente, Armazém 1, 3060-213 Cantanhede, Portugal</li>
                                        </ul>
                                    </div>
                                    <div class="single-info text-start">
                                        <i class="fas fa-phone text-primary fs-2"></i>
                                        <h3>Telefone:</h3>
                                        <ul>
                                            <li><a href="tel:+351231094753" class="text-decoration-none text-dark">(+351) 231-094-753</a></li>
                                            <li><a href="tel:+351928734712"  class="text-decoration-none text-dark">928-734-712</a></li>
                                        </ul>
                                    </div>
                                    <div class="single-info text-start">
                                        <i class="fas fa-envelope text-primary fs-2"></i>
                                        <h3>Emails:</h3>
                                        <ul>
                                            <li><a
                                                    href="mailto:comercial@eixorientador.com"  class="text-decoration-none text-dark">comercial@eixorientador.com</a>
                                            </li>
                                            <li><a href="mailto:geral@eixorientador.com"  class="text-decoration-none text-dark">geral@eixorientador.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 mt-5">
                                <div class="contact-form-head">
                                    <div class="form-main bg-light p-4 border rounded">
                                        <div class="form-title">
                                            <h2>Entre em Contacto</h2>
                                            <p>A sua mensagem é importante para nós.</p>
                                        </div>
                                        <form class="form" method="post" action="api/form-handler.php">
                                            <div class="row">
                                            <input type="hidden" name="form_type" value="second_form">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="name" type="text" class="form-control"
                                                            placeholder="O seu nome" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="subject" type="text" class="form-control"
                                                            placeholder="Assunto" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="email" class="form-control"
                                                            placeholder="O seu email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="phone" type="text" class="form-control"
                                                            placeholder="O seu Telemovel" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <textarea name="message" class="form-control "
                                                            placeholder="Mensagem:"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group button d-flex">
                                                        <button type="submit"
                                                            class="btn btn-outline-primary rounded-pill border">Enviar
                                                            Mensagem</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <section id="Map">
            <div class="container-fluid  h-50  google-map mb-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12166.758970342124!2d-8.570371160050492!3d40.32704276197799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2301e88e95ffe1%3A0x6ef77339521f8827!2sEixorientador!5e0!3m2!1spt-PT!2spt!4v1698422083563!5m2!1spt-PT!2spt"
                    width="600px" height="100px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </main>
    <footer>
        <?php require_once("includes/footer.php") ?>
    </footer>
    <!-- swiper -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>


    <!-- JS Theme -->
    <script src="js/js.php"></script>

    <script>



</body >

</html >