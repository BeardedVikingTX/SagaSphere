<?php
$pageTitle = "Register - SagaSphere";
include __DIR__ . '/includes/header.php';
?>

<section class="section text-center">
    <h1>Create Your SagaSphere Account</h1>
    <p>
        Choose your path: remain anonymous with just an alias, or register professionally with full details. 
        Every account is encrypted, secured, and given its own unique profile directory.
    </p>
</section>

<section class="section">
    <h2>Anonymous Registration</h2>
    <form action="process_register.php" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width:600px;">
        <input type="hidden" name="registration_type" value="anonymous">
        <div class="mb-3">
            <input type="text" name="alias" class="form-control" placeholder="Alias / Username" required>
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
        <button type="submit" class="btn btn-primary sagasphere-btn w-100">Register Anonymously</button>
    </form>
</section>

<section class="section">
    <h2>Professional Registration</h2>
    <form action="process_register.php" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width:600px;">
        <input type="hidden" name="registration_type" value="professional">
        <div class="mb-3">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="alias" class="form-control" placeholder="Alias / Username" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
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
        <button type="submit" class="btn btn-success sagasphere-btn w-100">Register Professionally</button>
    </form>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
