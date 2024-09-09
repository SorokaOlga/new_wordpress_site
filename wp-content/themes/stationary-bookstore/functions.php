<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'stationary_bookstore_after_setup_theme' );
function stationary_bookstore_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'stationary-bookstore-featured-image', 2000, 1200, true );
    add_image_size( 'stationary-bookstore-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function stationary_bookstore_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'stationary-bookstore' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'stationary-bookstore' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'stationary-bookstore' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'stationary-bookstore' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'stationary-bookstore' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'stationary-bookstore' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'stationary-bookstore' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'stationary-bookstore' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'stationary_bookstore_widgets_init' );

// enqueue styles for child theme
function stationary_bookstore_enqueue_styles() {

    wp_enqueue_style( 'stationary-bookstore-fonts', author_writer_fonts_url(), array(), null );

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // owl-carousel
    wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'stationary-bookstore-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'stationary-bookstore-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('author-writer-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('stationary-bookstore-child-style', get_stylesheet_directory_uri() .'/style.css', array('author-writer-style'));

    require get_theme_file_path( '/tp-theme-color.php' );
    wp_add_inline_style( 'stationary-bookstore-child-style',$author_writer_tp_theme_css );

    require get_theme_file_path( '/tp-body-width-layout.php' );
    wp_add_inline_style( 'stationary-bookstore-child-style',$author_writer_tp_theme_css );

    wp_enqueue_script('owl.carousel-js', esc_url( get_theme_file_uri() ) . '/assets/js/owl.carousel.js',array('jquery'),'2.3.4',     TRUE);

    wp_enqueue_script('stationary-bookstore-custom-js', esc_url( get_theme_file_uri() ) . '/assets/js/stationary-bookstore-custom.js',array('jquery'),'2.3.4',TRUE
    );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    $author_writer_body_font_family = get_theme_mod('author_writer_body_font_family', '');

    $author_writer_heading_font_family = get_theme_mod('author_writer_heading_font_family', '');

    $author_writer_menu_font_family = get_theme_mod('author_writer_menu_font_family', '');

    $author_writer_tp_theme_css = '
        body{
            font-family: '.esc_html($author_writer_body_font_family).'!important;
        }
        h1{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        h2{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        h3{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        h4{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        h5{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        h6{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        #theme-sidebar .wp-block-search .wp-block-search__label{
            font-family: '.esc_html($author_writer_heading_font_family).'!important;
        }
        .main-navigation a{
            font-family: '.esc_html($author_writer_menu_font_family).'!important;
        }
    ';
    wp_add_inline_style('stationary-bookstore-child-style', $author_writer_tp_theme_css);
}
add_action('wp_enqueue_scripts', 'stationary_bookstore_enqueue_styles');

function stationary_bookstore_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'stationary-bookstore-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'stationary_bookstore_admin_scripts' );

function stationary_bookstore_header_style() {
    if ( get_header_image() ) :
    $custom_header = "
        .headerbox{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
            background-size: cover;
        }";
        wp_add_inline_style( 'stationary-bookstore-child-style', $custom_header );
    endif;
}
add_action( 'wp_enqueue_scripts', 'stationary_bookstore_header_style' );

require get_theme_file_path( '/customizer/customize-control-toggle.php' );

if ( ! defined( 'AUTHOR_WRITER_PRO_THEME_NAME' ) ) {
    define( 'AUTHOR_WRITER_PRO_THEME_NAME', esc_html__( 'Stationary Bookstore Pro', 'stationary-bookstore' ));
}
if ( ! defined( 'AUTHOR_WRITER_PRO_THEME_URL' ) ) {
    define( 'AUTHOR_WRITER_PRO_THEME_URL', esc_url('https://www.themespride.com/products/stationary-wordpress-theme'));
}
if ( ! defined( 'AUTHOR_WRITER_FREE_THEME_URL' ) ) {
	define( 'AUTHOR_WRITER_FREE_THEME_URL', 'https://www.themespride.com/products/free-books-wordpress-theme' );
}
if ( ! defined( 'AUTHOR_WRITER_DEMO_THEME_URL' ) ) {
	define( 'AUTHOR_WRITER_DEMO_THEME_URL', 'https://page.themespride.com/stationary-bookstore-pro/' );
}
if ( ! defined( 'AUTHOR_WRITER_DOCS_THEME_URL' ) ) {
    define( 'AUTHOR_WRITER_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/stationary-bookstore-lite/' );
}
if ( ! defined( 'AUTHOR_WRITER_DOCS_URL' ) ) {
    define( 'AUTHOR_WRITER_DOCS_URL', 'https://page.themespride.com/demo/docs/stationary-bookstore-lite/' );
}
if ( ! defined( 'AUTHOR_WRITER_RATE_THEME_URL' ) ) {
    define( 'AUTHOR_WRITER_RATE_THEME_URL', 'https://wordpress.org/support/theme/stationary-bookstore/reviews/#new-post' );
}
if ( ! defined( 'AUTHOR_WRITER_SUPPORT_THEME_URL' ) ) {
    define( 'AUTHOR_WRITER_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/stationary-bookstore' );
}
if ( ! defined( 'AUTHOR_WRITER_CHANGELOG_THEME_URL' ) ) {
    define( 'AUTHOR_WRITER_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}

define('STATIONARY_BOOKSTORE_CREDIT',__('https://www.themespride.com/products/free-books-wordpress-theme','stationary-bookstore') );
if ( ! function_exists( 'stationary_bookstore_credit' ) ) {
    function stationary_bookstore_credit(){
        echo "<a href=".esc_url(STATIONARY_BOOKSTORE_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('author_writer_footer_text',__('Stationary Bookstore WordPress Theme','stationary-bookstore')))."</a>";
    }
}
