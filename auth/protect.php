<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['IDC'])) {
    // Envia para a página de login
    header("Location: includes/login.php");
    exit;
}


?>