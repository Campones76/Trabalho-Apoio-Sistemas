<?php
$host = 'localhost'; // change if needed
$db = 'cleenincubators';
$user = 'Manager'; // change as per your DB credentials
$pass = 'aR1nlrjC0U!BE.34'; // change as per your DB credentials

$conn = new mysqli($host, $user, $pass, $db, null, '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock');
//var_dump($conn);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}