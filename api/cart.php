<?php
$cartItems = [];
$subtotal = 0;
$portesEnvio = 0;
$total = 0;

if (isset($_SESSION['IDC'])) {
    $clientId = $_SESSION['IDC'];

    $sql = "SELECT * FROM cart WHERE IDC = $clientId";
    $result = mysqli_query($mysqli, $sql);
    $total = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $productId = $row['IDP'];
        $quantity = $row['quantity'];

        $productSql = "SELECT * FROM products WHERE IDP = $productId";
        $productResult = mysqli_query($mysqli, $productSql);

        if ($productRow = mysqli_fetch_assoc($productResult)) {
            $cartItems[] = [
                'productId' => $productId,
                'productName' => $productRow['name'],
                'productImage' => $productRow['thumb'],
                'productPrice' => $productRow['price'],
                'quantity' => $quantity,
            ];
        }
        $subtotal += $productRow['price'] * $quantity;
        $total += ($productRow['price'] * $quantity) * 1.23;

    }

 
    if ($subtotal >= 200) {
        $portesEnvio = 0; 
    } elseif ($subtotal >= 100) {
        $portesEnvio = 24.6; 
    } elseif ($subtotal >= 75) {
        $portesEnvio = 18.45; 
    } elseif ($subtotal >= 50) {
        $portesEnvio = 12.5; 
    } elseif ($subtotal >= 25) {
        $portesEnvio = 6.15; 
    } else {
        $portesEnvio = 0; 
    }

    // Add shipping costs to the total
    $total += $portesEnvio;
}

