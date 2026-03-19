<?php
/**
 * BrandDevelopers Theme Functions
 * Merged from original theme functions + BrandDevelopers custom theme functions.
 * Backdoor (my_way) removed — see security note below.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ============================================================
   THEME SETUP
   ============================================================ */
function branddevelopers_setup() {
    load_theme_textdomain( 'branddevelopers', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'elementor' );

    // Custom logo — merged both old and new settings (flex wins)
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Register nav menus — all locations from both files combined
    register_nav_menus( array(
        'primary'      => __( 'Primary Navigation', 'branddevelopers' ),
        'bd-menu-main' => __( 'Top Menu Location', 'branddevelopers' ),
        'bd-mobile'    => __( 'Mobile Menu Location', 'branddevelopers' ),
        'bd-footer'    => __( 'Footer Menu Location', 'branddevelopers' ),
        'footer-1'     => __( 'Footer: Company', 'branddevelopers' ),
        'footer-2'     => __( 'Footer: Projects', 'branddevelopers' ),
        'footer-3'     => __( 'Footer: Support', 'branddevelopers' ),
    ) );

    // Image sizes — merged from both files
    add_image_size( 'blog-large',    800,  400, true );
    add_image_size( 'blog-small',    300,  200, true );
    add_image_size( 'bd-hero',      1920,  900, true );
    add_image_size( 'bd-portfolio',  800,  600, true );
    add_image_size( 'bd-team',       400,  400, true );
    add_image_size( 'bd-blog',       800,  450, true );
    add_image_size( 'bd-case-study', 1200, 700, true );
}
add_action( 'after_setup_theme', 'branddevelopers_setup' );

/* ============================================================
   ENQUEUE SCRIPTS & STYLES
   (Single consolidated function — replaces load_css, load_js,
    theme_enqueue_styles, and enqueue_font_awesome from the old file)
   ============================================================ */
function branddevelopers_scripts() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrapcss',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );

    // Google Fonts — Anta + DM Sans (from Figma tokens)
    wp_enqueue_style(
        'bd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Anta&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap',
        array(),
        null
    );

    // Font Awesome 6 (upgraded from 5.15.4 in old file)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );

    // Main theme stylesheet
    wp_enqueue_style(
        'branddevelopers-style',
        get_stylesheet_uri(),
        array( 'bootstrapcss', 'bd-google-fonts', 'font-awesome' ),
        wp_get_theme()->get( 'Version' )
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrapjs',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        array( 'jquery' ),
        false,
        true
    );

    // Main JS
    wp_enqueue_script(
        'branddevelopers-main',
        get_template_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        wp_get_theme()->get( 'Version' ),
        true
    );

    // Pass AJAX URL & nonce to JS
    wp_localize_script( 'branddevelopers-main', 'bd_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'bd_nonce' ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'branddevelopers_scripts' );

/* ============================================================
   ADMIN BAR SPACING (from old file)
   ============================================================ */
function my_theme_admin_bar_padding() {
    if ( is_user_logged_in() && is_admin_bar_showing() ) {
        echo '<style>
            body.admin-bar { margin-top: 32px; }
            @media screen and (max-width: 782px) {
                body.admin-bar { margin-top: 46px; }
            }
        </style>';
    }
}
add_action( 'wp_head', 'my_theme_admin_bar_padding' );

/* ============================================================
   CUSTOM POST TYPES
   (Combined from old file: Auctions, Landing Pages, Articles,
    Events, Locations, Case Studies + new: Team Members,
    Testimonials. Removed duplicate Case Study registration.)
   ============================================================ */

// Auctions (from old file)
function auction_post_type() {
    register_post_type( 'Auctions', array(
        'labels' => array(
            'name'          => 'Auctions',
            'singular_name' => 'Auction',
        ),
        'hierarchical' => true,
        'menu_icon'    => 'dashicons-buddicons-forums',
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'elementor', 'thumbnail', 'page-attributes' ),
        'rewrite'      => array( 'slug' => 'auctions' ),
    ) );
}
add_action( 'init', 'auction_post_type' );

// Auction custom templates filter (from old file)
function add_custom_post_type_templates( $post_templates, $wp_theme, $post, $post_type ) {
    if ( 'auctions' === $post_type ) {
        $post_templates['auction-template.php']        = 'Auction Template';
        $post_templates['custom-auction-template.php'] = 'Custom Auction Template';
    }
    return $post_templates;
}
add_filter( 'theme_page_templates', 'add_custom_post_type_templates', 10, 4 );

// Landing Pages (from old file)
function landingPages_post_type() {
    register_post_type( 'Landing Pages', array(
        'labels' => array(
            'name'          => 'Landing Pages',
            'singular_name' => 'Landing Page',
        ),
        'hierarchical' => true,
        'menu_icon'    => 'dashicons-buddicons-forums',
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'elementor', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'lp' ),
    ) );
}
add_action( 'init', 'landingPages_post_type' );

// Articles (from old file)
function news_custom_post_type() {
    register_post_type( 'Articles', array(
        'labels' => array(
            'name'          => 'Articles',
            'singular_name' => 'Article',
        ),
        'hierarchical' => true,
        'menu_icon'    => 'dashicons-buddicons-forums',
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'elementor', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'articles' ),
    ) );
}
add_action( 'init', 'news_custom_post_type' );

// Events (from old file)
function event_post_type() {
    register_post_type( 'Events', array(
        'labels' => array(
            'name'          => 'Events',
            'singular_name' => 'Event',
        ),
        'hierarchical' => true,
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'elementor', 'thumbnail', 'custom-fields' ),
        'rewrite'      => array( 'slug' => 'events' ),
    ) );
}
add_action( 'init', 'event_post_type' );

// Locations (from old file)
function location_post_type() {
    register_post_type( 'Locations', array(
        'labels' => array(
            'name'          => 'Locations',
            'singular_name' => 'Location',
        ),
        'hierarchical' => true,
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'elementor', 'custom-fields', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'locations' ),
    ) );
}
add_action( 'init', 'location_post_type' );

// Case Studies — unified from both files
// Old file used post type name 'Case Study', slug 'case-study'
// New file used post type name 'case_study', slug 'case-studies'
// Keeping new file version (cleaner slug, REST API support, proper labels)
function branddevelopers_register_post_types() {
    register_post_type( 'case_study', array(
        'labels' => array(
            'name'               => __( 'Case Studies', 'branddevelopers' ),
            'singular_name'      => __( 'Case Study', 'branddevelopers' ),
            'add_new'            => __( 'Add New', 'branddevelopers' ),
            'add_new_item'       => __( 'Add New Case Study', 'branddevelopers' ),
            'edit_item'          => __( 'Edit Case Study', 'branddevelopers' ),
            'new_item'           => __( 'New Case Study', 'branddevelopers' ),
            'view_item'          => __( 'View Case Study', 'branddevelopers' ),
            'search_items'       => __( 'Search Case Studies', 'branddevelopers' ),
            'not_found'          => __( 'No case studies found', 'branddevelopers' ),
            'not_found_in_trash' => __( 'No case studies found in Trash', 'branddevelopers' ),
            'menu_name'          => __( 'Case Studies', 'branddevelopers' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case-studies' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'elementor' ),
        'show_in_rest'       => true,
    ) );

    // Case Study Categories
    register_taxonomy( 'case_study_category', 'case_study', array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __( 'Categories', 'branddevelopers' ),
            'singular_name' => __( 'Category', 'branddevelopers' ),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'case-study-category' ),
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'branddevelopers_register_post_types' );

// Team Members (from new file)
function branddevelopers_register_team() {
    register_post_type( 'team_member', array(
        'labels' => array(
            'name'          => __( 'Team Members', 'branddevelopers' ),
            'singular_name' => __( 'Team Member', 'branddevelopers' ),
            'add_new_item'  => __( 'Add New Team Member', 'branddevelopers' ),
            'edit_item'     => __( 'Edit Team Member', 'branddevelopers' ),
            'menu_name'     => __( 'Team', 'branddevelopers' ),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-groups',
        'supports'      => array( 'title', 'thumbnail', 'custom-fields' ),
        'show_in_rest'  => true,
    ) );
}
add_action( 'init', 'branddevelopers_register_team' );

// Testimonials (from new file)
function branddevelopers_register_testimonials() {
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'          => __( 'Testimonials', 'branddevelopers' ),
            'singular_name' => __( 'Testimonial', 'branddevelopers' ),
            'add_new_item'  => __( 'Add New Testimonial', 'branddevelopers' ),
            'edit_item'     => __( 'Edit Testimonial', 'branddevelopers' ),
            'menu_name'     => __( 'Testimonials', 'branddevelopers' ),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'menu_position' => 7,
        'menu_icon'     => 'dashicons-format-quote',
        'supports'      => array( 'title', 'editor', 'custom-fields' ),
        'show_in_rest'  => true,
    ) );
}
add_action( 'init', 'branddevelopers_register_testimonials' );

/* ============================================================
   TAXONOMY — Brands (from old file, attached to Events)
   ============================================================ */
function my_category_toxonomy() {
    register_taxonomy( 'brands', array( 'events' ), array(
        'labels' => array(
            'name'          => 'brands',
            'singular_name' => 'brand',
        ),
        'public'       => true,
        'hierarchical' => true,
    ) );
}
add_action( 'init', 'my_category_toxonomy' );

/* ============================================================
   CUSTOM META BOXES (from new file)
   ============================================================ */
function branddevelopers_add_meta_boxes() {
    add_meta_box( 'bd_case_study_meta', __( 'Case Study Details', 'branddevelopers' ), 'branddevelopers_case_study_meta_cb', 'case_study',   'normal', 'high' );
    add_meta_box( 'bd_team_meta',       __( 'Team Member Details', 'branddevelopers' ), 'branddevelopers_team_meta_cb',       'team_member',  'normal', 'high' );
    add_meta_box( 'bd_testimonial_meta',__( 'Testimonial Details', 'branddevelopers' ), 'branddevelopers_testimonial_meta_cb','testimonial',  'normal', 'high' );
}
add_action( 'add_meta_boxes', 'branddevelopers_add_meta_boxes' );

function branddevelopers_case_study_meta_cb( $post ) {
    wp_nonce_field( 'bd_case_study_nonce', 'bd_case_study_nonce' );
    $client   = get_post_meta( $post->ID, '_bd_client',   true );
    $service  = get_post_meta( $post->ID, '_bd_service',  true );
    $year     = get_post_meta( $post->ID, '_bd_year',     true );
    $featured = get_post_meta( $post->ID, '_bd_featured', true );
    ?>
    <table class="form-table">
        <tr><th><label><?php _e( 'Client Name', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_client" value="<?php echo esc_attr( $client ); ?>" class="regular-text"></td></tr>
        <tr><th><label><?php _e( 'Service Type', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_service" value="<?php echo esc_attr( $service ); ?>" class="regular-text" placeholder="e.g. Brand Strategy & Creative"></td></tr>
        <tr><th><label><?php _e( 'Year', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_year" value="<?php echo esc_attr( $year ); ?>" class="small-text"></td></tr>
        <tr><th><label><?php _e( 'Featured', 'branddevelopers' ); ?></label></th>
            <td><input type="checkbox" name="bd_featured" value="1" <?php checked( $featured, '1' ); ?>> <?php _e( 'Show in featured position', 'branddevelopers' ); ?></td></tr>
    </table>
    <?php
}

function branddevelopers_team_meta_cb( $post ) {
    wp_nonce_field( 'bd_team_nonce', 'bd_team_nonce' );
    $role     = get_post_meta( $post->ID, '_bd_role',     true );
    $email    = get_post_meta( $post->ID, '_bd_email',    true );
    $linkedin = get_post_meta( $post->ID, '_bd_linkedin', true );
    ?>
    <table class="form-table">
        <tr><th><label><?php _e( 'Role / Title', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text" placeholder="e.g. Lead Creative Partner"></td></tr>
        <tr><th><label><?php _e( 'Email', 'branddevelopers' ); ?></label></th>
            <td><input type="email" name="bd_email" value="<?php echo esc_attr( $email ); ?>" class="regular-text"></td></tr>
        <tr><th><label><?php _e( 'LinkedIn URL', 'branddevelopers' ); ?></label></th>
            <td><input type="url" name="bd_linkedin" value="<?php echo esc_attr( $linkedin ); ?>" class="regular-text"></td></tr>
    </table>
    <?php
}

function branddevelopers_testimonial_meta_cb( $post ) {
    wp_nonce_field( 'bd_testimonial_nonce', 'bd_testimonial_nonce' );
    $author  = get_post_meta( $post->ID, '_bd_author',  true );
    $company = get_post_meta( $post->ID, '_bd_company', true );
    $role    = get_post_meta( $post->ID, '_bd_role',    true );
    ?>
    <table class="form-table">
        <tr><th><label><?php _e( 'Author Name', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_author" value="<?php echo esc_attr( $author ); ?>" class="regular-text"></td></tr>
        <tr><th><label><?php _e( 'Company', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_company" value="<?php echo esc_attr( $company ); ?>" class="regular-text"></td></tr>
        <tr><th><label><?php _e( 'Role', 'branddevelopers' ); ?></label></th>
            <td><input type="text" name="bd_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text" placeholder="e.g. Marketing Head, NovaTech"></td></tr>
    </table>
    <?php
}

// Save meta boxes
function branddevelopers_save_meta( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // Case Study
    if ( isset( $_POST['bd_case_study_nonce'] ) && wp_verify_nonce( $_POST['bd_case_study_nonce'], 'bd_case_study_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_client',   sanitize_text_field( isset( $_POST['bd_client'] )   ? $_POST['bd_client']   : '' ) );
            update_post_meta( $post_id, '_bd_service',  sanitize_text_field( isset( $_POST['bd_service'] )  ? $_POST['bd_service']  : '' ) );
            update_post_meta( $post_id, '_bd_year',     sanitize_text_field( isset( $_POST['bd_year'] )     ? $_POST['bd_year']     : '' ) );
            update_post_meta( $post_id, '_bd_featured', isset( $_POST['bd_featured'] ) ? '1' : '' );
        }
    }

    // Team Member
    if ( isset( $_POST['bd_team_nonce'] ) && wp_verify_nonce( $_POST['bd_team_nonce'], 'bd_team_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_role',     sanitize_text_field( isset( $_POST['bd_role'] )     ? $_POST['bd_role']     : '' ) );
            update_post_meta( $post_id, '_bd_email',    sanitize_email(      isset( $_POST['bd_email'] )    ? $_POST['bd_email']    : '' ) );
            update_post_meta( $post_id, '_bd_linkedin', esc_url_raw(         isset( $_POST['bd_linkedin'] ) ? $_POST['bd_linkedin'] : '' ) );
        }
    }

    // Testimonial
    if ( isset( $_POST['bd_testimonial_nonce'] ) && wp_verify_nonce( $_POST['bd_testimonial_nonce'], 'bd_testimonial_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_author',  sanitize_text_field( isset( $_POST['bd_author'] )  ? $_POST['bd_author']  : '' ) );
            update_post_meta( $post_id, '_bd_company', sanitize_text_field( isset( $_POST['bd_company'] ) ? $_POST['bd_company'] : '' ) );
            update_post_meta( $post_id, '_bd_role',    sanitize_text_field( isset( $_POST['bd_role'] )    ? $_POST['bd_role']    : '' ) );
        }
    }
}
add_action( 'save_post', 'branddevelopers_save_meta' );

/* ============================================================
   ELEMENTOR SETTINGS (from new file)
   ============================================================ */
function branddevelopers_elementor_settings( $config ) {
    $config['default_generic_fonts'] = 'DM Sans, sans-serif';
    return $config;
}
add_filter( 'elementor/frontend/settings/config', 'branddevelopers_elementor_settings' );

/* ============================================================
   SIDEBARS / WIDGETS
   (Combined: blog sidebar + footer widgets from old file)
   ============================================================ */
function branddevelopers_widgets_init() {

    // Blog sidebar (new file)
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'branddevelopers' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Widgets for the blog sidebar.', 'branddevelopers' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

    // HubSpot Footer Widget (from old file)
    register_sidebar( array(
        'name'          => 'HubSpot Footer Widget',
        'id'            => 'hubspot_footer_widget',
        'before_widget' => '<div id="hubspot-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    // HubSpot Footer Widget FR (from old file)
    register_sidebar( array(
        'name'          => 'HubSpot Footer Widget (FR)',
        'id'            => 'hubspot_footer_widget_fr',
        'before_widget' => '<div id="hubspot-footer-widget_fr">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    // ML Footer Widget (from old file)
    register_sidebar( array(
        'name'          => 'ML Footer Widget',
        'id'            => 'ml_footer_widget',
        'before_widget' => '<div id="ml-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    // Footer Widgets 1–5 (from old file)
    for ( $i = 1; $i <= 5; $i++ ) {
        register_sidebar( array(
            'name'          => 'Footer Widget ' . $i,
            'id'            => 'footer_widget' . $i,
            'before_widget' => '<div id="footer-widget' . $i . '">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
    }
}
add_action( 'widgets_init', 'branddevelopers_widgets_init' );

/* ============================================================
   NEWSLETTER AJAX HANDLER (from new file)
   ============================================================ */
function branddevelopers_newsletter_subscribe() {
    check_ajax_referer( 'bd_nonce', 'nonce' );
    $email = sanitize_email( isset( $_POST['email'] ) ? $_POST['email'] : '' );
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'branddevelopers' ) ) );
    }
    $subscribers = get_option( 'bd_newsletter_subscribers', array() );
    if ( ! in_array( $email, $subscribers, true ) ) {
        $subscribers[] = $email;
        update_option( 'bd_newsletter_subscribers', $subscribers );
    }
    wp_send_json_success( array( 'message' => __( 'Thank you for subscribing!', 'branddevelopers' ) ) );
}
add_action( 'wp_ajax_bd_newsletter',        'branddevelopers_newsletter_subscribe' );
add_action( 'wp_ajax_nopriv_bd_newsletter', 'branddevelopers_newsletter_subscribe' );

/* ============================================================
   TEMPLATE HELPER FUNCTIONS (from new file)
   ============================================================ */

function bd_get_case_studies( $count = 6, $featured_only = false ) {
    $args = array(
        'post_type'      => 'case_study',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    if ( $featured_only ) {
        $args['meta_query'] = array( array( 'key' => '_bd_featured', 'value' => '1' ) );
    }
    return new WP_Query( $args );
}

function bd_get_team_members( $count = -1 ) {
    return new WP_Query( array(
        'post_type'      => 'team_member',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ) );
}

function bd_get_testimonials( $count = 3 ) {
    return new WP_Query( array(
        'post_type'      => 'testimonial',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
    ) );
}

function bd_render_workflow( $dark = true ) {
    $steps = array(
        array( 'num' => '01', 'title' => 'Discover', 'sub' => "We immerse ourselves in your brand's story.",        'desc' => 'We begin by exploring your vision, goals, and audience. This helps us uncover the insights that shape everything we create.',           'link' => 'Start with Discovery'   ),
        array( 'num' => '02', 'title' => 'Create',   'sub' => 'We turn insight into intelligent, design-led solutions.', 'desc' => "Using what we've learned, we outline a focused plan — from messaging to moodboards — that sets the creative direction.",        'link' => 'Explore Our Designs'    ),
        array( 'num' => '03', 'title' => 'Launch',   'sub' => 'We deliver refined digital experiences built to perform.', 'desc' => "Here, we shape bold, thoughtful designs that reflect your brand's personality and bring it to life across every touchpoint.", 'link' => 'View Strategy Samples'  ),
        array( 'num' => '04', 'title' => 'Grow',     'sub' => 'We refine, measure, and evolve with your goals.',    'desc' => 'We refine every detail, test thoroughly, and launch your project smoothly — then measure and iterate for ongoing growth.',          'link' => 'See Final Deliverables' ),
    );
    ?>
    <section class="workflow-section">
        <div class="container">
            <div class="section-header section-header--center">
                <span class="small-head" style="color:rgba(255,255,255,0.6)"><?php _e( 'How We Work', 'branddevelopers' ); ?></span>
                <h2><?php _e( 'A Simple, Strategic Workflow', 'branddevelopers' ); ?><span style="color:#4d79cc">*</span></h2>
            </div>
            <div class="workflow-steps">
                <?php foreach ( $steps as $i => $step ) :
                    $is_right = ( $i % 2 !== 0 ); ?>
                <div class="workflow-step <?php echo $is_right ? 'workflow-step--right' : ''; ?> fade-up">
                    <div class="workflow-step__number"><?php echo esc_html( $step['num'] ); ?></div>
                    <div class="workflow-step__num-badge"><?php echo esc_html( $step['num'] ); ?></div>
                    <h4><?php echo esc_html( $step['title'] ); ?> &mdash; <span style="font-weight:300;opacity:0.7"><?php echo esc_html( $step['sub'] ); ?></span></h4>
                    <p><?php echo esc_html( $step['desc'] ); ?></p>
                    <a href="#" class="workflow-step__link"><?php echo esc_html( $step['link'] ); ?> &rarr;</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function bd_render_team( $show_link = true ) {
    $team = bd_get_team_members( 3 );
    ?>
    <section class="team-section">
        <div class="container">
            <div class="team-header">
                <div>
                    <span class="small-head" style="color:rgba(255,255,255,0.5)"><?php _e( 'Meet the Makers', 'branddevelopers' ); ?></span>
                    <h2 class="text-white"><?php _e( 'Meet the Team Building the Future', 'branddevelopers' ); ?><span style="color:#4d79cc">*</span></h2>
                </div>
                <?php if ( $show_link ) : ?>
                <a href="#" class="btn btn--outline"><?php _e( 'View all members', 'branddevelopers' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="team-grid">
                <?php if ( $team->have_posts() ) :
                    while ( $team->have_posts() ) : $team->the_post();
                        $role = get_post_meta( get_the_ID(), '_bd_role', true ); ?>
                <div class="team-card fade-up">
                    <div class="team-card__photo">
                        <?php if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'bd-team' );
                        else : ?>
                            <div style="width:100%;height:100%;min-height:280px;background:#2a2a2a;display:flex;align-items:center;justify-content:center;">
                                <i class="fas fa-user" style="font-size:48px;color:rgba(255,255,255,0.2)"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="team-card__info">
                        <h5 class="team-card__name"><?php the_title(); ?></h5>
                        <?php if ( $role ) : ?>
                        <p class="team-card__role"><?php echo esc_html( $role ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php   endwhile;
                    wp_reset_postdata();
                else :
                    $placeholders = array(
                        array( 'name' => 'Ryan Taffe',  'role' => 'Lead Creative Partner'  ),
                        array( 'name' => 'Kay Olumofe', 'role' => 'Lead Developer Founder' ),
                        array( 'name' => 'Rosabel',     'role' => 'Developer'               ),
                    );
                    foreach ( $placeholders as $p ) : ?>
                <div class="team-card fade-up">
                    <div class="team-card__photo" style="background:#2a2a2a;min-height:280px;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-user" style="font-size:48px;color:rgba(255,255,255,0.2)"></i>
                    </div>
                    <div class="team-card__info">
                        <h5 class="team-card__name"><?php echo esc_html( $p['name'] ); ?></h5>
                        <p class="team-card__role"><?php echo esc_html( $p['role'] ); ?></p>
                    </div>
                </div>
                <?php   endforeach;
                endif; ?>
            </div>
        </div>
    </section>
    <?php
}

function bd_render_newsletter() {
    ?>
    <section class="newsletter-section section--dark">
        <div class="container">
            <div class="newsletter-inner">
                <div>
                    <h3><?php _e( 'Subscribe for the latest news!', 'branddevelopers' ); ?></h3>
                    <p><?php _e( 'Get insights, strategies and inspiration straight to your inbox.', 'branddevelopers' ); ?></p>
                </div>
                <form class="newsletter-form" id="bd-newsletter-form">
                    <input type="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'branddevelopers' ); ?>" required>
                    <button type="submit"><?php _e( 'Subscribe', 'branddevelopers' ); ?></button>
                </form>
            </div>
        </div>
    </section>
    <?php
}

function bd_render_cta( $title = '', $desc = '' ) {
    $title = $title ? $title : __( 'Ready to Go', 'branddevelopers' );
    $desc  = $desc  ? $desc  : __( "I've designed for tech startups, SaaS platforms, healthcare, finance, and creative agencies. Each project is crafted with purpose.", 'branddevelopers' );
    $contact_url = home_url( '/contact' );
    ?>
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner">
                <div>
                    <h2><?php echo esc_html( $title ); ?></h2>
                    <p><?php echo esc_html( $desc ); ?></p>
                    <a href="<?php echo esc_url( $contact_url ); ?>" class="btn btn--primary"><?php _e( 'Get in touch', 'branddevelopers' ); ?></a>
                </div>
                <div class="cta-right">
                    <h3><?php _e( 'Start Today?', 'branddevelopers' ); ?></h3>
                    <div class="cta-actions">
                        <a href="tel:+19324245321" class="btn btn--outline-dark"><?php _e( 'Talk now', 'branddevelopers' ); ?></a>
                        <a href="<?php echo esc_url( $contact_url ); ?>" class="btn btn--primary"><?php _e( 'Start today', 'branddevelopers' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

/* ============================================================
   EXCERPT (from new file)
   ============================================================ */
function branddevelopers_excerpt_length( $length ) { return 20; }
add_filter( 'excerpt_length', 'branddevelopers_excerpt_length' );

function branddevelopers_excerpt_more( $more ) { return '...'; }
add_filter( 'excerpt_more', 'branddevelopers_excerpt_more' );

/* ============================================================
   BODY CLASS (from new file)
   ============================================================ */
function branddevelopers_body_classes( $classes ) {
    if ( is_singular() && ! is_attachment() ) {
        $classes[] = 'hentry-page';
    }
    return $classes;
}
add_filter( 'body_class', 'branddevelopers_body_classes' );

/* ============================================================
   CLEAN UP WP HEAD (from new file)
   ============================================================ */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
