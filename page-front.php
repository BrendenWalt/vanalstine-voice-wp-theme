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
$section_02_link_name         = get_field('section_02_link_name');

$philosophy_section_title     = get_field('philosophy_section_title');
$philosophy_section_text      = get_field('philosophy_section_text');
$philosophy_background_image  = get_field('philosophy_background_image');
$section_03_link_name         = get_field('section_03_link_name');

$testimonial_section_title    = get_field('testimonial_section_title');
$testimonial_link_name        = get_field('testimonial_link_name');

$about_section_title          = get_field('about_section_title');
$about_section_text           = get_field('about_section_text');
$about_section_image          = get_field('about_section_image');
$section_04_link_name         = get_field('section_04_link_name');

$contact_section_title        = get_field('contact_section_title');
$contact_fom_shortcode        = get_field('contact_fom_shortcode');
$section_05_link_name         = get_field('section_05_link_name');

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
				<a href="#<?php echo $section_05_link_name ?>" class="button btn-primary">
					<?php echo $home_button_text ?>
        </a>
        <?php 
          $testimonial_loop = new WP_Query( array(
            'post_type' => 'testimonial',
            'orderby'   => 'post_id',
            'order'     => 'DESC',
            'posts_per_page' => '1',
            'meta_query' => array(
              array(
                'key' => 'featured_option',
			          'compare' => '=',
		  	        'value' => '1'
              )
            )
          ));
         while($testimonial_loop->have_posts()) : $testimonial_loop->the_post();
        ?>
          <div class="featured-testimonial">
            <blockquote>
              <?php the_field(testimonial) ?>
              <p class="cite">- <?php the_field(testimonial_contributor) ?></p>
            </blockquote>
          </div>
        <?php endwhile; ?>
        
				</div>
			</section><!-- Home -->

      <!-- Voice Lessons -->
      <section class="voice-lessons">
        <a name="<?php echo $section_02_link_name; ?>"></a>
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
                'order'      => 'DESC',      
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
          <a href="#<?php echo $section_05_link_name ?>" class="button btn-secondary">
            <?php echo $services_button_text ?>
          </a>
        </div>
      </section><!-- Voice Lessons -->

      <!-- Philosophy -->
      <?php if ( !empty($home_background_image)) { ?>
        <section class="philosophy" style="background-image: url('<?php echo $philosophy_background_image['url']; ?>');">
      <?php } else { ?>
        <section class="philosophy">
      <?php } ?>
        <a name="<?php echo $section_03_link_name; ?>"></a>
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
      
      <!-- Testimonials -->
      <section class="testimonials" id="<?php echo $testimonial_link_name; ?>" style="background-image:url('<?php bloginfo('stylesheet_directory');?>/assets/images/bw-testimonial-bg.svg')">
        <a name="<?php echo $testimonial_link_name; ?>"></a>
        <div class="container">
          <h2>
            <?php echo $testimonial_section_title; ?>
          </h2>
          <div class="vv-divider">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>

          <?php 
            $testimonial_loop = new WP_Query( array(
              'post_type' => 'testimonial',
              'orderby'   => 'post_id',
              'order'     => 'DESC',
              'posts_per_page' => '6',
              'meta_query' => array(
                array(
                  'key' => 'deactivate',
                  'compare' => '=',
                  'value' => '0'
                )
              )
            ));
          while($testimonial_loop->have_posts()) : $testimonial_loop->the_post();
          ?>
            <div class="testimonial-container">
              <blockquote>
                <span class="quotation-mark"></span><?php the_field(testimonial) ?><span class="quotation-mark"></span>
                <p class="cite">- <?php the_field(testimonial_contributor) ?></p>
              </blockquote>
            </div>
          <?php endwhile; ?>
        </div>
      </section>

      <!-- About -->
      <section class="about-me">
        <a name="<?php echo $section_04_link_name; ?>"></a>
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
        <a name="<?php echo $section_05_link_name ?>"></a>
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
              <a href="https://www.facebook.com/<?php echo $facebook_url; ?>">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/<?php echo $instagram_url; ?>">
                <i class="fab fa-instagram"></i>
              </a>
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
