<?php
/**
 * Dynamic Latest Projects Section
 * Displays the top 6 portfolio items in a slider
 */
?>
<!-- Start Latest Project -->
<section>
    <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
            <h3 class="cs-section_subtitle">Latest Projects</h3>
            <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Portfolio to explore</h2>
        </div>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="cs-slider cs-style3 cs-gap-24">
        <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="1" data-slides-per-view="1">
            <div class="cs-slider_wrapper">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: esc_url(get_template_directory_uri()) . '/img/default_portfolio.jpg';
                ?>
                    <div class="cs-slide">
                        <a href="<?php the_permalink(); ?>" class="cs-portfolio cs-style1 cs-bg">
                            <div class="cs-portfolio_hover"></div>
                            <div class="cs-portfolio_bg" data-src="<?php echo esc_url($thumbnail); ?>"></div>
                            <div class="cs-portfolio_info">
                                <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                                <h2 class="cs-portfolio_title"><?php the_title(); ?></h2>
                                <div class="cs-portfolio_subtitle">See Details</div>
                            </div>
                        </a>
                    </div><!-- .cs-slide -->
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p><?php esc_html_e('No portfolio items found.', 'twentytwenty'); ?></p>
                <?php endif; ?>
            </div>
        </div><!-- .cs-slider_container -->
        <div class="cs-pagination cs-style1"></div>
    </div><!-- .cs-slider -->
</section>
<!-- End Latest Project -->