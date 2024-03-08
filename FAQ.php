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



    <header >
        <?php require_once("includes/Header.php") ?>
    </header>

    <main>
        <section>
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>PERGUNTAS FREQUENTES.</h2>
                            <p>Normalmente respondemos dentro de 2 dias úteis. As perguntas mais populares aparecerão
                                nesta
                                página.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header " id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="title ms-5"> PRAZO DE ENTREGA</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A entrega das encomendas realizar-se entre 1 a 2 dias úteis após confirmação
                                            do pagamento efectuado. A entrega é realizada pela empresa EIXORIENTADOR ou
                                            por uma empresa de transportes porta-a-porta, definida pela EIXORIENTADOR. À
                                            encomenda poderão ser acrescidos os custos de portes de envio + IVA . Caso o
                                            pagamento da mesma não seja recepcionado pelos nossos serviços, a encomenda
                                            não poderá ser validada nem entregue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="title ms-5">PORTES DE ENVIO</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">DE</th>
                                                    <th scope="col">A</th>
                                                    <th scope="col">Custo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">100</th>
                                                    <td>200</td>
                                                    <td>75</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">75</th>
                                                    <td>100</td>
                                                    <td>24,6</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">50</th>
                                                    <td>75</td>
                                                    <td>18,45</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">25</th>
                                                    <td>50</td>
                                                    <td>12,5</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0</th>
                                                    <td>25</td>
                                                    <td>6,15</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="title ms-5">CONDIÇÕES DE PAGAMENTO</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No nosso website, dispomos das seguintes modalidades de
                                            pagamento:
                                            Referência Multibanco;
                                            Transferência;</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span class="title ms-5">ACESSO ÀS FICHAS TÉCNICAS E DE SEGURANÇA</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Primeiro deve registar-se no nosso website, fornecendo para o
                                            efeito as informações aí solicitadas. Efetuar o “login” (facultando uma
                                            combinação de e-mail e palavra passe escolhidas pelo Utilizador no ato de
                                            registo). Acesse á página do produto em questão e descarregue as fichas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <span class="title ms-5">PROBLEMAS COM O REGISTO NO SITE</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Caso não consiga completar o seu registo, pode enviar um email para
                                            comercial@eixorientador.com com os seus dados de cliente e facturação, assim
                                            como o numero da Encomenda.</p>
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


    <!-- JS Theme -->
    <script src="js/js.php"></script>

</body>

</html>