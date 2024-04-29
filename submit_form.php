<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose email message
    $to = "your@email.com"; // Replace with your email address
    $subject = "New message from Cedars Commercial Real Estate website";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: contact.html");
    exit;
}
?>
