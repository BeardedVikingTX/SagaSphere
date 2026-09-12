<?php
require_once __DIR__ . '/includes/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alias = trim($_POST['alias']);
    $password = $_POST['password'];
    $passwordHash = hash('sha256', $password);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE alias = ? AND password_hash = ?");
    $stmt->execute([$alias, $passwordHash]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_alias'] = $user['alias'];
        header("Location: /users/dashboard.php");
        exit;
    } else {
        die("Invalid login credentials.");
    }
}
?>
