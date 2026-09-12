<?php
session_start();
require_once __DIR__ . '/../includes/database.php';

if (!isset($_SESSION['user_alias'])) {
    header("Location: /../login.php");
    exit;
}

$alias = $_GET['user'] ?? $_SESSION['user_alias'];

// Fetch profile
$stmt = $pdo->prepare("SELECT id, alias, email, avatar, created_at FROM users WHERE alias = ?");
$stmt->execute([$alias]);
$profile = $stmt->fetch();

if (!$profile) die("Profile not found.");

// Check if viewing own profile or connected friend
$isSelf = ($alias === $_SESSION['user_alias']);
$isFriend = false;

if (!$isSelf) {
    $stmt = $pdo->prepare("
        SELECT COUNT(*) FROM connections 
        WHERE ((requester_id = (SELECT id FROM users WHERE alias = ?) AND receiver_id = ?) 
            OR (receiver_id = (SELECT id FROM users WHERE alias = ?) AND requester_id = ?))
        AND status = 'accepted'
    ");
    $stmt->execute([$alias, $profile['id'], $alias, $profile['id']]);
    $isFriend = $stmt->fetchColumn() > 0;
}
?>

<section class="section text-center fade-in">
    <h1><?php echo htmlspecialchars($profile['alias']); ?>'s Profile</h1>
</section>

<section class="section">
    <img src="<?php echo $profile['avatar'] ?: '/users/images/avatars/default.png'; ?>" 
         class="img-fluid rounded-circle mb-3" width="120" alt="Avatar">

    <?php if ($isSelf || $isFriend): ?>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($profile['email']); ?></p>
        <p><strong>Joined:</strong> <?php echo htmlspecialchars($profile['created_at']); ?></p>
    <?php else: ?>
        <p>This profile is locked. Connect to view details.</p>
    <?php endif; ?>
</section>
