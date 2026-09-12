<?php
session_start();
require_once __DIR__ . '/includes/database.php';

if (!isset($_SESSION['user_alias'])) {
    header("Location: /login.php");
    exit;
}

// Get logged-in user ID
$stmt = $pdo->prepare("SELECT id FROM users WHERE alias = ?");
$stmt->execute([$_SESSION['user_alias']]);
$userId = $stmt->fetchColumn();

// Fetch pending connection requests
$stmt = $pdo->prepare("
    SELECT c.id, u.alias, u.avatar 
    FROM connections c 
    JOIN users u ON c.requester_id = u.id 
    WHERE c.receiver_id = ? AND c.status = 'pending'
");
$stmt->execute([$userId]);
$requests = $stmt->fetchAll();
?>

<section class="section text-center fade-in">
    <h1>Notifications</h1>
</section>

<section class="section">
    <h2>Connection Requests</h2>
    <?php foreach ($requests as $req): ?>
        <div class="nexora-card mb-3">
            <img src="<?php echo $req['avatar'] ?: '/users/images/avatars/default.png'; ?>" 
                 class="img-fluid rounded-circle" width="60" alt="Avatar">
            <strong><?php echo htmlspecialchars($req['alias']); ?></strong>
            <form action="handle_request.php" method="POST" class="d-inline">
                <input type="hidden" name="connection_id" value="<?php echo $req['id']; ?>">
                <button type="submit" name="action" value="accept" class="btn btn-success btn-sm">Accept</button>
                <button type="submit" name="action" value="deny" class="btn btn-danger btn-sm">Deny</button>
            </form>
        </div>
    <?php endforeach; ?>
</section>
