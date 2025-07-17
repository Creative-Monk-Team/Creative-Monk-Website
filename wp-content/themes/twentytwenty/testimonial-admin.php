<?php
/**
 * Plugin Name: Testimonial Admin
 * Description: Manages testimonials custom post type and admin interface.
 * Version: 1.0
 * Author: Creative Monk
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Register Custom Post Type for Testimonials
function cm_register_testimonial_post_type() {
    $labels = array(
        'name'                  => _x('Testimonials', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Testimonials', 'text_domain'),
        'name_admin_bar'        => __('Testimonial', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'add_new_item'          => __('Add New Testimonial', 'text_domain'),
        'new_item'              => __('New Testimonial', 'text_domain'),
        'edit_item'             => __('Edit Testimonial', 'text_domain'),
        'view_item'             => __('View Testimonial', 'text_domain'),
        'all_items'             => __('All Testimonials', 'text_domain'),
        'search_items'          => __('Search Testimonials', 'text_domain'),
        'not_found'             => __('No testimonials found.', 'text_domain'),
        'not_found_in_trash'    => __('No testimonials found in Trash.', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Testimonial', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-testimonial',
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'cm_register_testimonial_post_type');

// Add Meta Box for Testimonial Details
function cm_testimonial_meta_box() {
    add_meta_box(
        'cm_testimonial_details',
        __('Testimonial Details', 'text_domain'),
        'cm_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'cm_testimonial_meta_box');

// Meta Box Callback
function cm_testimonial_meta_box_callback($post) {
    wp_nonce_field('cm_testimonial_meta_box', 'cm_testimonial_meta_box_nonce');

    $designation = get_post_meta($post->ID, '_cm_testimonial_designation', true);
    $rating = get_post_meta($post->ID, '_cm_testimonial_rating', true);

    ?>
    <p>
        <label for="cm_testimonial_designation"><?php _e('Designation', 'text_domain'); ?></label><br>
        <input type="text" id="cm_testimonial_designation" name="cm_testimonial_designation" value="<?php echo esc_attr($designation); ?>" style="width: 100    <p>
        <label for="cm_testimonial_rating"><?php _e('Rating (1-5)', 'text_domain'); ?></label><br>
        <input type="number" id="cm_testimonial_rating" name="cm_testimonial_rating" min="1" max="5" value="<?php echo esc_attr($rating); ?>" style="width: 100%;">
    </p>
    <?php
}

// Save Meta Box Data
function cm_save_testimonial_meta($post_id) {
    if (!isset($_POST['cm_testimonial_meta_box_nonce']) || !wp_verify_nonce($_POST['cm_testimonial_meta_box_nonce'], 'cm_testimonial_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['cm_testimonial_designation'])) {
        update_post_meta($post_id, '_cm_testimonial_designation', sanitize_text_field($_POST['cm_testimonial_designation']));
    }

    if (isset($_POST['cm_testimonial_rating'])) {
        $rating = intval($_POST['cm_testimonial_rating']);
        if ($rating >= 1 && $rating <= 5) {
            update_post_meta($post_id, '_cm_testimonial_rating', $rating);
        }
    }
}
add_action('save_post', 'cm_save_testimonial_meta');

// Customize Admin Columns
function cm_testimonial_columns($columns) {
    $new_columns = array(
        'cb' => $columns['cb'],
        'title' => __('Name', 'text_domain'),
        'designation' => __('Designation', 'text_domain'),
        'rating' => __('Rating', 'text_domain'),
        'image' => __('Image', 'text_domain'),
        'date' => $columns['date'],
    );
    return $new_columns;
}
add_filter('manage_testimonial_posts_columns', 'cm_testimonial_columns');

function cm_testimonial_column_content($column, $post_id) {
    switch ($column) {
        case 'designation':
            echo esc_html(get_post_meta($post_id, '_cm_testimonial_designation', true));
            break;
        case 'rating':
            echo esc_html(get_post_meta($post_id, '_cm_testimonial_rating', true));
            break;
        case 'image':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, array(50, 50));
            } else {
                echo '—';
            }
            break;
    }
}
add_action('manage_testimonial_posts_custom_column', 'cm_testimonial_column_content', 10, 2);
?>