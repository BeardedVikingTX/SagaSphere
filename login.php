<?php
$pageTitle = "Login - Nexora";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Login</h1>
</section>

<section class="section mx-auto" style="max-width:600px;">
    <form action="process_login.php" method="POST">
        <div class="mb-3">
            <input type="text" name="alias" class="form-control" placeholder="Alias" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary sagasphere-btn w-100">
            <i class="fa-solid fa-right-to-bracket"></i> Login
        </button>
    </form>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
