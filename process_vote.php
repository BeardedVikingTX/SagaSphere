<?php
require_once __DIR__ . '/includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aiChoice = $_POST['ai_choice'] ?? null;
    $voterEmail = filter_var($_POST['voter_email'], FILTER_SANITIZE_EMAIL);

    if (!$aiChoice || !$voterEmail) {
        die("Error: Missing vote data.");
    }

    // Insert vote into DB
    $stmt = $pdo->prepare("INSERT INTO votes (ai_choice, voter_email, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$aiChoice, $voterEmail]);

    // Send confirmation email
    $subject = "Nexora Vote Confirmation";
    $message = "Greetings Viking,\n\nYou have successfully voted for: $aiChoice.\n\nYour voice matters in the AI Race!\n\n- Nexora Team";
    $headers = "From: info@beardedviking.org\r\n";
    mail($voterEmail, $subject, $message, $headers);

    // Notify lead engineer
    mail("info@beardedviking.org", "New Vote Cast", "A new vote was cast for: $aiChoice by $voterEmail", $headers);

    // Redirect to thank you
    header("Location: thankyou.php");
    exit;
}
?>
