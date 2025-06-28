<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Tailwind CDN (development only) -->
<script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

<header class="nav-bar">
  <div class="nav-left">
    <div class="radar-wrapper">
      <div class="radar"></div>
    </div>
    <span class="status-text">All Systems Operational</span>
    <!-- <span> <div class="logo"><img src="/5pageWebsite4Sale/images/whiteLogo.png" class="logoPic" alt="";> -->
<!-- </span> -->
  </div>
  <nav>
    <a href="/">Home</a>
    <a href="/about-us">About</a>
    <a href="/contact-us">Contact</a>
    <a href="/services">Services</a>
    <a href="/projects">Projects</a>
    <a href="/testimonials">Testimonial</a>
    <a href="/coming-soon">Coming Soon</a>
  </nav>
</header>
