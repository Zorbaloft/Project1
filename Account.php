<?php
session_start();
include('auth/protect.php');
include('auth\db_conn.php');
include('api/cart.php');
include('api/wishlist.php')
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
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-menu overflow-hidden">
                        <ul class="nav nav-pills flex-column m-0 p-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                    role="tab" aria-controls="dashboard" aria-selected="true"><i
                                        class="fa-solid fa-sliders me-3"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                                    aria-controls="orders" aria-selected="false"><i
                                        class="fa-solid fa-bag-shopping  me-3"></i>Pedidos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#wishlist"
                                    role="tab" aria-controls="wishlist" aria-selected="false"><i
                                        class="fa-solid fa-heart me-3"></i>Lista De Desejos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail"
                                    role="tab" aria-controls="account-detail" aria-selected="false"><i
                                        class="fa-solid fa-user me-3"></i>Alterar perfil</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="auth/logout.php"><i
                                        class="fa-solid fa-right-from-bracket  me-3"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content dashboard-content">
                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column align-items-center ">
                                            <div>
                                                <img src="img/imagensMiguel/Fotos_testemunhos/<?= $_SESSION['profile_img']; ?>"
                                                    alt="image" class="img-fluid rounded-circle">
                                            </div>
                                            <h5 class="mt-2">
                                                <?= $_SESSION['nome']; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class=" card-body d-flex flex-column align-items-start">
                                            <h5> Endereço de Faturação:</h5>
                                            <span class="mt-3">Coimbra</span>
                                            <span class="mb-3">Avenida Lingote n-3</span>
                                            <h5>Contactos:</h5>
                                            <p class="m-0">
                                                <?= $_SESSION['email']; ?>
                                            </p>

                                            <p>
                                                Tel:
                                                <?= $_SESSION['numero_telemovel']; ?>
                                            </p>
                                            <a class=" mt-2 text-decoration-none" id="alterarEnderecoButton"
                                                href="">Editar Endereço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Pedidos recentes </h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Pedido</th>
                                                    <th>Data</th>
                                                    <th>Estado</th>
                                                    <th>Total</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $ordersSql = "SELECT * FROM orders WHERE IDC = {$_SESSION['IDC']} ORDER BY data DESC LIMIT 5";
                                                $ordersResult = mysqli_query($mysqli, $ordersSql);
                                                while ($ordersRow = mysqli_fetch_assoc($ordersResult)) {
                                                    $orderId = $ordersRow['IDO'];
                                                    ?>
                                                    <tr>
                                                        <td>#
                                                            <?= $ordersRow['IDO'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $ordersRow['data'] ?>
                                                        </td>

                                                        <td>A Processar...</td>

                                                        <td>
                                                            <?= $ordersRow['value'] ?> €
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1<?= $orderId ?>">
                                                                Ver informação
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <div class="modal fade" id="exampleModal1<?= $orderId ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-body text-start text-black p-4">
                                                                    <h5 class="modal-title text-uppercase mb-5"
                                                                        id="exampleModalLabel">Order #
                                                                        <?= $orderId ?>
                                                                    </h5>


                                                                    <?php
                                                                    $orderItemsSql = "SELECT * FROM order_items WHERE order_id = $orderId";
                                                                    $orderItemsResult = mysqli_query($mysqli, $orderItemsSql);

                                                                    while ($orderItemsRow = mysqli_fetch_assoc($orderItemsResult)) {
                                                                        $productId = $orderItemsRow['product_id'];


                                                                        $productSql = "SELECT * FROM products WHERE IDP = $productId";
                                                                        $productResult = mysqli_query($mysqli, $productSql);

                                                                        if ($productRow = mysqli_fetch_assoc($productResult)) {
                                                                            ?>
                                                                            <div class="d-flex justify-content-between item">
                                                                                <p class="fw-bold mb-0">
                                                                                    <?= $productRow['name'] ?>
                                                                                </p>
                                                                                <p class="text-muted mb-0">
                                                                                    <?= $productRow['price'] ?> €
                                                                                </p>

                                                                            </div>
                                                                            <div>

                                                                            </div>

                                                                            <?php
                                                                        }

                                                                    }
                                                                    $orderSql = "SELECT * FROM orders WHERE IDO = $orderId";
                                                                    $orderResult = mysqli_query($mysqli, $orderSql);

                                                                    if ($orderRow = mysqli_fetch_assoc($orderResult)) {

                                                                        ?>

                                                                        <div
                                                                            class=" d-flex justify-content-between item border-top mt-5">

                                                                            <p class="value">Preço Final:

                                                                            </p>
                                                                            <p class="value">
                                                                                <?= $orderRow['value'] ?>€
                                                                            </p>
                                                                        </div>

                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Os teus pedidos</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Pedido</th>
                                                    <th>Data</th>
                                                    <th>Estado</th>
                                                    <th>Total</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $ordersSql = "SELECT * FROM orders WHERE IDC = {$_SESSION['IDC']}";
                                                $ordersResult = mysqli_query($mysqli, $ordersSql);
                                                while ($ordersRow = mysqli_fetch_assoc($ordersResult)) {
                                                    $orderId = $ordersRow['IDO'];
                                                    ?>
                                                    <tr>
                                                        <td>#
                                                            <?= $ordersRow['IDO'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $ordersRow['data'] ?>
                                                        </td>

                                                        <td>A Processar...</td>

                                                        <td>
                                                            <?= $ordersRow['value'] ?>
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal<?= $orderId ?>">
                                                                Ver informação
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <div class="modal fade" id="exampleModal<?= $orderId ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-body text-start text-black p-4">
                                                                    <h5 class="modal-title text-uppercase mb-5"
                                                                        id="exampleModalLabel">Order #
                                                                        <?= $orderId ?>
                                                                    </h5>
                                                                    <?php
                                                                    $orderItemsSql = "SELECT * FROM order_items WHERE order_id = $orderId";
                                                                    $orderItemsResult = mysqli_query($mysqli, $orderItemsSql);

                                                                    while ($orderItemsRow = mysqli_fetch_assoc($orderItemsResult)) {
                                                                        $productId = $orderItemsRow['product_id'];


                                                                        $productSql = "SELECT * FROM products WHERE IDP = $productId";
                                                                        $productResult = mysqli_query($mysqli, $productSql);

                                                                        if ($productRow = mysqli_fetch_assoc($productResult)) {
                                                                            ?>
                                                                            <div class="d-flex justify-content-between item">
                                                                                <p class="fw-bold mb-0">
                                                                                    <?= $productRow['name'] ?>
                                                                                </p>
                                                                                <p class="text-muted mb-0">
                                                                                    <?= $productRow['price'] ?> €
                                                                                </p>

                                                                            </div>
                                                                            <div>

                                                                            </div>

                                                                            <?php
                                                                        }

                                                                    }
                                                                    $orderSql = "SELECT * FROM orders WHERE IDO = $orderId";
                                                                    $orderResult = mysqli_query($mysqli, $orderSql);

                                                                    if ($orderRow = mysqli_fetch_assoc($orderResult)) {

                                                                        ?>

                                                                        <div
                                                                            class=" d-flex justify-content-between item border-top mt-5">

                                                                            <p class="value">Preço Final:

                                                                            </p>
                                                                            <p class="value">
                                                                                <?= $orderRow['value'] ?>€
                                                                            </p>
                                                                        </div>

                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Lista de Desejos</h5>
                                </div>
                                <div class="card-body contact-from-area">
                                    <div class="container">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><span>Produto</span></th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col"><span>Preço</span></th>
                                                    <th scope="col"><span>Stock status</span></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($wishlistItem = mysqli_fetch_assoc($wishlistResult)) { ?>
                                                    <tr class="align-baseline">

                                                        <td class="w-25">
                                                            <figure>
                                                                <img src="img/produtos/<?= $wishlistItem['thumb'] ?>"
                                                                    class="img-fluid">
                                                            </figure>
                                                        </td>

                                                        <td>
                                                            <span>
                                                                <?= $wishlistItem['name'] ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>$
                                                                <?= $wishlistItem['price'] ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <?php if ($wishlistItem['quantity'] > 0): ?>
                                                                <span class="">
                                                                <span class="text-success">Com Stock</span>
                                                                </span>
                                                            <?php else: ?>
                                                                <span class="text-danger">Out of Stock</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="product.html?id=<?= $wishlistItem['IDP'] ?>"><span>Ver
                                                                    Produto</span></a>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a class="clear-product" data-product-id="<?= $wishlistItem['IDP'] ?>"
                                                                    onclick="removeFromFavorites(<?= $wishlistItem['IDP'] ?>)">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-detail" role="tabpanel"
                            aria-labelledby="account-detail-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Detalhes da conta</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" name="enq" action="api/client_update.php"
                                        class="text-center d-flex flex-column justify-content-center">
                                        <div class="form-group col-md-12 d-flex flex-column align-items-center my-3">
                                            <img src="img/imagensMiguel/Fotos_testemunhos/<?= $_SESSION['profile_img']; ?>"
                                                alt="image" class="img-fluid rounded-circle">
                                            <label class="m-2">Alterar Foto de Perfil:</label>
                                            <input type="file" class="form-control-file" name="profile_image">
                                        </div>
                                        <div class="form-group col-md-12 m-2">
                                            <label>Primeiro Nome</label>
                                            <input class="form-control square" name="name" type="text"
                                                value="<?= $_SESSION['nome']; ?>">
                                        </div>
                                        <div class="form-group col-md-12 m-2">
                                            <label>Último Nome</label>
                                            <input class="form-control square" name="lastname"
                                                value="<?= $_SESSION['ultimo_nome']; ?>">
                                        </div>
                                        <div class="form-group col-md-12 m-2">
                                            <label>Endereço E-mail</label>
                                            <input class="form-control square" name="email" type="email"
                                                value="<?= $_SESSION['email']; ?>">
                                        </div>
                                        <div class="form-group col-md-12 m-2">
                                            <label>Contacto:</label>
                                            <input class="form-control square" name="phone" type="text"
                                                value="<?= $_SESSION['numero_telemovel']; ?>">
                                        </div>
                                        <div class="form-group col-md-12 m-2">
                                            <label>Nova Palavra Passe</label>
                                            <input required="" class="form-control square" name="npassword"
                                                type="password">
                                        </div>
                                        <button type="submit"
                                            class="btn btn-md btn-outline-primary rounded-pill border mt-3"
                                            name="submit" value="Submit">Guardar</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer_area bg-light py-5">
        <?php require_once("includes/footer.php") ?>
    </footer>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- swiper -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- JS Theme -->
    <script src="js/js.php"></script>



</body>

</html>