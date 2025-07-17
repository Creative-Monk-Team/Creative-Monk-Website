<?php
/**
 * Template Name: HomeTemplate
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Start Hero -->
<div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero_bg.jpeg" id="home">
	<div class="cs-shape_1"></div>
	<div class="cs-shape_1"></div>
	<div class="cs-shape_1"></div>
	<div class="container">
		<div class="cs-hero_text">
			<h1 class="cs-hero_title wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
				Helping Businesses <br> Grow Digitally with our <br>
				<span class="text-orange-500" id="element"></span><br> Services
			</h1>
			<div class="cs-hero_info">
				<div>
					<a href="<?php echo esc_url(home_url('/index.php/contact')); ?>" class="cs-text_btn">
						<span>Get a Quote</span>
						<svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
								fill="currentColor" />
						</svg>
					</a>
				</div>
				<div>
					<div class="cs-hero_subtitle">Welcome to Creative Monk, your trusted best digital marketing
						company in India. Let’s embark on a journey of creativity and success together.</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cs-hero_social_wrap cs-primary_font cs-primary_color">
		<div class="cs-hero_social_title">Follow Us</div>
		<ul class="cs-hero_social_links">
			<li>
				<a href="https://www.behance.net/creativemonkindia">Behance</a>
			</li>
			<li>
				<a href="https://www.instagram.com/creativemonkindia/">Instagam</a>
			</li>
		</ul>
	</div>
	<a href="#service" class="cs-down_btn"></a>
</div>
<!-- End Hero -->
<!-- Start FunFact -->
<section>
	<div class="container">
		<div class="cs-funfact_wrap cs-type1">
			<div class="cs-funfact_shape" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/funfact_shape_bg.svg"></div>
			<div class="cs-funfact_left">
				<div class="cs-funfact_heading">
					<h2>Our fun fact</h2>
					<p> At Creative Monk, we’ve excelled as Best Digital Marketing Company in India, specializing in
						SEO services, web development, and creative design. Our proven track record as the best SEO
						company in Chandigarh speaks to our commitment to excellence. Partner with us for unmatched
						digital marketing success. </p>
				</div>
			</div>
			<div class="cs-funfact_right">
				<div class="cs-funfacts">
					<div class="cs-funfact cs-style1">
						<div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
							<span data-count-to="350" class="odometer"></span>
						</div>
						<div class="cs-funfact_text">
							<span class="cs-accent_color">+</span>
							<p>Global Happy Clients</p>
						</div>
					</div>
					<div class="cs-funfact cs-style1">
						<div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
							<span data-count-to="500" class="odometer"></span>
						</div>
						<div class="cs-funfact_text">
							<span class="cs-accent_color">+</span>
							<p>Project Completed</p>
						</div>
					</div>
					<div class="cs-funfact cs-style1">
						<div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
							<span data-count-to="20" class="odometer"></span>
						</div>
						<div class="cs-funfact_text">
							<span class="cs-accent_color">+</span>
							<p>Team Members</p>
						</div>
					</div>
					<div class="cs-funfact cs-style1">
						<div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
							<span data-count-to="10" class="odometer"></span>
						</div>
						<div class="cs-funfact_text">
							<span class="cs-accent_color">+</span>
							<p>Digital products</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End FunFact -->
<!-- Start Service Section -->
<?php include "services-section.php"; ?>
<!-- End Service Section -->
<!-- Start Latest Project -->
<?php include "latest-projects.php"; ?>
<!-- End Latest Project -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Awards Text -->

<!-- End Awards Text -->
<div class="cs-height_130 cs-height_lg_70"></div>
<!-- Start General Text -->
<div class="container">
	<h2 class="cs-font_50 cs-m0 text-center cs-line_height_4 wow fadeInUp" data-wow-duration="0.8s"
		data-wow-delay="0.2s">Discover the Digital Magic: Transforming Ideas into Online Triumphs, One Click at a
		Time
	</h2>
</div>
<!-- End General Text -->
<div class="cs-height_70 cs-height_lg_70"></div>
<!-- Start Video Block -->
<div class="container">
	<a href="https://www.youtube.com/watch?v=6lD_b_EYEGc" class="cs-video_block cs-style1 cs-video_open cs-bg"
		data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/video_bg.jpeg">
		<span class="cs-player_btn cs-accent_color">
			<span></span>
		</span>
	</a>
</div>
<!-- End Video Block -->
<div class="cs-height_145 cs-height_lg_80"></div>
<!-- Start Team Section -->
<?php include "team.php"; ?>
<!-- End Team Section -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Testimonial Section -->
<?php include "testimonials.php"; ?>
<!-- End Testimonial Section -->
<!-- Start Blog Section -->
<?php include "blogs.php"; ?>
<!-- End Blog Section -->
<!-- End Moving Text -->
<div class="cs-moving_text_wrap cs-bold cs-primary_font">
	<div class="cs-moving_text_in">
		<div class="cs-moving_text">Our reputed world wide partners</div>
		<div class="cs-moving_text">Our reputed world wide partners</div>
	</div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>
<!-- Start Partner Logo -->
<?php include "clients.php"; ?>
<!-- End Partner Logo -->
<div class="cs-height_130 cs-height_lg_70"></div>
<!-- Start CTA -->
<section>
	<div class="container">
		<div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cta_bg.jpeg">
			<div class="cs-shape_1"></div>
			<div class="cs-shape_1"></div>
			<div class="cs-shape_1"></div>
			<div class="cs-cta_in">
				<h2 class="cs-cta_title cs-semi_bold cs-m0"> Let’s disscuse make <br>something <i>cool</i> together
				</h2>
				<div class="cs-height_70 cs-height_lg_30"></div>
				<a href="<?php echo esc_url(home_url('/index.php/contact')); ?>" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<span>Apply For Meeting</span>
					<svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z"
							fill="currentColor" />
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End CTA -->

<?php
get_footer();
