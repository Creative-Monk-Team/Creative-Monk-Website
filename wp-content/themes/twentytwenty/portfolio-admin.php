<?php
/**
 * Portfolio Admin Functionality
 * Registers Portfolio and Company CPTs, Taxonomy, and handles CRUD operations
 */

/**
 * Register Company Custom Post Type
 */
function register_company_cpt() {
    $args = array(
        'label' => 'Companies',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 24,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'thumbnail'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'company'),
        'show_in_rest' => true,
    );
    register_post_type('company', $args);
}
add_action('init', 'register_company_cpt');

/**
 * Register Portfolio Custom Post Type
 */
function register_portfolio_cpt() {
    $labels = array(
        'name'                  => _x('Portfolios', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Portfolio', 'Post type singular name', 'textdomain'),
        'menu_name'             => __('Portfolios', 'textdomain'),
        'name_admin_bar'        => __('Portfolio', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Portfolio', 'textdomain'),
        'new_item'              => __('New Portfolio', 'textdomain'),
        'edit_item'             => __('Edit Portfolio', 'textdomain'),
        'view_item'             => __('View Portfolio', 'textdomain'),
        'all_items'             => __('All Portfolios', 'textdomain'),
        'search_items'          => __('Search Portfolios', 'textdomain'),
        'not_found'             => __('No portfolios found.', 'textdomain'),
        'not_found_in_trash'    => __('No portfolios found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'portfolio-items'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 23,
        'menu_icon'             => 'dashicons-portfolio',
        'supports'              => array('title', 'thumbnail'),
        'show_in_rest'          => true,
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'register_portfolio_cpt');

/**
 * Register Portfolio Category Taxonomy
 */
function register_portfolio_category_taxonomy() {
    $labels = array(
        'name'              => _x('Portfolio Categories', 'Taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Portfolio Category', 'Taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Portfolio Categories', 'textdomain'),
        'all_items'        => __('All Portfolio Categories', 'textdomain'),
        'edit_item'        => __('Edit Portfolio Category', 'textdomain'),
        'update_item'      => __('Update Portfolio Category', 'textdomain'),
        'add_new_item'     => __('Add New Portfolio Category', 'textdomain'),
        'new_item_name'    => __('New Portfolio Category Name', 'textdomain'),
        'menu_name'        => __('Portfolio Categories', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'register_portfolio_category_taxonomy');

/**
 * Add Default Portfolio Categories
 */
function add_default_portfolio_categories() {
    if (!term_exists('Web Design', 'portfolio_category')) {
        wp_insert_term('Graphic Design', 'portfolio_category', array('slug' => 'graphic_design'));
        wp_insert_term('UI/UX Design', 'portfolio_category', array('slug' => 'ui_ux_design'));
        wp_insert_term('Website', 'portfolio_category', array('slug' => 'website'));
    }
}
add_action('init', 'add_default_portfolio_categories');

/**
 * Register Custom Fields for Portfolio
 */
function register_portfolio_custom_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_portfolio_details',
            'title' => 'Portfolio Details',
            'fields' => array(
                array(
                    'key' => 'field_portfolio_company',
                    'label' => 'Company',
                    'name' => 'portfolio_company',
                    'type' => 'post_object',
                    'post_type' => array('company'),
                    'return_format' => 'object',
                    'ui' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'portfolio',
                    ),
                ),
            ),
        ));
    }
}
add_action('acf/init', 'register_portfolio_custom_fields');

/**
 * Flush Rewrite Rules on Theme Switch
 */
function portfolio_flush_rewrite_rules() {
    register_company_cpt();
    register_portfolio_cpt();
    register_portfolio_category_taxonomy();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'portfolio_flush_rewrite_rules');

/**
 * Enqueue Scripts and Styles for Portfolio Pages
 */
function portfolio_enqueue_scripts() {
        wp_enqueue_script('portfolio-custom', get_template_directory_uri() . '/js/portfolio.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

/**
 * Ensure Single Template with Debugging
 */
function include_single_portfolio_template($template) {
    if (is_singular('portfolio') || is_singular('company')) {
        error_log('Post Detected. Post ID: ' . get_the_ID() . ', Post Type: ' . get_post_type());
        $new_template = locate_template(array('portfolio-single.php'));
        if (!empty($new_template)) {
            error_log('Single Template Found: ' . $new_template);
            return $new_template;
        } else {
            error_log('Single Template Not Found. Falling back to: ' . $template);
        }
    }
    return $template;
}
add_filter('template_include', 'include_single_portfolio_template');
?>