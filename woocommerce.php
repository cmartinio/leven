<?php
/**
 * The template for displaying woocommerce pages
 */

get_header(); ?>
<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <?php 
                $cp_hide_title = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_post_option(get_the_ID(),'cp_hide_header') : 'no';
                $cp_subtitle = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_post_option(get_the_ID(),'cp_page_subtitle') : '';
            ?>
            <?php if($cp_hide_title == 'no') { ?>
            <div class="page-title">
                <?php
                    // Page thumbnail and title.
                    leven_theme_post_thumbnail();
                    the_title( '<h1>', '</h1>' );
                ?>
                <?php if($cp_subtitle != '') { ?>
                <div class="page-subtitle">
                    <h4><?php echo wp_kses_post($cp_subtitle) ?></h4>
                </div>
                <?php } ?>
            </div>
            <?php } ?>

            <div id="content" class="page-content site-content single-post" role="main">
                <?php woocommerce_content(); ?>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
<?php get_footer(); ?>
