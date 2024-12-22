<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

function sendEmail($to, $subject, $message, $fromName, $fromEmail) {
    // Set the headers
    $headers = "From: $fromName <$fromEmail>\r\n";
    $headers .= "Reply-To: $fromEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Define the recipient and subject
    $to = "chandabreagan@gmail.com";
    $subject = "New Message from codenetdevelopers website";

    // Build the email content
    $emailContent = "Full Name: $fullname\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Message:\n$message\n";

    // Send the email
    if (sendEmail($to, $subject, $emailContent, $fullname, $email)) {
        echo '<h1>Message Sent Successfully!</h1>';
        echo '<p>Your message has been sent to chandabreagan@gmail.com.</p>';
    } else {
        echo '<h1>Error</h1>';
        echo '<p>Message could not be sent. Please try again later.</p>';
    }
} else {
    echo '<h1>Invalid Request</h1>';
}
?>
