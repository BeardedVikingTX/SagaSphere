<?php
require_once __DIR__ . '/../includes/cookies.php';
require_once __DIR__ . '/../includes/db_connect.php';

// Get user alias from query string
$userAlias = $_GET['user'] ?? null;
$userAliasSanitized = strtolower(str_replace(' ', '_', $userAlias));

// Fetch user info from database
$stmt = $pdo->prepare("SELECT * FROM users WHERE alias = ?");
$stmt->execute([$userAlias]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$pageTitle = "Dashboard - " . htmlspecialchars($userAlias);
include __DIR__ . '/../includes/header.php';
?>

<section class="section text-center">
    <h1>Welcome, <?php echo htmlspecialchars($user['alias']); ?>!</h1>
    <p>
        This is your SagaSphere dashboard — your personal command deck in the AI Race. 
        From here, you can manage your profile, track your reputation, and explore the 
        evolving social experiment that pits five AI titans against each other.
    </p>
</section>

<!-- Profile Overview -->
<section class="section">
    <h2>Your Profile</h2>
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <?php if ($user['avatar']): ?>
                <img src="<?php echo $user['avatar']; ?>" class="img-fluid floating-img rounded-circle" alt="User Avatar">
            <?php else: ?>
                <img src="/users/images/avatars/default.png" class="img-fluid floating-img rounded-circle" alt="Default Avatar">
            <?php endif; ?>
        </div>
        <div class="col-md-8">
            <p><strong>Alias:</strong> <?php echo htmlspecialchars($user['alias']); ?></p>
            <?php if ($user['email']): ?>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <?php endif; ?>
            <p><strong>Registration Type:</strong> <?php echo ucfirst($user['registration_type']); ?></p>
            <p><strong>Joined:</strong> <?php echo htmlspecialchars($user['created_at']); ?></p>
        </div>
    </div>
</section>

<!-- Reputation & Badges -->
<section class="section text-center">
    <h2>Your Reputation</h2>
    <p>
        As you engage with SagaSphere, you’ll earn badges and reputation points. 
        These mark your journey through the digital cosmos and showcase your contributions 
        to the Viking‑sci‑fi community.
    </p>
    <div class="badge-display">
        <span class="badge bg-primary">Founding User</span>
        <span class="badge bg-success">Explorer</span>
        <span class="badge bg-warning">Contributor</span>
    </div>
</section>

<!-- AI Race Updates -->
<section class="section">
    <h2>AI Race Updates</h2>
    <p>
        SagaSphere is part of a live competition among five AI LLMs: Copilot, Gemini, ChatGPT, Claude, and DeepSeek. 
        Each is building its own social platform, and after six months, the site with the most traffic will be crowned champion. 
        The winner will receive its own domain, dedicated server, enhanced security, founding user roles, and more.
    </p>
    <p>
        Stay tuned here for updates on the race, security testing via HackerOne and BugCrowd, and the future of AI‑driven social media.
    </p>
</section>

<!-- Quick Actions -->
<section class="section text-center">
    <h2>Quick Actions</h2>
    <div class="d-flex justify-content-center gap-3">
        <a href="/users/edit_profile.php?user=<?php echo urlencode($userAliasSanitized); ?>" class="btn btn-outline-light sagasphere-btn">
            <i class="fa-solid fa-user-gear"></i> Edit Profile
        </a>
        <a href="/users/messages.php?user=<?php echo urlencode($userAliasSanitized); ?>" class="btn btn-outline-light sagasphere-btn">
            <i class="fa-solid fa-envelope"></i> Messages
        </a>
        <a href="/users/logout.php" class="btn btn-danger sagasphere-btn">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
