<?php
/*
Template Name: Services Template
*/
get_header();
?>

<style>
    .cs-service_card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }
    .cs-service_card:hover {
        transform: translateY(-5px);
    }
    .cs-service_card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .cs-service_card_content {
        padding: 20px;
    }
    .cs-service_card h3 {
        margin: 0 0 10px;
        font-size: 24px;
        color: #333;
    }
    .cs-service_card p {
        margin: 0 0 15px;
        color: #666;
    }
    .cs-service_card a.cs-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        background-color: #FF4A17;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
    }
    .cs-service_card a.cs-btn:hover {
        background-color: #e43e14;
    }
</style>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo esc_url(get_template_directory_uri() . '/img/service_hero_bg.jpeg'); ?>">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Our Services</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>

<!-- Start Services Section -->
<div class="container">
    <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle">What We Offer</h3>
        <h2 class="cs-section_title">Explore Our Services</h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="row">
        <?php
        $args = array(
            'post_type'      => 'service',
            'posts_per_page' => -1, // Retrieve all services
            'post_status'    => 'publish',
        );
        $services_query = new WP_Query($args);

        if ($services_query->have_posts()) :
            while ($services_query->have_posts()) : $services_query->the_post();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: esc_url(get_template_directory_uri() . '/img/default_service.jpg');
                $excerpt = get_the_excerpt() ?: 'No description available.';
        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="cs-service_card">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
                        <div class="cs-service_card_content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html(wp_trim_words($excerpt, 20)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="cs-btn cs-style1">
                                <span>Learn More</span>
                                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <div class="col-12">
                <p><?php esc_html_e('No services found.', 'textdomain'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- End Services Section -->
<div class="cs-height_150 cs-height_lg_80"></div>

<!-- Start CTA -->
<section>
    <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1"
            data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cta_bg.jpeg">
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-cta_in">
                <h2 class="cs-cta_title cs-semi_bold cs-m0">Ready to Transform Your Digital Presence? Let's Elevate
                    Your
                    Success Together
                </h2>
                <div class="cs-height_70 cs-height_lg_30"></div>
                <a href="contact.html" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <span>
                        Call Us Today to Get Started</span>
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


<?php get_footer(); ?>