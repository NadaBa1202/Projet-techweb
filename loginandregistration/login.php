<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simulation
    if ($username === "admin" && $password === "1234") {
        echo "Welcome back, $username!";
    } else {
        echo "Invalid credentials!";
    }
}
?>

