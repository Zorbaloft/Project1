<div id="shoppingCart" data-bs-scroll="true" class="offcanvas offcanvas-end" aria-modal="true" role="dialog">
    <div class="offcanvas-header fs-4">
        <h4 class="offcanvas-title fw-semibold">Carrinho <span id="cartItemCount">(0)</span></h4>


        <button type="button" class="btn-close btn-close-bg-none" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="offcanvas-cart pb-8 pb-lg-10">
            <?php foreach ($cartItems as $cartItem): ?>
                <div class='shop-item mb-3 p-4 position-relative rounded border'>
                    <div class="d-flex align-items-center">
                        <div class="shop-item-image me-6">
                            <img src="img/produtos/<?= $cartItem['productImage'] ?>" width="60" height="80" alt="">
                        </div>
                        <div class="shop-item-description flex-column d-flex">
                            <p class="item-name fw-500 text-body-emphasis">
                                <?= $cartItem['productName'] ?>
                            </p>
                            <span class="item-price fs-15px  text-body-emphasis ms-2">Quantidade :
                                <?= $cartItem['quantity'] ?>
                            </span>
                            <span class="item-price fs-15px  text-body-emphasis ms-2">Valor Und :
                                <?= $cartItem['productPrice'] ?> €
                            </span>
                        </div>
                        <a class="clear-product" data-id="<?= $cartItem["productId"] ?>"><i
                                class="fa-solid fa-xmark position-absolute"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="offcanvas_footer  ">
        <div class="w-100 d-flex justify-content-between">
            <span class="text-body-emphasis">Preço sem Taxas:</span>
            <p><span class="cart-Subtotal fw-bold text-body-emphasis">
                    <?= number_format($subtotal, 2); ?>
                </span> €</p>
        </div>
        <div class="w-100 d-flex justify-content-between">
            <span class="text-body-emphasis">Preço Final:</span>
            <p><span class="cart-Subtotal fw-bold text-body-emphasis">
                    <?= number_format($total, 2); ?>
                </span> €</p>
        </div>
    </div>
    <div class="row text-center align-items-baseline mb-4">
        <div class="col-6">
            <?php

            if (empty($cartItems)) {
                echo '<button class="btn btn-lg btn-outline-primary rounded-pill border" disabled>Checkout</button>';
            } else {
                echo '<a href="Checkout.php" class="btn btn-lg btn-outline-primary rounded-pill border">Checkout</a>';
            }
            ?>
        </div>
        <div class="col-6">
            <a href="CartPage.php" class="btn btn-lg btn-outline-primary rounded-pill border "
                title="View shopping cart">Ver
                Carrinho</a>
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <form id="search-form_offcanvas" class="text-center flex-row align-items-baseline bg-light rounded-4 w-100"
            action="search.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Procurar produtos"
                    name="search_query" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>



<nav class="navbar navbar-expand-lg d-flex flex-column  ">
    <div class="container-fluid bg-white">

        <div class="row w-100 p-3 border-bottom flex-column justify-content-between flex-md-row  align-items-baseline ">

            <div class="col-lg-3 justify-content-start ">
                <a href="index.php" class="navbar-brand">
                    <img src="img/imagensLogos/logotype.svg" alt="logo" class="img-fluid">
                </a>
            </div>

            <div class="d-lg-none d-flex justify-content-center " id="Navtoggle">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-lg-3 d-none d-lg-flex  flex-row justify-content-center ">

                <form id="search-form" class="text-center flex-row align-items-baseline bg-light rounded-4 w-100"
                    action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Procurar produtos"
                            name="search_query" />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <div class=" col-lg-4 d-flex gap-3 align-items-center mt-4 justify-content-center ">

                <div>
                    <ul class="d-flex justify-content-end list-unstyled m-0" style="align-items: baseline;">
                        <li>
                            <?php
                            if (isset($_SESSION['IDC'])) {
                                echo '<li><a href="Account.php" class=" p-2 mx-1"><i class="fa-regular fa-user"></i></a></li>';
                            } else {
                                echo '<li><a href="includes/Login.php" class=" p-2 mx-1"><i class="fa-regular fa-user"></i></a></li>';
                            }
                            ?>
                        </li>

                        <li>
                            <a href="CartPage.php" class="text-decoration-none">
                                <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1">
                                    <i class="fa-solid fa-cart-shopping p-2 mx-1"></i>
                                </button>
                            </a>
                        </li>

                        <li class="d-lg-none">
                            <a href="#" class=" p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                                aria-controls="offcanvasSearch">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="cart d-none d-lg-flex align-items-center flex-column ">
                    <span>Total do Carrinho</span>
                    <span id="yourBalanceTotal" class="cart-total">
                        <?= number_format($total, 2); ?>
                    </span>
                </div>

                <div class="socials d-none d-lg-block mt-xl-3 me-5 pt-4 h-60">
                    <div class="d-lg-inline d-none me-1">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none">
                                    <i class="fab fa-linkedin"></i>
                                    <span>Linkedin</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="main-menu d-flex w-100 bg-light-subtle">
        <div class="offcanvas offcanvas-end offcanvas-menu " tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-center">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body border-top w-100 justify-content-center">
                <ul class="navbar-nav ">
                    <?php
                    $categorySql = "SELECT * FROM category";
                    $categoryResult = mysqli_query($mysqli, $categorySql);
                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        $categoryIcons = array(
                            5 => 'fa-solid fa-pump-medical',
                            6 => 'fa-solid fa-mask-face',
                            7 => 'fa-solid fa-broom',
                            8 => 'fa-solid fa-dolly',
                            9 => 'fa-solid fa-utensils',
                        );
                        $categoryId = $categoryRow['IDCAT'];
                        $categoryIcon = isset($categoryIcons[$categoryId]) ? $categoryIcons[$categoryId] : 'fa-default-icon';
                        ?>
                        <li class="nav-item mx-5">
                            <a class="nav-link px-2 py-3 p-lg-6 category-link"
                                href="Shop.php?IDCAT=<?= $categoryRow['IDCAT']; ?>" data-catid="<?= $categoryId; ?>">
                                <i class="<?= $categoryIcon; ?> custom-icon " aria-hidden="true"></i>
                                <?= $categoryRow["name"] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>