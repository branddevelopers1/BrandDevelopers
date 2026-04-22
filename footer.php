<?php bd_render_newsletter(); ?>
<?php bd_render_cta(); ?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand col -->
            <div class="footer-brand">
                <div class="site-logo" style="margin-bottom:16px">
                    <?php if ( has_custom_logo() ) :
                        the_custom_logo();
                    else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="font-family:var(--font-heading);font-size:18px;color:var(--color-white)">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <p><?php bloginfo( 'description' ); ?></p>
                <div class="footer-contact" style="margin-top:24px">
                    <p><i class="fas fa-phone" style="margin-right:8px;color:var(--color-primary-light)"></i> +1 (416) 846-6483</p>
                    <p><i class="fas fa-envelope" style="margin-right:8px;color:var(--color-primary-light)"></i> info@branddevelopers.ca</p>
                    <p><i class="fas fa-map-marker-alt" style="margin-right:8px;color:var(--color-primary-light)"></i> Toronto, Ontario, Canada</p>
                </div>
            </div>

            <!-- Company -->
            <div class="footer-col">
                <h5><?php _e( 'Company', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php _e( 'About', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us#process' ) ); ?>"><?php _e( 'Our Process', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us#team' ) ); ?>"><?php _e( 'Team', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/packages' ) ); ?>"><?php _e( 'Packages', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/careers' ) ); ?>"><?php _e( 'Careers', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h5><?php _e( 'Services', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Web Development', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Graphic Design', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Photography', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Videography', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php _e( 'Consultation', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Work -->
            <div class="footer-col">
                <h5><?php _e( 'Our Work', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php _e( 'Portfolio', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>"><?php _e( 'Case Studies', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php _e( 'Blog', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer-col">
                <h5><?php _e( 'Support', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php _e( 'Contact', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>"><?php _e( 'Terms &amp; Conditions', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>"><?php _e( 'Privacy Policy', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

        </div>

        <!-- Footer bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All rights reserved.', 'branddevelopers' ); ?></p>
            <div class="footer-social">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
