<?php

/**
 * The main template file
 * Template Name: MainPage
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
            <?php echo do_shortcode( '[sale_products per_page="6" columns="6"]' ); ?>
        </div>
        <div class="market_multiple_items">
            <div class="market_multiple_items__title">

            </div>
            <div class="market_multiple_items__wrapper">
                <div class="payes_items"></div>
                <div class="new_items">
                    <h3>Нові товари</h3>
                    <?php echo do_shortcode( '[recent_products per_page="4" columns="4"]' ); ?>
                </div>
            </div>
        </div>
        <div class="market_recommended">
            <h3>Рекомендації для Вас</h3>
            <?php echo do_shortcode( '[featured_products per_page="6" columns="6"]' ); ?>
        </div>
        <div class="market_brandes">
            <h3>Топові бренди</h3>
            <?php echo do_shortcode( '[pwb-carousel items="10" items_to_show="6" items_to_scroll="1" image_size="thumbnail" autoplay="true"]' ); ?>

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
</div>

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
        'showposts' => 8, //сколько показать статей
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
</div>
</div>
