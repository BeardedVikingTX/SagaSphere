<?php
require_once __DIR__ . '/includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alias = trim($_POST['alias']);
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
        die("Error: Passwords do not match.");
    }

    // Hash password (NZK principle)
    $passwordHash = hash('sha256', $password);

    // Handle avatar upload
    $avatarPath = null;
    if (!empty($_FILES['avatar']['name'])) {
        $safeAlias = preg_replace('/\s+/', '_', strtolower($alias));
        $dir = __DIR__ . "/users/images/avatars/$safeAlias";
        if (!is_dir($dir)) mkdir($dir, 0755, true);
        $avatarPath = "/users/images/avatars/$safeAlias/" . basename($_FILES['avatar']['name']);
        move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . $avatarPath);
    }

    // Check for duplicate alias
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE alias = ?");
    $stmt->execute([$alias]);
    if ($stmt->fetchColumn() > 0) {
        die("Error: Alias already taken. Please choose another.");
    }

    // Insert user with graceful error handling
    try {
        $stmt = $pdo->prepare("INSERT INTO users (alias, email, password_hash, avatar) VALUES (?, ?, ?, ?)");
        $stmt->execute([$alias, $email, $passwordHash, $avatarPath]);

        // Redirect to dashboard
        session_start();
        $_SESSION['user_alias'] = $alias;
        header("Location: /users/dashboard.php");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            die("Error: Duplicate entry detected. Please try a different alias or email.");
        } else {
            die("Database error: " . $e->getMessage());
        }
    }
}
?>
