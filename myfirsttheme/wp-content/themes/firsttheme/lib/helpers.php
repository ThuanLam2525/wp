<?php

if( !function_exists('_themename_post_meta')) {
    function _themename_post_meta() {
        /*translators %s date*/
        printf( esc_html__('Post on %s', '_themename'),
        '<a href="'. esc_url(get_permalink()) . '">
         <time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date('l, F j, Y')) . '</time>
         </a>'
        );
        
        /*translators %s author*/
        printf( esc_html__('By %s', '_themename'),
            'By <a class = "c-post_readmore" href="' . esc_url(get_author_posts_url( get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
        );
        
    }
}
    function _themename_readmore_link(){
        echo '<a class="c-post__readmore" href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
        
        /*translators %s title*/
        printf( 
            wp_kses(
                __('Read more <span class="u-screen-reader-text"> About %s </span>' , '_themename'),
                [
                    'span' => [
                        'class'=> []
                    ]
                ]
            ),
            get_the_title() 
        );
        
        echo '</a>';
    }
?>