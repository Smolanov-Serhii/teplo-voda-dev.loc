<?php
function mynew_product_subcategories( $args = array() ) {
    $parentid = get_queried_object_id();
    $args = array(
        'parent' => $parentid
    );
    $terms = get_terms( 'product_cat', $args );
    if ( $terms ) {
        echo '<ul class="product-cats">';
        foreach ( $terms as $term ) {
            echo '<li class="category">';
            woocommerce_subcategory_thumbnail( $term );
            echo '<h2>';
            echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
            echo $term->name;
            echo '</a>';
            echo '</h2>';
            echo '</li>';
        }
        echo '</ul>';
    }
}

add_action( 'woocommerce_before_shop_loop', 'mynew_product_subcategories', 50 );

add_filter('category_description', 'do_shortcode', 11); // AFTER wpautop()



//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * teplo-voda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package teplo-voda
 */
// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes($existing_mimes = array())
{
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}

add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method()
{
    wp_enqueue_script('jquery');
}

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}

add_action('admin_head', 'fix_svg');

if (!function_exists('teplo_voda_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function teplo_voda_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on teplo-voda, use a find and replace
         * to change 'teplo-voda' to the name of your theme in all the template files.
         */
        load_theme_textdomain('teplo-voda', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.

        register_nav_menus(array(
            'icon-menu' => esc_html__('Меню іконок', 'teplo-voda'),
        ));

        register_nav_menus(array(
            'market-menu' => esc_html__('Меню магазина', 'teplo-voda'),
        ));

        register_nav_menus(array(
            'top-menu' => esc_html__('Головне меню', 'teplo-voda'),
        ));


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('teplo_voda_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'teplo_voda_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function teplo_voda_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('teplo_voda_content_width', 640);
}

add_action('after_setup_theme', 'teplo_voda_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teplo_voda_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'teplo-voda'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'teplo-voda'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar-left', 'teplo-voda'),
        'id' => 'sidebar-left',
        'description' => esc_html__('Add widgets here.', 'teplo-voda'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar-right', 'teplo-voda'),
        'id' => 'sidebar-right',
        'description' => esc_html__('Add widgets here.', 'teplo-voda'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'teplo_voda_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function teplo_voda_scripts()
{
    wp_enqueue_style('teplo-voda-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', false);

    wp_enqueue_script('teplo-voda-navigation', get_template_directory_uri() . '/dist/js/common.js', array(), '1.0.0', true);

    wp_enqueue_script('teplo-voda-navigation', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);

    wp_enqueue_script('teplo-voda-navigation', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);

    wp_enqueue_script('teplo-voda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'teplo_voda_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


// Добавляем значение сэкономленных процентов рядом с ценой у товаров
add_filter('woocommerce_sale_price_html', 'woocommerce_custom_sales_price', 10, 2);
function woocommerce_custom_sales_price($price, $product)
{
    $percentage = round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100);
    return $price . sprintf(__(' Экономия %s', 'woocommerce'), $percentage . '%');
}

add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {

    $currencies['UAH'] = __( 'Українська гривня', 'woocommerce' );

    return $currencies;

}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {

    switch( $currency ) {

        case 'UAH': $currency_symbol = ' грн'; break;

    }

    return $currency_symbol;

}

function the_breadcrumb(){

    // получаем номер текущей страницы
    $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $separator = ' &raquo; '; //  »

    // если главная страница сайта
    if( is_front_page() ){

        if( $pageNum > 1 ) {
            echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<a href="' . site_url() . '">Главная</a>' . $separator;


        if( is_single() ){ // записи

            the_category(', '); echo $separator; the_title();

        } elseif ( is_page() ){ // страницы WordPress

            the_title();

        } elseif ( is_category() ) {

            single_cat_title();

        } elseif( is_tag() ) {

            single_tag_title();

        } elseif ( is_day() ) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');

        } elseif ( is_year() ) { // архивы (по годам)

            echo get_the_time('Y');

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $pageNum > 1 ) { // номер текущей страницы
            echo ' (' . $pageNum . '-я страница)';
        }

    }

}