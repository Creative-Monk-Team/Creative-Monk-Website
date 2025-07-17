<?php
get_header();
while (have_posts()) : the_post();
// Debug: Log post data
error_log('Single Service Post ID: ' . get_the_ID() . ', Title: ' . get_the_title() . ', Post Type: ' . get_post_type());
?>



<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg"
    data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Service Details</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Service Details</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Service Details -->
<div class="container">
    <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle" style="color: #ff6900;">Service Details</h3>
        <h2 class="cs-section_title"><?php the_title(); ?></h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="cs-service_content">
                <?php 
                the_content();
                // Debug: Log content output
                error_log('Service Content: ' . get_the_content());
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Service Details -->
<div class="cs-height_110 cs-height_lg_40"></div>
<?php
endwhile;
get_footer();
?>