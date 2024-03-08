<?php
session_start();
include('../auth/db_conn.php');



if (isset($_POST['add_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $promote = $_POST['promote'];
    $product_description = $_POST['product_description'];
    $product_image = $_FILES['product_image']['name'];



    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'Por favor, preencha todos os campos';
    } else {

        $insert = "INSERT INTO products (name, price, IDCAT, quantity, promote, thumb, description) VALUES ('$product_name', '$product_price', '$product_category', '$product_quantity', '$promote', '$product_image','$product_description')";
        $upload = mysqli_query($mysqli, $insert);


        if ($upload) {
            $message[] = 'Novo produto adicionado com sucesso';
        } else {
            $message[] = 'Não foi possível adicionar o produto';
        }
    }

}
;

?>

<!DOCTYPE html>
<html lang="pt">
<title>Eixorientador</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- Fontawsome -->
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome-free-6.4.2-web/css/all.css">



    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- CSS Styles and Themes -->
    <link rel="stylesheet" type="text/css" href="../css/css.php">
    <link rel="icon" type="image/x-icon" href="../img\imagensMiguel\Favicon\favicon.ico">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php"><i class="fas fa-home"></i> Ver Web-site</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="admin_page.php" role="button">
                                <i class="fa-solid fa-eye"></i> Ver Produtos
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <p class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> Admin Page
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }

    ?>

    <div class="container-fluid p-5">
        <form class="d-flex flex-column" action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
            enctype="multipart/form-data">
            <h3 class="text-center">Adicionar um novo produto</h3>
            <div class="row g-3 justify-content-center ">
                <div class="col-sm-7">
                    <input type="text" placeholder="Nome do Produto" name="product_name" class="form-control">
                </div>
                <div class="col-sm-7">
                    <input type="number" placeholder="Preco do Produto" name="product_price" class="form-control">
                </div>
                <div class="col-sm-7">
                    <span>Selecionar Categoria</span>
                    <select class="form-select" name="product_category">
                        <?php
                        // Fetch categories from the database
                        $categoriesQuery = mysqli_query($mysqli, "SELECT * FROM category");
                        while ($category = mysqli_fetch_assoc($categoriesQuery)) {
                            ?>
                            <option value="<?php echo $category['IDCAT']; ?>">
                                <?php echo $category['name']; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>

                </div>
                <div class="col-sm-7">
                    <input type="number" placeholder="Quantidade Do Produto" name="product_quantity"
                        class="form-control">
                </div>
                <div class="col-sm-7">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image"
                        class="form-control">
                </div>
                <div class="col-sm-7">
                    <span>Promover?</span>
                    <select name="promote" class="form-select">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
                <div class="col-sm-7">
                    <textarea type="text" placeholder="Breve Descrição" name="product_description"
                        class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary w-50" name="add_product" value="Add Product">
            </div>
        </form>
    </div>



    <footer>
        <?php require_once("../includes/footer.php") ?>
    </footer>
</body>

</html>