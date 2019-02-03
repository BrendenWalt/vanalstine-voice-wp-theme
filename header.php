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

$home_section_link_name     = get_field('home_section_link_name');
$instagram_url                = get_field('instagram_url');
$facebook_url                 = get_field('facebook_url');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131562241-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-131562241-1');
  </script>

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
  <?php if(is_page_template('page-front.php')) {  ?>

    <header>
      <a name="<?php echo $home_section_link_name;?>"></a>
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
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/vv-website-logo.png" alt="VanAlstine Voice">
      </div>
      <div class="social">
        <a href="https://www.facebook.com/<?php echo $facebook_url; ?>" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/<?php echo $instagram_url; ?>" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </header>

  <?php } else { ?>

    <header class="single-page-header">
      <div class="container">
        <div class="logo">
          <a href="/">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/vv-website-logo.png" alt="VanAlstine Voice">
          </a>
        </div>
        <div class="social">
          <a href="https://www.facebook.com/<?php echo $facebook_url; ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/<?php echo $instagram_url; ?>" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </header>

  <?php } ?>

	<div id="content" class="site-content">
