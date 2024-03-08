<?php
include(__DIR__ . '/../auth/db_conn.php');

if (session_status() == PHP_SESSION_NONE) {

    session_start();
}

$user_id = $_SESSION['IDC'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['add_to_favorites'])) {
        $product_id = $_POST['product_id'];


        $checkUserQuery = "SELECT IDC FROM client WHERE IDC = '$user_id'";
        $result = $mysqli->query($checkUserQuery);

        if ($result->num_rows > 0) {

            $query = "INSERT INTO wishlist (client_id, product_id) VALUES ('$user_id', '$product_id')";
            $mysqli->query($query);
        } else {

            echo "User does not exist!";
        }
    }

    if (isset($_POST['remove_from_favorites'])) {
        $product_id = $_POST['product_id'];


        $query = "DELETE FROM wishlist WHERE client_id = '$user_id' AND product_id = '$product_id'";
        $mysqli->query($query);
    }
}

$wishlistSql = "SELECT products.*, wishlist.client_id
                FROM wishlist
                JOIN products ON wishlist.product_id = products.IDP
                WHERE wishlist.client_id = '$user_id'";


$wishlistResult = mysqli_query($mysqli, $wishlistSql);


