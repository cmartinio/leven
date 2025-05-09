<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

$layout = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('blog_layout') : 'list';

get_header(); ?>

<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div id="content" class="page-content site-content" role="main">

				<?php if ( have_posts() ) : ?>


					<h2 class="page-title">
						<?php
							/*
							 * Queue the first post, that way we know what author
							 * we're dealing with (if that is the case).
							 *
							 * We reset this later so we can run the loop properly
							 * with a call to rewind_posts().
							 */
							the_post();

							printf( esc_html__( 'All posts by %s', 'leven' ), get_the_author() );
						?>
					</h2>
					<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
					<?php endif; ?>

				<?php
						/*
						 * Since we called the_post() above, we need to rewind
						 * the loop back to the beginning that way we can run
						 * the loop properly, in full.
						 */
						rewind_posts();

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
get_footer();
