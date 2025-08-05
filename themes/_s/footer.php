<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<section class="footer">
  <div class="balancing-board relative h-[100px] overflow-hidden">
    <video autoplay muted loop playsinline class="w-full h-full object-cover">
      <source src="/wp-content/uploads/2025/06/desertforgedvideo2.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Balls -->
    <div class="absolute inset-0 flex items-center justify-around">
      <div class="ball small moveSmall">
        <a href="https://x.com/IAmCoding7707" target="_blank" aria-label="Twitter">
          <img src="/wp-content/uploads/2025/06/twitter-logo-2.svg" alt="Twitter" class="icon" />
        </a>
      </div>

      <div class="ball medium mediumMove">
        <a href="https://github.com/devjclosterman" target="_blank" aria-label="GitHub">
          <img src="/wp-content/uploads/2025/06/github-mark-white-1.png" alt="GitHub" class="icon" />
        </a>
      </div>

      <div class="ball medium medium2move">
        <a href="https://instagram.com" target="_blank" aria-label="Instagram">
          <img src="/wp-content/uploads/2025/06/Instagram_logo_2016.svg" alt="Instagram" class="icon" />
        </a>
      </div>

      <div class="ball large moveLarge">
        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
          <img src="/wp-content/uploads/2025/06/linkedin-svgrepo-com.svg" alt="LinkedIn" class="icon" />
        </a>
      </div>
    </div>
  </div>
  <!-- Chat Popup Container -->
<div id="meta-chat-popup" class="chat-popup">
  <div class="chat-header">
    <div class="bot-avatar">🤖</div>
    <div class="bot-name">LLaMA AI</div>
    <button id="close-chat" class="close-btn">&times;</button>
  </div>

  <div class="chat-body" id="chat-log">
    <!-- Messages will appear here -->
  </div>

  <div class="chat-input">
    <input type="text" id="chat-prompt" placeholder="Ask me anything...">
    <button id="send-chat">Send</button>
  </div>
</div>

<!-- Trigger Button -->
<button id="open-chat" class="chat-launcher">💬 Chat</button>

<!-- Styles -->
<style>
.chat-popup {
  position: fixed;
  bottom: 80px;
  right: 30px;
  width: 350px;
  max-height: 600px;
  background: #1a1a1a;
  color: #fff;
  border-radius: 12px;
  box-shadow: 0 0 30px rgba(0,255,204,0.2);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 9999;
  font-family: "Segoe UI", sans-serif;
}

.chat-header {
  background: #0f0f0f;
  padding: 16px;
  display: flex;
  align-items: center;
  border-bottom: 1px solid #333;
}

.bot-avatar {
  width: 36px;
  height: 36px;
  background: #00ffcc;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  margin-right: 10px;
  box-shadow: 0 0 10px #00ffcc80;
}

.bot-name {
  font-weight: bold;
  flex-grow: 1;
}

.close-btn {
  background: none;
  border: none;
  color: #999;
  font-size: 20px;
  cursor: pointer;
}

.chat-body {
  flex: 1;
  padding: 16px;
  overflow-y: auto;
  background: #121212;
  font-size: 14px;
}

.chat-body .user-msg,
.chat-body .bot-msg {
  margin-bottom: 12px;
  padding: 10px 14px;
  border-radius: 16px;
  max-width: 80%;
  line-height: 1.4;
}

.user-msg {
  background: #00ffcc33;
  align-self: flex-end;
  margin-left: auto;
}

.bot-msg {
  background: #262626;
  border-left: 3px solid #00ffcc;
}

.chat-input {
  padding: 12px 16px;
  border-top: 1px solid #333;
  background: #0f0f0f;
  display: flex;
  align-items: center;
}

.chat-input input {
  flex-grow: 1;
  padding: 8px 12px;
  background: #222;
  border: none;
  color: #fff;
  border-radius: 8px;
}

.chat-input button {
  background: #00ffcc;
  color: #000;
  border: none;
  padding: 8px 14px;
  margin-left: 10px;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
}

.chat-launcher {
  position: fixed;
  bottom: 20px;
  right: 30px;
  background: #00ffcc;
  color: #000;
  border: none;
  padding: 12px 16px;
  border-radius: 9999px;
  box-shadow: 0 0 15px #00ffcc66;
  cursor: pointer;
  font-weight: bold;
  z-index: 9998;
}
</style>

<!-- Script -->
<script>
const chatBtn = document.getElementById('open-chat');
const chatBox = document.getElementById('meta-chat-popup');
const closeBtn = document.getElementById('close-chat');
const chatInput = document.getElementById('chat-prompt');
const chatLog = document.getElementById('chat-log');
const sendBtn = document.getElementById('send-chat');

chatBtn.addEventListener('click', () => chatBox.style.display = 'flex');
closeBtn.addEventListener('click', () => chatBox.style.display = 'none');

sendBtn.addEventListener('click', sendMessage);
chatInput.addEventListener('keypress', e => {
  if (e.key === 'Enter') sendMessage();
});

function sendMessage() {
  const prompt = chatInput.value.trim();
  if (!prompt) return;

  const userDiv = document.createElement('div');
  userDiv.className = 'user-msg';
  userDiv.textContent = prompt;
  chatLog.appendChild(userDiv);

  chatInput.value = '';

  const botDiv = document.createElement('div');
  botDiv.className = 'bot-msg';
  botDiv.textContent = 'LLaMA is thinking...';
  chatLog.appendChild(botDiv);

  chatLog.scrollTop = chatLog.scrollHeight;

  fetch(llamaBotConfig.endpoint, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ prompt })
  })
  .then(res => res.json())
  .then(data => {
    botDiv.textContent = data.reply || '⚠️ No reply from bot';
  })
  .catch(() => {
    botDiv.textContent = '⚠️ Error reaching the bot';
  });
}
</script>

</section>


<section>
    <footer class="commander-footer">
<div class="footer-overlay">
<div class="footer-column">
<h3>Commander HQ For Owners Comes Standard With:</h3>
<ul>
<li><a href="#">Live Analytics</a></li>
<li><a href="#">Market Intel</a></li>
<li><a href="#">System Logs</a></li>
</ul>
</div>
<div class="footer-column">
<h3>Navigation</h3>

</div>
<div class="footer-column">
<h3>Status</h3>
<p>🟢 Online</p>
<p id="datetime"></p>
</div>
<div>
  <h1 class="overlay-heading header3">Desert Forged Ai</h1>
  <p class="paraText header3">© 2025 Desert Forged Technologies</p>
</div>
</section>

<?php wp_footer(); ?>

</body>
</html>
