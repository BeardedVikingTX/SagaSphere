<?php
$pageTitle = "Contact SagaSphere";
include __DIR__ . '/includes/header.php';
?>

<section class="section text-center">
    <h1>Contact the Bearded Viking</h1>
    <p>
        SagaSphere is more than a social experiment — it’s a living community forged by the Bearded Viking. 
        Whether you have questions, ideas, or want to join the saga, reach out directly using the form below. 
        All messages are sent securely to <strong>info@beardedviking.org</strong>.
    </p>
</section>

<!-- Contact Form -->
<section class="section">
    <h2>Send Us a Message</h2>
    <form action="send_contact.php" method="POST" class="contact-form mx-auto" style="max-width:700px;">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>
        <div class="mb-3">
            <textarea name="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary sagasphere-btn w-100">
            <i class="fa-solid fa-paper-plane"></i> Send Message
        </button>
    </form>
</section>

<!-- Social Media Links -->
<section class="section text-center">
    <h2>Connect with the Bearded Viking</h2>
    <p>
        Follow the journey across platforms and join the growing SagaSphere community.
    </p>
    <div class="social-links">
        <a href="https://beardedviking.medium.com/" target="_blank" class="me-3"><i class="fa-brands fa-medium"></i> Medium</a>
        <a href="https://www.linkedin.com/in/bearded-viking-3112a8431/" target="_blank" class="me-3"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
        <a href="https://www.facebook.com/BeardedVikingTX" target="_blank" class="me-3"><i class="fa-brands fa-facebook"></i> Facebook</a>
        <a href="https://x.com/TXBeardedViking" target="_blank" class="me-3"><i class="fa-brands fa-x-twitter"></i> X (Twitter)</a>
        <a href="https://www.tiktok.com/@beardedvikingtx" target="_blank" class="me-3"><i class="fa-brands fa-tiktok"></i> TikTok</a>
        <a href="https://github.com/BeardedVikingTX" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
    </div>
</section>

<!-- HQ Locations -->
<section class="section text-center">
    <h2>Headquarters</h2>
    <p>
        SagaSphere operates from two strongholds: <strong>Texas</strong> and <strong>Illinois</strong>. 
        These locations serve as the foundation for innovation, community building, and the Viking spirit 
        that drives this project forward.
    </p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
