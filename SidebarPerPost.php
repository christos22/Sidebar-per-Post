<?php
/*
Plugin Name:  Sidebar per Post
Description:  Generate a sidebar for each post you create.
Plugin URI:   https://github.com/christos22/sidebar-per-post
Author:       Christos Grapsas
Author URI:   https://github.com/christos22
Version:      1.0
Text Domain:  SidebarPerPost
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// disable direct file access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register a widget area for each page/post created
 */
function SidebarPerPost_register_widget_areas()
{    // Get all pages/posts except trashed
    $posts = new WP_Query(['post_type' => 'any',
        'posts_per_page' => -1,
    ]);
    // Loop through posts/posts
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            
            $themeTextdomain = wp_get_theme()->get('TextDomain');
            $id = $posts->post->ID;
            $title = $posts->post->post_name;

            // Ignore if posts have no slug or are trashed
            if ('' == $title || 'trash' == get_post_status($id)) {
                continue;
            }

            // Register the sidebar for the page.
            register_sidebar(
                [
            'name' => esc_html__($title, $themeTextdomain),
            'id' => 'sidebar-'. $id,
            'description' => esc_html__('Add widgets for the "'.$title.'"'),
            'before_widget' => '', // You can change this to any tag you prefer
            'after_widget' => '', // Close the tag
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ]
            );
        }
        wp_reset_postdata();
    }
}
add_action('widgets_init', 'SidebarPerPost_register_widget_areas');