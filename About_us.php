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

    <main style="background-color: white">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" id="text_1">
                        <h1 class="display-5 mb-4">Desde 2009 somos o seu parceiro em soluções de higiene e limpeza
                            profissional</h1>
                        <p class="mb-4">Temos os melhores produtos em Stock para que possa oferecer um ambiente mais
                            seguro aos seus clientes e trabalhores.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img\imagensMiguel\About_us\AboutBanner1.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" id="About_usSquares">
            <div class="section-header d-flex flex-column justify-content-center text-center mb-5">
                <h2 class="section-title">Os nossos Serviços</h2>
                <p class="p-3">Estamos comprometidos em oferecer operações mais limpas, seguras e saudáveis de forma
                    eficiente e
                    sustentável.</p>
            </div>
            <div class="row justify-content-sm-center text-center text-md-start gap-3">
                <div class="card col-md-5 mb-3">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Reparações Técnicas HACCP</h4>
                                <p class="card-text">
                                    A eficiência das intervenções técnicas reflete-se na restauração precisa e no
                                    aprimoramento funcional dos sistemas.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="img\imagensMiguel\About_us\Freepik1.png" alt="Imagem 1"
                                class="img-fluid d-none d-lg-block">
                        </div>
                    </div>
                </div>
                <div class="card col-md-5 mb-3">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Limpeza Residencial Regular</h4>
                                <p class="card-text">
                                    Inclui a limpeza de áreas comuns, como salas de estar, cozinhas, quartos e casas de
                                    banho.
                                    Pode ser agendado semanal, quinzenal ou mensal, dependendo das necessidades do
                                    cliente.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="img\imagensMiguel\About_us\Freepik2.png" alt="Imagem 2"
                                class="img-fluid d-none d-lg-block">
                        </div>
                    </div>
                </div>
                <div class="card col-md-5 mb-3">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Limpeza Comercial e de Escritórios</h4>
                                <p class="card-text">
                                    Focado em espaços comerciais, escritórios e locais de trabalho.
                                    Inclui a limpeza de áreas de recepção, salas de conferência, escritórios
                                    individuais, cozinhas e banheiros.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="img\imagensMiguel\About_us\Freepik3.png" alt="Imagem 3"
                                class="img-fluid d-none d-lg-block">
                        </div>
                    </div>
                </div>
                <div class="card col-md-5 mb-3">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Limpeza Pós-Obra</h4>
                                <p class="card-text">
                                    Pode envolver a limpeza de janelas, pisos, paredes e a higienização completa dos
                                    espaços afetados.
                                    Ideal para garantir que um ambiente recém-construído ou reformado esteja pronto para
                                    uso.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="img\imagensMiguel\About_us\Freepik4.png" alt="Imagem 4"
                                class="img-fluid d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" id="text_2">
                        <h1 class="display-5 mb-4">Trabalhamos com as melhores Marcas</h1>
                        <p class="mb-4">O nosso compromisso com a excelência, colaboramos exclusivamente
                            com as mais renomadas marcas de produtos de limpeza. Priorizamos
                            qualidade e eficácia para proporcionar ambientes impecáveis aos nossos clientes,
                            elevando os padrões de higiene e bem-estar.</p>
                        <p>
                        <p></p>
                        <p>
                        </p>
                        <p></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img position-relative  p-5 pe-0">
                            <img src="img\imagensMiguel\logos\LOGOS.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="parallax-container d-flex justify-content-end p-5">
            <div class="parallax-content  ">
                <form class="paralalx_form p-5" action="api/form-handler.php" method="post">
                    <h1>Procura um produto em específico?</h1>
                    <input type="hidden" name="form_type" value="first_form">
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Endereço de e-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputReason" class="form-label">Deixe a sua mensagem:</label>
                        <textarea class="form-control" id="InputReason" name="message" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submeter</button>
                </form>
            </div>
        </div>


    </main>
    <footer class="footer_area bg-light py-5">
        <?php require_once("includes/footer.php") ?>
    </footer>
    <!-- swiper -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Theme -->
    <script src="js/js.php"></script>

</body>

</html>