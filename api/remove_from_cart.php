<?php
require_once '../auth/db_conn.php';

session_start();


$clientId = $_SESSION['IDC'];
$productId = $_POST['IDP'];

$removeSql = "DELETE FROM cart WHERE IDC = $clientId AND IDP = $productId";
$result = mysqli_query($mysqli, $removeSql);

if ($result) {
    echo json_encode(['success' => true, 'message' => 'Product removed from cart successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to remove product from cart']);
}
?>
