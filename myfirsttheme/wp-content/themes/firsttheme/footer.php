        <?php 
             $footer_layout = '3,3,3,3';
             $columns = explode(',',$footer_layout);
             $footer_bg = 'dark';
             $widgets_active = false;
             foreach ( $columns as $i => $column){
                 if(is_action_sidebar('footer-sidebar-' . ($i + 1)))
                 {
                     $widgets_active = true;
                 }
             }
        ?>
        <?php if($widgets_active) { ?>
            <div class = "c-footer c-footer--<?php echo $footer_bg;?>">
                <div class="o-container">
                    <div class = "o-row">
                        <?php foreach ($columns as $i => $column) { ?>
                            <div class="o-row__comlumn o-row__comlumn--span-12 o-row__comlumn--span-<?php echo $column ?>@medium">
                                <?php if(is_action_sidebar('footer-sidebar-' ($i + 1))) {
                                    dynamic_sidebar('footer-sidebar-' . ($i + 1));
                                }?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
         <?php } ?>
        <div class = "c-site-info c-site-info--<?php echo $footer_bg ; ?>">
            <div class="o-container">
                <div class = "o-row">
                    <div class="o-row__comlumn o-row__comlumn--span-12 c-site-info__text">
                            All Right Reserved
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>