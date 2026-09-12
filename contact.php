<?php
$pageTitle = "Contact Nexora";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Contact the Bearded Viking</h1>
    <p>
        Have questions, ideas, or want to join the saga? Use the secure form below to reach out. 
        All messages are sent directly to <strong>info@beardedviking.org</strong> and logged safely 
        in our database for transparency.
    </p>
</section>

<section class="section">
    <h2>Send a Message</h2>
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

<section class="section text-center">
    <h2>Connect with Us</h2>
    <div class="footer-social">
        <a href="https://beardedviking.medium.com/" target="_blank" class="me-3"><i class="fa-brands fa-medium"></i></a>
        <a href="https://www.linkedin.com/in/bearded-viking-3112a8431/" target="_blank" class="me-3"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.facebook.com/BeardedVikingTX" target="_blank" class="me-3"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://x.com/TXBeardedViking" target="_blank" class="me-3"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.tiktok.com/@beardedvikingtx" target="_blank" class="me-3"><i class="fa-brands fa-tiktok"></i></a>
        <a href="https://github.com/BeardedVikingTX" target="_blank"><i class="fa-brands fa-github"></i></a>
    </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
