<?php
/**
 * BrandDevelopers — Theme Settings
 *
 * 1. WP Admin custom settings page  (WP Admin → Theme Settings)
 * 2. WordPress Customizer integration (Appearance → Customize)
 *
 * Template usage:  bd_get( 'bd_primary_color' )
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ============================================================
   SETTINGS SCHEMA — single source of truth
   Tab order reflects priority: Branding first, pages last.
   ============================================================ */
function bd_settings_schema() {
    return array(

        // ── 1. BRANDING ───────────────────────────────────────
        'branding' => array(
            'title' => 'Branding',
            'icon'  => 'dashicons-art',
            'desc'  => 'Logo, primary colour, accent colour and site identity.',
            'fields' => array(
                'bd_logo'              => array( 'label' => 'Logo Image',              'type' => 'image',  'default' => '',        'desc' => 'Upload your logo (PNG or SVG, transparent background recommended)' ),
                'bd_logo_width'        => array( 'label' => 'Logo Width (px)',         'type' => 'number', 'default' => '160',     'desc' => 'Max width of the logo in the header' ),
                'bd_favicon'           => array( 'label' => 'Favicon',                'type' => 'image',  'default' => '',        'desc' => 'Small icon shown in browser tabs (32×32 or 64×64 PNG)' ),
                'bd_primary_color'     => array( 'label' => 'Primary Colour',         'type' => 'color',  'default' => '#003399', 'desc' => 'Main brand blue — used for buttons, links, accents' ),
                'bd_primary_dark'      => array( 'label' => 'Primary Colour (Dark)',  'type' => 'color',  'default' => '#002277', 'desc' => 'Hover/pressed state of the primary colour' ),
                'bd_accent_color'      => array( 'label' => 'Accent Colour',          'type' => 'color',  'default' => '#4d79cc', 'desc' => 'Secondary accent — used on highlights and tags' ),
                'bd_dark_bg'           => array( 'label' => 'Dark Background',        'type' => 'color',  'default' => '#0d0d0d', 'desc' => 'Background for dark sections (hero, team, footer)' ),
                'bd_light_bg'          => array( 'label' => 'Light Background',       'type' => 'color',  'default' => '#F5F3EF', 'desc' => 'Off-white background for alternating sections' ),
            ),
        ),

        // ── 2. TYPOGRAPHY ─────────────────────────────────────
        'typography' => array(
            'title' => 'Typography',
            'icon'  => 'dashicons-editor-textcolor',
            'desc'  => 'Heading font, body font and base sizes.',
            'fields' => array(
                'bd_font_heading'      => array( 'label' => 'Heading Font',           'type' => 'font',   'default' => 'Anta',     'desc' => 'Used for all H1–H5 headings' ),
                'bd_font_body'         => array( 'label' => 'Body Font',              'type' => 'font',   'default' => 'DM Sans',  'desc' => 'Used for paragraphs, labels, buttons' ),
                'bd_font_size_base'    => array( 'label' => 'Base Font Size (px)',    'type' => 'number', 'default' => '16',       'desc' => 'Body text base size' ),
                'bd_font_size_h1'      => array( 'label' => 'H1 Size (px)',           'type' => 'number', 'default' => '96',       'desc' => '' ),
                'bd_font_size_h2'      => array( 'label' => 'H2 Size (px)',           'type' => 'number', 'default' => '60',       'desc' => '' ),
                'bd_font_size_h3'      => array( 'label' => 'H3 Size (px)',           'type' => 'number', 'default' => '34',       'desc' => '' ),
                'bd_font_weight_heading' => array( 'label' => 'Heading Font Weight', 'type' => 'select', 'default' => '400',
                    'options' => array( '300' => 'Light (300)', '400' => 'Regular (400)', '500' => 'Medium (500)', '600' => 'SemiBold (600)', '700' => 'Bold (700)' ),
                    'desc' => '' ),
            ),
        ),

        // ── 3. HEADER ─────────────────────────────────────────
        'header' => array(
            'title' => 'Header',
            'icon'  => 'dashicons-align-center',
            'desc'  => 'Header background colour, text colour, height and sticky behaviour.',
            'fields' => array(
                'bd_header_bg'         => array( 'label' => 'Header Background',      'type' => 'color',  'default' => 'transparent', 'desc' => 'Default (non-scrolled) header background. Use "transparent" to overlay the hero.' ),
                'bd_header_bg_scrolled'=> array( 'label' => 'Header Background (Scrolled)', 'type' => 'color', 'default' => '#0d0d0d', 'desc' => 'Background once the user scrolls down' ),
                'bd_header_text_color' => array( 'label' => 'Nav Link Colour',        'type' => 'color',  'default' => '#ffffff',     'desc' => 'Colour of navigation menu links' ),
                'bd_header_link_hover' => array( 'label' => 'Nav Link Hover Colour',  'type' => 'color',  'default' => '#ffffff',     'desc' => '' ),
                'bd_header_height'     => array( 'label' => 'Header Height (px)',     'type' => 'number', 'default' => '72',          'desc' => 'Height of the header bar' ),
                'bd_header_sticky'     => array( 'label' => 'Sticky Header',          'type' => 'toggle', 'default' => '1',           'desc' => 'Keep header fixed at the top while scrolling' ),
                'bd_header_show_social'=> array( 'label' => 'Show Social Icons',      'type' => 'toggle', 'default' => '1',           'desc' => 'Display Instagram, LinkedIn, X icons in header' ),
            ),
        ),

        // ── 4. FOOTER ─────────────────────────────────────────
        'footer' => array(
            'title' => 'Footer',
            'icon'  => 'dashicons-align-full-width',
            'desc'  => 'Footer colours, column layout and bottom bar text.',
            'fields' => array(
                'bd_footer_bg'         => array( 'label' => 'Footer Background',      'type' => 'color',  'default' => '#0d0d0d',     'desc' => 'Main footer background colour' ),
                'bd_footer_text_color' => array( 'label' => 'Footer Text Colour',     'type' => 'color',  'default' => '#ffffff',     'desc' => 'Colour of footer body text' ),
                'bd_footer_link_color' => array( 'label' => 'Footer Link Colour',     'type' => 'color',  'default' => 'rgba(255,255,255,0.45)', 'desc' => 'Colour of footer navigation links' ),
                'bd_footer_columns'    => array( 'label' => 'Number of Columns',      'type' => 'select', 'default' => '5',
                    'options' => array( '2' => '2 Columns', '3' => '3 Columns', '4' => '4 Columns', '5' => '5 Columns (default)' ),
                    'desc' => 'How many columns appear in the footer widget area' ),
                'bd_footer_copyright'  => array( 'label' => 'Copyright Text',         'type' => 'text',   'default' => '© {year} Brand Developers. All rights reserved.', 'desc' => 'Use {year} to insert the current year automatically' ),
                'bd_footer_show_newsletter' => array( 'label' => 'Show Newsletter Bar', 'type' => 'toggle', 'default' => '1', 'desc' => 'Show the email subscribe section above the footer' ),
                'bd_footer_show_cta'   => array( 'label' => 'Show CTA Bar',           'type' => 'toggle', 'default' => '1',           'desc' => 'Show the Ready to Go / Start Today section above the footer' ),
            ),
        ),

        // ── 5. GENERAL / CONTACT ──────────────────────────────
        'general' => array(
            'title' => 'General',
            'icon'  => 'dashicons-admin-settings',
            'desc'  => 'Contact details and social media links used across the site.',
            'fields' => array(
                'bd_phone'             => array( 'label' => 'Phone Number',           'type' => 'text',   'default' => '+1 (416) 846-6483',      'desc' => 'Used in footer and Talk Now button' ),
                'bd_email'             => array( 'label' => 'Email Address',          'type' => 'text',   'default' => 'info@brandevelopers.ca', 'desc' => 'Shown in footer' ),
                'bd_address'           => array( 'label' => 'Office Address',         'type' => 'text',   'default' => 'Toronto, Ontario, Canada','desc' => 'Shown in footer' ),
                'bd_instagram_url'     => array( 'label' => 'Instagram URL',          'type' => 'url',    'default' => '',                       'desc' => '' ),
                'bd_linkedin_url'      => array( 'label' => 'LinkedIn URL',           'type' => 'url',    'default' => '',                       'desc' => '' ),
                'bd_twitter_url'       => array( 'label' => 'X / Twitter URL',        'type' => 'url',    'default' => '',                       'desc' => '' ),
                'bd_facebook_url'      => array( 'label' => 'Facebook URL',           'type' => 'url',    'default' => '',                       'desc' => '' ),
            ),
        ),

        // ── 6. HOMEPAGE ───────────────────────────────────────
        'homepage' => array(
            'title' => 'Homepage',
            'icon'  => 'dashicons-admin-home',
            'desc'  => 'Hero section image, headline and call-to-action.',
            'fields' => array(
                'bd_hero_image'        => array( 'label' => 'Hero Background Image',  'type' => 'image',    'default' => '', 'desc' => 'Full-screen photo behind the hero headline' ),
                'bd_hero_subtitle'     => array( 'label' => 'Hero Eyebrow Text',      'type' => 'text',     'default' => 'Boutique Branding & Web Development', 'desc' => '' ),
                'bd_hero_title'        => array( 'label' => 'Headline Line 1',        'type' => 'text',     'default' => 'Where Branding',    'desc' => '' ),
                'bd_hero_title_2'      => array( 'label' => 'Headline Line 2',        'type' => 'text',     'default' => 'Meets Development', 'desc' => '' ),
                'bd_hero_description'  => array( 'label' => 'Hero Description',       'type' => 'textarea', 'default' => 'At Brand Developers, we craft digital experiences that merge creativity and technology — brands and websites that not only look exceptional but perform effortlessly.', 'desc' => '' ),
                'bd_hero_cta_label'    => array( 'label' => 'Button Text',            'type' => 'text',     'default' => 'Get a Free Audit',  'desc' => '' ),
                'bd_hero_cta_url'      => array( 'label' => 'Button URL',             'type' => 'url',      'default' => '/contact',          'desc' => '' ),
            ),
        ),

        // ── 7. ABOUT PAGE ─────────────────────────────────────
        'about' => array(
            'title' => 'About Page',
            'icon'  => 'dashicons-admin-users',
            'desc'  => 'Hero image, portrait photo, intro text and stats.',
            'fields' => array(
                'bd_about_hero_image'  => array( 'label' => 'Hero Background Image',  'type' => 'image',    'default' => '', 'desc' => '' ),
                'bd_about_portrait'    => array( 'label' => 'Portrait Photo',         'type' => 'image',    'default' => '', 'desc' => 'Photo shown alongside the skills bars' ),
                'bd_about_tagline'     => array( 'label' => 'Tagline',                'type' => 'text',     'default' => 'Digital Experiences with 25+ Years of Combined Purpose', 'desc' => '' ),
                'bd_about_intro_1'     => array( 'label' => 'Intro Paragraph 1',      'type' => 'textarea', 'default' => 'Our boutique team blends artistry and technical expertise to help brands stand out and scale with purpose.', 'desc' => '' ),
                'bd_about_intro_2'     => array( 'label' => 'Intro Paragraph 2',      'type' => 'textarea', 'default' => 'Building brand identities that connect and inspire — from strategy through to a polished digital product delivered on time.', 'desc' => '' ),
                'bd_stat_1_num'        => array( 'label' => 'Stat 1 — Number',        'type' => 'text',     'default' => '420+',               'desc' => '' ),
                'bd_stat_1_label'      => array( 'label' => 'Stat 1 — Label',         'type' => 'text',     'default' => 'Projects Delivered', 'desc' => '' ),
                'bd_stat_2_num'        => array( 'label' => 'Stat 2 — Number',        'type' => 'text',     'default' => '300+',               'desc' => '' ),
                'bd_stat_2_label'      => array( 'label' => 'Stat 2 — Label',         'type' => 'text',     'default' => 'Clients Worldwide',  'desc' => '' ),
                'bd_stat_3_num'        => array( 'label' => 'Stat 3 — Number',        'type' => 'text',     'default' => '14+',                'desc' => '' ),
                'bd_stat_3_label'      => array( 'label' => 'Stat 3 — Label',         'type' => 'text',     'default' => 'Years in UX/UI Design', 'desc' => '' ),
            ),
        ),

        // ── 8. SERVICES PAGE ──────────────────────────────────
        'services' => array(
            'title' => 'Services Page',
            'icon'  => 'dashicons-admin-tools',
            'desc'  => 'Section images for the Services page.',
            'fields' => array(
                'bd_services_hero_image'  => array( 'label' => 'Hero Background Image',        'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_services_web_image'   => array( 'label' => 'Web Design Section Image',     'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_services_brand_image' => array( 'label' => 'Brand Strategy Section Image', 'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_services_dark_image'  => array( 'label' => 'Dark Section Image',           'type' => 'image', 'default' => '', 'desc' => '' ),
            ),
        ),

        // ── 9. CASE STUDIES ───────────────────────────────────
        'case_studies' => array(
            'title' => 'Case Studies',
            'icon'  => 'dashicons-portfolio',
            'desc'  => 'Hero image and intro text for the Case Studies page.',
            'fields' => array(
                'bd_cs_hero_image' => array( 'label' => 'Hero Background Image', 'type' => 'image',    'default' => '', 'desc' => '' ),
                'bd_cs_intro'      => array( 'label' => 'Intro Paragraph',       'type' => 'textarea', 'default' => 'We design and develop digital platforms that blend beauty with performance.', 'desc' => '' ),
            ),
        ),

        // ── 10. WORKFLOW SECTION ──────────────────────────────
        'workflow' => array(
            'title' => 'Workflow Section',
            'icon'  => 'dashicons-networking',
            'desc'  => 'Step images and titles for the How We Work section shown on every page.',
            'fields' => array(
                'bd_workflow_image_1' => array( 'label' => 'Step 01 Image — Discover', 'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_workflow_image_2' => array( 'label' => 'Step 02 Image — Create',   'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_workflow_image_3' => array( 'label' => 'Step 03 Image — Launch',   'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_workflow_image_4' => array( 'label' => 'Step 04 Image — Grow',     'type' => 'image', 'default' => '', 'desc' => '' ),
                'bd_workflow_title_1' => array( 'label' => 'Step 01 Title', 'type' => 'text', 'default' => 'Discover', 'desc' => '' ),
                'bd_workflow_sub_1'   => array( 'label' => 'Step 01 Subtitle', 'type' => 'text', 'default' => "We immerse ourselves in your brand's story.", 'desc' => '' ),
                'bd_workflow_title_2' => array( 'label' => 'Step 02 Title', 'type' => 'text', 'default' => 'Create', 'desc' => '' ),
                'bd_workflow_sub_2'   => array( 'label' => 'Step 02 Subtitle', 'type' => 'text', 'default' => 'We turn insight into intelligent, design-led solutions.', 'desc' => '' ),
                'bd_workflow_title_3' => array( 'label' => 'Step 03 Title', 'type' => 'text', 'default' => 'Launch', 'desc' => '' ),
                'bd_workflow_sub_3'   => array( 'label' => 'Step 03 Subtitle', 'type' => 'text', 'default' => 'We deliver refined digital experiences built to perform.', 'desc' => '' ),
                'bd_workflow_title_4' => array( 'label' => 'Step 04 Title', 'type' => 'text', 'default' => 'Grow', 'desc' => '' ),
                'bd_workflow_sub_4'   => array( 'label' => 'Step 04 Subtitle', 'type' => 'text', 'default' => 'We refine, measure, and evolve with your goals.', 'desc' => '' ),
            ),
        ),

        // ── 11. CTA SECTION ───────────────────────────────────
        'cta' => array(
            'title' => 'CTA Section',
            'icon'  => 'dashicons-megaphone',
            'desc'  => 'The "Ready to Go / Start Today?" section shown above the footer on every page.',
            'fields' => array(
                'bd_cta_title'        => array( 'label' => 'Main Heading',       'type' => 'text',     'default' => 'Ready to Go',   'desc' => '' ),
                'bd_cta_desc'         => array( 'label' => 'Description',        'type' => 'textarea', 'default' => "I've designed for tech startups, SaaS platforms, healthcare, finance, and creative agencies. Each project is crafted with purpose.", 'desc' => '' ),
                'bd_cta_btn_label'    => array( 'label' => 'Button Text',        'type' => 'text',     'default' => 'Get in touch',  'desc' => '' ),
                'bd_cta_right_title'  => array( 'label' => 'Right Side Heading', 'type' => 'text',     'default' => 'Start Today?',  'desc' => '' ),
            ),
        ),

    );
}

/* ============================================================
   HELPER — bd_get( 'key' )
   Use in all template files. Falls back to schema default.
   ============================================================ */
if ( ! function_exists( 'bd_get' ) ) {
    function bd_get( $key ) {
        $schema  = bd_settings_schema();
        $default = '';
        foreach ( $schema as $section ) {
            if ( isset( $section['fields'][ $key ] ) ) {
                $default = $section['fields'][ $key ]['default'];
                break;
            }
        }
        $val = get_option( $key );
        return ( $val !== false && $val !== '' ) ? $val : $default;
    }
}

/* ============================================================
   DYNAMIC CSS — inject CSS variables from settings into <head>
   This means colour/font changes take effect without editing files.
   ============================================================ */
function bd_output_dynamic_css() {
    $primary       = bd_get( 'bd_primary_color' );
    $primary_dark  = bd_get( 'bd_primary_dark' );
    $accent        = bd_get( 'bd_accent_color' );
    $dark_bg       = bd_get( 'bd_dark_bg' );
    $light_bg      = bd_get( 'bd_light_bg' );
    $font_heading  = bd_get( 'bd_font_heading' );
    $font_body     = bd_get( 'bd_font_body' );
    $font_h1       = bd_get( 'bd_font_size_h1' );
    $font_h2       = bd_get( 'bd_font_size_h2' );
    $font_h3       = bd_get( 'bd_font_size_h3' );
    $font_base     = bd_get( 'bd_font_size_base' );
    $font_weight   = bd_get( 'bd_font_weight_heading' );
    $header_bg     = bd_get( 'bd_header_bg' );
    $header_scroll = bd_get( 'bd_header_bg_scrolled' );
    $header_text   = bd_get( 'bd_header_text_color' );
    $header_hover  = bd_get( 'bd_header_link_hover' );
    $header_h      = bd_get( 'bd_header_height' );
    $footer_bg     = bd_get( 'bd_footer_bg' );
    $footer_text   = bd_get( 'bd_footer_text_color' );
    $footer_link   = bd_get( 'bd_footer_link_color' );
    $logo_width    = bd_get( 'bd_logo_width' );

    echo '<style id="bd-dynamic-css">
:root {
    --color-primary:      ' . esc_attr( $primary ) . ';
    --color-primary-dark: ' . esc_attr( $primary_dark ) . ';
    --color-primary-light:' . esc_attr( $accent ) . ';
    --color-dark-bg:      ' . esc_attr( $dark_bg ) . ';
    --color-bg:           ' . esc_attr( $light_bg ) . ';
    --font-heading:       \'' . esc_attr( $font_heading ) . '\', sans-serif;
    --font-body:          \'' . esc_attr( $font_body ) . '\', sans-serif;
    --fs-h1:              ' . intval( $font_h1 ) . 'px;
    --fs-h2:              ' . intval( $font_h2 ) . 'px;
    --fs-h3:              ' . intval( $font_h3 ) . 'px;
    --fs-body:            ' . intval( $font_base ) . 'px;
}
h1,h2,h3,h4,h5,.h1,.h2,.h3,.h4,.h5 { font-weight: ' . intval( $font_weight ) . '; }
.site-header { background: ' . esc_attr( $header_bg ) . '; height: ' . intval( $header_h ) . 'px; }
.site-header.scrolled { background: ' . esc_attr( $header_scroll ) . '; }
.nav-menu a { color: ' . esc_attr( $header_text ) . '; }
.nav-menu a:hover, .nav-menu a.current-menu-item { color: ' . esc_attr( $header_hover ) . '; }
.site-footer { background: ' . esc_attr( $footer_bg ) . '; }
.site-footer, .site-footer h5 { color: ' . esc_attr( $footer_text ) . '; }
.footer-col ul li a { color: ' . esc_attr( $footer_link ) . '; }
.site-logo img { max-width: ' . intval( $logo_width ) . 'px; }
</style>' . "\n";
}
add_action( 'wp_head', 'bd_output_dynamic_css', 99 );

/* ============================================================
   DYNAMIC GOOGLE FONTS — enqueue the chosen fonts
   ============================================================ */
function bd_enqueue_dynamic_fonts() {
    $heading = bd_get( 'bd_font_heading' );
    $body    = bd_get( 'bd_font_body' );

    // Build Google Fonts URL
    $families = array();
    if ( $heading ) $families[] = str_replace( ' ', '+', $heading ) . ':wght@400;500;600;700';
    if ( $body )    $families[] = str_replace( ' ', '+', $body ) . ':wght@300;400;500;600';

    if ( ! empty( $families ) ) {
        $url = 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', $families ) . '&display=swap';
        wp_enqueue_style( 'bd-dynamic-fonts', $url, array(), null );
    }
}
add_action( 'wp_enqueue_scripts', 'bd_enqueue_dynamic_fonts', 5 );

/* ============================================================
   FAVICON
   ============================================================ */
function bd_output_favicon() {
    $favicon = bd_get( 'bd_favicon' );
    if ( $favicon ) {
        echo '<link rel="icon" href="' . esc_url( $favicon ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'bd_output_favicon', 1 );

/* ============================================================
   1. WP ADMIN — MENU
   ============================================================ */
function bd_register_admin_menu() {
    add_menu_page(
        __( 'Theme Settings', 'branddevelopers' ),
        __( 'Theme Settings', 'branddevelopers' ),
        'manage_options',
        'bd-theme-settings',
        'bd_render_admin_page',
        'dashicons-art',
        59
    );
}
add_action( 'admin_menu', 'bd_register_admin_menu' );

/* ============================================================
   ADMIN — ENQUEUE
   ============================================================ */
function bd_admin_enqueue( $hook ) {
    if ( $hook !== 'toplevel_page_bd-theme-settings' ) return;
    wp_enqueue_media();
    wp_enqueue_style(  'bd-admin-css', get_template_directory_uri() . '/inc/admin.css', array(), '1.1.0' );
    wp_enqueue_script( 'bd-admin-js',  get_template_directory_uri() . '/inc/admin.js',  array( 'jquery' ), '1.1.0', true );
}
add_action( 'admin_enqueue_scripts', 'bd_admin_enqueue' );

/* ============================================================
   ADMIN — SAVE HANDLER
   ============================================================ */
function bd_handle_save() {
    if ( ! isset( $_POST['bd_nonce'] ) ) return;
    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bd_nonce'] ) ), 'bd_save' ) ) return;
    if ( ! current_user_can( 'manage_options' ) ) return;

    $schema = bd_settings_schema();
    foreach ( $schema as $section ) {
        foreach ( $section['fields'] as $key => $field ) {
            if ( ! isset( $_POST[ $key ] ) ) continue;
            $raw = wp_unslash( $_POST[ $key ] );
            switch ( $field['type'] ) {
                case 'url':
                case 'image':
                    $clean = esc_url_raw( $raw );
                    break;
                case 'color':
                    // Allow hex, rgb, rgba, named colours and 'transparent'
                    $clean = sanitize_text_field( $raw );
                    break;
                case 'textarea':
                    $clean = sanitize_textarea_field( $raw );
                    break;
                case 'toggle':
                    $clean = ( $raw === '1' ) ? '1' : '0';
                    break;
                case 'number':
                    $clean = absint( $raw );
                    break;
                case 'select':
                    $allowed = isset( $field['options'] ) ? array_keys( $field['options'] ) : array();
                    $clean   = in_array( $raw, $allowed, true ) ? $raw : $field['default'];
                    break;
                default:
                    $clean = sanitize_text_field( $raw );
            }
            update_option( $key, $clean );
        }
    }

    wp_safe_redirect( add_query_arg( array(
        'page'  => 'bd-theme-settings',
        'tab'   => isset( $_POST['bd_active_tab'] ) ? sanitize_key( $_POST['bd_active_tab'] ) : 'branding',
        'saved' => '1',
    ), admin_url( 'admin.php' ) ) );
    exit;
}
add_action( 'admin_post_bd_save_settings', 'bd_handle_save' );

/* ============================================================
   ADMIN — RENDER PAGE
   ============================================================ */
function bd_render_admin_page() {
    $schema     = bd_settings_schema();
    $active_tab = isset( $_GET['tab'] ) ? sanitize_key( $_GET['tab'] ) : 'branding';
    $saved      = isset( $_GET['saved'] ) && $_GET['saved'] === '1';
    $base_url   = admin_url( 'admin.php?page=bd-theme-settings' );

    if ( ! array_key_exists( $active_tab, $schema ) ) {
        $active_tab = 'branding';
    }
    ?>
    <div class="bd-wrap">

        <div class="bd-topbar">
            <div class="bd-topbar__brand">
                <span class="bd-topbar__badge">BD</span>
                <span class="bd-topbar__name">BrandDevelopers — Theme Settings</span>
            </div>
            <div class="bd-topbar__actions">
                <a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank" class="bd-btn bd-btn--ghost">
                    <span class="dashicons dashicons-admin-customizer"></span> Live Preview
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="bd-btn bd-btn--ghost">
                    <span class="dashicons dashicons-admin-site-alt3"></span> View Site
                </a>
            </div>
        </div>

        <?php if ( $saved ) : ?>
        <div class="bd-notice bd-notice--success">
            <span class="dashicons dashicons-yes-alt"></span>
            Settings saved successfully. Changes are now live on your site.
        </div>
        <?php endif; ?>

        <div class="bd-layout">

            <nav class="bd-sidebar">
                <?php
                // Group tabs visually
                $primary_tabs = array( 'branding', 'typography', 'header', 'footer', 'general' );
                $page_tabs    = array( 'homepage', 'about', 'services', 'case_studies', 'workflow', 'cta' );

                echo '<p class="bd-sidebar__group-label">GLOBAL</p>';
                foreach ( $primary_tabs as $tab_key ) :
                    if ( ! isset( $schema[ $tab_key ] ) ) continue;
                    $tab       = $schema[ $tab_key ];
                    $is_active = ( $tab_key === $active_tab );
                ?>
                <a href="<?php echo esc_url( $base_url . '&tab=' . $tab_key ); ?>"
                   class="bd-nav-item <?php echo $is_active ? 'bd-nav-item--active' : ''; ?>">
                    <span class="dashicons <?php echo esc_attr( $tab['icon'] ); ?>"></span>
                    <span><?php echo esc_html( $tab['title'] ); ?></span>
                    <?php if ( $is_active ) : ?>
                    <span class="bd-nav-item__arrow dashicons dashicons-arrow-right-alt2"></span>
                    <?php endif; ?>
                </a>
                <?php endforeach;

                echo '<p class="bd-sidebar__group-label">PAGES</p>';
                foreach ( $page_tabs as $tab_key ) :
                    if ( ! isset( $schema[ $tab_key ] ) ) continue;
                    $tab       = $schema[ $tab_key ];
                    $is_active = ( $tab_key === $active_tab );
                ?>
                <a href="<?php echo esc_url( $base_url . '&tab=' . $tab_key ); ?>"
                   class="bd-nav-item <?php echo $is_active ? 'bd-nav-item--active' : ''; ?>">
                    <span class="dashicons <?php echo esc_attr( $tab['icon'] ); ?>"></span>
                    <span><?php echo esc_html( $tab['title'] ); ?></span>
                    <?php if ( $is_active ) : ?>
                    <span class="bd-nav-item__arrow dashicons dashicons-arrow-right-alt2"></span>
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>
            </nav>

            <div class="bd-main">
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <?php wp_nonce_field( 'bd_save', 'bd_nonce' ); ?>
                    <input type="hidden" name="action" value="bd_save_settings">
                    <input type="hidden" name="bd_active_tab" value="<?php echo esc_attr( $active_tab ); ?>">

                    <?php $section = $schema[ $active_tab ]; ?>

                    <div class="bd-main__header">
                        <div>
                            <h2 class="bd-main__title">
                                <span class="dashicons <?php echo esc_attr( $section['icon'] ); ?>"></span>
                                <?php echo esc_html( $section['title'] ); ?>
                            </h2>
                            <?php if ( ! empty( $section['desc'] ) ) : ?>
                            <p class="bd-main__desc"><?php echo esc_html( $section['desc'] ); ?></p>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="bd-btn bd-btn--primary">
                            <span class="dashicons dashicons-saved"></span> Save Changes
                        </button>
                    </div>

                    <div class="bd-fields">
                        <?php foreach ( $section['fields'] as $key => $field ) :
                            $value = get_option( $key, $field['default'] );
                        ?>
                        <div class="bd-field bd-field--<?php echo esc_attr( $field['type'] ); ?>">

                            <label class="bd-field__label" for="<?php echo esc_attr( $key ); ?>">
                                <?php echo esc_html( $field['label'] ); ?>
                            </label>

                            <?php if ( $field['type'] === 'image' ) : ?>

                                <div class="bd-image-picker" id="picker-<?php echo esc_attr( $key ); ?>">
                                    <div class="bd-image-picker__preview <?php echo $value ? 'bd-image-picker__preview--has-image' : ''; ?>">
                                        <?php if ( $value ) : ?>
                                            <img src="<?php echo esc_url( $value ); ?>" alt="">
                                            <div class="bd-image-picker__overlay">
                                                <button type="button" class="bd-image-picker__change" data-target="<?php echo esc_attr( $key ); ?>"><span class="dashicons dashicons-edit"></span> Change</button>
                                                <button type="button" class="bd-image-picker__remove" data-target="<?php echo esc_attr( $key ); ?>"><span class="dashicons dashicons-trash"></span> Remove</button>
                                            </div>
                                        <?php else : ?>
                                            <div class="bd-image-picker__empty">
                                                <span class="dashicons dashicons-format-image"></span>
                                                <p>No image selected</p>
                                                <button type="button" class="bd-btn bd-btn--primary bd-image-picker__upload" data-target="<?php echo esc_attr( $key ); ?>">Upload Image</button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="<?php echo esc_attr( $key ); ?>" id="<?php echo esc_attr( $key ); ?>" class="bd-image-picker__input" value="<?php echo esc_url( $value ); ?>">
                                    <?php if ( $value ) : ?>
                                    <div class="bd-image-picker__footer">
                                        <button type="button" class="bd-btn bd-btn--outline bd-image-picker__upload" data-target="<?php echo esc_attr( $key ); ?>">Change Image</button>
                                        <button type="button" class="bd-btn bd-btn--danger bd-image-picker__remove" data-target="<?php echo esc_attr( $key ); ?>">Remove</button>
                                    </div>
                                    <?php endif; ?>
                                </div>

                            <?php elseif ( $field['type'] === 'color' ) : ?>

                                <div class="bd-color-field">
                                    <input type="color"
                                           name="<?php echo esc_attr( $key ); ?>_picker"
                                           class="bd-color-picker"
                                           value="<?php echo esc_attr( substr( $value, 0, 7 ) ); ?>"
                                           data-target="<?php echo esc_attr( $key ); ?>">
                                    <input type="text"
                                           name="<?php echo esc_attr( $key ); ?>"
                                           id="<?php echo esc_attr( $key ); ?>"
                                           class="bd-field__input bd-color-text"
                                           value="<?php echo esc_attr( $value ); ?>"
                                           placeholder="<?php echo esc_attr( $field['default'] ); ?>">
                                </div>

                            <?php elseif ( $field['type'] === 'select' ) : ?>

                                <select name="<?php echo esc_attr( $key ); ?>" id="<?php echo esc_attr( $key ); ?>" class="bd-field__select">
                                    <?php foreach ( $field['options'] as $opt_val => $opt_label ) : ?>
                                    <option value="<?php echo esc_attr( $opt_val ); ?>" <?php selected( $value, $opt_val ); ?>>
                                        <?php echo esc_html( $opt_label ); ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>

                            <?php elseif ( $field['type'] === 'toggle' ) : ?>

                                <label class="bd-toggle">
                                    <input type="hidden" name="<?php echo esc_attr( $key ); ?>" value="0">
                                    <input type="checkbox"
                                           name="<?php echo esc_attr( $key ); ?>"
                                           id="<?php echo esc_attr( $key ); ?>"
                                           class="bd-toggle__input"
                                           value="1"
                                           <?php checked( $value, '1' ); ?>>
                                    <span class="bd-toggle__track"></span>
                                    <span class="bd-toggle__label"><?php echo $value === '1' ? 'Enabled' : 'Disabled'; ?></span>
                                </label>

                            <?php elseif ( $field['type'] === 'textarea' ) : ?>

                                <textarea name="<?php echo esc_attr( $key ); ?>" id="<?php echo esc_attr( $key ); ?>" class="bd-field__textarea" rows="4" placeholder="<?php echo esc_attr( $field['default'] ); ?>"><?php echo esc_textarea( $value ); ?></textarea>

                            <?php elseif ( $field['type'] === 'font' ) : ?>

                                <div class="bd-font-field">
                                    <input type="text"
                                           name="<?php echo esc_attr( $key ); ?>"
                                           id="<?php echo esc_attr( $key ); ?>"
                                           class="bd-field__input bd-font-input"
                                           value="<?php echo esc_attr( $value ); ?>"
                                           placeholder="e.g. Anta, DM Sans, Playfair Display">
                                    <p class="bd-font-field__hint">Enter any Google Font name exactly as it appears on <a href="https://fonts.google.com" target="_blank">fonts.google.com</a>. The font will be automatically loaded.</p>
                                </div>

                            <?php else : ?>

                                <input type="<?php echo in_array( $field['type'], array( 'url', 'email', 'number' ) ) ? esc_attr( $field['type'] ) : 'text'; ?>"
                                       name="<?php echo esc_attr( $key ); ?>"
                                       id="<?php echo esc_attr( $key ); ?>"
                                       class="bd-field__input"
                                       value="<?php echo esc_attr( $value ); ?>"
                                       placeholder="<?php echo esc_attr( $field['default'] ); ?>">

                            <?php endif; ?>

                            <?php if ( ! empty( $field['desc'] ) ) : ?>
                            <p class="bd-field__desc"><?php echo esc_html( $field['desc'] ); ?></p>
                            <?php endif; ?>

                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="bd-main__footer">
                        <button type="submit" class="bd-btn bd-btn--primary bd-btn--lg">
                            <span class="dashicons dashicons-saved"></span> Save Changes
                        </button>
                        <span class="bd-main__footer-hint">Changes apply to the live site immediately after saving.</span>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <?php
}

/* ============================================================
   2. WORDPRESS CUSTOMIZER
   ============================================================ */
function bd_customizer_register( $wp_customize ) {

    $schema = bd_settings_schema();

    foreach ( $schema as $section_key => $section ) {

        $wp_customize->add_section( 'bd_' . $section_key, array(
            'title'       => '🎨 BD — ' . $section['title'],
            'description' => isset( $section['desc'] ) ? $section['desc'] : '',
            'priority'    => 160,
        ) );

        foreach ( $section['fields'] as $key => $field ) {

            // Sanitize callback
            switch ( $field['type'] ) {
                case 'textarea':
                    $sanitize = 'sanitize_textarea_field';
                    break;
                case 'url':
                case 'image':
                    $sanitize = 'esc_url_raw';
                    break;
                case 'number':
                    $sanitize = 'absint';
                    break;
                default:
                    $sanitize = 'sanitize_text_field';
            }

            $wp_customize->add_setting( $key, array(
                'type'              => 'option',
                'default'           => $field['default'],
                'sanitize_callback' => $sanitize,
                'transport'         => 'refresh',
            ) );

            // Control type
            if ( $field['type'] === 'image' ) {
                $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                ) ) );
            } elseif ( $field['type'] === 'color' ) {
                $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                ) ) );
            } elseif ( $field['type'] === 'textarea' ) {
                $wp_customize->add_control( 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                    'type'     => 'textarea',
                ) );
            } elseif ( $field['type'] === 'select' ) {
                $wp_customize->add_control( 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                    'type'     => 'select',
                    'choices'  => isset( $field['options'] ) ? $field['options'] : array(),
                ) );
            } elseif ( $field['type'] === 'toggle' ) {
                $wp_customize->add_control( 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                    'type'     => 'checkbox',
                ) );
            } else {
                $wp_customize->add_control( 'bd_c_' . $key, array(
                    'label'    => $field['label'],
                    'section'  => 'bd_' . $section_key,
                    'settings' => $key,
                    'type'     => 'text',
                ) );
            }
        }
    }
}
add_action( 'customize_register', 'bd_customizer_register' );
