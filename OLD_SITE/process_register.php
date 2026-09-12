<?php
require_once __DIR__ . '/includes/cookies.php';
require_once __DIR__ . '/includes/db_connect.php'; // Ensure this file is set up correctly

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registrationType = $_POST['registration_type'] ?? null;
    $alias            = trim($_POST['alias'] ?? '');
    $aliasSanitized   = strtolower(str_replace(' ', '_', $alias));
    $password         = $_POST['password'] ?? '';
    $confirmPassword  = $_POST['confirm_password'] ?? '';
    $firstName        = $_POST['first_name'] ?? null;
    $lastName         = $_POST['last_name'] ?? null;
    $email            = $_POST['email'] ?? null;

    // Validate required fields
    if (!$alias || !$password || $password !== $confirmPassword) {
        die("Error: Missing fields or passwords do not match.");
    }

    // Encrypt password
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Handle avatar upload
    $avatarPath = null;
    if (!empty($_FILES['avatar']['name'])) {
        $uploadDir = __DIR__ . "/users/images/avatars/$aliasSanitized/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $avatarFile = $uploadDir . basename($_FILES['avatar']['name']);
        move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarFile);
        $avatarPath = "/users/images/avatars/$aliasSanitized/" . basename($_FILES['avatar']['name']);
    }

    // Create banner directory
    $bannerDir = __DIR__ . "/users/images/banners/$aliasSanitized/";
    if (!is_dir($bannerDir)) {
        mkdir($bannerDir, 0755, true);
    }

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO users 
        (first_name, last_name, alias, email, password_hash, avatar, banner, registration_type) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $firstName,
        $lastName,
        $alias,
        $email,
        $passwordHash,
        $avatarPath,
        null,
        $registrationType
    ]);

    // Send confirmation email (if email provided)
    if ($email) {
        $subject = "Welcome to SagaSphere!";
        $message = "Greetings $alias,\n\nWelcome to SagaSphere! Your account has been successfully created.\n\nForge your saga in the digital realm.\n\n- The Bearded Viking";
        $headers = "From: info@beardedviking.org\r\n";
        mail($email, $subject, $message, $headers);
    }

    // Redirect to dashboard
    header("Location: /users/dashboard.php?user=" . urlencode($aliasSanitized));
    exit;
}
?>
