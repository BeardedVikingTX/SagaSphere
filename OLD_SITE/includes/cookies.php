<?php
// Start secure session
if (session_status() === PHP_SESSION_NONE) {

    // Force secure cookie parameters
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => true,        // HTTPS ONLY
        'httponly' => true,      // JS cannot access
        'samesite' => 'Strict'   // Prevent CSRF
    ]);

    session_start();
}

// Generate a session token if missing
if (!isset($_SESSION['sagasphere_token'])) {
    $_SESSION['sagasphere_token'] = hash(
        'sha256',
        bin2hex(random_bytes(32)) . microtime(true)
    );
}

// Optional: regenerate session ID periodically
if (!isset($_SESSION['last_regen'])) {
    $_SESSION['last_regen'] = time();
} elseif (time() - $_SESSION['last_regen'] > 900) { // 15 minutes
    session_regenerate_id(true);
    $_SESSION['last_regen'] = time();
}
?>
