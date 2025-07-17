<!-- Start Blog Section -->
<section class="cs-shape_wrap_4 cs-parallax">
    <div class="cs-shape_4 cs-to_up"></div>
    <div class="cs-shape_4 cs-to_right"></div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="cs-slider cs-style1 cs-gap-24">
            <div class="cs-slider_left">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">Our Blog</h3>
                    <h2 class="cs-section_title">Explore recent publication</h2>
                    <div class="cs-height_45 cs-height_lg_20"></div>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>View More Blog</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="cs-slider_right">
                <div class="cs-post_wrap">
                    <div class="cs-slider_container" data-autoplay="1" data-loop="1" data-speed="1000" data-center="0" data-variable-width="1" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
                        <div class="cs-slider_wrapper">
                            <?php
                            $posts = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 6, // Adjust based on slider needs]
                                'orderby' => 'date',
                                'order' => 'DESC',
                            ));
                            if ($posts->have_posts()) :
                                while ($posts->have_posts()) : $posts->the_post();
                                    $image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : esc_url(get_template_directory_uri()) . '/img/default.jpg';
                                    $date = get_the_date('d M Y');
                            ?>
                                    <div class="cs-slide">
                                        <div class="cs-post cs-style1">
                                            <a href="<?php the_permalink(); ?>" class="cs-post_thumb">
                                                <img style="height: 32rem;object-fit:cover;" src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>">
                                                <div class="cs-post_overlay"></div>
                                            </a>
                                            <div class="cs-post_info">
                                                <div class="cs-posted_by"><?php echo esc_html($date); ?></div>
                                                <h2 class="cs-post_title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No posts found.</p>';
                            endif;
                            ?>
                        </div>
                    </div>
                    <!-- .cs-slider_container -->
                    <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
                </div>
            </div>
        </div>
        <!-- .cs-slider -->
    </div>
    <div class="cs-height_125 cs-height_lg_70"></div>
</section>
<!-- End Blog Section -->