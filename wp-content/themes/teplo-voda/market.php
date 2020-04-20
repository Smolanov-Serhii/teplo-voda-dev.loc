<?php

/**
 * The main template file
 * Template Name: Магазин
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teplo-voda
 */


?>
<?php get_header(); ?>

                                <div class="center_container_single__container">
                                    <?php
                                    while (have_posts()) :
                                        the_post();

                                        get_template_part('template-parts/content', get_post_type());

                                        the_post_navigation();

                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if (comments_open() || get_comments_number()) :
                                            comments_template();
                                        endif;

                                    endwhile; // End of the loop.
                                    ?>
                                </div>
                                <?php
                                if ( $cat_desc = category_description() )
                                echo '<div class="current_category_description">'. $cat_desc .'</div>';
                                else
                                ?>





