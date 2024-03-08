<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["form_type"]) && $_POST["form_type"] == "first_form") {
      
        $email = $_POST["email"];
        $message = $_POST["message"];

   

        $content = "Email: $email\n\nMessage:\n$message";

        file_put_contents("form-submission-email.txt", $content);

        header("Location: ../ThankYou.php");
        exit();
    } elseif (isset($_POST["form_type"]) && $_POST["form_type"] == "second_form") {
      
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];



        $content = "Name: $name\nSubject: $subject\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

        file_put_contents("form-submission-contact.txt", $content);

        header("Location: ../ThankYou.php");
        exit();
    }
}
?>