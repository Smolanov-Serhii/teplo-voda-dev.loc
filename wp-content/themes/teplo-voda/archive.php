<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teplo-voda
 */


?>

<?php get_header(); ?>
<div id="content" class="site-content">
    <div class="">
        <section class="content_market">
            <div class="top_continer_search">
                <div class="menu_hesder_margin">
                    <div class="menu_hesder_margin__banner">

                    </div>
                    <div class="menu_hesder_margin__header">
                        <span>Магазин товарів</span>
                    </div>
                </div>
                <div class="aligment_container">
                    <div class="top_continer_search__search">
                        <div class="top_continer_search__search__input">
                            <?php get_search_form(); ?>
                        </div>
                        <div class="top_continer_search__search__breadcrumbs">
                            <span><?php the_breadcrumb() ?></span>
                        </div>
                    </div>
                    <div class="top_continer_search__right">

                    </div>
                </div>
            </div>
            <div id="site-main_single_content">
                <div class="column_wrapper">
                    <div class="left_container_single">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'market-menu',
                            'menu_id' => 'market-menu',
                        ));
                        ?>
                        <?php dynamic_sidebar('sidebar-left'); ?>
                    </div>
                    <div class="column_wrapper__main">
                        <div class="column_wrapper_container">
                            <div class="center_container_single">
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
                                $pa_args = array();
                                $attribute_taxonomies = wc_get_attribute_taxonomies();
                                if (0 !== count($attribute_taxonomies)) {
                                    foreach ($attribute_taxonomies as $one_tax) {
                                        $pa_args[] = get_terms($one_tax, array(
                                            'hide_empty' => false,
                                        ));
                                    }
                                }
                                ?>

                            </div>
                            <div class="right_container_single">
                                <aside id="right_sidebar" class="widget-area">
                                    <?php dynamic_sidebar('sidebar-right'); ?>
                                </aside><!-- #secondary -->
                            </div>
                        </div>
                        <div class="column_wrapper__video">
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section class="section_news">
        <?php $posts = get_posts("category=29&orderby=date&numberposts=5"); ?>
        <div class="section_news_categoty_title">
            <?php echo get_cat_name(29) ?>
        </div>
        <div class="section_news_content">
            <?php
            $args = array(
                'category__in' => 29, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                'showposts' => 5, //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <div class="single_news_item">
                        <a class="item_lnk" href="<?php the_permalink(); ?>"></a>
                        <div class="single_news_item_container">
                            <div class="section_about_company_item__img" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                            </div>
                            <div class="single_news__title">
                                <?php the_title(); ?>
                            </div>
                        </div>
                        <div class="single_news_item__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php }
            }
            wp_reset_query(); ?>
        </div>
        <?php get_footer(); ?>
</div>
</div>
