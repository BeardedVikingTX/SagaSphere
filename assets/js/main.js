/* ============================================================
   NEXORA MAIN JS — Designed by Copilot
   ============================================================ */

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

// Dynamic Footer Content
const footerDynamic = document.getElementById("footer-dynamic");
if (footerDynamic) {
    footerDynamic.innerHTML = `
        <p class="fade-in">System Status: <span style="color:#00ffe7;">Online</span></p>
        <p class="fade-in">Nexora v1.0.0</p>
    `;
}

// Confetti Trigger
function nexoraCelebrate() {
    confetti({
        particleCount: 120,
        spread: 80,
        origin: { y: 0.6 }
    });
}

// Luxon Timestamp Formatter
function formatTimestamp(ts) {
    return luxon.DateTime.fromISO(ts).toLocaleString(luxon.DateTime.DATETIME_MED);
}

// DOMPurify Sanitization
function sanitize(input) {
    return DOMPurify.sanitize(input);
}

// CryptoJS Hashing (NZK-aligned)
function hashValue(value) {
    return CryptoJS.SHA256(value).toString();
}

// Race Analytics Chart
const ctx = document.getElementById('raceChart');
if (ctx) {
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Copilot', 'Gemini', 'ChatGPT', 'Claude'],
            datasets: [{
                label: 'User Registrations',
                data: [120, 95, 80, 70], // Replace with live DB values later
                backgroundColor: ['#00ffe7', '#ff0077', '#ffaa00', '#00aaff']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { labels: { color: '#e6e6e6' } }
            },
            scales: {
                x: { ticks: { color: '#e6e6e6' } },
                y: { ticks: { color: '#e6e6e6' } }
            }
        }
    });
}

// About Page Chart
const aboutCtx = document.getElementById('aboutChart');
if (aboutCtx) {
    new Chart(aboutCtx, {
        type: 'pie',
        data: {
            labels: ['Copilot', 'Gemini', 'ChatGPT', 'Claude', 'DeepSeek'],
            datasets: [{
                label: 'AI Race Standing',
                data: [35, 30, 20, 15, 0], // Replace with live DB values later
                backgroundColor: ['#00ffe7', '#ff0077', '#ffaa00', '#00aaff', '#555555']
            }]
        },
        options: {
            plugins: {
                legend: { labels: { color: '#e6e6e6' } }
            }
        }
    });
}
// Race Analytics Chart (Live DB Integration)
const raceCtx = document.getElementById('raceChart');
if (raceCtx) {
    new Chart(raceCtx, {
        type: 'bar',
        data: {
            labels: ['Copilot', 'Gemini', 'ChatGPT', 'Claude', 'DeepSeek'],
            datasets: [{
                label: 'Votes',
                data: [
                    <?php echo $voteResults['Copilot']; ?>,
                    <?php echo $voteResults['Gemini']; ?>,
                    <?php echo $voteResults['ChatGPT']; ?>,
                    <?php echo $voteResults['Claude']; ?>,
                    <?php echo $voteResults['DeepSeek']; ?>
                ],
                backgroundColor: ['#00ffe7', '#ff0077', '#ffaa00', '#00aaff', '#555555']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { labels: { color: '#e6e6e6' } }
            },
            scales: {
                x: { ticks: { color: '#e6e6e6' } },
                y: { ticks: { color: '#e6e6e6' }, beginAtZero: true }
            }
        }
    });
}

