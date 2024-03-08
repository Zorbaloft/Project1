<?php
require_once '../auth/db_conn.php';

session_start();

if (!isset($_SESSION['IDC'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$clientId = $_SESSION['IDC'];
$productId = $_POST['IDP'];
$quantity = max(1, $_POST['quantity']);

// Check if the product is already in the cart
$existingCartSql = "SELECT * FROM cart WHERE IDC = $clientId AND IDP = $productId";
$existingCartResult = mysqli_query($mysqli, $existingCartSql);

if (mysqli_num_rows($existingCartResult) > 0) {
    // If the product is already in the cart, update the quantity
    $updateSql = "UPDATE cart SET quantity = $quantity WHERE IDC = $clientId AND IDP = $productId";
    $result = mysqli_query($mysqli, $updateSql);
} else {
    // If the product is not in the cart, insert a new entry
    $insertSql = "INSERT INTO cart (IDC, IDP, quantity) VALUES ('$clientId', '$productId', '$quantity')";
    $result = mysqli_query($mysqli, $insertSql);
}

if ($result) {
    $cartId = mysqli_insert_id($mysqli);
    $_SESSION['CART_ID'] = $cartId;
    echo json_encode(['success' => true, 'message' => 'Product added to cart successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update cart']);
}

?>