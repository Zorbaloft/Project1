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
        <?php
        if (isset($_GET['IDP']) & !empty($_GET['IDP'])) {
            $id = $_GET['IDP'];
            $productSql = "SELECT * FROM products WHERE IDP=$id";
            $productResult = mysqli_query($mysqli, $productSql);
            $productData = mysqli_fetch_assoc($productResult);
        }
        ?>
   
            <div class="container">
                <div class="product_area  bg-white">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-6 col-md-12 col-12 text-center">
                            <img src="img/produtos/<?= $productData["thumb"] ?>" class="img-fluid" data-capacity="0.75">
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 ">
                            <div class="product-info p-5">
                                <h2 class="title">
                                    <?= $productData["name"] ?>
                                </h2>
                                <span class="price">
                                    <?= $productData["price"] ?> €
                                </span>
                                <p class="info-text">
                                    <?= $productData["description"] ?>
                                </p>
                                <div class="row align-items-center product-details">
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="input-group quantity-controls me-3 w-60 h-50">
                                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                            onclick="changeQuantity(this, -1)">-</button>
                                            <input type="text" class="form-control quantity" value="1"data-quantity="1">
                                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                            onclick="changeQuantity(this, 1)">+</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <?php if (isset($_SESSION['IDC'])): ?>
                                        <button href="#" class="add-to-cart-button btn btn-outline-primary rounded-pill border btn-md" 
                                            data-id="<?= $productData["IDP"] ?>"
                                            data-name="<?= $productData["name"] ?>" data-price="<?= $productData["price"] ?>"
                                            data-image="img/produtos/<?= $productData["thumb"] ?>"
                                            data-discount="<?= $productData["discount"] ?>"> Adicionar ao carrinho
                                            </button>
                                            <?php else: ?>
                                                <a href="#" class="add-to-cart-button" style="display: none;"></a>
                                                <p class="login-message">Comprar</p>
                                            <?php endif; ?>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <button data-bs-toggle="modal" onclick="addToFavorites(<?= $productData['IDP'] ?>)" data-bs-target="#AddFavModal"
                                            class="btn btn-outline-primary rounded-pill border btn-md">
                                                Adicionar aos Favoritos
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-info my-4">
                    <div class="row bg-white p-4">
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                 <h4>Detalhes :</h4>
                                <p>Os produtos de limpeza que oferecemos são meticulosamente selecionados,
                                        destacando-se pelos detalhes que fazem a diferença.
                                        Desde fórmulas avançadas que removem sujeira e germes até embalagens inovadoras
                                        que facilitam a aplicação,
                                        cada item é pensado para otimizar a experiência de limpeza. A atenção aos
                                        detalhes se reflete na eficácia
                                        de nossos produtos, proporcionando resultados superiores e ambientes impecáveis.
                                        Garantimos soluções que não apenas limpam, mas também elevam os padrões de
                                        higiene.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                             <div class="info-body">
                                <h4>Especificações :</h4>
                                <ul class="list-unstyled">
                                    <li><span>Referência:</span> 118.1234</li>
                                    <li><span>Peso:</span> 35.5oz (1006g)</li>
                                    <li><span class="mr-5">Ficha Técnica:</span> <i
                                                class="fa-solid fa-download"></i></li>
                                    <li><span class="mr-5">Ficha de segurança: </span> <i
                                                class="fa-solid fa-download"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Fim dos Detalhes -->


        <div class="modal fade" id="AddFavModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start text-black p-4">
                        <h4 class="mb-5">Produto Adicionado aos Favoritos</h4>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <?php require_once("includes/StyckyButtons.php") ?>
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