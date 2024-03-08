<?php
require_once '../auth/db_conn.php';
require_once 'cart.php';

session_start();

$clientId = $_SESSION['IDC'];
$cartId = $_SESSION['CART_ID'];

if (!$cartId) {
    echo "Cart ID not found.";
    exit;
}

$orderNumber = rand(1000, 9999);


$sqlInsertOrder = "INSERT INTO orders (IDC, data, state, order_number, shippingcosts ) VALUES ('$clientId', NOW(), 'Processing', '$orderNumber','$portesEnvio')";
$resultInsertOrder = mysqli_query($mysqli, $sqlInsertOrder);

if ($resultInsertOrder) {
    $orderId = mysqli_insert_id($mysqli);
    $totalValue = 0;

    $sqlCart = "SELECT * FROM cart WHERE IDC = $clientId";
    $resultCart = mysqli_query($mysqli, $sqlCart);

    while ($rowCart = mysqli_fetch_assoc($resultCart)) {
        $productId = $rowCart['IDP'];
        $quantity = $rowCart['quantity'];

        $sqlProduct = "SELECT * FROM products WHERE IDP = $productId";
        $resultProduct = mysqli_query($mysqli, $sqlProduct);

        if ($rowProduct = mysqli_fetch_assoc($resultProduct)) {
            $productPrice = $rowProduct['price'];
            $subtotal = $productPrice * $quantity;

            $sqlOrderItems = "INSERT INTO order_items (order_Id, product_Id, quantity, subtotal ) VALUES ('$orderId', '$productId', '$quantity', '$subtotal')";
            mysqli_query($mysqli, $sqlOrderItems);

            $newQuantity = $rowProduct['quantity'] - $quantity;
            $sqlUpdateProductQuantity = "UPDATE products SET quantity = '$newQuantity' WHERE IDP = '$productId'";
            mysqli_query($mysqli, $sqlUpdateProductQuantity);

            $totalValue += $subtotal;
        }
    }

    $sqlClearCart = "DELETE FROM cart WHERE IDC = $clientId";
    mysqli_query($mysqli, $sqlClearCart);

    // Update the order value with the calculated total
    $sqlUpdateOrder = "UPDATE orders SET value = '$totalValue' WHERE IDO = '$orderId'";
    mysqli_query($mysqli, $sqlUpdateOrder);

    header("Location: ../SuccessedOrder.php");
    exit;
} else {
    echo "Failed to place the order.";
}
?>