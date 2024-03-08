<?php
session_start();
include('auth/db_conn.php');
include('api/cart.php');

$searchQuery = isset($_GET['search_query']) ? $_GET['search_query'] : '';

// Query your database based on the search query and display the results accordingly

// Example query:
if (!empty($searchQuery)) {
    $sql = "SELECT * FROM products WHERE name LIKE '%$searchQuery%'";
    $search = mysqli_query($mysqli, $sql);
} else {
    $search = false; // No search query, set $result to false
}
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

    <section>
        <div class="container-fluid p-5">
            <div class="d-sm-flex align-items-center border-bottom mb-4 ">
                <?php
                if (isset($_GET['IDCAT'])) {
                    $selectedCategoryId = $_GET['IDCAT'];
                    $categorySql = "SELECT * FROM category WHERE IDCAT = $selectedCategoryId";
                    $categoryResult = mysqli_query($mysqli, $categorySql);
                    if ($categoryResult && $categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        echo '<h2>' . $categoryRow["name"] . '</h2>';
                    } else {

                        echo '<h2>Categoria não encontrada</h2>';
                    }
                } else {

                    echo '<h2>Todos os produtos</h2>';
                }
                ?>
            </div>
            <div class="row">
                <?php
                if ($search !== false && mysqli_num_rows($search) > 0) {
                    while ($row = mysqli_fetch_assoc($search)) {
                        ?>
                        <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 d-flex mt-2">
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
                                                <div class="col-6">
                                                    <div class="input-group quantity-controls me-3 w-60 h-50">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button"
                                                            onclick="changeQuantity(this, -1)">-</button>
                                                        <input type="text" class="form-control quantity" value="1"
                                                            data-quantity="1">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button"
                                                            onclick="changeQuantity(this, 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-center ">
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
                } elseif (empty($searchQuery)) {

                    if (isset($_GET['subcat_id']) && !empty($_GET['subcat_id'])) {
                        $subcat_id = $_GET['subcat_id'];
                        $sql = "SELECT * FROM products WHERE subcat_id = $subcat_id";
                    } else {
                        $sql = "SELECT * FROM products";
                        if (isset($_GET['IDCAT']) && !empty($_GET['IDCAT'])) {
                            $idcat = $_GET['IDCAT'];
                            $sql .= " WHERE IDCAT = $idcat";
                        }
                    }

                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 d-flex mt-2">
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
                                                <div class="col-6">
                                                    <div class="input-group quantity-controls me-3 w-60 h-50">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button"
                                                            onclick="changeQuantity(this, -1)">-</button>
                                                        <input type="text" class="form-control quantity" value="1"
                                                            data-quantity="1">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button"
                                                            onclick="changeQuantity(this, 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-center ">
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

                } else {
                    // Display a message when no products are found for the search query
                    echo '<h3 class="text-center">Produto não encontrado ou Inexistente.</h3>';
                }
                ?>

            </div>
            <hr />

        </div>
    </section>

    <?php require_once("includes/StyckyButtons.php") ?>
    <footer class="footer_area bg-light py-5">
        <?php require_once("includes/footer.php") ?>
    </footer>

    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- swiper -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <script src="js/js.php"></script>
</body>

</html>