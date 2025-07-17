<?php
/**
 * Template Name: Portfolio Single
 * Template Post Type: portfolio, company
 * @package WordPress
 * @subpackage Your_Theme
 */

get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $is_company = get_post_type() === 'company';
        $title = get_the_title();
        $company = null;

        if (!$is_company) {
            $company = function_exists('get_field') ? get_field('portfolio_company') : null;
        } else {
            $company = get_post();
        }

        $portfolio_args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => 'portfolio_company',
                    'value' => $is_company ? get_the_ID() : ($company ? $company->ID : 0),
                    'compare' => '='
                )
            )
        );
        $portfolios = new WP_Query($portfolio_args);

        $category_name = 'Uncategorized';
        if (!$is_company) {
            $categories = get_the_terms(get_the_ID(), 'portfolio_category');
            $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
        }
?>

<!-- Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio_details_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color"><?php echo esc_html($title); ?></h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a></li>
                <li class="breadcrumb-item active"><?php echo esc_html($title); ?></li>
            </ol>
        </div>
    </div>
</div>
<div class="cs-height_150 cs-height_lg_80"></div>

<div class="container">
    <div class="cs-portfolio_details">
        <div class="cs-height_90 cs-height_lg_40"></div>

        <?php if ($portfolios->have_posts()) : ?>
            <div class="cs-portfolio_images">
                <div class="cs-section_heading cs-style1">
                    <h2 class="cs-section_title"><?php echo $is_company ? 'Portfolio Items' : 'Company Portfolio Items'; ?></h2>
                </div>
                <div class="cs-height_40 cs-height_lg_20"></div>
                <div class="cs-portfolio_grid" id="portfolio-gallery">
                    <?php
                    $portfolios_by_category = array();
                    while ($portfolios->have_posts()) : $portfolios->the_post();
                        $portfolio_categories = get_the_terms(get_the_ID(), 'portfolio_category');
                        $is_current = !$is_company && get_the_ID() === get_queried_object_id();
                        if ($portfolio_categories && !is_wp_error($portfolio_categories)) {
                            foreach ($portfolio_categories as $cat) {
                                $portfolios_by_category[$cat->slug][] = array(
                                    'url' => get_the_post_thumbnail_url(get_the_ID(), 'large') ?: esc_url(get_template_directory_uri() . '/img/default_portfolio.jpg'),
                                    'full_url' => get_the_post_thumbnail_url(get_the_ID(), 'full') ?: esc_url(get_template_directory_uri() . '/img/default_portfolio.jpg'),
                                    'alt' => get_the_title() . ' - ' . $cat->name,
                                    'title' => get_the_title(),
                                    'category_name' => $cat->name,
                                    'is_current' => $is_current
                                );
                            }
                        }
                    endwhile;
                    wp_reset_postdata();

                    foreach ($portfolios_by_category as $category_slug => $items) :
                        $category = get_term_by('slug', $category_slug, 'portfolio_category');
                        $category_name = $category ? esc_html($category->name) : 'Uncategorized';
                    ?>
                        <div class="cs-category_images">
                            <h3 class="cs-font_24 cs-accent_color"><?php echo $category_name; ?></h3>
                            <div class="cs-portfolio-gallery">
                                <?php foreach ($items as $item) : ?>
                                    <div class="cs-image_item<?php echo $item['is_current'] ? ' cs-current-item' : ''; ?>">

                                            <a href="<?php echo esc_url($item['full_url']); ?>" rel="lightbox-<?php echo esc_attr($category_slug); ?>">
  <img src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_attr($item['alt']); ?>" class="cs-radius_15 cs-portfolio-img" />
</a>


                                            <h4 class="cs-font_18 cs-m0"><?php echo esc_html($item['title']); ?></h4>
                                      
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="cs-height_40 cs-height_lg_20"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!$is_company) : ?>
            <div class="cs-height_65 cs-height_lg_10"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="cs-section_heading cs-style1">
                        <h3 class="cs-section_subtitle"><?php echo esc_html($category_name); ?></h3>
                        <h2 class="cs-section_title"><?php the_title(); ?></h2>
                        <div class="cs-height_40 cs-height_lg_20"></div>
                        <?php if ($company) : ?>
                            <p><strong>Company:</strong> <a href="<?php echo esc_url(get_permalink($company->ID)); ?>"><?php echo esc_html($company->post_title); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cs-height_60 cs-height_lg_40"></div>
                    <h2 class="cs-font_30 cs-font_26_sm cs-m0">Project Info</h2>
                    <div class="cs-height_50 cs-height_lg_30"></div>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Category:</h3>
                            <p class="cs-m0"><?php echo esc_html($category_name); ?></p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                        <div class="col-6">
                            <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Company:</h3>
                            <p class="cs-m0"><?php echo $company ? esc_html($company->post_title) : 'Not specified'; ?></p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-height_65 cs-height_lg_10"></div>
            <div class="cs-page_navigation cs-center">
                <div>
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="cs-text_btn cs-type1">
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.469669 5.46967C0.176777 5.76256 0.176777 6.23744 0.469669 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989593 6.3033 0.696699C6.01041 0.403806 5.53553 0.403806 5.24264 0.696699L0.469669 5.46967ZM26 5.25L1 5.25V6.75L26 6.75V5.25Z" fill="currentColor"/>
                            </svg>            
                            <span>Prev Project</span>               
                        </a>
                    <?php endif; ?>
                </div>
                <div>
                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="cs-text_btn">
                            <span>Next Project</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                            </svg>                
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
    endwhile;
else :
    echo '<p>' . esc_html__('No item found.', 'textdomain') . '</p>';
endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>