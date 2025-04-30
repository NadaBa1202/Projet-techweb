<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields.";
    } else {
        // Example: Save to database or send email
        echo "Thank you for your message, $name!";
    }
} else {
    echo "Invalid request.";
}
?>
