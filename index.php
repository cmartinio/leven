<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

$layout = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('blog_layout') : 'list';

get_header(); ?>

<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div id="content" class="page-content site-content" role="main">
            <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    if ($layout != 'list'):
                        ?>
                        <div class="blog-masonry <?php echo esc_attr($layout); ?> clearfix">
                        <?php
                    endif;
                        // Start the Loop.
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            if ($layout === 'list'):
                                get_template_part( 'content', get_post_format() );
                            else:
                                 get_template_part( 'content-in-columns', get_post_format() );
                            endif;

                        endwhile;
                    if ($layout != 'list'):
                        ?>
                        </div>
                        <?php
                    endif;
                        // Previous/next page navigation.
                        leven_theme_paging_nav();

                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part( 'content', 'none' );

                    endif;
            ?>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>

<?php

get_footer(); ?>
