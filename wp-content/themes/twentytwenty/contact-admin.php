<?php
/**
 * Register Contact Submission Custom Post Type
 */
function register_contact_submission_cpt() {
    $labels = array(
        'name'                  => _x('Contact Submissions', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Contact Submission', 'Post type singular name', 'textdomain'),
        'menu_name'             => __('Contact Submissions', 'textdomain'),
        'name_admin_bar'        => __('Contact Submission', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Submission', 'textdomain'),
        'new_item'              => __('New Submission', 'textdomain'),
        'edit_item'             => __('Edit Submission', 'textdomain'),
        'view_item'             => __('View Submission', 'textdomain'),
        'all_items'             => __('All Submissions', 'textdomain'),
        'search_items'          => __('Search Submissions', 'textdomain'),
        'not_found'             => __('No submissions found.', 'textdomain'),
        'not_found_in_trash'    => __('No submissions found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => false, // Not publicly accessible
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => false,
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 22,
        'menu_icon'             => 'dashicons-email',
        'supports'              => array('title', 'editor'),
        'show_in_rest'          => false,
    );

    register_post_type('contact_submission', $args);
}
add_action('init', 'register_contact_submission_cpt');

/**
 * Add Custom Columns to Contact Submissions
 */
function set_contact_submission_columns($columns) {
    $new_columns = array(
        'cb'            => $columns['cb'],
        'title'         => __('Title', 'textdomain'),
        'contact_name'  => __('Name', 'textdomain'),
        'contact_email' => __('Email', 'textdomain'),
        'date'          => __('Date', 'textdomain'),
    );
    return $new_columns;
}
add_filter('manage_contact_submission_posts_columns', 'set_contact_submission_columns');

function custom_contact_submission_column($column, $post_id) {
    switch ($column) {
        case 'contact_name':
            echo esc_html(get_post_meta($post_id, 'contact_name', true));
            break;
        case 'contact_email':
            echo esc_html(get_post_meta($post_id, 'contact_email', true));
            break;
    }
}
add_action('manage_contact_submission_posts_custom_column', 'custom_contact_submission_column', 10, 2);

/**
 * Flush Rewrite Rules on Activation
 */
function flush_contact_rewrite_rules() {
    register_contact_submission_cpt();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_contact_rewrite_rules');
?>