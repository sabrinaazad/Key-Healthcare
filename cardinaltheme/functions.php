<?php

if (!function_exists('cardinaltheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cardinaltheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo');
    }
endif;
add_action('after_setup_theme', 'cardinaltheme');


function cardinaltheme_scripts()
{
    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    wp_enqueue_style('cardinal-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_enqueue_script('cardinal-script', get_template_directory_uri() . '/scripts/main.js', array(), filemtime(get_template_directory() . '/scripts/main.js'), true);
}
add_action('wp_enqueue_scripts', 'cardinaltheme_scripts');


/* ENABLE SVG SUPPORT */
function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');


/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'top-nav' => __('Top Nav'),
            'primary-nav' => __('Primary Nav'),
            'footer-nav-1' => __('Footer Nav 1'),
            'footer-nav-2' => __('Footer Nav 2')
        )
    );
}
add_action('init', 'register_menus');


/* THEME FEATURES */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* PAGE TEXTAREA REMOVAL */
function remove_textarea() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_textarea');


/* EXCERPT LENGTH */
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );


/* WIDGETS */
function blog_widgets_init() {
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


/* ADMIN FOOTER MODIFICATION */
function remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/* CUSTOM POST TYPES */
function custom_post_types() {
    register_post_type( 'treatment-programs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Treatment Programs' ),
                'singular_name' => __( 'Treatment Program' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teen-treatment-programs'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'teen-mental-health',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Teen Mental Health' ),
                'singular_name' => __( 'Teen Mental Health' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teen-mental-health'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'teen-dual-diagnosis',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Teen Dual Diagnosis' ),
                'singular_name' => __( 'Teen Dual Diagnosis' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teen-substance-abuse'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'therapies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Therapies' ),
                'singular_name' => __( 'Therapy' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teen-therapies'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-heart',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'team-members',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team Members' ),
                'singular_name' => __( 'Team Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team-members'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );
}
add_action( 'init', 'custom_post_types' );


/* THEMES OPTIONS */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
$my_excerpt = wp_strip_all_tags( get_the_excerpt(), true );
