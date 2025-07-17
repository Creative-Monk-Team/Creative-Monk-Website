<?php
/**
 * Services Admin Functionality
 * Registers Services CPT and handles dynamic display
 */

/**
 * Register Services Custom Post Type
 */
function register_services_cpt() {
    $labels = array(
        'name'                  => _x('Services', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Service', 'Post type singular name', 'textdomain'),
        'menu_name'             => __('Services', 'textdomain'),
        'name_admin_bar'        => __('Service', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Service', 'textdomain'),
        'new_item'              => __('New Service', 'textdomain'),
        'edit_item'             => __('Edit Service', 'textdomain'),
        'view_item'             => __('View Service', 'textdomain'),
        'all_items'             => __('All Services', 'textdomain'),
        'search_items'          => __('Search Services', 'textdomain'),
        'not_found'             => __('No services found.', 'textdomain'),
        'not_found_in_trash'    => __('No services found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'service-archive'), // Changed to avoid conflict with static page
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-admin-tools',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'show_in_rest'          => true,
    );

    register_post_type('service', $args);
}
add_action('init', 'register_services_cpt');

/**
 * Ensure Single Service Template with Debugging
 */
function include_single_service_template($template) {
    if (is_singular('service')) {
        error_log('Post Type is Service. Post ID: ' . get_the_ID() . ', Post Type: ' . get_post_type());
        $new_template = locate_template(array('single-service.php'));
        if (!empty($new_template)) {
            error_log('Single Service Template Found: ' . $new_template);
            return $new_template;
        } else {
            error_log('Single Service Template Not Found. Falling back to: ' . $template);
        }
    } else {
        error_log('Not a Service Post. Post Type: ' . get_post_type());
    }
    return $template;
}
add_filter('template_include', 'include_single_service_template');

/**
 * Ensure Services Page Template for Static Page
 */
function include_services_page_template($template) {
    if (is_page('services')) {
        error_log('Loading Services Page Template for slug: services');
        $new_template = locate_template(array('services.php'));
        if (!empty($new_template)) {
            error_log('Services Page Template Found: ' . $new_template);
            return $new_template;
        } else {
            error_log('Services Page Template Not Found. Falling back to: ' . $template);
        }
    }
    return $template;
}
add_filter('template_include', 'include_services_page_template');

/**
 * Flush Rewrite Rules on Next Page Load (Temporary for Debugging)
 */
add_action('init', function() {
    flush_rewrite_rules();
    error_log('Rewrite rules flushed');
}, 999);

/**
 * Flush Rewrite Rules on Activation
 */
function flush_service_rewrite_rules() {
    register_services_cpt();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_service_rewrite_rules');
?>