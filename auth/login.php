<?php
include('db_conn.php');

if (isset($_POST['email']) || isset($_POST['password'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha o seu e-mail";
    } else if (strlen($_POST['password']) == 0) {
        echo "Preencha a sua password";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $user = $sql_query->fetch_assoc();

            session_start();

            $_SESSION['IDC'] = $user['IDC'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['ultimo_nome'] = $user['ultimo_nome'];
            $_SESSION['numero_telemovel'] = $user['numero_telemovel'];
            $_SESSION['isMaster'] = $user['Master'];
            $_SESSION['profile_img'] = $user['profile_img'];

            header("Location: ../Account.php");
            exit;
        } else {
            echo "Falha ao logar! E-mail ou password incorretos";
        }

    }

}



