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
                    <p><i class="fas fa-envelope" style="margin-right:8px;color:var(--color-primary-light)"></i> info@brandevelopers.ca</p>
                    <p><i class="fas fa-map-marker-alt" style="margin-right:8px;color:var(--color-primary-light)"></i> Toronto, Ontario, Canada</p>
                </div>
            </div>

            <!-- Company -->
            <div class="footer-col">
                <h5><?php _e( 'Company', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php _e( 'About', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about#process' ) ); ?>"><?php _e( 'Our Process', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about#team' ) ); ?>"><?php _e( 'Team', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/careers' ) ); ?>"><?php _e( 'Careers', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Projects -->
            <div class="footer-col">
                <h5><?php _e( 'Projects', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="#"><?php _e( 'UI/UX Design', 'branddevelopers' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Branding', 'branddevelopers' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Video Editing', 'branddevelopers' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Product Design', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer-col">
                <h5><?php _e( 'Support', 'branddevelopers' ); ?></h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php _e( 'Contact', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/help' ) ); ?>"><?php _e( 'Help Center', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>"><?php _e( 'Terms &amp; Conditions', 'branddevelopers' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>"><?php _e( 'Privacy Policy', 'branddevelopers' ); ?></a></li>
                </ul>
            </div>

            <!-- Address -->
            <div class="footer-col">
                <h5><?php _e( 'Address', 'branddevelopers' ); ?></h5>
                <ul>
                    <li style="color:rgba(255,255,255,0.45);font-size:14px">+1 (416) 846-6483</li>
                    <li style="color:rgba(255,255,255,0.45);font-size:14px">info@brandevelopers.ca</li>
                    <li style="color:rgba(255,255,255,0.45);font-size:14px">Toronto Ontario Canada</li>
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
