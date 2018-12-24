<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VanAsltine_Voice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right');?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Theme files -->
	<link href="https://fonts.googleapis.com/css?family=Philosopher:400,700|Nunito:300,400,600,800" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/brands.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/solid.min.css">
  <!-- jQuery -->
  <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/jquery-3.3.1.min.js" defer></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <!-- Javascript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/scripts.js" defer></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vanalstine-voice' ); ?></a>

	<header>
      <a name="home"></a>
      <div class="nav-container">
          
          <div class="nav-burger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <nav>
            <div class="navigation-container">

              <?php
                wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'container'         => 'nav',
                  'container-class'   => 'nav-links-container',
                  'menu-class'        => 'nav-links'
                ))
              ?>
		
            </div>
          </nav>
      </div>
      
      <div class="logo">
        <img src="../images/vv-logo-alt-v2.png" alt="">
      </div>
      <div class="social">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
      </div>
    </header>

	<div id="content" class="site-content">
