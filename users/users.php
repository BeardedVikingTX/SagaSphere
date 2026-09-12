<?php
session_start();
require_once __DIR__ . '/includes/database.php';

if (!isset($_SESSION['user_alias'])) {
    header("Location: /login.php");
    exit;
}

// Fetch all users except self
$stmt = $pdo->prepare("SELECT id, alias, avatar FROM users WHERE alias != ?");
$stmt->execute([$_SESSION['user_alias']]);
$users = $stmt->fetchAll();
?>

<section class="section text-center fade-in">
    <h1>Explore Users</h1>
    <p>Connect with others — but profiles unlock only if both accept.</p>
</section>

<section class="section">
    <div class="row">
        <?php foreach ($users as $user): ?>
            <div class="col-md-4 nexora-card text-center">
                <img src="<?php echo $user['avatar'] ?: '/users/images/avatars/default.png'; ?>" 
                     class="img-fluid rounded-circle mb-2" width="100" alt="Avatar">
                <h3><?php echo htmlspecialchars($user['alias']); ?></h3>
                <form action="send_request.php" method="POST">
                    <input type="hidden" name="receiver_id" value="<?php echo $user['id']; ?>">
                    <button type="submit" class="btn btn-primary sagasphere-btn">
                        <i class="fa-solid fa-user-plus"></i> Connect
                    </button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</section>
