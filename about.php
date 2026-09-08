<?php
$pageTitle = "About SagaSphere";
include __DIR__ . '/includes/header.php';
?>

<section class="section text-center">
    <h1>About the Bearded Viking</h1>
    <p>
        SagaSphere is the brainchild of the Bearded Viking — an Irish technologist, futurist, and digital explorer. 
        With a passion for sci‑fi, Norse mythology, and cutting‑edge experimentation, he has launched this project 
        as a live test of artificial intelligence capabilities. His personal site, <a href="https://beardedviking.org" target="_blank">BeardedViking.org</a>, 
        chronicles his journey through technology, creativity, and community building.
    </p>
    <p>
        This platform is not just a social network; it is a living experiment in how AI can design, secure, and 
        scale digital communities. SagaSphere represents the fusion of Viking resilience and futuristic innovation.
    </p>
</section>

<section class="section">
    <h2>The AI Race</h2>
    <p>
        Five leading AI language models — Copilot, Gemini, ChatGPT, Claude, and DeepSeek — are competing to build 
        the most advanced social media ecosystem. Each AI has been tasked with creating a fully functional, secure, 
        and user‑friendly platform. The race is documented publicly, with GitHub repositories and live sites available 
        for community review and participation.
    </p>
    <p>
        This competition is more than a showcase of technical skill; it is a demonstration of how artificial intelligence 
        can collaborate with human vision to produce scalable, secure, and engaging digital environments.
    </p>
</section>

<section class="section">
    <h2>The Future of VDP Programs</h2>
    <p>
        Once the winning AI platform is chosen, it will undergo rigorous testing through HackerOne and BugCrowd’s 
        Vulnerability Disclosure Programs. This ensures that the platform is hardened against threats and sets a new 
        precedent for transparency and security in social media. The outcome will influence how future platforms 
        integrate ethical hacking and community‑driven security.
    </p>
</section>

<section class="section">
    <h2>The Final Race Operation</h2>
    <p>
        After six months, the social media site with the most traffic will be crowned the champion. The winner will 
        receive its own domain name, a dedicated hosted server, enhanced security, founding user roles, a badge system, 
        and much more. This is not just a competition — it is the dawn of a new digital frontier where AI and human 
        creativity converge.
    </p>
</section>

<!-- Voting System -->
<section class="section">
    <h2>Cast Your Vote</h2>
    <p>
        Which AI do you believe will emerge victorious? Cast your vote below and join the saga.
    </p>
    <form action="vote.php" method="POST" class="vote-form">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" value="Copilot" id="voteCopilot" required>
            <label class="form-check-label" for="voteCopilot">Copilot</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" value="Gemini" id="voteGemini">
            <label class="form-check-label" for="voteGemini">Gemini</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" value="ChatGPT" id="voteChatGPT">
            <label class="form-check-label" for="voteChatGPT">ChatGPT</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" value="Claude" id="voteClaude">
            <label class="form-check-label" for="voteClaude">Claude</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" value="DeepSeek" id="voteDeepSeek">
            <label class="form-check-label" for="voteDeepSeek">DeepSeek</label>
        </div>
        <div class="mt-3">
            <input type="email" name="voter_email" class="form-control" placeholder="Enter your email for confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary sagasphere-btn mt-3">Submit Vote</button>
    </form>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
