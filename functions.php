<?php
/**
 * BrandDevelopers Theme Functions
 * Custom WordPress theme for BrandDevelopers agency
 */

if ( ! defined( 'ABSPATH' ) ) exit;

//Adding Theme Panel to Admin Section
require_once get_template_directory() . '/inc/theme-settings.php';

/* ============================================================
   THEME SETUP
   ============================================================ */
function branddevelopers_setup() {
    load_theme_textdomain( 'branddevelopers', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Custom logo
    add_theme_support( 'custom-logo', [
        'height'      => 72,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ] );

    // Register nav menus
    register_nav_menus( [
        'primary'  => __( 'Primary Navigation', 'branddevelopers' ),
        'footer-1' => __( 'Footer: Company', 'branddevelopers' ),
        'footer-2' => __( 'Footer: Projects', 'branddevelopers' ),
        'footer-3' => __( 'Footer: Support', 'branddevelopers' ),
    ] );

    // Image sizes
    add_image_size( 'bd-hero',        1920, 900, true );
    add_image_size( 'bd-portfolio',    800, 600, true );
    add_image_size( 'bd-team',         400, 400, true );
    add_image_size( 'bd-blog',         800, 450, true );
    add_image_size( 'bd-case-study',  1200, 700, true );
}
add_action( 'after_setup_theme', 'branddevelopers_setup' );

/* ============================================================
   ENQUEUE SCRIPTS & STYLES
   ============================================================ */
function branddevelopers_scripts() {
    // Google Fonts — Anta + DM Sans (from Figma tokens)
    wp_enqueue_style(
        'bd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Anta&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap',
        [],
        null
    );

    // Font Awesome for icons
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );

    // Theme stylesheet
    wp_enqueue_style(
        'branddevelopers-style',
        get_stylesheet_uri(),
        [ 'bd-google-fonts', 'font-awesome' ],
        wp_get_theme()->get( 'Version' )
    );

    // Main JS
    wp_enqueue_script(
        'branddevelopers-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );

    // Pass AJAX URL to JS
    wp_localize_script( 'branddevelopers-main', 'bd_ajax', [
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'bd_nonce' ),
    ] );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'branddevelopers_scripts' );

/* ============================================================
   CUSTOM POST TYPE: CASE STUDIES
   ============================================================ */
function branddevelopers_register_post_types() {
    register_post_type( 'case_study', [
        'labels' => [
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
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case-studies' ],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'show_in_rest'       => true,
    ] );

    // Case Study Categories (taxonomy)
    register_taxonomy( 'case_study_category', 'case_study', [
        'hierarchical'      => true,
        'labels'            => [
            'name'          => __( 'Categories', 'branddevelopers' ),
            'singular_name' => __( 'Category', 'branddevelopers' ),
        ],
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'case-study-category' ],
        'show_in_rest'      => true,
    ] );
}
add_action( 'init', 'branddevelopers_register_post_types' );

/* ============================================================
   CUSTOM POST TYPE: TEAM MEMBERS
   ============================================================ */
function branddevelopers_register_team() {
    register_post_type( 'team_member', [
        'labels' => [
            'name'          => __( 'Team Members', 'branddevelopers' ),
            'singular_name' => __( 'Team Member', 'branddevelopers' ),
            'add_new_item'  => __( 'Add New Team Member', 'branddevelopers' ),
            'edit_item'     => __( 'Edit Team Member', 'branddevelopers' ),
            'menu_name'     => __( 'Team', 'branddevelopers' ),
        ],
        'public'         => false,
        'show_ui'        => true,
        'show_in_menu'   => true,
        'menu_position'  => 6,
        'menu_icon'      => 'dashicons-groups',
        'supports'       => [ 'title', 'thumbnail', 'custom-fields' ],
        'show_in_rest'   => true,
    ] );
}
add_action( 'init', 'branddevelopers_register_team' );

/* ============================================================
   CUSTOM POST TYPE: TESTIMONIALS
   ============================================================ */
function branddevelopers_register_testimonials() {
    register_post_type( 'testimonial', [
        'labels' => [
            'name'          => __( 'Testimonials', 'branddevelopers' ),
            'singular_name' => __( 'Testimonial', 'branddevelopers' ),
            'add_new_item'  => __( 'Add New Testimonial', 'branddevelopers' ),
            'edit_item'     => __( 'Edit Testimonial', 'branddevelopers' ),
            'menu_name'     => __( 'Testimonials', 'branddevelopers' ),
        ],
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'menu_position' => 7,
        'menu_icon'     => 'dashicons-format-quote',
        'supports'      => [ 'title', 'editor', 'custom-fields' ],
        'show_in_rest'  => true,
    ] );
}
add_action( 'init', 'branddevelopers_register_testimonials' );

/* ============================================================
   CUSTOM META BOXES
   ============================================================ */
function branddevelopers_add_meta_boxes() {
    // Case Study meta
    add_meta_box( 'bd_case_study_meta', __( 'Case Study Details', 'branddevelopers' ), 'branddevelopers_case_study_meta_cb', 'case_study', 'normal', 'high' );
    // Team member meta
    add_meta_box( 'bd_team_meta', __( 'Team Member Details', 'branddevelopers' ), 'branddevelopers_team_meta_cb', 'team_member', 'normal', 'high' );
    // Testimonial meta
    add_meta_box( 'bd_testimonial_meta', __( 'Testimonial Details', 'branddevelopers' ), 'branddevelopers_testimonial_meta_cb', 'testimonial', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'branddevelopers_add_meta_boxes' );

function branddevelopers_case_study_meta_cb( $post ) {
    wp_nonce_field( 'bd_case_study_nonce', 'bd_case_study_nonce' );
    $client   = get_post_meta( $post->ID, '_bd_client', true );
    $service  = get_post_meta( $post->ID, '_bd_service', true );
    $year     = get_post_meta( $post->ID, '_bd_year', true );
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
    $role   = get_post_meta( $post->ID, '_bd_role', true );
    $email  = get_post_meta( $post->ID, '_bd_email', true );
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
    $author  = get_post_meta( $post->ID, '_bd_author', true );
    $company = get_post_meta( $post->ID, '_bd_company', true );
    $role    = get_post_meta( $post->ID, '_bd_role', true );
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

// Save meta
function branddevelopers_save_meta( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // Case Study
    if ( isset( $_POST['bd_case_study_nonce'] ) && wp_verify_nonce( $_POST['bd_case_study_nonce'], 'bd_case_study_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_client',   sanitize_text_field( ( isset( \$_POST['bd_client'] ) ? \$_POST['bd_client'] : '' ) ) );
            update_post_meta( $post_id, '_bd_service',  sanitize_text_field( ( isset( \$_POST['bd_service'] ) ? \$_POST['bd_service'] : '' ) ) );
            update_post_meta( $post_id, '_bd_year',     sanitize_text_field( ( isset( \$_POST['bd_year'] ) ? \$_POST['bd_year'] : '' ) ) );
            update_post_meta( $post_id, '_bd_featured', isset( $_POST['bd_featured'] ) ? '1' : '' );
        }
    }
    // Team Member
    if ( isset( $_POST['bd_team_nonce'] ) && wp_verify_nonce( $_POST['bd_team_nonce'], 'bd_team_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_role',     sanitize_text_field( ( isset( \$_POST['bd_role'] ) ? \$_POST['bd_role'] : '' ) ) );
            update_post_meta( $post_id, '_bd_email',    sanitize_email( ( isset( \$_POST['bd_email'] ) ? \$_POST['bd_email'] : '' ) ) );
            update_post_meta( $post_id, '_bd_linkedin', esc_url_raw( ( isset( \$_POST['bd_linkedin'] ) ? \$_POST['bd_linkedin'] : '' ) ) );
        }
    }
    // Testimonial
    if ( isset( $_POST['bd_testimonial_nonce'] ) && wp_verify_nonce( $_POST['bd_testimonial_nonce'], 'bd_testimonial_nonce' ) ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta( $post_id, '_bd_author',  sanitize_text_field( ( isset( \$_POST['bd_author'] ) ? \$_POST['bd_author'] : '' ) ) );
            update_post_meta( $post_id, '_bd_company', sanitize_text_field( ( isset( \$_POST['bd_company'] ) ? \$_POST['bd_company'] : '' ) ) );
            update_post_meta( $post_id, '_bd_role',    sanitize_text_field( ( isset( \$_POST['bd_role'] ) ? \$_POST['bd_role'] : '' ) ) );
        }
    }
}
add_action( 'save_post', 'branddevelopers_save_meta' );

/* ============================================================
   ELEMENTOR SUPPORT
   ============================================================ */
function branddevelopers_elementor_support() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'branddevelopers_elementor_support' );

// Make theme width match Elementor
function branddevelopers_elementor_settings( $config ) {
    $config['default_generic_fonts'] = 'DM Sans, sans-serif';
    return $config;
}
add_filter( 'elementor/frontend/settings/config', 'branddevelopers_elementor_settings' );

/* ============================================================
   WIDGETS / SIDEBARS
   ============================================================ */
function branddevelopers_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'branddevelopers' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Widgets for the blog sidebar.', 'branddevelopers' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ] );
    register_sidebar( [
        'name'          => __( 'Footer Widget Area', 'branddevelopers' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in the footer.', 'branddevelopers' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer-widget-title">',
        'after_title'   => '</h5>',
    ] );
}
add_action( 'widgets_init', 'branddevelopers_widgets_init' );

/* ============================================================
   NEWSLETTER AJAX HANDLER
   ============================================================ */
function branddevelopers_newsletter_subscribe() {
    check_ajax_referer( 'bd_nonce', 'nonce' );
    $email = sanitize_email( ( isset( \$_POST['email'] ) ? \$_POST['email'] : '' ) );
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'branddevelopers' ) ) );
    }
    // Hook into your email service here (Mailchimp, etc.)
    // For now, store in options as a simple list
    $subscribers = get_option( 'bd_newsletter_subscribers', [] );
    if ( ! in_array( $email, $subscribers ) ) {
        $subscribers[] = $email;
        update_option( 'bd_newsletter_subscribers', $subscribers );
    }
    wp_send_json_success( array( 'message' => __( 'Thank you for subscribing!', 'branddevelopers' ) ) );
}
add_action( 'wp_ajax_bd_newsletter',        'branddevelopers_newsletter_subscribe' );
add_action( 'wp_ajax_nopriv_bd_newsletter', 'branddevelopers_newsletter_subscribe' );

/* ============================================================
   TEMPLATE HELPERS
   ============================================================ */

/**
 * Get case studies query
 */
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

/**
 * Get team members
 */
function bd_get_team_members( $count = -1 ) {
    return new WP_Query( [
        'post_type'      => 'team_member',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ] );
}

/**
 * Get testimonials
 */
function bd_get_testimonials( $count = 3 ) {
    return new WP_Query( [
        'post_type'      => 'testimonial',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
    ] );
}

/**
 * Render the workflow steps (shared across pages)
 */
function bd_render_workflow( $dark = true ) {
    $steps = array(
        array( 'num' => '01', 'title' => 'Discover', 'sub' => 'We immerse ourselves in your brand\'s story.', 'desc' => 'We begin by exploring your vision, goals, and audience. This helps us uncover the insights that shape everything we create.', 'link' => 'Start with Discovery' ],
        [ 'num' => '02', 'title' => 'Create',   'sub' => 'We turn insight into intelligent, design-led solutions.', 'desc' => 'Using what we\'ve learned, we outline a focused plan — from messaging to moodboards — that sets the creative direction.', 'link' => 'Explore Our Designs' ],
        [ 'num' => '03', 'title' => 'Launch',   'sub' => 'We deliver refined digital experiences built to perform.', 'desc' => 'Here, we shape bold, thoughtful designs that reflect your brand\'s personality and bring it to life across every touchpoint.', 'link' => 'View Strategy Samples' ],
        [ 'num' => '04', 'title' => 'Grow',     'sub' => 'We refine, measure, and evolve with your goals.', 'desc' => 'We refine every detail, test thoroughly, and launch your project smoothly — then measure and iterate for ongoing growth.', 'link' => 'See Final Deliverables' ],
    ];
    $section_class = $dark ? 'workflow-section' : 'workflow-section workflow-section--light';
    ?>
    <section class="<?php echo esc_attr( $section_class ); ?>">
        <div class="container">
            <div class="section-header section-header--center">
                <span class="small-head" style="color:rgba(255,255,255,0.6)"><?php _e( 'How We Work', 'branddevelopers' ); ?></span>
                <h2><?php _e( 'A Simple, Strategic Workflow', 'branddevelopers' ); ?><span style="color:#4d79cc">*</span></h2>
            </div>
            <div class="workflow-steps">
                <?php foreach ( $steps as $i => $step ) :
                    $is_right = ( $i % 2 !== 0 );
                ?>
                <div class="workflow-step <?php echo $is_right ? 'workflow-step--right' : ''; ?> fade-up">
                    <div class="workflow-step__number"><?php echo esc_html( $step['num'] ); ?></div>
                    <div class="workflow-step__num-badge"><?php echo esc_html( $step['num'] ); ?></div>
                    <h4><?php echo esc_html( $step['title'] ); ?> — <span style="font-weight:300;opacity:0.7"><?php echo esc_html( $step['sub'] ); ?></span></h4>
                    <p><?php echo esc_html( $step['desc'] ); ?></p>
                    <a href="#" class="workflow-step__link"><?php echo esc_html( $step['link'] ); ?> →</a>
                </div>
                <?php if ( $is_right && $i < count($steps) - 1 ) : ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

/**
 * Render team section
 */
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
                <a href="<?php echo esc_url( get_post_type_archive_link( 'team_member' ) ); ?>" class="btn btn--outline"><?php _e( 'View all members', 'branddevelopers' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="team-grid">
                <?php if ( $team->have_posts() ) :
                    while ( $team->have_posts() ) : $team->the_post();
                        $role = get_post_meta( get_the_ID(), '_bd_role', true );
                ?>
                <div class="team-card fade-up">
                    <div class="team-card__photo">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'bd-team' ); ?>
                        <?php else : ?>
                            <div style="width:100%;height:100%;background:#2a2a2a;display:flex;align-items:center;justify-content:center;">
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
                else : ?>
                    <!-- Placeholder team cards when no members added yet -->
                    <?php $placeholders = array(
                        array( 'name' => 'Ryan Taffe',   'role' => 'Lead Creative Partner',  'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80&fit=crop&crop=face' ),
                        array( 'name' => 'Kay Olumofe',  'role' => 'Lead Developer Founder', 'img' => 'https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=400&q=80&fit=crop&crop=face' ),
                        array( 'name' => 'Rosabel',      'role' => 'Developer',               'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80&fit=crop&crop=face' ),
                    );
                    foreach ( $placeholders as $p ) : ?>
                    <div class="team-card fade-up">
                        <div class="team-card__photo" style="overflow:hidden;min-height:280px">
                            <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" style="width:100%;height:100%;object-fit:cover;min-height:280px">
                        </div>
                        <div class="team-card__info">
                            <h5 class="team-card__name"><?php echo esc_html( $p['name'] ); ?></h5>
                            <p class="team-card__role"><?php echo esc_html( $p['role'] ); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
}

/**
 * Render newsletter section
 */
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

/**
 * Render CTA section
 */
function bd_render_cta( $title = '', $desc = '' ) {
    $title = $title ?: __( 'Ready to Go', 'branddevelopers' );
    $desc  = $desc  ?: __( "I've designed for tech startups, SaaS platforms, healthcare, finance, and creative agencies. Each project is crafted with purpose.", 'branddevelopers' );
    ?>
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner">
                <div>
                    <h2><?php echo esc_html( $title ); ?></h2>
                    <p><?php echo esc_html( $desc ); ?></p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn--primary"><?php _e( 'Get in touch', 'branddevelopers' ); ?></a>
                </div>
                <div class="cta-right">
                    <h3><?php _e( 'Start Today?', 'branddevelopers' ); ?></h3>
                    <div class="cta-actions">
                        <a href="tel:+14168466483" class="btn btn--outline-dark"><?php _e( 'Talk now', 'branddevelopers' ); ?></a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn--primary"><?php _e( 'Start today', 'branddevelopers' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

/* ============================================================
   CUSTOM EXCERPT LENGTH
   ============================================================ */
function branddevelopers_excerpt_length( $length ) { return 20; }
add_filter( 'excerpt_length', 'branddevelopers_excerpt_length' );
function branddevelopers_excerpt_more( $more ) { return '...'; }
add_filter( 'excerpt_more', 'branddevelopers_excerpt_more' );

/* ============================================================
   BODY CLASS
   ============================================================ */
function branddevelopers_body_classes( $classes ) {
    if ( is_singular() && ! is_attachment() ) {
        $classes[] = 'hentry-page';
    }
    return $classes;
}
add_filter( 'body_class', 'branddevelopers_body_classes' );

/* ============================================================
   CLEAN UP WP HEAD
   ============================================================ */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* ============================================================
   CONTACT FORM HANDLER
   ============================================================ */
function bd_handle_contact_form() {
    if ( ! isset( $_POST['bd_contact_nonce'] ) ) return;
    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bd_contact_nonce'] ) ), 'bd_contact_form' ) ) return;

    // Honeypot check
    if ( ! empty( $_POST['bd_website_url'] ) ) {
        wp_safe_redirect( add_query_arg( 'contact', 'error', esc_url_raw( wp_unslash( $_POST['redirect_url'] ) ) ) );
        exit;
    }

    $first    = sanitize_text_field( wp_unslash( ( isset( $_POST['bd_first_name'] ) ? $_POST['bd_first_name'] : '' ) ) );
    $last     = sanitize_text_field( wp_unslash( ( isset( $_POST['bd_last_name'] ) ? $_POST['bd_last_name'] : '' ) ) );
    $email    = sanitize_email(      wp_unslash( ( isset( $_POST['bd_email'] ) ? $_POST['bd_email'] : '' ) ) );
    $phone    = sanitize_text_field( wp_unslash( ( isset( $_POST['bd_phone'] ) ? $_POST['bd_phone'] : '' ) ) );
    $service  = sanitize_text_field( wp_unslash( ( isset( $_POST['bd_service'] ) ? $_POST['bd_service'] : '' ) ) );
    $budget   = sanitize_text_field( wp_unslash( ( isset( $_POST['bd_budget'] ) ? $_POST['bd_budget'] : '' ) ) );
    $message  = sanitize_textarea_field( wp_unslash( ( isset( $_POST['bd_message'] ) ? $_POST['bd_message'] : '' ) ) );
    $redirect = esc_url_raw( wp_unslash( ( isset( $_POST['redirect_url'] ) ? $_POST['redirect_url'] : home_url( '/contact' ) ) ) );

    if ( ! $first || ! $email || ! $message ) {
        wp_safe_redirect( add_query_arg( 'contact', 'error', $redirect ) );
        exit;
    }

    $to      = bd_get( 'bd_email' ) ?: get_option( 'admin_email' );
    $subject = sprintf( '[Brand Developers] New enquiry from %s %s', $first, $last );
    $body    = "Name: {$first} {$last}\n";
    $body   .= "Email: {$email}\n";
    if ( $phone )   $body .= "Phone: {$phone}\n";
    if ( $service ) $body .= "Service: {$service}\n";
    if ( $budget )  $body .= "Budget: {$budget}\n";
    $body   .= "\nMessage:\n{$message}\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$first} {$last} <{$email}>",
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    wp_safe_redirect( add_query_arg( 'contact', $sent ? 'success' : 'error', $redirect ) );
    exit;
}
add_action( 'admin_post_bd_contact_submit',        'bd_handle_contact_form' );
add_action( 'admin_post_nopriv_bd_contact_submit', 'bd_handle_contact_form' );
