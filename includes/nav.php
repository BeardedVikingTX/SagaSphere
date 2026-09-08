<?php
// Navigation bar for SagaSphere
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sagasphere-nav">
    <div class="container-fluid">
        <!-- Left Side: Site Name -->
        <a class="navbar-brand sagasphere-logo" href="/index.php">
            <i class="fa-solid fa-meteor"></i> SagaSphere
        </a>

        <!-- Responsive Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sagasphereNav" aria-controls="sagasphereNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side: Links -->
        <div class="collapse navbar-collapse" id="sagasphereNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-light sagasphere-btn" href="/login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary sagasphere-btn" href="/register.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
