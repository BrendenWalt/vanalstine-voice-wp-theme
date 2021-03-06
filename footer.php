<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VanAsltine_Voice
 */

?>

	</div><!-- #content -->

	<footer>
    <?php if(is_page_template('page-front.php')) { ?>
      <div id="to-top">
        <i class="fas fa-arrow-up"></i>
      </div>
    <?php } ?>
    <div class="container">
      <div class="footer-info">
        &copy;2019 VanAlstine Voice. All Rights Reserved
      </div>
      <div class="contact-email">
        <a href="mailto:vanalstinevoice@gmail.com">vanalstinevoice@gmail.com</a>
      </div>
      <div class="footer-info footer-social social">
        <a href="https://www.facebook.com/VanAlstineVoice/" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/vanalstinevoice/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </footer>
		
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
