<?php
include('../auth/db_conn.php');
session_start();

if (isset($_POST['submit'])) {

    $name = $mysqli->real_escape_string($_POST['name']);
    $lastname = $mysqli->real_escape_string($_POST['lastname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $npassword = $mysqli->real_escape_string($_POST['npassword']);

    $updateQuery = "UPDATE client SET 
                    nome = '$name', 
                    ultimo_nome = '$lastname', 
                    email = '$email', 
                    numero_telemovel = '$phone'";

    if (!empty($npassword)) {
        $updateQuery .= ", password = '$npassword'";
    }

    $updateQuery .= " WHERE IDC = " . $_SESSION['IDC'];

    $result = $mysqli->query($updateQuery);

    if (!$result) {
        die("Falha na atualização dos detalhes do utilizador: " . $mysqli->error);
    }

    $_SESSION['nome'] = $name;
    $_SESSION['ultimo_nome'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['numero_telemovel'] = $phone;
    
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {
        $uploadDir = "img/imagensMiguel/Fotos_testemunhos/";
        $uploadFile = $uploadDir . basename($_FILES['profile_image']['name']);

        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadFile)) {
            $profileImage = $_FILES['profile_image']['name'];
            $mysqli->query("UPDATE client SET profile_img = '$profileImage' WHERE IDC = " . $_SESSION['IDC']);
            $_SESSION['profile_img'] = $profileImage;
        } else {
            echo "Falha ao fazer upload da imagem de perfil.";
        }
    }


    header("Location: ../Account.php");
    exit;
}
?>