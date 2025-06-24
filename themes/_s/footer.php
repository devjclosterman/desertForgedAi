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
    <div class="balancing-board">
    <div class="ball small"></div>
    <div class="ball medium"></div>
    <div class="ball large"></div>
    </div>
  </section>

  <footer class="commander-footer">
<div class="footer-overlay">
<div class="footer-column">
<h3>Commander HQ</h3>
<p>Crypto Tactical Ops System</p>
</div>
<div class="footer-column">
<h3>Navigation</h3>
<ul>
<li><a href="#">Live Analytics</a></li>
<li><a href="#">Market Intel</a></li>
<li><a href="#">System Logs</a></li>
</ul>
</div>
<div class="footer-column">
<h3>Status</h3>
<p>🟢 Online</p>
<p id="datetime"></p>
</div>
</div>
<p><em><p class="wood-footer-text">© 2025 Desert Forged Technologies</p></em></p>
</footer>


<?php wp_footer(); ?>

</body>
</html>
