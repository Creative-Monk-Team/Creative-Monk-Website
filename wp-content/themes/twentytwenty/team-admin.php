<?php
/**
 * Team Admin Functionality
 * Registers Team CPT and Custom Fields for social media links
 */

/**
 * Register Team Custom Post Type
 */
function register_team_cpt() {
    if (post_type_exists('team')) {
        return; // Prevent duplicate registration
    }

    $labels = array(
        'name'                  => _x('Team Members', 'Post type general name', 'twentytwenty'),
        'singular_name'         => _x('Team Member', 'Post type singular name', 'twentytwenty'),
        'menu_name'             => __('Team Members', 'twentytwenty'),
        'name_admin_bar'        => __('Team Member', 'twentytwenty'),
        'add_new'               => __('Add New', 'twentytwenty'),
        'add_new_item'          => __('Add New Team Member', 'twentytwenty'),
        'new_item'              => __('New Team Member', 'twentytwenty'),
        'edit_item'             => __('Edit Team Member', 'twentytwenty'),
        'view_item'             => __('View Team Member', 'twentytwenty'),
        'all_items'             => __('All Team Members', 'twentytwenty'),
        'search_items'          => __('Search Team Members', 'twentytwenty'),
        'not_found'             => __('No team members found.', 'twentytwenty'),
        'not_found_in_trash'    => __('No team members found in Trash.', 'twentytwenty'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'team', 'with_front' => false),
        'capability_type'       => 'post',
        'capabilities'          => array(
            'edit_post'          => 'edit_team',
            'read_post'          => 'read_team',
            'delete_post'        => 'delete_team',
            'edit_posts'         => 'edit_teams',
            'edit_others_posts'  => 'edit_others_teams',
            'publish_posts'      => 'publish_teams',
            'read_private_posts' => 'read_private_teams',
        ),
        'map_meta_cap'          => true,
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 22,
        'menu_icon'             => 'dashicons-groups',
        'supports'              => array('title', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true,
    );

    register_post_type('team', $args);
}
add_action('init', 'register_team_cpt', 10);

/**
 * Grant Capabilities to Administrator
 */
function add_team_capabilities() {
    $role = get_role('administrator');
    if ($role) {
        $capabilities = array(
            'edit_team',
            'read_team',
            'delete_team',
            'edit_teams',
            'edit_others_teams',
            'publish_teams',
            'read_private_teams',
        );
        foreach ($capabilities as $cap) {
            $role->add_cap($cap);
        }
    }
}
add_action('admin_init', 'add_team_capabilities');

/**
 * Register Custom Fields for Social Media Links (Requires ACF)
 */
function register_team_social_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_team_social',
            'title' => 'Team Member Social Links',
            'fields' => array(
                array(
                    'key' => 'field_team_designation',
                    'label' => 'Designation',
                    'name' => 'team_designation',
                    'type' => 'text',
                    'instructions' => 'Enter the team member’s job title or role.',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_team_linkedin',
                    'label' => 'LinkedIn URL',
                    'name' => 'team_linkedin',
                    'type' => 'url',
                    'instructions' => 'Enter the team member’s LinkedIn profile URL.',
                ),
                array(
                    'key' => 'field_team_twitter',
                    'label' => 'Twitter URL',
                    'name' => 'team_twitter',
                    'type' => 'url',
                    'instructions' => 'Enter the team member’s Twitter profile URL.',
                ),
                array(
                    'key' => 'field_team_youtube',
                    'label' => 'YouTube URL',
                    'name' => 'team_youtube',
                    'type' => 'url',
                    'instructions' => 'Enter the team member’s YouTube profile URL.',
                ),
                array(
                    'key' => 'field_team_instagram',
                    'label' => 'Instagram URL',
                    'name' => 'team_instagram',
                    'type' => 'url',
                    'instructions' => 'Enter the team member’s Instagram profile URL.',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'team',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
}
add_action('acf/init', 'register_team_social_fields');

/**
 * Enqueue Slider Scripts (e.g., Swiper) for Team Section
 */
function team_enqueue_scripts() {
    if (is_page_template('team.php') || is_page_template('index.php')) {
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '8.4.5');
        wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '8.4.5', true);
        wp_enqueue_script('team-custom', get_template_directory_uri() . '/js/team.js', array('jquery', 'swiper'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'team_enqueue_scripts');
?>