<?php
/*
	Template Name: Front Page
*/

// ACF Variables
$intro_text                   = get_field('intro_text');
$home_button_text             = get_field('home_button_text');
$home_background_image        = get_field('home_background_image');

$services_section_title       = get_field('services_secction_title');
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
			<section class="home" data-type="background" data-speed="10">
			
				<div class="container">
				<p>
					Welcome to VanAlstine Voice, the New York City based studio of Voice Teacher Stephanie VanAlstine.
				</p>
				<button class="button btn-primary">
					Learn More
				</button>
				</div>
			</section><!-- Home -->

      <!-- Voice Lessons -->
      <section class="voice-lessons">
        <a name="lessons"></a>
        <div class="container">
          <h2>Voice Lessons</h2>
          <div class="vv-divider">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>
            Welcome to VanAlstine Voice! The fact that you are on this site looking for a voice teacher already tells me you are
            passionate about creativity and your singing voice, and those are the kind of students I love to teach.
            <br><br>
            I offer lessons in multiple genres of music, including:
          </p>
        </div>

        <div class="lessons-section">
          <div class="container">
            <div class="lesson"><span>Musical Theater</span></div>
            <div class="lesson"><span>Classical Voice/Opera</span></div>
            <div class="lesson"><span>Pop/Rock</span></div>
            <div class="lesson"><span>Jazz</span></div>
            <div class="lesson"><span>Choral Music</span></div>
          </div>
        </div>

        <div class="container">
          <p>
            My voice studio works on an 8-week session system. Students sign up for 8 weeks of weekly, one hour lessons at a
            time.
            I currently teach out of various studio locations in Manhattan, mostly in the midtown area, as well as in Astoria,
            Queens.
          </p>
          <button class="button btn-secondary">
            Learn More
          </button>
        </div>
      </section><!-- Voice Lessons -->

      <!-- Philosophy -->
      <section class="philosophy">
        <a name="philosophy"></a>
        <div class="container">
          <h2>Philosophy</h2>
          <div class="text-container">
            <p>
              I believe deeply in the power of balance. In life, finding the fine line between your comfort zone and freedom of
              self
              can be a very delicate balance, and is always incredibly different depending on the individual. This is no
              different
              when it comes to the singing voice. Every student is an individual, and should have a vocal program tailored to
              their
              voice.
              <br><br>
              Technically speaking, my approach to voice is a balance between breath energy and resonance. These two are the
              powerhouses which lead the voice to a place of strength, ease, clarity and repeatability. To achieve this balance,
              I
              work with a huge toolbox of options which I employ differently depending on the student in front of me. All the
              tools I
              use are in an effort to help my student experience the sensation of loose and free singing, ranging from working
              with
              internal physical sensations to using visualization to find your unique voice.
              <br><br>
              I find my balance as a teacher between my professional qualifications, knowledge of the science of voice, and my
              absolute love of human beings as individuals. I pride myself on having a comfortable, creative and joyous
              atmosphere
              within my voice lessons.
            </p>
          </div>
        </div>
      </section><!-- Philosophy -->

      <!-- About -->
      <section class="about-me">
        <a name="about"></a>
        <div class="container">
          <div class="headshot">
            <img src="images/headshot.jpg" alt="VanAlstine">
          </div>
          <div class="about-container">
            <h2>Hi There!</h2>
            <div class="vv-divider">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
            <p>
              My name is Stephanie VanAlstine, and VanAlstine Voice is my New York City based voice studio. In May 2018 I
              graduated
              from New York University with a Master’s Degree in Music, specifically studying Vocal Performance: Music Theatre. I
              also received an Advanced Certificate in Vocal Pedagogy, or the science of teaching voice.
              <br><br>
              When I decided to go to graduate school to study voice, it was because I had always felt as though there was
              another
              level I could reach with my voice, but I couldn’t figure out the key on my own. I had been struggling with feeling
              as
              though my voice wasn’t quite good enough, and I would never have the kind of consistent and powerful sound that I
              craved. Through my education as a singer and a teacher, I have found my voice as well as finding a passion for
              helping
              others to break through this same wall I was facing. The freedom I now feel in my own voice is what I always work
              to
              help my students find, using a foundation of science and a flexibility to tailor my program to the student in front
              of
              me.
              <br><br>
              I absolutely love working with singers, particularly those who think they can’t sing or have never ventured into
              the
              singing world. I find there are a huge number of these people who have a desire for music and have a story they
              want to
              tell with their voice! There is nothing I enjoy more than helping my students realize the full potential of their
              voice, and the transformation I see in them both vocally and personally. The singing voice is one of the most
              personal
              things we as humans posses. Join me in finding your personal sound!
            </p>
          </div>
        </div>
      </section><!-- About -->

      <!-- Instagram Feed -->
      <section class="social-feed">
        <h2>Follow VanAlstine Voice on Instagram</h2>
        <div class="vv-divider">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="instagram-feed">
          <div>
            <img src="images/social-01.png" alt="">
          </div>
          <div>
            <img src="images/social-02.png" alt="">
          </div>
          <div>
            <img src="images/social-03.png" alt="">
          </div>
          <div>
            <img src="images/social-01.png" alt="">
          </div>
          <div>
            <img src="images/social-02.png" alt="">
          </div>
          <div>
            <img src="images/social-03.png" alt="">
          </div>
        </div>
      </section><!-- Instagram Feed -->

      <!-- Contact -->
      <section class="contact">
        <a name="contact"></a>
        <div class="container">
          <div class="contact-info">
            <h2>Contact</h2>
            <div class="vv-divider">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
            <div class="social">
              <i class="fab fa-facebook-f">
                <a href="http://link"></a>
              </i>
              <i class="fab fa-instagram">
                <a href="http://link"></a>
              </i>
            </div>
          </div>
          <div class="contact-form">
            <button class="button btn-primary">
              Send Message
            </button>
          </div>
        </div>
      </section><!-- Contact -->



		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
