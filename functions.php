<?php
/**
 * Prodavec_Okon functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Prodavec_Okon
 */

if ( ! function_exists( 'prodavec_okon_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function prodavec_okon_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Prodavec_Okon, use a find and replace
	 * to change 'prodavec_okon' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'prodavec_okon', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'prodavec_okon' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'prodavec_okon_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // prodavec_okon_setup
add_action( 'after_setup_theme', 'prodavec_okon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prodavec_okon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'prodavec_okon_content_width', 640 );
}
add_action( 'after_setup_theme', 'prodavec_okon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prodavec_okon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar_Main', 'prodavec_okon' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar_Catalog', 'prodavec_okon' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Under Post', 'prodavec_okon' ),
		'id'            => 'single-footer-1',
		'description'   => '',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Upper Post', 'prodavec_okon' ),
		'id'            => 'single-header-1',
		'description'   => '',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'prodavec_okon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function prodavec_okon_scripts() {
	wp_enqueue_style( 'prodavec_okon-style', get_stylesheet_uri() );

	wp_enqueue_script( 'prodavec_okon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'prodavec_okon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'prodavec_okon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//-------------------ShortCodes---------------------
include(WP_CONTENT_DIR . '/themes/prodavec_okon/shortcodes.php');
add_shortcode('box_attention', 'box_attention');
add_shortcode('smm_buttons', 'smm_buttons');
add_shortcode('box_question', 'box_question');
add_shortcode('box_help', 'box_help');
add_shortcode('box_close', 'box_close');
add_shortcode('newspaper', 'newspaper');
add_shortcode('logo_text', 'logo_text');
add_shortcode('logo_text_vertical', 'logo_text_vertical');
add_shortcode('citation', 'citation');
add_shortcode('citation', 'citation');
add_shortcode('boxs_advert', 'boxs_advert');
add_shortcode('new_line', 'new_line');