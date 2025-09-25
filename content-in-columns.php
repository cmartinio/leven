<?php
/**
 * The template for displaying content with 1/2/3 columns
 *
 * Used for index/archive/search.
 */
/**
 * @var $atts The shortcode attributes
 */
global $post;

$blog_number_of_posts = get_option('posts_per_page');
$layout = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('blog_layout') : '';

if ($layout === 'one-column'):
    $thumbnail_class = 'blog-masonry-image-one-c';
elseif ($layout === 'two-columns'):
     $thumbnail_class = 'blog-masonry-image-two-c';
elseif ($layout === 'three-columns'):
     $thumbnail_class = 'blog-masonry-image-three-c';
endif;

?>


                        <!-- Blog Post <?php the_ID(); ?> -->
                        <div class="item post-<?php the_ID(); ?>">
                          <div class="blog-card">
                            <div class="media-block">
                                <div class="category">
                                    <?php
                                        $categories = get_the_category();
                                        $separator = ' ';
                                        $output = '';
                                        if ( ! empty( $categories ) ) {
                                            foreach( $categories as $category ) {
                                                $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( esc_html__( 'View all posts in %s', 'leven-shortcodes' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                            }
                                            echo trim( $output, $separator );
                                        }
                                    ?>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( is_sticky() ): ?>
                                        <span class="sticky-badge"><i class="fa fa-fw fa-thumb-tack"></i></span>
                                    <?php endif; ?>
                                    <?php
                                        if ( has_post_thumbnail() )
                                        {
                                            ?>
                                                <?php
                                                    the_post_thumbnail( esc_attr($thumbnail_class), array( 'alt' => get_the_title(), 'title' => "" ) );
                                                ?>
                                                <?php
                                        }
                                        else
                                        { 
                                        ?>
                                            <div class="post-without-f-image"></div>
                                        <?php
                                        }
                                    ?>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <div class="post-info">
                                <div class="post-date"><?php echo esc_attr(get_the_date( 'd M Y' )); ?></div>
                                <a href="<?php the_permalink(); ?>"><h4 class="blog-item-title"><?php the_title(); ?></h4></a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post <?php the_ID(); ?> -->
                    