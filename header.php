<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="site-header__inner">

            <!-- Logo -->
            <div class="site-logo">
                <?php if ( has_custom_logo() ) :
                    the_custom_logo();
                else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Primary Nav -->
            <nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'branddevelopers' ); ?>">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => function() { ?>
                        <ul class="nav-menu">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php _e( 'About', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Services', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php _e( 'Portfolio', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>"><?php _e( 'Case Studies', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/packages' ) ); ?>"><?php _e( 'Packages', 'branddevelopers' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="background:var(--color-primary);padding:8px 18px;border-radius:100px;color:#fff!important"><?php _e( 'Contact', 'branddevelopers' ); ?></a></li>
                        </ul>
                    <?php }
                ] ); ?>
            </nav>

            <!-- Social icons -->
            <div class="nav-social">
                <a href="https://instagram.com/branddevelopers.ca" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/brand-developers" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <!-- Mobile toggle -->
            <button class="nav-toggle" id="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle navigation', 'branddevelopers' ); ?>" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>
</header>
