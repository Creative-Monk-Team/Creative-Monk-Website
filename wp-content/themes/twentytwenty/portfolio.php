<?php
/**
 * Template Name: Portfolio Template
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio_hero_bg.jpeg'); ?>">
  <div class="container">
    <div class="cs-page_heading_in">
      <h1 class="cs-page_title cs-font_50 cs-white_color">Portfolio</h1>
      <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
      </ol>
    </div>
  </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Portfolio -->
<div class="container">
  <div class="cs-portfolio_1_heading">
    <div class="cs-section_heading cs-style1">
      <h3 class="cs-section_subtitle">Our Portfolio</h3>
      <h2 class="cs-section_title">Some Recent Work</h2>
    </div>
    <div class="cs-isotop_filter cs-style1">
      <ul class="cs-mp0 cs-center">
        <li class="<?php echo (!isset($_GET['filter']) || $_GET['filter'] == '') ? 'active' : ''; ?>"><a href="<?php echo esc_url(remove_query_arg('filter')); ?>" data-filter="*">All</a></li>
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
        ));
        foreach ($categories as $category) :
            $active_class = (isset($_GET['filter']) && $_GET['filter'] == $category->slug) ? 'active' : '';
        ?>
          <li class="<?php echo esc_attr($active_class); ?>"><a href="<?php echo esc_url(add_query_arg('filter', $category->slug)); ?>" data-filter=".<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="cs-height_90 cs-height_lg_15"></div>
  <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_24">
    <div class="cs-grid_sizer"></div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => 7,
        'paged'          => $paged,
    );
    if (isset($_GET['filter']) && !empty($_GET['filter'])) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'portfolio_category',
                'field'    => 'slug',
                'terms'    => sanitize_text_field($_GET['filter']),
            ),
        );
    }
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $categories = get_the_terms(get_the_ID(), 'portfolio_category');
            $category_slugs = !empty($categories) ? array_map(function($cat) { return $cat->slug; }, $categories) : array();
            $category_class = !empty($category_slugs) ? implode(' ', $category_slugs) : '';
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: esc_url(get_template_directory_uri() . '/img/default_portfolio.jpg');
            $width_class = ($query->current_post % 4 == 3 || $query->current_post % 4 == 6) ? 'cs-w66' : '';
            $company = function_exists('get_field') ? get_field('portfolio_company') : null;
    ?>
      <div class="cs-isotop_item <?php echo esc_attr($category_class . ' ' . $width_class); ?>">
        <a href="<?php the_permalink(); ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?php echo esc_url($thumbnail); ?>"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title"><?php the_title(); ?></h2>
            <div class="cs-portfolio_subtitle"><?php echo $company ? esc_html($company->post_title) : 'No Company'; ?></div>
          </div>
        </a>
      </div>
    <?php
        endwhile;
    else :
        echo '<p>' . esc_html__('No portfolio items found.', 'textdomain') . '</p>';
    endif;
    ?>
  </div>
  <div class="cs-height_90 cs-height_lg_40"></div>
  <div class="text-center">
    <?php
    $big = 999999999;
    $pagination_args = array(
        'base'      => str_replace($big, '%#%', esc_url(add_query_arg('paged', $big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, $paged),
        'total'     => $query->max_num_pages,
        'prev_text' => __('&laquo; Previous', 'textdomain'),
        'next_text' => __('Next &raquo;', 'textdomain'),
        'type'      => 'plain',
        'add_args'  => isset($_GET['filter']) ? array('filter' => sanitize_text_field($_GET['filter'])) : false,
    );
    echo '<div class="cs-pagination">';
    echo paginate_links($pagination_args);
    echo '</div>';
    wp_reset_postdata();
    ?>
  </div>
</div>
<!-- End Portfolio -->
<div class="cs-height_145 cs-height_lg_80"></div>
<!-- Start CTA -->
<section>
  <div class="container">
    <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?php echo esc_url(get_template_directory_uri() . '/img/cta_bg.jpeg'); ?>">
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-cta_in">
        <h2 class="cs-cta_title cs-semi_bold cs-m0">Let’s discuss make <br>something <i>cool</i> together</h2>
        <div class="cs-height_70 cs-height_lg_30"></div>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="cs-text_btn">
          <span>Apply For Meeting</span>
          <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End CTA -->
<?php get_footer(); ?>