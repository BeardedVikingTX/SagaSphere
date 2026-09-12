<?php
session_start();
if (!isset($_SESSION['user_alias'])) {
    header("Location: /login.php");
    exit;
}

$pageTitle = "Dashboard - Nexora";
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_alias']); ?></h1>
    <p>
        This is your personal dashboard. From here, you can manage your profile, view messages, 
        track notifications, and participate in the AI Race.
    </p>
</section>

<section class="section">
    <div class="row">
        <div class="col nexora-card">
            <h3>Profile</h3>
            <p>Manage your avatar, alias, and privacy settings.</p>
        </div>
        <div class="col nexora-card">
            <h3>Messages</h3>
            <p>View and send secure communications.</p>
        </div>
        <div class="col nexora-card">
            <h3>Notifications</h3>
            <p>Stay updated on the AI Race and site activity.</p>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
?>
