<?php

    function _themename_post_meta() {
        echo 'fdsfas';
    }
    
    function firsttheme_child_scripts() {
        wp_enqueue_style('firsttheme-child-styles', get_stylesheet_directory_uri() . '/bundle.css', 
                            array('_themename-stylesheet'), '1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'firsttheme_child_scripts');

    function after_pagination() {
        echo('fsdfdsf');
    } 
    add_action('_themename_after_pagination', 'after_pagination');

    function function_to_add($query) {
        if($query->is_main_query()) {
            $query->set('post-per-page' , 2);
        }
    }
    add_action('pre-get-posts', 'function_to_add', 10, 1);

    function no_posts_test($test) {
        return esc_html__('No posts.', 'fdsf_child');
    }
    add_filter('_themename_no_post_text', 'no_posts_test');

    function filter_title($title) {
        return 'Filtered ' . $title;
    }
    add_filter('the_title', 'filter_title');

?>