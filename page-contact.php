<?php
/**
 * Template Name: Contact Page
 * Auto-loads for slug: contact
 */
get_header(); ?>

<!-- HERO -->
<section class="port-hero">
    <div class="port-hero__bg"></div>
    <div class="port-hero__grid"></div>
    <div class="container" style="background:transparent;max-width:100%;padding:0 80px">
        <div class="port-hero__content">
            <span class="port-hero__eyebrow">
                <span class="port-hero__eyebrow-dot"></span>
                <?php esc_html_e( "Let's Talk", 'branddevelopers' ); ?>
            </span>
            <h1 class="port-hero__title">
                <?php esc_html_e( 'Start Your', 'branddevelopers' ); ?><br>
                <span class="port-hero__title-accent"><?php esc_html_e( 'Next Project.', 'branddevelopers' ); ?></span>
            </h1>
            <p class="port-hero__desc">
                <?php esc_html_e( "Ready to build something great? Whether you're launching, rebranding, or scaling — we'd love to hear about your project.", 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- CONTACT GRID -->
<section class="contact-section">
    <div class="contact-grid">

        <!-- LEFT — INFO PANEL -->
        <div class="contact-info-panel">

            <div class="contact-info-group">
                <div class="contact-group-label"><?php esc_html_e( 'Get In Touch', 'branddevelopers' ); ?></div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.38 2 2 0 0 1 3.59 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div>
                        <div class="contact-item__label"><?php esc_html_e( 'Phone', 'branddevelopers' ); ?></div>
                        <a href="tel:+14168466483" class="contact-item__value">+1 (416) 846-6483</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div>
                        <div class="contact-item__label"><?php esc_html_e( 'Email', 'branddevelopers' ); ?></div>
                        <a href="mailto:contact@branddevelopers.ca" class="contact-item__value">contact@branddevelopers.ca</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <div class="contact-item__label"><?php esc_html_e( 'Location', 'branddevelopers' ); ?></div>
                        <div class="contact-item__value">Toronto, Ontario, Canada</div>
                    </div>
                </div>
            </div>

            <div class="contact-info-group">
                <div class="contact-group-label"><?php esc_html_e( 'Business Hours', 'branddevelopers' ); ?></div>
                <div class="contact-hours">
                    <div class="contact-hours__row">
                        <span class="contact-hours__day"><?php esc_html_e( 'Monday – Friday', 'branddevelopers' ); ?></span>
                        <span class="contact-hours__time">9:00 AM – 6:00 PM</span>
                    </div>
                    <div class="contact-hours__row">
                        <span class="contact-hours__day"><?php esc_html_e( 'Saturday', 'branddevelopers' ); ?></span>
                        <span class="contact-hours__time">10:00 AM – 3:00 PM</span>
                    </div>
                    <div class="contact-hours__row">
                        <span class="contact-hours__day"><?php esc_html_e( 'Sunday', 'branddevelopers' ); ?></span>
                        <span class="contact-hours__time contact-hours__time--closed"><?php esc_html_e( 'Closed', 'branddevelopers' ); ?></span>
                    </div>
                </div>
            </div>

            <div class="contact-info-group">
                <div class="contact-group-label"><?php esc_html_e( 'Follow Us', 'branddevelopers' ); ?></div>
                <div class="contact-socials">
                    <a href="https://instagram.com/branddevelopers.ca" target="_blank" rel="noopener" class="contact-social" aria-label="Instagram">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/brand-developers" target="_blank" rel="noopener" class="contact-social" aria-label="LinkedIn">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://facebook.com/branddevelopers.ca" target="_blank" rel="noopener" class="contact-social" aria-label="Facebook">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://tiktok.com/@branddevelopers" target="_blank" rel="noopener" class="contact-social" aria-label="TikTok">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- RIGHT — FORM -->
        <div class="contact-form-panel">
            <h2 class="contact-form__title"><?php esc_html_e( 'Send Us a Message', 'branddevelopers' ); ?></h2>
            <p class="contact-form__sub"><?php esc_html_e( "We'll get back to you within 24 hours.", 'branddevelopers' ); ?></p>

            <?php
            /* Handle form submission */
            $sent  = false;
            $error = false;
            if ( isset( $_POST['bd_contact_nonce'] ) && wp_verify_nonce( $_POST['bd_contact_nonce'], 'bd_contact_form' ) ) {
                $first   = sanitize_text_field( $_POST['first_name'] ?? '' );
                $last    = sanitize_text_field( $_POST['last_name']  ?? '' );
                $email   = sanitize_email( $_POST['email'] ?? '' );
                $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
                $service = sanitize_text_field( $_POST['service'] ?? '' );
                $budget  = sanitize_text_field( $_POST['budget']  ?? '' );
                $message = sanitize_textarea_field( $_POST['message'] ?? '' );

                if ( $first && $email && $message ) {
                    $to      = 'contact@branddevelopers.ca';
                    $subject = "New Project Inquiry from {$first} {$last}";
                    $body    = "Name: {$first} {$last}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\nBudget: {$budget}\n\nMessage:\n{$message}";
                    $headers = array( "Reply-To: {$email}" );
                    $sent    = wp_mail( $to, $subject, $body, $headers );
                    if ( ! $sent ) $error = true;
                } else {
                    $error = true;
                }
            }
            ?>

            <?php if ( $sent ) : ?>
            <div class="contact-success">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="16 12 12 16 8 12"/><line x1="12" y1="8" x2="12" y2="16"/></svg>
                <div>
                    <strong><?php esc_html_e( "Message sent!", 'branddevelopers' ); ?></strong>
                    <p><?php esc_html_e( "Thanks for reaching out — we'll be in touch within 24 hours.", 'branddevelopers' ); ?></p>
                </div>
            </div>
            <?php else : ?>

            <form class="contact-form" method="POST" action="">
                <?php wp_nonce_field( 'bd_contact_form', 'bd_contact_nonce' ); ?>

                <?php if ( $error ) : ?>
                <div class="contact-error"><?php esc_html_e( 'Please fill in all required fields and try again.', 'branddevelopers' ); ?></div>
                <?php endif; ?>

                <div class="contact-form__row">
                    <div class="contact-form__group">
                        <label class="contact-form__label" for="first_name"><?php esc_html_e( 'First Name', 'branddevelopers' ); ?> *</label>
                        <input type="text" id="first_name" name="first_name" class="contact-form__input" placeholder="John" required value="<?php echo esc_attr( $_POST['first_name'] ?? '' ); ?>">
                    </div>
                    <div class="contact-form__group">
                        <label class="contact-form__label" for="last_name"><?php esc_html_e( 'Last Name', 'branddevelopers' ); ?> *</label>
                        <input type="text" id="last_name" name="last_name" class="contact-form__input" placeholder="Smith" required value="<?php echo esc_attr( $_POST['last_name'] ?? '' ); ?>">
                    </div>
                </div>

                <div class="contact-form__row">
                    <div class="contact-form__group">
                        <label class="contact-form__label" for="email"><?php esc_html_e( 'Email Address', 'branddevelopers' ); ?> *</label>
                        <input type="email" id="email" name="email" class="contact-form__input" placeholder="john@company.com" required value="<?php echo esc_attr( $_POST['email'] ?? '' ); ?>">
                    </div>
                    <div class="contact-form__group">
                        <label class="contact-form__label" for="phone"><?php esc_html_e( 'Phone Number', 'branddevelopers' ); ?></label>
                        <input type="tel" id="phone" name="phone" class="contact-form__input" placeholder="+1 (416) 000-0000" value="<?php echo esc_attr( $_POST['phone'] ?? '' ); ?>">
                    </div>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="service"><?php esc_html_e( 'Service You Are Interested In', 'branddevelopers' ); ?></label>
                    <select id="service" name="service" class="contact-form__select">
                        <option value=""><?php esc_html_e( 'Select a service...', 'branddevelopers' ); ?></option>
                        <option value="Brand Development"><?php esc_html_e( 'Brand Development', 'branddevelopers' ); ?></option>
                        <option value="Web Design & Development"><?php esc_html_e( 'Web Design & Development', 'branddevelopers' ); ?></option>
                        <option value="App Design & Development"><?php esc_html_e( 'App Design & Development', 'branddevelopers' ); ?></option>
                        <option value="Graphic Design & Visual Assets"><?php esc_html_e( 'Graphic Design & Visual Assets', 'branddevelopers' ); ?></option>
                        <option value="Website Maintenance"><?php esc_html_e( 'Website Maintenance', 'branddevelopers' ); ?></option>
                        <option value="AI Integration"><?php esc_html_e( 'AI Integration', 'branddevelopers' ); ?></option>
                        <option value="SEO & Digital Marketing"><?php esc_html_e( 'SEO & Digital Marketing', 'branddevelopers' ); ?></option>
                        <option value="Social Media Marketing"><?php esc_html_e( 'Social Media Marketing', 'branddevelopers' ); ?></option>
                        <option value="Photography & Videography"><?php esc_html_e( 'Photography & Videography', 'branddevelopers' ); ?></option>
                        <option value="Other / Custom Package"><?php esc_html_e( 'Other / Custom Package', 'branddevelopers' ); ?></option>
                    </select>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="budget"><?php esc_html_e( 'Budget Range', 'branddevelopers' ); ?></label>
                    <select id="budget" name="budget" class="contact-form__select">
                        <option value=""><?php esc_html_e( 'Select a budget range...', 'branddevelopers' ); ?></option>
                        <option value="Under $1,000"><?php esc_html_e( 'Under $1,000', 'branddevelopers' ); ?></option>
                        <option value="$1,000 – $5,000"><?php esc_html_e( '$1,000 – $5,000', 'branddevelopers' ); ?></option>
                        <option value="$5,000 – $10,000"><?php esc_html_e( '$5,000 – $10,000', 'branddevelopers' ); ?></option>
                        <option value="$10,000 – $25,000"><?php esc_html_e( '$10,000 – $25,000', 'branddevelopers' ); ?></option>
                        <option value="$25,000+"><?php esc_html_e( '$25,000+', 'branddevelopers' ); ?></option>
                        <option value="Not sure yet"><?php esc_html_e( 'Not sure yet', 'branddevelopers' ); ?></option>
                    </select>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="message"><?php esc_html_e( 'Tell Us About Your Project', 'branddevelopers' ); ?> *</label>
                    <textarea id="message" name="message" class="contact-form__textarea" placeholder="<?php esc_attr_e( "Tell us about your project, goals, timeline and anything else you'd like us to know...", 'branddevelopers' ); ?>" required><?php echo esc_textarea( $_POST['message'] ?? '' ); ?></textarea>
                </div>

                <button type="submit" class="contact-form__btn">
                    <?php esc_html_e( 'Send Message', 'branddevelopers' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>

            </form>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
