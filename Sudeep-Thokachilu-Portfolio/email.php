<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sudeep.r.personal@gmail.com"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    mail($to, $subject, $mailBody, $headers);
}
?>