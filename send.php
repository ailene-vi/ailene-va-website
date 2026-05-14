<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "yourname@gmail.com";
    $subject = "New message from website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    mail($to, $subject, $body);
    echo "Message sent successfully!";
}
?>
