<section>
    <div class="container mb-5 d-none d-md-block" id="Our_products">
        <div class="section-header d-flex flex-wrap justify-content-between my-4">
            <h2 class="section-title">Produtos em Destaque</h2>
            <div class="d-flex align-items-center">
                <a href="Shop.php" class="btn-link text-decoration-none">Ver todos os Produtos →</a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

            <?php



            $sql = "SELECT * FROM products WHERE promote=1";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col p-0">
                    <div class="product-item d-flex flex-column justify-content-between position-relative">
                        <figure class="bg-white">
                            <img src="img/produtos/<?= $row["thumb"] ?>" class="tab-image">
                        </figure>
                        <div class="product-details d-flex w-100 justify-content-between flex-column  ">
                            <span class="product_name text-break">
                                <?= $row["name"] ?>
                            </span>
                            <div class="description d-flex w-100 justify-content-end flex-row-reverse ">
                                <div class="row flex-column ">
                                    <div class="col-12">
                                        <span class="price">
                                            <?= $row["price"] ?> €
                                            <!-- <span class=" discount text-decoration-line-through ms-2">$ <?= $row["discount"] ?? 0 ?></span>-->
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="input-group quantity-controls me-3 w-60 h-50">
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    onclick="changeQuantity(this, -1)">-</button>
                                                <input type="text" class="form-control quantity" value="1"
                                                    data-quantity="1">
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    onclick="changeQuantity(this, 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center ">
                                            <?php if (isset($_SESSION['IDC'])): ?>

                                                <a href="#" class="add-to-cart-button text-end" data-id="<?= $row["IDP"] ?>"
                                                    data-name="<?= $row["name"] ?>" data-price="<?= $row["price"] ?>"
                                                    data-image="img/produtos/<?= $row["thumb"] ?>"
                                                    data-discount="<?= $row["discount"] ?>">
                                                    <i class="fa-solid fa-bag-shopping"></i>
                                                </a>
                                            <?php else: ?>
                                                <a href="#" class="add-to-cart-button" style="display: none;"></a>
                                                <p class="login-message ">Comprar</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-button position-absolute w-100 h-100 rounded">
                                <a href="SingleProduct.php?IDP=<?= $row['IDP']; ?>"
                                    class="quick-view-link text-decoration-none">Ver Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid mb-5 d-block d-md-none" id="Our_products_slider">
        <div class="section-header d-flex flex-wrap justify-content-between my-4">
            <h2 class="section-title">Os nossos produtos</h2>
            <div class="d-flex align-items-center">
                <a href="Shop.php" class="btn-link text-decoration-none">Ver todos os Produtos →</a>
            </div>
        </div>
        <div class="swiper-container overflow-hidden" id="products_slider">
            <div class="swiper-wrapper">
                <?php
                $sql = "SELECT * FROM products WHERE promote=1";
                $result = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="swiper-slide">
                        <div class="product-item d-flex flex-column justify-content-between position-relative">
                            <figure class="bg-white">
                                <img src="img/produtos/<?= $row["thumb"] ?>" class="tab-image">
                            </figure>
                            <div class="product-details d-flex w-100 justify-content-between flex-column  ">
                                <span class="product_name text-break">
                                    <?= $row["name"] ?>
                                </span>
                                <div class="description d-flex w-100 justify-content-end flex-row-reverse ">
                                    <div class="row flex-column ">
                                        <div class="col-12">
                                            <span class="price">
                                                <?= $row["price"] ?> €
                                                <!-- <span class=" discount text-decoration-line-through ms-2">$ <?= $row["discount"] ?? 0 ?></span>-->
                                            </span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="input-group quantity-controls me-3 w-60 h-50">
                                                    <button class="btn btn-sm btn-outline-secondary" type="button"
                                                        onclick="changeQuantity(this, -1)">-</button>
                                                    <input type="text" class="form-control quantity" value="1"
                                                        data-quantity="1">
                                                    <button class="btn btn-sm btn-outline-secondary" type="button"
                                                        onclick="changeQuantity(this, 1)">+</button>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center ">
                                                <?php if (isset($_SESSION['IDC'])): ?>

                                                    <a href="#" class="add-to-cart-button text-end" data-id="<?= $row["IDP"] ?>"
                                                        data-name="<?= $row["name"] ?>" data-price="<?= $row["price"] ?>"
                                                        data-image="img/produtos/<?= $row["thumb"] ?>"
                                                        data-discount="<?= $row["discount"] ?>">
                                                        <i class="fa-solid fa-bag-shopping"></i>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="#" class="add-to-cart-button" style="display: none;"></a>
                                                    <p class="login-message ">Comprar</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-button position-absolute w-100 h-100 rounded">
                                    <a href="SingleProduct.php?IDP=<?= $row['IDP']; ?>"
                                        class="quick-view-link text-decoration-none">Ver Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>