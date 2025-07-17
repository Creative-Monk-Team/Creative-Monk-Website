<section id="service">
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">What Can We Do</h3>
                    <h2 class="cs-section_title">Services we can help you with</h2>
                    <div class="cs-height_45 cs-height_lg_20"></div>
                    <a href="<?php echo esc_url(home_url('/index.php/services')); ?>" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>See All Services</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <div class="cs-height_90 cs-height_lg_45"></div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                    <?php
                    $args = array(
                        'post_type'      => 'service',
                        'posts_per_page' => 4,
                        'post_status'    => 'publish',
                    );
                    $services_query = new WP_Query($args);
                    $index = 0;

                    if ($services_query->have_posts()) :
                        while ($services_query->have_posts()) : $services_query->the_post();
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: esc_url(get_template_directory_uri()) . '/img/default-service.jpg';
                            $permalink = get_the_permalink();

                            // Insert spacing column every other item (like static example)
                            if ($index === 2) {
                                echo '<div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div><div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div><div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>';
                            }
                    ?>
                            <div class="col-lg-3 col-sm-6 mb-5">
                                <div class="cs-hobble">
                                    <a href="<?php echo esc_url($permalink); ?>" class="cs-card cs-style1 cs-hover_layer1">
                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
                                        <div class="cs-card_overlay"></div>
                                        <div class="cs-card_info">
                                            <span class="cs-hover_layer3 cs-accent_bg"></span>
                                            <h2 class="cs-card_title"><?php the_title(); ?></h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="cs-height_0 cs-height_lg_30"></div>
                            </div>
                    <?php
                            $index++;
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No services found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_50"></div>
</section>
