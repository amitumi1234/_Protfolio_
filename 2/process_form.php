<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ibr500037@gmail.com";
    $subject = "New Message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
