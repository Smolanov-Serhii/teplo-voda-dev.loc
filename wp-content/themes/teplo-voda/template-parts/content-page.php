<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teplo-voda
 */

?>
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
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                    </header><!-- .entry-header -->

                                    <?php teplo_voda_post_thumbnail(); ?>

                                    <div class="entry-content">
                                        <?php
                                        the_content();

                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'teplo-voda' ),
                                            'after'  => '</div>',
                                        ) );
                                        ?>
                                    </div><!-- .entry-content -->

                                    <?php if ( get_edit_post_link() ) : ?>
                                        <footer class="entry-footer">
                                            <?php
                                            edit_post_link(
                                                sprintf(
                                                    wp_kses(
                                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                                        __( 'Edit <span class="screen-reader-text">%s</span>', 'teplo-voda' ),
                                                        array(
                                                            'span' => array(
                                                                'class' => array(),
                                                            ),
                                                        )
                                                    ),
                                                    get_the_title()
                                                ),
                                                '<span class="edit-link">',
                                                '</span>'
                                            );
                                            ?>
                                        </footer><!-- .entry-footer -->
                                    <?php endif; ?>
                                </article><!-- #post-<?php the_ID(); ?> -->
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
                    <div class="single_news_item__img"
                         style="background-image: url("<?php get_the_post_thumbnail_url(); ?>")"
                    <?php the_post_thumbnail(); ?>
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

