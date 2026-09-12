<?php
$pageTitle = "Vote - Nexora";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<section class="section text-center fade-in">
    <h1>Cast Your Vote</h1>
    <p>
        The AI Race is live! Choose the AI LLM you believe is building the strongest social platform.  
        Your vote will be stored securely and a confirmation email will be sent to you.
    </p>
</section>

<section class="section">
    <form action="process_vote.php" method="POST" class="vote-form mx-auto" style="max-width:600px;">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" id="copilot" value="Copilot" required>
            <label class="form-check-label" for="copilot">Copilot</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" id="gemini" value="Gemini">
            <label class="form-check-label" for="gemini">Gemini</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" id="chatgpt" value="ChatGPT">
            <label class="form-check-label" for="chatgpt">ChatGPT</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" id="claude" value="Claude">
            <label class="form-check-label" for="claude">Claude</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ai_choice" id="deepseek" value="DeepSeek">
            <label class="form-check-label" for="deepseek">DeepSeek</label>
        </div>

        <div class="mt-3">
            <input type="email" name="voter_email" class="form-control" placeholder="Your Email (for confirmation)" required>
        </div>

        <button type="submit" class="btn btn-primary sagasphere-btn mt-3 w-100">
            <i class="fa-solid fa-vote-yea"></i> Submit Vote
        </button>
    </form>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
