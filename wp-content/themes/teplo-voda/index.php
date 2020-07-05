<?php

/**
 * The main template file
 * Template Name: Головна сторінка
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
<div id="content" class="site-content">
    <div class="">
        <section class="content_market">

            <div class="top_continer_search">
                <div class="wrapper">
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
                        <div class="sales_perc">
                            Діє система <br>знижок до 20%
                        </div>
                        <!-- shopping cart -->
                        <?php if (class_exists('woocommerce')) : ?>
                            <div id="top-cart">
                                <div class="top-cart-icon">
                                    <a class="cart-items" href="/koshyk/" title="Посмотреть корзину">
                                        <div class="count"><?php echo sprintf(_n('%d', '%d', WC()->cart->cart_contents_count, 'store'), WC()->cart->cart_contents_count); ?></div>
                                        <div class="rec_icon">
                                        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 49 46.1" style="enable-background:new 0 0 49 46.1;" xml:space="preserve">
                                        <g>
                                            <path d="M0,1.2c0.6-1.2,1.2-1.5,2.5-1C4.7,1.1,6.9,2,9.2,2.8c0.7,0.3,1.1,0.7,1.4,1.4c0.4,1.1,0.8,2.3,1.2,3.4
                                                C11.8,8,12,8.1,12.4,8.1c11.6,0,23.2,0,34.8,0c1,0,1.6,0.4,1.8,1.2c0.1,0.3,0,0.7-0.1,1c-2.1,6.7-4.3,13.4-6.4,20.1
                                                c-0.3,0.9-0.8,1.3-1.7,1.3c-7.6,0-15.2,0-22.7,0c-0.2,0-0.5,0-0.8-0.1c-0.5,1.3-0.9,2.6-1.4,4c0.3,0,0.5,0,0.7,0c8,0,16,0,23.9,0
                                                c0.2,0,0.4,0,0.6,0c0.7,0.1,1.2,0.6,1.2,1.3c0,0.7-0.5,1.3-1.3,1.3c-0.3,0-0.7,0-1.1,0c-0.1,0-0.2,0-0.4,0c1,1.2,1.4,2.5,1.1,4
                                                c-0.2,1.2-0.8,2.2-1.8,2.9c-1.7,1.2-4.1,1.3-5.9-0.3c-1-0.8-1.5-1.9-1.6-3.2c-0.1-1.3,0.3-2.4,1.2-3.4c-3.4,0-6.8,0-10.2,0
                                                c1,1.3,1.4,2.6,1,4.1c-0.3,1.2-0.9,2.1-1.9,2.8c-1.8,1.3-4.2,1.1-5.9-0.4c-1.8-1.6-1.9-3.8-0.4-6.6c-0.4,0-0.7,0-1,0
                                                c-1.1,0-1.7-0.8-1.3-1.9c0.7-2.1,1.5-4.2,2.3-6.3c0.1-0.4,0.5-0.7,0.7-1c0,0,0.1,0,0.1,0c-0.1-0.2-0.1-0.3-0.2-0.5
                                                c-2.6-7.5-5.2-15-7.8-22.5C7.7,5.8,7.5,5.6,7.2,5.4C5.2,4.7,3.3,3.9,1.4,3.2C0.8,2.9,0.2,2.6,0,1.9C0,1.7,0,1.4,0,1.2z M13,11.3
                                                c0.4,1.1,0.7,2.1,1.1,3.1c0.1,0.3,0.3,0.4,0.6,0.4c2.5,0,5,0,7.5,0c0.2,0,0.3,0,0.5,0c0-1.2,0-2.3,0-3.5
                                                C19.4,11.3,16.2,11.3,13,11.3z M36.2,11.3c0,1.2,0,2.3,0,3.4c0,0,0.1,0.1,0.1,0.1c2.6,0,5.1,0,7.7,0c0.1,0,0.3-0.1,0.3-0.2
                                                c0.4-1.1,0.7-2.2,1.1-3.3C42.2,11.3,39.2,11.3,36.2,11.3z M25.8,22c2.4,0,4.8,0,7.2,0c0-1.3,0-2.7,0-4c-2.4,0-4.8,0-7.2,0
                                                C25.8,19.3,25.8,20.6,25.8,22z M22.6,22c0-1.4,0-2.7,0-4c-2.4,0-4.8,0-7.3,0c0.5,1.4,0.9,2.7,1.4,4C18.6,22,20.6,22,22.6,22z
                                                 M25.8,11.3c0,1.2,0,2.3,0,3.5c2.4,0,4.8,0,7.2,0c0-1.2,0-2.3,0-3.5C30.5,11.3,28.2,11.3,25.8,11.3z M36.2,18c0,1.3,0,2.7,0,4
                                                c0.2,0,0.3,0,0.5,0c1.2,0,2.5,0,3.7,0c0.5,0,1.1,0.1,1.5-0.1c0.3-0.2,0.4-0.9,0.5-1.3c0.3-0.8,0.5-1.7,0.8-2.6
                                                C40.8,18,38.5,18,36.2,18z M25.8,28.5c2.4,0,4.8,0,7.2,0c0-1.1,0-2.2,0-3.3c-2.4,0-4.8,0-7.2,0C25.8,26.3,25.8,27.4,25.8,28.5z
                                                 M22.6,28.6c0-1.1,0-2.3,0-3.4c-1.6,0-3.2,0-4.8,0c0.4,1.1,0.7,2.1,1.1,3.2c0,0.1,0.2,0.2,0.3,0.2C20.3,28.6,21.4,28.6,22.6,28.6z
                                                 M40.8,25.2c-1.6,0-3.1,0-4.7,0c0,1.1,0,2.2,0,3.4c1.2,0,2.3,0,3.4,0c0.1,0,0.2-0.1,0.2-0.2C40.2,27.3,40.5,26.3,40.8,25.2z
                                                 M35.9,39.3c-1.2,0-2.1,0.9-2.1,2.1c0,1.1,0.9,2.1,2.1,2.1c1.1,0,2.1-0.9,2.1-2.1C38,40.3,37.1,39.3,35.9,39.3z M20.7,41.4
                                                c0-1.2-0.9-2.1-2.1-2.1c-1.1,0-2.1,0.9-2.1,2.1c0,1.2,0.9,2.1,2.1,2.1C19.8,43.5,20.7,42.6,20.7,41.4z"/>
                                        </g>
                                        </svg>
                                    </div>
<!--                                        <div class="total"> --><?php //echo WC()->cart->get_cart_total(); ?>
<!--                                        </div>-->
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- shopping cart end -->
                    </div>
                </div>
                </div>

            </div>
            <div id="site-main" class="site-main global_container">
                <div class="column_wrapper">
                    <div class="left_container">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'market-menu',
                            'menu_id' => 'market-menu',
                        ));
                        ?>
                    </div>
                    <div class="column_wrapper__main">
                        <div class="column_wrapper_container">
                            <div class="center_container">
                                <?php $posts = get_posts("category=29&orderby=date&numberposts=5"); ?>
                                <!--                        <div class="redomended_items_title">-->
                                <!--                            --><?php //echo get_cat_name(29) ?>
                                <!--                        </div>-->
                                <div class="redomended_items_title_content">
                                    <?php
                                    $args = array(
                                        'category__in' => 30, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                                        'showposts' => 0, //сколько показать статей
                                        'orderby' => "data", //сортировка по дате
                                        'caller_get_posts' => 1);
                                    $my_query = new wp_query($args);
                                    if ($my_query->have_posts()) {
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                            ?>
                                            <div class="redomended_item"
                                                 style="background-image: url('<?php the_field('fotografiya_reklami') ?>') ">
                                                <div class="redomended_item__title">
                                                    <span><?php the_field('osnovniij_zagolovok') ?></span>
                                                </div>
                                                <div class="redomended_item__second_title">
                                            <span>
                                                <?php the_field('dodaktovij_zagolovok') ?>
                                            </span>
                                                </div>
                                                <div class="redomended_item__link">
                                                    <a href="<?php the_field('posilannya_na_tovar_chi_kategoriyu') ?>">ПЕРЕЙТИ</a>
                                                </div>
                                            </div>
                                        <?php }
                                    }
                                    wp_reset_query(); ?>
                                </div>
                            </div>
                            <div class="right_container">
                                <?php
                                $args = array(
                                    'category__in' => 32, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                                    'showposts' => 0, //сколько показать статей
                                    'orderby' => "data", //сортировка по дате
                                    'caller_get_posts' => 1);
                                $my_query = new wp_query($args);
                                if ($my_query->have_posts()) {
                                    while ($my_query->have_posts()) {
                                        $my_query->the_post();
                                        ?>
                                        <div class="right_container_item">
                                            <div class="right_container_item__first"
                                                 style="background-image: url('<?php the_field('zobrazhennya_pershogo_ogoloshennya') ?>') ">
                                                <span style="color: <?php the_field('kolir_tekstu_pershogo_zagolovku') ?>;"><?php the_field('zagolovok_tovaru_1') ?></span>
                                            </div>
                                            <div class="right_container_item__second"
                                                 style="background-image: url('<?php the_field('zobrazhennya_drugogo_ogoloshennya') ?>') ">
                                                <span style="color: <?php the_field('kolir_tekstu_drugogo_ogoloshennya') ?>;"><?php the_field('zagolovok_tovaru_2') ?></span>
                                            </div>
                                            <div class="right_container_item__third"
                                                 style="background-image: url('<?php the_field('zobrazhennya_tretogo_ogoloshennya') ?>') ">
                                                <span style="color: <?php the_field('kolir_tekstu_tretogo_zagolovku') ?>;"><?php the_field('zagolovok_tovaru_3') ?></span>
                                            </div>
                                        </div>
                                    <?php }
                                }
                                wp_reset_query(); ?>
                            </div>
                        </div>
                        <div class="column_wrapper__video">
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="column_wrapper__video__single">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5I124-XbkTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </div>
    </section>
    <section class="market content_market">
        <div class="market_specials_items">
            <h3>Спеціальні пропозиції</h3>
            <?php echo do_shortcode( '[sale_products per_page="6" columns="6" orderby="rand"]' ); ?>
        </div>
        <div class="market_multiple_items">
            <div class="market_multiple_items__title">
                <div class="market_brandes">
            <h3>Топові бренди</h3>
            <?php echo do_shortcode( '[pwb-carousel items="10" items_to_show="6" items_to_scroll="1" image_size="thumbnail" autoplay="true"]' ); ?>
                </div>
            </div>
            <div class="market_multiple_items__wrapper">
                <div class="new_items">
                    <h3>Рекомендації для Вас</h3>
                    <?php echo do_shortcode( '[featured_products per_page="4" columns="4" orderby="rand"]' ); ?>
                </div>
                <div class="new_items">
                    <h3>Нові товари</h3>
                    <?php echo do_shortcode( '[recent_products per_page="4" columns="4" orderby="rand"]' ); ?>
                </div>
            </div>
        </div>

<!--        --><?php //the_title(); ?>
<!--        --><?php //the_content(); ?>
<!--        --><?php //the_content( 'Continue reading ' . get_the_title() ); ?>
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
                         style="background-image: url("<?php get_the_post_thumbnail_url(); ?>")">
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
    </section>

<section class="section_of_trust">
    <?php $posts = get_posts("category=29&orderby=date&numberposts=5"); ?>
    <div class="section_of_trust_title">
        <?php echo get_cat_name(33); ?>
    </div>
    <div class="section_of_trust_subtitle">
        <?php echo category_description(33); ?>
    </div>

    <?php
    $args = array(
        'category__in' => 33, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
        'showposts' => 9, //сколько показать статей
        'orderby' => "data", //сортировка по дате
        'caller_get_posts' => 1);
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
        echo category_description();
        while ($my_query->have_posts()) {
            $my_query->the_post();
            ?>
            <div class="section_of_trust_item">
                <a href="<?php the_permalink(); ?>" class="item_lnk"></a>
                <div class="section_of_trust_item_container">
                    <div class="section_of_trust_item__img"
                         style="background-image: url("<?php get_the_post_thumbnail_url(); ?>")">

                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="section_of_trust__title">
                    <?php the_title(); ?>
                </div>
            </div>
            <div class="section_of_trust_item__content">
                <?php the_excerpt(); ?>
            </div>
            </div>
        <?php }
    }
    wp_reset_query(); ?>
</section>
<section class="section_about_company">
    <?php $posts = get_posts("category=29&orderby=date&numberposts=5"); ?>
    <div class="section_about_company_title">
        <?php echo get_cat_name(34); ?>
    </div>
    <div class="section_about_company_subtitle">
        <?php echo category_description(34); ?>
    </div>

    <?php
    $args = array(
        'category__in' => 34, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
        'showposts' => 6, //сколько показать статей
        'orderby' => "data", //сортировка по дате
        'caller_get_posts' => 1);
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
        echo category_description();
        while ($my_query->have_posts()) {
            $my_query->the_post();
            ?>
            <div class="section_about_company_item">
                <a href="<?php the_permalink(); ?>" class="item_lnk"></a>
                <div class="section_about_company_item_container">
                    <div class="section_about_company_item__img"
                         style="background-image: url("<?php get_the_post_thumbnail_url(); ?>")">

                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="section_about_company__title">
                        <?php the_field('kilkist_robit') ?>
                    </div>
                </div>
                <div class="section_about_company__content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php }
    }
    wp_reset_query(); ?>
</section>
<?php get_footer(); ?>
