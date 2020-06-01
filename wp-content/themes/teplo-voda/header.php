<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teplo-voda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="section_header">
    <header id="header-top" class="header-top global_container">
        <div class="logo-section">
            <div class="site-branding__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="site-branding__main_menu">
                <div class="wrapper">
                    <div class="wrapper_slogan">
                        <span>інженерні системи</span>та будівництво
                    </div>
                    <div class="site-branding__main_menu__phone">
                        <span><img src="<?php echo get_template_directory_uri() ?>/img/kyivstar.svg"> +38 (097) 881 81 44</span>
                        <span><img src="<?php echo get_template_directory_uri() ?>/img/life.svg"> +38 (093) 052 01 14</span>
                        <span><img src="<?php echo get_template_directory_uri() ?>/img/MTS.svg"> +38 (066) 359 87 05</span>
                    </div>
                    <div class="calculator_btn">
                        <a class="finger_link"><img
                                    src="<?php echo get_template_directory_uri() ?>/img/finger_calculate.svg"> </a>
                    </div>
                </div>
            </div>
            <div class="site-branding__build-img">
                <img src="<?php echo get_template_directory_uri() . '/src/img/house-img.jpg' ?>;">
            </div>
        </div>
        <nav class="main_menu_container">
            <div class="main_menu_container__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'menu_id' => 'main_menu',
                ));
                ?>
            </div>
            <div class="main_menu_container__hot_prop">

            </div>
            <div class="main_menu_container__social">
                <a href="https://www.facebook.com/%D0%A2%D0%B5%D0%BF%D0%BB%D0%BE-%D0%92%D0%BE%D0%B4%D0%B0-100382768073232/"><img src="<?php echo get_template_directory_uri() . '/img/face.svg' ?>;"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/img/viber.svg' ?>;"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/img/insta.svg' ?>;"></a>
            </div>
        </nav>
        <div class="icon-navigation">
            <nav>
                <div class="nav_icon_prev">
                    <img src="<?php echo get_template_directory_uri() . '/img/slide_arrow.svg' ?>;">
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'icon-menu',
                    'menu_id' => 'icon-menu',
                ));
                ?>
                <div class="nav_icon_next">
                    <img src="<?php echo get_template_directory_uri() . '/img/slide_arrow.svg' ?>;">
                </div>
            </nav><!-- #site-navigation -->
    </header>
</section>


