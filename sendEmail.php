<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "yanggu@kean.edu"; 
 
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Your message has been sent successfully.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}
?>
