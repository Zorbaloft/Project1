<?php
session_start();
include('../auth/db_conn.php');

if (!isset($_GET['edit'])) {
    header('location: admin_page.php');
    exit();
}

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $promote = $_POST['promote'];
    $product_description = $_POST['product_description'];

    if (!empty($_FILES['product_image']['name'])) {
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = '../img/produtos/' . $product_image;


        if (move_uploaded_file($product_image_tmp_name, $product_image_folder)) {

            $update_data = "UPDATE products SET name='$product_name', price='$product_price', IDCAT='$product_category', quantity='$product_quantity', promote='$promote', thumb='$product_image', description='$product_description' WHERE IDP = '$id'";
            $upload = mysqli_query($mysqli, $update_data);

            if ($upload) {
                header('location: admin_page.php');
                exit();
            } else {
                $message[] = 'Error updating product in the database.';
            }
        } else {
            $message[] = 'Failed to upload the image file.';
        }
    } else {

        $update_data = "UPDATE products SET name='$product_name', price='$product_price', IDCAT='$product_category', quantity='$product_quantity', promote='$promote', description='$product_description' WHERE IDP = '$id'";
        $upload = mysqli_query($mysqli, $update_data);

        if ($upload) {
            header('location: admin_page.php');
            exit();
        } else {
            $message[] = 'Error updating product in the database.';
        }
    }
}
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

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
    ?>
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
    <h3 class="text-center mt-4">Editar Produto</h3>
    <div class="container-fluid p-5 d-flex justify-content-center">
        <?php
        $select = mysqli_query($mysqli, "SELECT * FROM products WHERE IDP = '$id'");
        while ($row = mysqli_fetch_assoc($select)) {
            ?>
            <form class=" card  d-flex text-center flex-column w-75" action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
                enctype="multipart/form-data">

                <div class="card-body">
                    <div class="row g-3 justify-content-center ">
                        <div class="col-sm-7">
                            <span>Nome: </span>
                            <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>"
                                placeholder="enter the product name">
                        </div>
                        <div class="col-sm-7">
                            <span>Preço: </span>
                            <input type="number" min="0" class="box" name="product_price"
                                value="<?php echo $row['price']; ?>" placeholder="enter the product price">
                        </div>
                        <div class="col-sm-7 ">
                            <span>Imagem: </span>
                            <input type="file" class="box " name="product_image" accept="image/png, image/jpeg, image/jpg">
                        </div>
                        <div class="col-sm-6">
                            <span>Categoria: </span>
                            <select class="form-select text-center" name="product_category">
                                <?php
                                // Fetch categories from the database
                                $categoriesQuery = mysqli_query($mysqli, "SELECT * FROM category");
                                while ($category = mysqli_fetch_assoc($categoriesQuery)) {
                                    ?>
                                    <option value="<?php echo $category['IDCAT']; ?>" <?php echo ($row['IDCAT'] == $category['IDCAT']) ? 'selected' : ''; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-7">
                            <span>Quantidade: </span>
                            <input type="number" min="0" class="box" name="product_quantity"
                                value="<?php echo $row['quantity']; ?>" placeholder="Enter the product quantity">
                        </div>
                        <div class="col-sm-6">
                            <span>Promover? </span>
                            <select class="form-select text-center" name="promote">
                                <option value="1" <?php echo ($row['promote'] == 1) ? 'selected' : ''; ?>>Yes</option>
                                <option value="0" <?php echo ($row['promote'] == 0) ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>
                        <div class="col-sm-7">
                            <span>Descrição: </span>
                            <textarea class="box" name="product_description"
                                placeholder="Enter the product description"><?php echo $row['description']; ?></textarea>
                        </div>
                        <div class="d-flex flex-column w-50 gap-3">
                            <input type="submit" value="Atualizar produto" name="update_product"
                                class="btn btn-outline-primary">
                            <a href="admin_page.php" class="btn btn-outline-primary">Voltar!</a>
                        </div>
                    </div>
                </div>
            </form>
        <?php }
        ; ?>
    </div>
    <footer>
        <?php require_once("../includes/footer.php") ?>
    </footer>

</body>

</html>