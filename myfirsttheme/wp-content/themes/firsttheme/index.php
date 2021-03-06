<?php get_header(); ?>
 <div class="o-container u-margin-bottom-40">  
    <div class="o-row">
        <div class="o-row__comlumn o-row__comlumn--span-12 o-row__comlumn--span-<?php is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>@medium">
                <main role="main">
                    <?php if(have_posts()) { ?>
                        <?php while(have_posts()) { ?>
                            <?php the_post(); ?>
                                <article <?php post_class('c-post u-margin-bottom-20'); ?>>
                                    <h2 class = "c-post__title">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" > <?php the_title() ?> </a>
                                    </h2>
                                    <div class = "c-post__meta">
                                        <?php _themename_post_meta(); ?>
                                    </div>
                                    <div class = "c-post__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <?php _themename_readmore_link(); ?>
                                </article>
                        <?php } ?>
                        <?php the_posts_pagination() ?>
                        <?php do_action('_themename_after_pagination'); ?>
                    <?php } else { ?>
                                <P> <?php apply_filters( '_themename_no_post_text', 
                                                        esc_html__('Sorry, no posts matched your criteria.', '_themename') ); ?> </p>
                    <?php } ?> 
                </main>
        </div> 
        <?php if(is_active_sidebar('primary-sidebar')) {?>
        <div class="o-row__comlumn o-row__comlumn--span-12 o-row__comlumn--span-4@medium">
            <?php get_sidebar();  ?>
        </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>