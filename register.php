<?php
$pageTitle = "Register - Nexora";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Create Your Account</h1>
    <p>Choose your path: Anonymous or Professional registration.</p>
</section>

<section class="section mx-auto" style="max-width:600px;">
    <form action="process_register.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="text" name="alias" class="form-control" placeholder="Alias (required)" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email (optional)">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
        </div>
        <div class="mb-3">
            <input type="file" name="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary sagasphere-btn w-100">
            <i class="fa-solid fa-user-plus"></i> Register
        </button>
    </form>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
