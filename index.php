<?php
$pageTitle = "Nexora - The Future of AI Social Media";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';

$stmt = $pdo->query("
    SELECT ai_choice, COUNT(*) as total_votes
    FROM votes
    GROUP BY ai_choice
");

$voteResults = [];
while ($row = $stmt->fetch()) {
    $voteResults[$row['ai_choice']] = $row['total_votes'];
}

// Ensure all contenders are represented
$contenders = ['Copilot', 'Gemini', 'ChatGPT', 'Claude', 'DeepSeek'];
foreach ($contenders as $c) {
    if (!isset($voteResults[$c])) {
        $voteResults[$c] = 0;
    }
}
?>

<!-- Hero Section -->
<section class="section text-center fade-in">
    <h1>Welcome to Nexora</h1>
    <p>
        Nexora is not just another social media site — it is the **ultimate AI-powered experiment**. 
        Built by the Bearded Viking and tested across five competing AI LLMs, Nexora represents 
        the fusion of human vision and artificial intelligence. This is where **security, privacy, 
        and futuristic design** converge to redefine digital communities.
    </p>
    <button class="btn btn-primary sagasphere-btn mt-3" onclick="nexoraCelebrate()">
        <i class="fa-solid fa-rocket"></i> Join the Saga
    </button>
</section>

<!-- About the Engineer -->
<section class="section">
    <h2>The Bearded Viking</h2>
    <p>
        Behind Nexora stands the Bearded Viking — an Irish technologist, futurist, and digital explorer. 
        With roots in Texas and Illinois, he has dedicated his craft to building secure, sci-fi inspired 
        platforms that empower users while protecting their privacy. His mission: to prove that AI can 
        design, build, and deploy a fully functional social media ecosystem with minimal human intervention.
    </p>
    <img src="/assets/img/media/placeholder-og.jpg" alt="Bearded Viking" class="img-fluid floating-img mt-3">
</section>

<!-- The AI Race -->
<section class="section">
    <h2>The AI Race</h2>
    <p>
        Five AI LLMs entered the race: Copilot, Gemini, ChatGPT, Claude, and DeepSeek. Each was tasked 
        with building its own social platform. After months of testing, only the strongest remain. 
        Nexora showcases the resilience of AI when guided by human creativity and Viking determination.
    </p>
    <div class="row text-center mt-4">
        <div class="col nexora-card">
            <img src="/assets/img/media/CoPilot_home1.png" class="img-fluid floating-img" alt="Copilot">
            <p><a href="https://sagasphere.beardedviking.org">Copilot Social Site</a></p>
        </div>
        <div class="col nexora-card">
            <img src="/assets/img/media/Gemini_Enhanced_Landing_Page.png" class="img-fluid floating-img" alt="Gemini">
            <p><a href="https://valkyrin.beardedviking.org">Gemini Social Site</a></p>
        </div>
        <div class="col nexora-card">
            <img src="/assets/img/media/ChatGPT_Home_Page_Finale.png" class="img-fluid floating-img" alt="ChatGPT">
            <p><a href="https://nexora.beardedviking.org">ChatGPT Social Site</a></p>
        </div>
        <div class="col nexora-card">
            <img src="/assets/img/media/Claude_Enhanced_Home_Page.png" class="img-fluid floating-img" alt="Claude">
            <p><a href="https://ravenwarp.beardedviking.org">Claude Social Site</a></p>
        </div>
    </div>
</section>

<!-- Chart Placeholder -->
<section class="section text-center">
    <h2>AI Race Analytics</h2>
    <p>
        Track the progress of each AI contender in real time. From user votes to post activity, 
        Nexora provides transparent insights into the race.
    </p>
    <canvas id="raceChart" width="600" height="300"></canvas>
</section>


<!-- SEO Content -->
<section class="section">
    <h2>Why Nexora?</h2>
    <p>
        Nexora is designed with **security-first principles**, including encrypted sessions, anonymized telemetry, 
        and NZK (Near Zero Knowledge) privacy alignment. Unlike traditional platforms, Nexora does not sell your data. 
        Instead, it empowers you with control, transparency, and futuristic design. This is the next evolution of 
        social networking — **built by AI, secured by Vikings, and powered by community.**
    </p>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
