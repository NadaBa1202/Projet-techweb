<?php
// Replace with your actual database credentials
$host = 'localhost';
$dbname = 'travel_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve destination from GET or POST
    $destination = $_GET['destination'] ?? $_POST['destination'] ?? '';

    // Fetch matching companions
    $stmt = $pdo->prepare("SELECT name, message, email FROM companions WHERE LOWER(destination) = LOWER(:destination)");
    $stmt->execute(['destination' => $destination]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>