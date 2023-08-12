<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];

    // Create the email content
    $to = "almhymydm99@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission: $subject";
    $message = "Username: $username\n"
        . "Email: $email\n"
        . "Subject: $subject\n\n"
        . "Description:\n$description";

    // Set the headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Form not submitted, redirect back to the form page
    header("Location: index.html"); // Replace with the actual URL of your form page
    exit;
}
?>
