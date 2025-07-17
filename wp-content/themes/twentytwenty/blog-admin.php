<?php
/**
 * Plugin Name: Blog Admin Enhancements
 * Description: Customizes the WordPress admin interface for blog posts.
 * Version: 1.0
 * Author: Creative Monk
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Customize Admin Columns for Posts
function cm_post_columns($columns) {
    $new_columns = array(
        'cb' => $columns['cb'],
        'title' => __('Title', 'text_domain'),
        'thumbnail' => __('Thumbnail', 'text_domain'),
        'date' => __('Date', 'text_domain'),
        'author' => __('Author', 'text_domain'),
    );
    return $new_columns;
}
add_filter('manage_posts_columns', 'cm_post_columns');

// Display Custom Column Content
function cm_post_column_content($column, $post_id) {
    switch ($column) {
        case 'thumbnail':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, array(50, 50));
            } else {
                echo '—';
            }
            break;
    }
}
add_action('manage_posts_custom_column', 'cm_post_column_content', 10, 2);

// Make Columns Sortable
function cm_post_sortable_columns($columns) {
    $columns['thumbnail'] = 'thumbnail';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'cm_post_sortable_columns');
?>