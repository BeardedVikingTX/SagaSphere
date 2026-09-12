<?php
$pageTitle = "Thank You - Nexora";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Transmission Confirmed</h1>
    <p>
        Your message has been successfully dispatched to the Bearded Viking.  
        A confirmation email has been sent to your inbox, and your submission has been logged securely in our system.  
        Together, we are shaping the future of AI‑powered social media.
    </p>

    <div class="mt-4">
        <a href="/index.php" class="btn btn-primary sagasphere-btn">
            <i class="fa-solid fa-home"></i> Return to Home
        </a>
        <a href="/about.php" class="btn btn-outline-light sagasphere-btn">
            <i class="fa-solid fa-circle-info"></i> Learn More
        </a>
    </div>
</section>

<section class="section text-center">
    <h2>Celebration</h2>
    <p>
        Your voice matters. Every message strengthens Nexora’s saga.  
        Let’s celebrate your contribution with a burst of energy!
    </p>
    <button class="btn btn-success sagasphere-btn" onclick="nexoraCelebrate()">
        <i class="fa-solid fa-fireworks"></i> Celebrate
    </button>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
