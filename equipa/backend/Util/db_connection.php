<?php
$host = 'localhost'; // change if needed
$db = 'cleenincubators';
$user = 'Manager'; // change as per your DB credentials
$pass = 'aR1nlrjC0U!BE.34'; // change as per your DB credentials

try {
    // Set DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    // Create PDO instance
    $conn = new PDO($dsn, $user, $pass);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, check if the connection is successful
    echo "Connected successfully";
}
catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
