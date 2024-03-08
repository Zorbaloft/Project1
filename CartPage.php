<?php
session_start();
include('auth/protect.php');
include('auth\db_conn.php');
include('api/cart.php')
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

    <header>
        <?php require_once("includes/Header.php") ?>

    </header>
    <main>
        <?php
        require_once("includes/StyckyButtons.php")
            ?>


        <div class="container d-lg-flex p-5">
            <div class="row">
                <div class="cart-list-title bg-white p-3 border-bottom text-center col-lg-12">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12"></div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Nome do Produto</p>

                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantidade</p>

                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Total</p>

                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remover</p>

                        </div>
                    </div>
                </div>
                <?php foreach ($cartItems as $cartItem): ?>
                    <div class="cart-single-list shop-item text-center bg-white border col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-md-1 col-12 border-bottom">
                                <img src="img/produtos/<?= $cartItem['productImage'] ?>" class="img-fluid" alt="#">
                            </div>
                            <div class="col-lg-4 col-md-3 col-12  mt-3 mt-md-0">
                                <h5 class="product-name"><a class="text-decoration-none text-black"
                                        href="SingleProduct.php?IDP=<?= $cartItem['productId']; ?>">
                                        <?= $cartItem['productName'] ?>
                                    </a></h5>

                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <strong class="quantity">
                                    <?= $cartItem['quantity'] ?>
                                </strong>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <span class="product-price">
                                    <?= $cartItem['productPrice'] ?>
                                </span><span>€</span>

                            </div>
                            <div class="col-lg-1 col-md-2 col-12">
                                <a class="clear-product" data-id="<?= $cartItem["productId"] ?>"><i
                                        class="fa-solid fa-xmark "></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class=" ms-lg-5 mt-3 mt-lg-0 col-lg-4 bg-white p-4">
                <div class=" ms-3">
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
                    <div class="d-flex justify-content-between">
                        <p class="value">Preço Final:</p>
                        <p class="price">
                            <?= number_format($total, 2); ?> €
                        </p>
                    </div>


                    <div class="d-flex align-items-baseline">
                        <?php
                        if (empty($cartItems)) {
                            echo '<button class="btn btn-outline-primary rounded-pill border mb-3" disabled>Checkout</button>';
                        } else {
                            echo '<a href="Checkout.php" class="btn btn-outline-primary rounded-pill border mb-3">Checkout</a>';
                        }
                        ?>

                        <a href="Shop.php" class="btn btn-outline-primary rounded-pill border btn-md ms-2">Continuar a
                            comprar</a>

                    </div>
                </div>
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


    <script>

    </script>

</body>

</html>