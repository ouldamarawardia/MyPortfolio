<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ouldamara.ouardia@gmail.com";
    $subject = $_POST["subject"];
    $message = "Name: " . $_POST["fname"] . " " . $_POST["lname"] . "\r\n";
    $message .= "Email: " . $_POST["email"] . "\r\n";
    $message .= "Message: " . $_POST["message"];

    $headers = "From: " . $_POST["email"];

    mail($to, $subject, $message, $headers);

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: confirmation.html");
}
?>
