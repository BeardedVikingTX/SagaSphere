<?php
require_once __DIR__ . '/includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Build email
    $to      = "info@beardedviking.org";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $htmlMessage = "
        <html>
        <body style='font-family:Inter, sans-serif;'>
            <h2 style='color:#00ffe7;'>New Transmission Received</h2>
            <p><strong>From:</strong> $name ($email)</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
            <hr>
            <p style='font-size:12px;color:#888;'>This message was sent via Nexora Contact Form.</p>
        </body>
        </html>
    ";

    // Send email
    mail($to, "Nexora Contact: $subject", $htmlMessage, $headers);

    // Log submission to DB
    $ipHash = hash('sha256', $_SERVER['REMOTE_ADDR']);
    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions (full_name, email, subject, message, ip_hash, created_at)
        VALUES (?, ?, ?, ?, ?, NOW())
    ");
    $stmt->execute([$name, $email, $subject, $message, $ipHash]);

    // Redirect to thank you page
    header("Location: thankyou.php");
    exit;
}
?>
