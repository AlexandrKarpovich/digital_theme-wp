<?php
/**
 * digital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package digital
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'digital_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function digital_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on digital, use a find and replace
		 * to change 'digital' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'digital', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'header menu' => esc_html__( 'header-menu', 'digital' ),
                'footer menu' => esc_html__( 'footer-menu', 'digital' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'digital_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'digital_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digital_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'digital_content_width', 640 );
}
add_action( 'after_setup_theme', 'digital_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function digital_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'digital' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'digital' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'digital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function digital_scripts() {
	wp_enqueue_style( 'digital-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'digital-style', 'rtl', 'replace' );
    wp_enqueue_script( 'digital-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    //    fonts
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap', false, _S_VERSION);
    //  dist  css
    wp_enqueue_style( 'digital-home-style', get_template_directory_uri() . '/frontend/dist/styles/styles.min.css', [], _S_VERSION );
    wp_enqueue_style( 'digital-home-style-normalize',  'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', [], _S_VERSION );
    //  dist  js
    wp_enqueue_script( 'digital-js', get_template_directory_uri() . '/frontend/dist/scripts/app.min.js', [], _S_VERSION, true );
    wp_enqueue_script( 'digital-js', get_template_directory_uri() . '/frontend/dist/scripts/vendor.min.js', [], _S_VERSION, true );
    wp_enqueue_script( 'digital-js', get_template_directory_uri() . '/frontend/dist/scripts/vendor.min.js', [], _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digital_scripts','digital-home-style', 'digital-home-style-normalize',  'digital-js' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function as_register_theme_settings()
{
    if( !function_exists( 'acf_add_options_page' ) ) {
        return;
    }
    acf_add_options_page( [
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
//        'icon_url'   => AS_TMPL_URI . '/assets/images/settings.png',
        'menu_slug'  => 'as_theme_extra_settings',
        'capability' => 'edit_posts',
        'redirect'   => FALSE,
    ] );
}


add_action( 'acf/init', 'as_register_theme_settings' );
