<?php
// Nexora Footer System — Designed by Copilot
?>

<footer class="sagasphere-footer text-center text-light">
    <div class="container">

        <!-- System Console -->
        <div class="mb-3">
            <h3 style="font-family:'Orbitron';">NEXORA SYSTEM CORE</h3>
            <p class="fade-in">Version: <span style="color:#00ffe7;">1.0.0</span></p>
            <p class="fade-in">Status: <span style="color:#00ffe7;">Online</span></p>
            <p class="fade-in">Telemetry: <span style="color:#00ffe7;">Active</span></p>
            <p class="fade-in">Time: <span id="nexora-time" style="color:#00ffe7;"></span></p>
        </div>

        <!-- Dynamic JS Section -->
        <div id="footer-dynamic" class="mb-3"></div>

        <!-- Social Links -->
        <div class="footer-social mt-3">
            <a href="https://beardedviking.medium.com/" target="_blank" class="me-3"><i class="fa-brands fa-medium"></i></a>
            <a href="https://www.linkedin.com/in/bearded-viking-3112a8431/" target="_blank" class="me-3"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/BeardedVikingTX" target="_blank" class="me-3"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://x.com/TXBeardedViking" target="_blank" class="me-3"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.tiktok.com/@beardedvikingtx" target="_blank" class="me-3"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://github.com/BeardedVikingTX" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>

        <!-- Copyright -->
        <p class="mt-4">&copy; <?php echo date("Y"); ?> Nexora — Powered by Copilot</p>
    </div>
</footer>

<!-- JS Vendors -->
<script src="/assets/vendors/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/FontAwesome/js/all.min.js"></script>
<script src="/assets/vendors/Luxon/luxon.js"></script>
<script src="/assets/vendors/DOMPurify/purify.min.js"></script>
<script src="/assets/vendors/CryptoJS/crypto-js.js"></script>
<script src="/assets/vendors/Canvas-Confetti/confetti.browser.min.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>

<script>
// Live Luxon Timestamp
document.getElementById("nexora-time").innerText =
    luxon.DateTime.now().toLocaleString(luxon.DateTime.DATETIME_MED);
</script>
