<?php
session_start();
include('auth\db_conn.php');
include('api/cart.php');
include('auth/protect.php')
    ?>
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


    <header >
        <?php require_once("includes/Header.php") ?>

    </header>
    <main>

        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1 ">
                        <ul id="accordion" class="list-unstyled">
                            <li class="mb-3">
                                <h6 class="title bg-white text-primary p-3 user-select-none" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Informaçôes Pessoais </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion" style="">
                                    <div class="row bg-white p-4 ">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">Nome</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="firstName"
                                                            placeholder="Primeiro Nome">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="lastName"
                                                            placeholder="Ultimo Nome">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Endereço E-mail</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Endereco email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phoneNumber" class="form-label">Número de Telemóvel</label>
                                                <input type="tel" class="form-control" id="phoneNumber"
                                                    placeholder="O seu numero de telemovel">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Endereço</label>
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="Endereço">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Cidade</label>
                                                <input type="text" class="form-control" id="city" placeholder="Cidade">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="postalCode" class="form-label">Código Postal</label>
                                                <input type="text" class="form-control" id="postalCode"
                                                    placeholder="Codigo Postal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="country" class="form-label">País</label>
                                                <input type="text" class="form-control" id="country" placeholder="Pais">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <button class="btn btn-outline-primary rounded-pill" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                    aria-expanded="false" aria-controls="collapsefive">Próximo
                                                    passo</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <h6 class="title collapsed bg-white text-primary p-3 user-select-none "
                                    data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                                    aria-controls="collapsefive">Pagamento</h6>
                                <section class="checkout-steps-form-content collapse" id="collapsefive"
                                    aria-labelledby="headingFive" data-bs-parent="#accordion" style="">
                                    <div class="row bg-white p-4">
                                        <div class="col-12">
                                            <div class="checkout-payment-form">
                                                <h1 class="mb-3">Referência Multibanco:</h1>
                                                <h3 class="mb-3">123123123123131231</h3>
                                                <form action="api/place_order.php" method="post">
                                                    <button type="submit"
                                                        class="btn btn-outline-primary rounded-pill border conclude-button">Concluir</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table mt-30 bg-white p-4 border">
                            <h5 class="title">Tabela de preços</h5>

                            <div class="sub-total-price">
                                <div class="d-flex justify-content-between">
                                    <p class="value">Iva:</p>
                                    <p class="price">23%</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="value">Preço sem Iva:</p>
                                    <p class="price">
                                        <?= number_format($subtotal, 2); ?> €
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="value">Portes de envio:</p>
                                    <p class="price">
                                        <?= number_format($portesEnvio, 2); ?> €
                                    </p>
                                </div>
                            </div>

                            <div class="total-payable border-top mt-3">
                                <div class=" d-flex justify-content-between">
                                    <p class="value">Preço Final:</p>
                                    <p class="price">
                                        <?= number_format($total, 2); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </main>

    <footer class="footer_area bg-white py-5">
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