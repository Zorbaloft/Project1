<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('db_conn.php');

    // Obter dados para o formulário
    $primeiroNome = $mysqli->real_escape_string($_POST['reg-fn']);
    $ultimoNome = $mysqli->real_escape_string($_POST['reg-ln']);
    $email = $mysqli->real_escape_string($_POST['reg-email']);
    $numeroTelemovel = $mysqli->real_escape_string($_POST['reg-phone']);
    $password = $mysqli->real_escape_string(($_POST['reg-pass'])); // Hash da senha

    $sql = "INSERT INTO client (nome, ultimo_nome, email, password , numero_telemovel) 
            VALUES ('$primeiroNome', '$ultimoNome', '$email', '$password' ,'$numeroTelemovel' )";

    // Executar a query
    if ($mysqli->query($sql)) {
        echo "Registro bem-sucedido!";
        header("Location: ../includes/Login.php");
        exit;
    } else {
        echo "Erro ao registrar: " . $mysqli->error;
    }

}
?>
