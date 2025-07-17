<?php
/**
 * Template Name: CaseStudyTemplate
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg"
    data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Case Studies</h1>
        </div>
    </div>
</div>

<div class="px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 py-20">
        <?php
        // WP_Query to get all case study posts
        $args = array(
            'post_type'      => 'case_study', // Updated to match CPT UI slug
            'posts_per_page' => -1, // Get all posts
        );
        $case_studies = new WP_Query($args);

        if ($case_studies->have_posts()) :
            while ($case_studies->have_posts()) : $case_studies->the_post();
        ?>
        <div class=" cm-card w-full cm-card-shadow transition-all rounded-lg duration-500 group">
            <div class="w-full h-full cm-content-box z-20 border-2 bg-gradient-to-b from-white/30 to-transparent border-white/50 rounded-lg p-4 py-10 md:py-20">
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="h-52 z-20 relative">
                        <a href="<?php the_permalink(); ?>" class="cm-img absolute border-t-2 border-white/50 rounded-lg top-0 left-0 w-full transform -translate-y-[4rem]">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <!-- Title -->
                <h2 class="z-20">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <!-- Content -->
                <a class="line-clamp-2 z-20 mb-4" href=""><?php the_content(); ?></a>

                
                <a href="<?php the_permalink(); ?>" class="flex items-center justify-center rounded-lg bg-orange-500 text-white w-40 py-2">Case Study</a>
            </div>
        </div>
            
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No case studies found.</p>';
        endif;
        ?>
</div>

<?php
get_footer();
?>