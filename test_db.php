<?php
$host = '127.0.0.1';
$db   = 'staygrid'; // Your database name
$user = 'root';     // Your database user
$pass = 'root';         // Your database password (update if you have one)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "SUCCESS! Connection established. The driver is working.";
} catch (\PDOException $e) {
     echo "FAILURE: " . $e->getMessage() . "\n";
     echo "Available Drivers: " . implode(', ', PDO::getAvailableDrivers());
}