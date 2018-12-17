<?php
/*
	Template Name: Front Page
*/

// ACF Variables
$intro_text                   = get_field('intro_text');
$home_button_text             = get_field('home_button_text');
$home_background_image        = get_field('home_background_image');

$services_section_title       = get_field('services_section_title');
$services_text_block_1        = get_field('services_text_area_1');
$services_text_block_2        = get_field('services_text_area_2');
$services_button_text         = get_field('services_button_text');
$services_background_image    = get_field('services_background_image');

$philosophy_section_title     = get_field('philosophy_section_title');
$philosophy_section_text      = get_field('philosophy_section_text');
$philosophy_background_image  = get_field('philosophy_background_image');

$about_section_title          = get_field('about_section_title');
$about_section_text           = get_field('about_section_text');
$about_section_image          = get_field('about_section_image');

$contact_section_title        = get_field('contact_section_title');
$contact_fom_shortcode        = get_field('contact_fom_shortcode');

$ig_feed_section_title        = get_field('ig_feed_section_title');
$instagram_feed_shortcode     = get_field('instagram_feed_shortcode');
$instagram_url                = get_field('instagram_url');
$facebook_url                 = get_field('facebook_url');


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Home -->
      <?php if ( !empty($home_background_image)) { ?>
        <section class="home" data-type="background" data-speed="10" style="background-image: url('<?php echo $home_background_image['url']; ?>');">
      <?php } else { ?>
        <section class="home">
      <?php } ?>
			
			
				<div class="container">
				<p>
          <?php echo $intro_text; ?>
				</p>
				<button class="button btn-primary">
					<?php echo $home_button_text ?>
				</button>
				</div>
			</section><!-- Home -->

      <!-- Voice Lessons -->
      <section class="voice-lessons">
        <a name="lessons"></a>
        <div class="container">
          <h2>
            <?php echo $services_section_title; ?>
          </h2>
          <div class="vv-divider">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>
            <?php echo $services_text_block_1; ?>
          </p>
        </div>


        <?php if ( !empty($home_background_image)) { ?>
          <div class="lessons-section" style="background-image: url('<?php echo $services_background_image['url']; ?>');">
        <?php } else { ?>
          <div class="lessons-section">
        <?php } ?>
       
          <div class="container">
            <?php
              $loop = new WP_Query( array(
                'post_type'  => 'voice_category',
                'orderby'    => 'post_id',
                'order'      => 'DESC'       
              ));

              while( $loop->have_posts() ) : $loop->the_post();
            ?>
              <div class="lesson"><span><?php the_field(voice_category_name) ?></span></div>
            <?php endwhile; ?>
          </div>
        </div>

        <div class="container">
          <p>
            <?php echo $services_text_block_2; ?>
          </p>
          <button class="button btn-secondary">
            <?php echo $services_button_text ?>
          </button>
        </div>
      </section><!-- Voice Lessons -->

      <!-- Philosophy -->
      <?php if ( !empty($home_background_image)) { ?>
        <section class="philosophy" style="background-image: url('<?php echo $philosophy_background_image['url']; ?>');">
      <?php } else { ?>
        <section class="philosophy">
      <?php } ?>
        <a name="philosophy"></a>
        <div class="container">
          <h2>
            <?php echo $philosophy_section_title; ?>
          </h2>
          <div class="text-container">
            <p>
              <?php echo $philosophy_section_text; ?>
            </p>
          </div>
        </div>
      </section><!-- Philosophy -->

      <!-- About -->
      <section class="about-me">
        <a name="about"></a>
        <div class="container">
          <div class="headshot">
          <?php if( !empty($about_section_image)) { ?>
            <img src="<?php echo $about_section_image['url']; ?>" alt="<?php echo $about_section_image['alt'];?>">
          <?php } ?>
            
          </div>
          <div class="about-container">
            <h2>
              <?php echo $about_section_title; ?>
            </h2>
            <div class="vv-divider">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
            <p>
              <?php echo $about_section_text ?>
            </p>
          </div>
        </div>
      </section><!-- About -->

      <!-- Instagram Feed -->
      <section class="social-feed">
        <h2>
          <?php echo $ig_feed_section_title; ?>
        </h2>
        <div class="vv-divider">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="instagram-feed">
          <?php echo do_shortcode($instagram_feed_shortcode); ?>
        </div>
      </section><!-- Instagram Feed -->

      <!-- Contact -->
      <section class="contact">
        <a name="contact"></a>
        <div class="container">
          <div class="contact-info">
            <h2>
              <?php echo $contact_section_title?>
            </h2>
            <div class="vv-divider">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
            <div class="social">
              <i class="fab fa-facebook-f">
                <a href="<?php echo $facebook_url; ?>"></a>
              </i>
              <i class="fab fa-instagram">
                <a href="<?php echo $instagram_url; ?>"></a>
              </i>
            </div>
          </div>
          <div class="contact-form">
            <?php echo do_shortcode($contact_fom_shortcode); ?>
          </div>
        </div>
      </section><!-- Contact -->



		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
