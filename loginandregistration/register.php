<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if ($password !== $confirm) {
        echo "Passwords do not match!";
        exit;
    }

    // Enregistrement fictif (à remplacer par BDD)
    echo "Account created successfully for $username!";
}
?>
