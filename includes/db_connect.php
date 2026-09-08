<?php
// Database connection for SagaSphere
$host = "localhost";       // or your DB host
$db   = "beardedviking_sagasphere";   // your database name
$user = "beardedviking_admin_bvsec";         // your DB username
$pass = "{f8m*q5bm*Jg^4ZRM&";     // your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
