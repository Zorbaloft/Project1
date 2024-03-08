<?php
session_start();
include('../auth/db_conn.php');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($mysqli, "DELETE FROM products WHERE IDP = $id");


    $_SESSION['success_message'] = 'Produto removido com sucesso!';

    header('location:admin_page.php');
    exit();
}
$produtosPorPagina = 6;
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

$inicio = ($paginaAtual - 1) * $produtosPorPagina;

$select = mysqli_query($mysqli, "SELECT products.*, category.name AS category_name FROM products LEFT JOIN category ON products.IDCAT = category.IDCAT LIMIT $inicio, $produtosPorPagina");
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
                            <a class="nav-link " href="add_product.php" role="button">
                                <i class="fas fa-list-alt"></i> Adicionar Produto
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





    <h2 class="text-center mt-4">Todos os Produtos</h2>
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
    ?>

    <div class="container p-5">
        <div class="container mt-4 table-responsive w-75">
            <table class="table table-bordered table-striped-columns">
                <thead class="text-center">
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                    <tr>
                        <td class="w-25"><img src="../img/produtos/<?= $row["thumb"] ?>" class="img-fluid" alt=""></td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['price']; ?> €
                        </td>
                        <td>
                            <?php echo $row['category_name']; ?>
                        </td>
                        <td class="text-center">
                            <a href="update.php?edit=<?php echo $row['IDP']; ?>"
                                class="btn btn-primary rounded-pill border me-2 mt-2 ">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="admin_page.php?delete=<?php echo $row['IDP']; ?>"
                                class="btn btn-danger rounded-pill border mt-2">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <!-- Paginação -->
            <div class="pagination mt-4">
                <?php
                // Consulta para contar o total de produtos
                $totalProdutos = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM products"));
                $totalPaginas = ceil($totalProdutos / $produtosPorPagina);
                ?>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <?php
                        for ($i = 1; $i <= $totalPaginas; $i++) {
                            ?>
                            <li class="page-item <?= $i == $paginaAtual ? 'active' : ''; ?>">
                                <a class="page-link" href='?pagina=<?= $i ?>' class='btn btn-outline-primary'>
                                    <?= $i ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <footer>
        <?php require_once("../includes/footer.php") ?>
    </footer>
</body>

</html>