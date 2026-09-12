<?php
// Nexora Navigation System — Enhanced by Copilot

?>

<nav class="navbar navbar-expand-lg navbar-dark nexora-nav">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="/index.php">
            <i class="fa-solid fa-meteor me-2" style="color:#00ffe7;"></i>
            <span style="font-family:'Orbitron'; font-size:1.3rem;">NEXORA</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nexoraNav" aria-controls="nexoraNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="nexoraNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- Public Pages -->
                <li class="nav-item">
                    <a class="nav-link" href="/index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php"><i class="fa-solid fa-circle-info me-1"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php"><i class="fa-solid fa-envelope me-1"></i> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vote.php"><i class="fa-solid fa-vote-yea me-1"></i> Vote</a>
                </li>

                <!-- Guest Mode -->
                <?php if (!isset($_SESSION['user_alias'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/register.php"><i class="fa-solid fa-user-plus me-1"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login.php"><i class="fa-solid fa-right-to-bracket me-1"></i> Login</a>
                    </li>
                <?php else: ?>

                <!-- Logged-In Mode -->
                    <li class="nav-item">
                        <a class="nav-link" href="/users/dashboard.php"><i class="fa-solid fa-gauge-high me-1"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users.php"><i class="fa-solid fa-users me-1"></i> Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/notifications.php"><i class="fa-solid fa-bell me-1"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/profile.php?user=<?php echo urlencode($_SESSION['user_alias']); ?>">
                            <i class="fa-solid fa-user-astronaut me-1"></i> Profile
                        </a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileMenu" role="button" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-circle-user me-1"></i> <?php echo htmlspecialchars($_SESSION['user_alias']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/users/settings.php"><i class="fa-solid fa-gear me-1"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/logout.php"><i class="fa-solid fa-right-from-bracket me-1"></i> Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
