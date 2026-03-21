<?php
/**
 * BrandDevelopers — Theme Settings
 *
 * Provides:
 *  1. A custom WP Admin settings page (Appearance > Theme Settings)
 *  2. WordPress Customizer integration for live preview
 *
 * Usage in templates:  bd_get( 'key' )
 * Example:             bd_get( 'bd_phone' )
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ============================================================
   SETTINGS SCHEMA
   Single source of truth — used by Admin panel + Customizer
   ============================================================ */
function bd_settings_schema() {
    return array(

        'general' => array(
            'title'  => 'General',
            'icon'   => 'dashicons-admin-settings',
            'fields' => array(
                'bd_phone'         => array( 'label' => 'Phone Number',     'type' => 'text',     'default' => '+1 (416) 846-6483',       'desc' => 'Used in footer and Talk Now button on every page' ),
                'bd_email'         => array( 'label' => 'Email Address',    'type' => 'text',     'default' => 'info@brandevelopers.ca',  'desc' => 'Shown in footer contact block' ),
                'bd_address'       => array( 'label' => 'Office Address',   'type' => 'text',     'default' => 'Toronto, Ontario, Canada','desc' => 'Shown in footer' ),
                'bd_instagram_url' => array( 'label' => 'Instagram URL',    'type' => 'url',      'default' => '',                        'desc' => '' ),
                'bd_linkedin_url'  => array( 'label' => 'LinkedIn URL',     'type' => 'url',      'default' => '',                        'desc' => '' ),
                'bd_twitter_url'   => array( 'label' => 'X / Twitter URL',  'type' => 'url',      'default' => '',                        'desc' => '' ),
                'bd_facebook_url'  => array( 'label' => 'Facebook URL',     'type' => 'url',      'default' => '',                        'desc' => '' ),
            ),
        ),

        'homepage' => array(
            'title'  => 'Homepage',
            'icon'   => 'dashicons-admin-home',
            'fields' => array(
                'bd_hero_image'       => array( 'label' => 'Hero Background Image',  'type' => 'image',    'default' => '', 'desc' => 'Full-screen photo behind the hero headline' ),
                'bd_hero_subtitle'    => array( 'label' => 'Hero Eyebrow Text',      'type' => 'text',     'default' => 'Boutique Branding & Web Development', 'desc' => 'Small uppercase label above the headline' ),
                'bd_hero_title'       => array( 'label' => 'Hero Headline Line 1',   'type' => 'text',     'default' => 'Where Branding',   'desc' => '' ),
                'bd_hero_title_2'     => array( 'label' => 'Hero Headline Line 2',   'type' => 'text',     'default' => 'Meets Development','desc' => '' ),
                'bd_hero_description' => array( 'label' => 'Hero Description',       'type' => 'textarea', 'default' => 'At Brand Developers, we craft digital experiences that merge creativity and technology — brands and websites that not only look exceptional but perform effortlessly.', 'desc' => '' ),
                'bd_hero_cta_label'   => array( 'label' => 'Hero Button Text',       'type' => 'text',     'default' => 'Get a Free Audit', 'desc' => '' ),
                'bd_hero_cta_url'     => array( 'label' => 'Hero Button URL',        'type' => 'url',      'default' => '/contact',         'desc' => '' ),
            ),
        ),

        'about' => array(
            'title'  => 'About Page',
            'icon'   => 'dashicons-admin-users',
            'fields' => array(
                'bd_about_hero_image' => array( 'label' => 'Hero Background Image',  'type' => 'image',    'default' => '', 'desc' => 'Background photo for the About page hero section' ),
                'bd_about_portrait'   => array( 'label' => 'Portrait / Team Photo',  'type' => 'image',    'default' => '', 'desc' => 'Photo shown alongside the skills bars section' ),
                'bd_about_tagline'    => array( 'label' => 'Tagline',                'type' => 'text',     'default' => 'Digital Experiences with 25+ Years of Combined Purpose', 'desc' => '' ),
                'bd_about_intro_1'    => array( 'label' => 'Intro Paragraph 1',      'type' => 'textarea', 'default' => 'Our boutique team blends artistry and technical expertise to help brands stand out and scale with purpose.', 'desc' => '' ),
                'bd_about_intro_2'    => array( 'label' => 'Intro Paragraph 2',      'type' => 'textarea', 'default' => 'Building brand identities that connect and inspire — from strategy through to a polished digital product delivered on time.', 'desc' => '' ),
                'bd_stat_1_num'       => array( 'label' => 'Stat 1 — Number',        'type' => 'text',     'default' => '420+',              'desc' => '' ),
                'bd_stat_1_label'     => array( 'label' => 'Stat 1 — Label',         'type' => 'text',     'default' => 'Projects Delivered','desc' => '' ),
                'bd_stat_2_num'       => array( 'label' => 'Stat 2 — Number',        'type' => 'text',     'default' => '300+',              'desc' => '' ),
                'bd_stat_2_label'     => array( 'label' => 'Stat 2 — Label',         'type' => 'text',     'default' => 'Clients Worldwide', 'desc' => '' ),
                'bd_stat_3_num'       => array( 'label' => 'Stat 3 — Number',        'type' => 'text',     'default' => '14+',               'desc' => '' ),
                'bd_stat_3_label'     => array( 'label' => 'Stat 3 — Label',         'type' => 'text',     'default' => 'Years in UX/UI Design', 'desc' => '' ),
            ),
        ),

        'services' => array(
            'title'  => 'Services Page',
            'icon'   => 'dashicons-admin-tools',
            'fields' => array(
                'bd_services_hero_image'  => array( 'label' => 'Hero Background Image',        'type' => 'image', 'default' => '', 'desc' => 'Background photo for the Services hero' ),
                'bd_services_web_image'   => array( 'label' => 'Web Design Section Image',     'type' => 'image', 'default' => '', 'desc' => 'Photo beside the Web Design & Development block' ),
                'bd_services_brand_image' => array( 'label' => 'Brand Strategy Section Image', 'type' => 'image', 'default' => '', 'desc' => 'Photo beside the Brand Strategy block' ),
                'bd_services_dark_image'  => array( 'label' => 'Dark Section Image',           'type' => 'image', 'default' => '', 'desc' => 'Photo in the dark Crafting Digital Experiences section' ),
            ),
        ),

        'case_studies' => array(
            'title'  => 'Case Studies',
            'icon'   => 'dashicons-portfolio',
            'fields' => array(
                'bd_cs_hero_image' => array( 'label' => 'Hero Background Image', 'type' => 'image',    'default' => '', 'desc' => 'Background photo for the Case Studies hero' ),
                'bd_cs_intro'      => array( 'label' => 'Intro Paragraph',       'type' => 'textarea', 'default' => 'We design and develop digital platforms that blend beauty with performance. Every site we build is responsive, accessible, and crafted to deliver a seamless user experience.', 'desc' => '' ),
            ),
        ),

        'workflow' => array(
            'title'  => 'Workflow Section',
            'icon'   => 'dashicons-networking',
            'fields' => array(
                'bd_workflow_image_1' => array( 'label' => 'Step 01 Image — Discover', 'type' => 'image', 'default' => '', 'desc' => 'Photo shown on the Discover step card' ),
                'bd_workflow_image_2' => array( 'label' => 'Step 02 Image — Create',   'type' => 'image', 'default' => '', 'desc' => 'Photo shown on the Create step card' ),
                'bd_workflow_image_3' => array( 'label' => 'Step 03 Image — Launch',   'type' => 'image', 'default' => '', 'desc' => 'Photo shown on the Launch step card' ),
                'bd_workflow_image_4' => array( 'label' => 'Step 04 Image — Grow',     'type' => 'image', 'default' => '', 'desc' => 'Photo shown on the Grow step card' ),
                'bd_workflow_title_1' => array( 'label' => 'Step 01 Title',            'type' => 'text',  'default' => 'Discover', 'desc' => '' ),
                'bd_workflow_sub_1'   => array( 'label' => 'Step 01 Subtitle',         'type' => 'text',  'default' => "We immerse ourselves in your brand's story.", 'desc' => '' ),
                'bd_workflow_title_2' => array( 'label' => 'Step 02 Title',            'type' => 'text',  'default' => 'Create',   'desc' => '' ),
                'bd_workflow_sub_2'   => array( 'label' => 'Step 02 Subtitle',         'type' => 'text',  'default' => 'We turn insight into intelligent, design-led solutions.', 'desc' => '' ),
                'bd_workflow_title_3' => array( 'label' => 'Step 03 Title',            'type' => 'text',  'default' => 'Launch',   'desc' => '' ),
                'bd_workflow_sub_3'   => array( 'label' => 'Step 03 Subtitle',         'type' => 'text',  'default' => 'We deliver refined digital experiences built to perform.', 'desc' => '' ),
                'bd_workflow_title_4' => array( 'label' => 'Step 04 Title',            'type' => 'text',  'default' => 'Grow',     'desc' => '' ),
                'bd_workflow_sub_4'   => array( 'label' => 'Step 04 Subtitle',         'type' => 'text',  'default' => 'We refine, measure, and evolve with your goals.', 'desc' => '' ),
            ),
        ),

        'cta' => array(
            'title'  => 'CTA Section',
            'icon'   => 'dashicons-megaphone',
            'fields' => array(
                'bd_cta_title'       => array( 'label' => 'Main Heading',        'type' => 'text',     'default' => 'Ready to Go',   'desc' => 'Large heading on the left side of the pre-footer CTA' ),
                'bd_cta_desc'        => array( 'label' => 'Description',         'type' => 'textarea', 'default' => "I've designed for tech startups, SaaS platforms, healthcare, finance, and creative agencies. Each project is crafted with purpose.", 'desc' => '' ),
                'bd_cta_btn_label'   => array( 'label' => 'Button Text',         'type' => 'text',     'default' => 'Get in touch',  'desc' => '' ),
                'bd_cta_right_title' => array( 'label' => 'Right Side Heading',  'type' => 'text',     'default' => 'Start Today?',  'desc' => 'Heading above the Talk now / Start today buttons' ),
            ),
        ),

    );
}

/* ============================================================
   HELPER FUNCTION — bd_get( 'key' )
   Use this in all template files to get a setting value.
   Falls back to the schema default if nothing is saved yet.
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
   1. WP ADMIN — MENU REGISTRATION
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
   ADMIN — ENQUEUE SCRIPTS & STYLES
   ============================================================ */
function bd_admin_enqueue( $hook ) {
    if ( $hook !== 'toplevel_page_bd-theme-settings' ) return;
    wp_enqueue_media();
    wp_enqueue_style(
        'bd-admin-css',
        get_template_directory_uri() . '/inc/admin.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_script(
        'bd-admin-js',
        get_template_directory_uri() . '/inc/admin.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
}
add_action( 'admin_enqueue_scripts', 'bd_admin_enqueue' );

/* ============================================================
   ADMIN — HANDLE FORM SAVE
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
                case 'textarea':
                    $clean = sanitize_textarea_field( $raw );
                    break;
                default:
                    $clean = sanitize_text_field( $raw );
            }
            update_option( $key, $clean );
        }
    }

    // Redirect back with success flag
    wp_safe_redirect( add_query_arg( array(
        'page'  => 'bd-theme-settings',
        'tab'   => isset( $_POST['bd_active_tab'] ) ? sanitize_key( $_POST['bd_active_tab'] ) : 'general',
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
    $active_tab = isset( $_GET['tab'] ) ? sanitize_key( $_GET['tab'] ) : 'general';
    $saved      = isset( $_GET['saved'] ) && $_GET['saved'] === '1';
    $base_url   = admin_url( 'admin.php?page=bd-theme-settings' );

    if ( ! array_key_exists( $active_tab, $schema ) ) {
        $active_tab = 'general';
    }
    ?>
    <div class="bd-wrap">

        <!-------- TOPBAR -------->
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
            Settings saved successfully.
        </div>
        <?php endif; ?>

        <!-------- LAYOUT -------->
        <div class="bd-layout">

            <!-------- SIDEBAR -------->
            <nav class="bd-sidebar">
                <?php foreach ( $schema as $key => $section ) :
                    $is_active = ( $key === $active_tab );
                ?>
                <a href="<?php echo esc_url( $base_url . '&tab=' . $key ); ?>"
                   class="bd-nav-item <?php echo $is_active ? 'bd-nav-item--active' : ''; ?>">
                    <span class="dashicons <?php echo esc_attr( $section['icon'] ); ?>"></span>
                    <span><?php echo esc_html( $section['title'] ); ?></span>
                    <?php if ( $is_active ) : ?>
                    <span class="bd-nav-item__arrow dashicons dashicons-arrow-right-alt2"></span>
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>
            </nav>

            <!-------- MAIN CONTENT -------->
            <div class="bd-main">
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <?php wp_nonce_field( 'bd_save', 'bd_nonce' ); ?>
                    <input type="hidden" name="action" value="bd_save_settings">
                    <input type="hidden" name="bd_active_tab" value="<?php echo esc_attr( $active_tab ); ?>">

                    <?php
                    $section = $schema[ $active_tab ];
                    ?>

                    <div class="bd-main__header">
                        <h2 class="bd-main__title">
                            <span class="dashicons <?php echo esc_attr( $section['icon'] ); ?>"></span>
                            <?php echo esc_html( $section['title'] ); ?>
                        </h2>
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
                                                <button type="button" class="bd-image-picker__change" data-target="<?php echo esc_attr( $key ); ?>">
                                                    <span class="dashicons dashicons-edit"></span> Change
                                                </button>
                                                <button type="button" class="bd-image-picker__remove" data-target="<?php echo esc_attr( $key ); ?>">
                                                    <span class="dashicons dashicons-trash"></span> Remove
                                                </button>
                                            </div>
                                        <?php else : ?>
                                            <div class="bd-image-picker__empty">
                                                <span class="dashicons dashicons-format-image"></span>
                                                <p>No image selected</p>
                                                <button type="button" class="bd-btn bd-btn--primary bd-image-picker__upload" data-target="<?php echo esc_attr( $key ); ?>">
                                                    Upload Image
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden"
                                           name="<?php echo esc_attr( $key ); ?>"
                                           id="<?php echo esc_attr( $key ); ?>"
                                           class="bd-image-picker__input"
                                           value="<?php echo esc_url( $value ); ?>">
                                    <?php if ( $value ) : ?>
                                    <div class="bd-image-picker__footer">
                                        <button type="button" class="bd-btn bd-btn--outline bd-image-picker__upload" data-target="<?php echo esc_attr( $key ); ?>">
                                            Change Image
                                        </button>
                                        <button type="button" class="bd-btn bd-btn--danger bd-image-picker__remove" data-target="<?php echo esc_attr( $key ); ?>">
                                            Remove
                                        </button>
                                    </div>
                                    <?php endif; ?>
                                </div>

                            <?php elseif ( $field['type'] === 'textarea' ) : ?>

                                <textarea
                                    name="<?php echo esc_attr( $key ); ?>"
                                    id="<?php echo esc_attr( $key ); ?>"
                                    class="bd-field__textarea"
                                    rows="4"
                                    placeholder="<?php echo esc_attr( $field['default'] ); ?>"
                                ><?php echo esc_textarea( $value ); ?></textarea>

                            <?php else : ?>

                                <input
                                    type="<?php echo in_array( $field['type'], array( 'url', 'email' ) ) ? esc_attr( $field['type'] ) : 'text'; ?>"
                                    name="<?php echo esc_attr( $key ); ?>"
                                    id="<?php echo esc_attr( $key ); ?>"
                                    class="bd-field__input"
                                    value="<?php echo esc_attr( $value ); ?>"
                                    placeholder="<?php echo esc_attr( $field['default'] ); ?>"
                                >

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

        // Add panel section
        $wp_customize->add_section(
            'bd_section_' . $section_key,
            array(
                'title'       => '🎨 BD — ' . $section['title'],
                'description' => 'BrandDevelopers theme settings',
                'priority'    => 160,
            )
        );

        foreach ( $section['fields'] as $key => $field ) {

            // Sanitize callback
            if ( $field['type'] === 'textarea' ) {
                $sanitize = 'sanitize_textarea_field';
            } elseif ( $field['type'] === 'url' || $field['type'] === 'image' ) {
                $sanitize = 'esc_url_raw';
            } else {
                $sanitize = 'sanitize_text_field';
            }

            // Register setting
            $wp_customize->add_setting(
                $key,
                array(
                    'type'              => 'option',
                    'default'           => $field['default'],
                    'sanitize_callback' => $sanitize,
                    'transport'         => 'refresh',
                )
            );

            // Register control
            if ( $field['type'] === 'image' ) {
                $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                        $wp_customize,
                        'bd_ctrl_' . $key,
                        array(
                            'label'       => $field['label'],
                            'description' => $field['desc'],
                            'section'     => 'bd_section_' . $section_key,
                            'settings'    => $key,
                        )
                    )
                );
            } elseif ( $field['type'] === 'textarea' ) {
                $wp_customize->add_control(
                    'bd_ctrl_' . $key,
                    array(
                        'label'       => $field['label'],
                        'description' => $field['desc'],
                        'section'     => 'bd_section_' . $section_key,
                        'settings'    => $key,
                        'type'        => 'textarea',
                    )
                );
            } else {
                $wp_customize->add_control(
                    'bd_ctrl_' . $key,
                    array(
                        'label'       => $field['label'],
                        'description' => $field['desc'],
                        'section'     => 'bd_section_' . $section_key,
                        'settings'    => $key,
                        'type'        => 'text',
                    )
                );
            }
        }
    }
}
add_action( 'customize_register', 'bd_customizer_register' );
