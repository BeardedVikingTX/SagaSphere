<?php
require_once __DIR__ . '/config.php';

$env = parse_ini_file(__DIR__ . '/../.env', true);

if ($env === false) {
    die("Error: Unable to parse .env file. Check syntax.");
}

$dbHost = $env['DB_HOST'] ?? 'localhost';
$dbName = $env['DB_NAME'] ?? '';
$dbUser = $env['DB_USER'] ?? '';
$dbPass = $env['DB_PASS'] ?? '';

try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
