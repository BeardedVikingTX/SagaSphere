<?php
require_once __DIR__ . '/database.php';

// Secure session configuration
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

// Generate session token
if (!isset($_SESSION['nexora_token'])) {
    $_SESSION['nexora_token'] = bin2hex(random_bytes(32));
}

// Telemetry Logging (NZK-aligned)
$ipHash = hash('sha256', $_SERVER['REMOTE_ADDR']);
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$referer = $_SERVER['HTTP_REFERER'] ?? null;

$stmt = $pdo->prepare("
    INSERT INTO telemetry_logs (ip_hash, user_agent_category, request_uri, referer, created_at)
    VALUES (?, ?, ?, ?, NOW())
");

$userAgentCategory = (preg_match('/bot|crawl|spider/i', $userAgent)) ? 'Bot' : 'Standard Browser';

$stmt->execute([$ipHash, $userAgentCategory, $requestUri, $referer]);
?>
