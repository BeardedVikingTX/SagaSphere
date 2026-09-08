<?php
require_once __DIR__ . '/includes/cookies.php';
require_once __DIR__ . '/db_connect.php'; // Your DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = $_POST['ai_choice'] ?? null;
    $email = $_POST['voter_email'] ?? null;

    if ($choice && $email) {
        // Save vote to database
        $stmt = $pdo->prepare("INSERT INTO votes (ai_choice, voter_email, created_at) VALUES (?, ?, NOW())");
        $stmt->execute([$choice, $email]);

        // Send confirmation email to voter
        mail($email, "SagaSphere Vote Confirmation", "Thank you for voting for $choice in the AI Race!");

        // Send notification to lead engineer
        mail("info@beardedviking.org", "New Vote Cast", "A new vote was cast for $choice by $email.");
    }
    header("Location: thankyou.php");
    exit;
}
?>
