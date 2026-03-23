<?php
/**
 * Template Name: Contact Page
 * Auto-loads for slug: contact
 */
get_header(); ?>

<!-- HERO -->
<section class="page-hero" style="min-height:45vh">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( "Let's Talk", 'branddevelopers' ); ?></span>
            <h1 style="color:#F9FAFB;font-size:72px;line-height:88px"><?php esc_html_e( 'Contact Us', 'branddevelopers' ); ?></h1>
            <p style="color:rgba(255,255,255,0.65);font-size:18px;line-height:28px;max-width:500px;margin-top:16px">
                <?php esc_html_e( "Ready to start a project or just have a question? We'd love to hear from you.", 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- CONTACT LAYOUT -->
<section class="section">
    <div class="container">
        <div class="contact-layout">

            <!-- LEFT: Info -->
            <div class="contact-info">
                <span class="small-head" style="display:block;margin-bottom:16px"><?php esc_html_e( 'Get In Touch', 'branddevelopers' ); ?></span>
                <h2 style="margin-bottom:20px"><?php esc_html_e( 'We are always open to discussing new projects.', 'branddevelopers' ); ?></h2>
                <p style="margin-bottom:var(--space-lg)"><?php esc_html_e( "Whether you're a startup looking to build your brand or an established business ready to evolve — we're here to help.", 'branddevelopers' ); ?></p>

                <div class="contact-details">
                    <div class="contact-detail">
                        <div class="contact-detail__icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <p class="contact-detail__label"><?php esc_html_e( 'Phone', 'branddevelopers' ); ?></p>
                            <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', bd_get( 'bd_phone' ) ) ); ?>" class="contact-detail__value">
                                <?php echo esc_html( bd_get( 'bd_phone' ) ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail__icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <p class="contact-detail__label"><?php esc_html_e( 'Email', 'branddevelopers' ); ?></p>
                            <a href="mailto:<?php echo esc_attr( bd_get( 'bd_email' ) ); ?>" class="contact-detail__value">
                                <?php echo esc_html( bd_get( 'bd_email' ) ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail__icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <p class="contact-detail__label"><?php esc_html_e( 'Location', 'branddevelopers' ); ?></p>
                            <span class="contact-detail__value"><?php echo esc_html( bd_get( 'bd_address' ) ); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Social links -->
                <div class="contact-social">
                    <?php if ( bd_get( 'bd_instagram_url' ) ) : ?>
                    <a href="<?php echo esc_url( bd_get( 'bd_instagram_url' ) ); ?>" class="contact-social__link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <?php endif; ?>
                    <?php if ( bd_get( 'bd_linkedin_url' ) ) : ?>
                    <a href="<?php echo esc_url( bd_get( 'bd_linkedin_url' ) ); ?>" class="contact-social__link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <?php endif; ?>
                    <?php if ( bd_get( 'bd_facebook_url' ) ) : ?>
                    <a href="<?php echo esc_url( bd_get( 'bd_facebook_url' ) ); ?>" class="contact-social__link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- RIGHT: Form -->
            <div class="contact-form-wrap">
                <div class="contact-form-card">
                    <h3 style="margin-bottom:8px;font-size:24px"><?php esc_html_e( 'Send Us a Message', 'branddevelopers' ); ?></h3>
                    <p style="font-size:14px;color:var(--color-grey);margin-bottom:var(--space-md)"><?php esc_html_e( "We'll get back to you within 24 hours.", 'branddevelopers' ); ?></p>

                    <?php
                    // Show success/error messages
                    if ( isset( $_GET['contact'] ) && $_GET['contact'] === 'success' ) : ?>
                    <div class="contact-notice contact-notice--success">
                        <i class="fas fa-check-circle"></i>
                        <?php esc_html_e( "Thank you! We'll be in touch soon.", 'branddevelopers' ); ?>
                    </div>
                    <?php elseif ( isset( $_GET['contact'] ) && $_GET['contact'] === 'error' ) : ?>
                    <div class="contact-notice contact-notice--error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php esc_html_e( 'Something went wrong. Please try again or email us directly.', 'branddevelopers' ); ?>
                    </div>
                    <?php endif; ?>

                    <form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                        <?php wp_nonce_field( 'bd_contact_form', 'bd_contact_nonce' ); ?>
                        <input type="hidden" name="action" value="bd_contact_submit">
                        <input type="hidden" name="redirect_url" value="<?php echo esc_url( get_permalink() ); ?>">

                        <div class="contact-form__row">
                            <div class="contact-form__field">
                                <label><?php esc_html_e( 'First Name', 'branddevelopers' ); ?> <span>*</span></label>
                                <input type="text" name="bd_first_name" placeholder="John" required>
                            </div>
                            <div class="contact-form__field">
                                <label><?php esc_html_e( 'Last Name', 'branddevelopers' ); ?> <span>*</span></label>
                                <input type="text" name="bd_last_name" placeholder="Smith" required>
                            </div>
                        </div>

                        <div class="contact-form__field">
                            <label><?php esc_html_e( 'Email Address', 'branddevelopers' ); ?> <span>*</span></label>
                            <input type="email" name="bd_email" placeholder="john@company.com" required>
                        </div>

                        <div class="contact-form__field">
                            <label><?php esc_html_e( 'Phone Number', 'branddevelopers' ); ?></label>
                            <input type="tel" name="bd_phone" placeholder="+1 (416) 000-0000">
                        </div>

                        <div class="contact-form__field">
                            <label><?php esc_html_e( 'Service You Are Interested In', 'branddevelopers' ); ?></label>
                            <select name="bd_service">
                                <option value=""><?php esc_html_e( 'Select a service...', 'branddevelopers' ); ?></option>
                                <option value="web-development"><?php esc_html_e( 'Web Development & Maintenance', 'branddevelopers' ); ?></option>
                                <option value="graphic-design"><?php esc_html_e( 'Graphic Design Services', 'branddevelopers' ); ?></option>
                                <option value="photography"><?php esc_html_e( 'Photography Services', 'branddevelopers' ); ?></option>
                                <option value="videography"><?php esc_html_e( 'Videography Services', 'branddevelopers' ); ?></option>
                                <option value="consultation"><?php esc_html_e( 'Consultation', 'branddevelopers' ); ?></option>
                                <option value="brand-strategy"><?php esc_html_e( 'Brand Strategy & Creative', 'branddevelopers' ); ?></option>
                                <option value="seo"><?php esc_html_e( 'Digital Growth & SEO', 'branddevelopers' ); ?></option>
                                <option value="other"><?php esc_html_e( 'Other', 'branddevelopers' ); ?></option>
                            </select>
                        </div>

                        <div class="contact-form__field">
                            <label><?php esc_html_e( 'Budget Range', 'branddevelopers' ); ?></label>
                            <select name="bd_budget">
                                <option value=""><?php esc_html_e( 'Select a budget range...', 'branddevelopers' ); ?></option>
                                <option value="under-1k"><?php esc_html_e( 'Under $1,000', 'branddevelopers' ); ?></option>
                                <option value="1k-5k"><?php esc_html_e( '$1,000 – $5,000', 'branddevelopers' ); ?></option>
                                <option value="5k-10k"><?php esc_html_e( '$5,000 – $10,000', 'branddevelopers' ); ?></option>
                                <option value="10k-25k"><?php esc_html_e( '$10,000 – $25,000', 'branddevelopers' ); ?></option>
                                <option value="25k+"><?php esc_html_e( '$25,000+', 'branddevelopers' ); ?></option>
                            </select>
                        </div>

                        <div class="contact-form__field">
                            <label><?php esc_html_e( 'Tell Us About Your Project', 'branddevelopers' ); ?> <span>*</span></label>
                            <textarea name="bd_message" rows="5" placeholder="<?php esc_attr_e( 'Describe your project, goals, and timeline...', 'branddevelopers' ); ?>" required></textarea>
                        </div>

                        <!-- Honeypot spam trap -->
                        <div style="display:none"><input type="text" name="bd_website_url" value=""></div>

                        <button type="submit" class="btn btn--primary" style="width:100%;justify-content:center;padding:14px;">
                            <i class="fas fa-paper-plane" style="margin-right:8px"></i>
                            <?php esc_html_e( 'Send Message', 'branddevelopers' ); ?>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
