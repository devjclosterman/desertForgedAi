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
        <a href="https://twitter.com" target="_blank" aria-label="Twitter">
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
