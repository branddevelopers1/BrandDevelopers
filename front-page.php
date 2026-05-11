<?php get_header(); ?>

<!-- HERO -->
<section class="hero hero--v2">
    <div class="hero__bg" aria-hidden="true"></div>
    <div class="hero__grid-lines" aria-hidden="true"></div>
    <div class="hero__accent-bar" aria-hidden="true"></div>
    <div class="container">
        <div class="hp-hero__body">
            <!-- LEFT -->
            <div class="hp-hero__left">
                <p class="hero__eyebrow">
                    <span class="hero__eyebrow-dot" aria-hidden="true"></span>
                    <?php _e( "Toronto's Boutique Creative Agency", 'branddevelopers' ); ?>
                </p>
                <h1 class="hp-hero__title">
                    <?php _e( 'Where Branding', 'branddevelopers' ); ?><br>
                    <?php _e( 'Meets', 'branddevelopers' ); ?>
                    <span class="port-hero__title-accent"><?php _e( 'Development.', 'branddevelopers' ); ?></span>
                </h1>
                <p class="hp-hero__desc"><?php _e( 'We craft digital experiences that merge creativity and technology — brands and websites that not only look exceptional but perform effortlessly.', 'branddevelopers' ); ?></p>
                <div class="hp-hero__btns">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="svc-btn-primary">
                        <?php _e( 'Get a Free Audit', 'branddevelopers' ); ?>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="svc-btn-ghost"><?php _e( 'View Our Work', 'branddevelopers' ); ?></a>
                </div>

            </div>
            <!-- RIGHT -->
            <div class="hp-hero__right">
                <div class="hp-hero__cycle-wrap">
                    <div class="hp-hero__cycle-label"><?php _e( 'What we do', 'branddevelopers' ); ?></div>
                    <div class="hp-hero__cycle">
                        <span class="hp-hero__cycle-static">Brand&nbsp;</span>
                        <span class="hp-hero__cycle-word">
                            <span class="hp-hero__cycle-list">
                                <span>Design</span>
                                <span>Strategy</span>
                                <span>Development</span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="hp-hero__trust-card">
                    <div class="hp-hero__trust-label"><?php _e( 'Trusted by brands across Canada', 'branddevelopers' ); ?></div>
                    <div class="hp-hero__trust-names">
                        <div class="hp-hero__trust-item"><div class="hp-hero__trust-name">Sekure</div><div class="hp-hero__trust-sub">Merchants</div></div>
                        <div class="hp-hero__trust-item"><div class="hp-hero__trust-name">Distributel</div><div class="hp-hero__trust-sub">Group</div></div>
                        <div class="hp-hero__trust-item"><div class="hp-hero__trust-name">Afrobass</div><div class="hp-hero__trust-sub">Music Fest</div></div>
                        <div class="hp-hero__trust-item"><div class="hp-hero__trust-name">LAVA</div><div class="hp-hero__trust-sub">Computers</div></div>
                    </div>
                </div>
                <!-- Stats moved here from left -->
                <div class="hp-hero__stats-moved">
                    <div class="port-hero__stat"><span class="port-hero__stat-num">32+</span><span class="port-hero__stat-label"><?php _e( 'Projects', 'branddevelopers' ); ?></span></div>
                    <div class="port-hero__stat-divider"></div>
                    <div class="port-hero__stat"><span class="port-hero__stat-num">7+</span><span class="port-hero__stat-label"><?php _e( 'Years', 'branddevelopers' ); ?></span></div>
                    <div class="port-hero__stat-divider"></div>
                    <div class="port-hero__stat"><span class="port-hero__stat-num">98%</span><span class="port-hero__stat-label"><?php _e( 'Retention', 'branddevelopers' ); ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- MARQUEE — pinned to bottom of hero -->
    <div class="hp-marquee-wrap" aria-hidden="true">
        <div class="hp-marquee">
            <?php
            $ticker = array( 'Brand Development', 'Web Design', 'App Development', 'AI Integration', 'SEO & Marketing', 'Social Media', 'Photography', 'Graphic Design', 'Website Maintenance', 'Brand Development', 'Web Design', 'App Development', 'AI Integration', 'SEO & Marketing', 'Social Media', 'Photography', 'Graphic Design', 'Website Maintenance' );
            foreach ( $ticker as $item ) : ?>
            <span class="hp-marquee__item"><span class="hp-marquee__dot"></span><?php echo esc_html( $item ); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SERVICES TEASER -->
<section class="hp-svcs-section">
    <div class="hp-section-inner">
        <div class="svc-eyebrow"><?php _e( 'What We Offer', 'branddevelopers' ); ?></div>
        <h2 class="hp-section-title"><?php _e( '9 Services. One Agency.', 'branddevelopers' ); ?><br><span><?php _e( 'Zero Compromises.', 'branddevelopers' ); ?></span></h2>
        <div class="hp-svcs-grid">
            <?php
            $services = array(
                array( '01', 'Brand Development' ),
                array( '02', 'Web Design & Development' ),
                array( '03', 'App Design & Development' ),
                array( '04', 'Graphic Design & Visual Assets' ),
                array( '05', 'Website Maintenance' ),
                array( '06', 'AI Integration' ),
                array( '07', 'SEO & Digital Marketing' ),
                array( '08', 'Social Media Marketing' ),
                array( '09', 'Photography & Videography' ),
            );
            foreach ( $services as $s ) : ?>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hp-svc-pill">
                <span class="hp-svc-pill__num"><?php echo esc_html( $s[0] ); ?></span>
                <span class="hp-svc-pill__name"><?php echo esc_html( $s[1] ); ?></span>
                <span class="hp-svc-pill__arrow">→</span>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="hp-section-cta">
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="svc-btn-primary">
                <?php _e( 'Explore All Services', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- PORTFOLIO HIGHLIGHTS -->
<section class="hp-port-section">
    <div class="hp-section-inner">
        <div class="svc-eyebrow"><?php _e( 'Featured Work', 'branddevelopers' ); ?></div>
        <h2 class="hp-section-title"><?php _e( 'Real Projects.', 'branddevelopers' ); ?><br><span><?php _e( 'Real Results.', 'branddevelopers' ); ?></span></h2>
        <div class="hp-port-grid">
            <?php
            $featured = array(
                array( 'Sekure Merchants', 'Fintech · Payment Processing', 'Fintech', 'Payment processing platform built in-house — trust-driven design and high-converting onboarding.', 'https://sekuremerchants.com', 'sekuremerchants_com', '#22cc66', 'SEKURE' ),
                array( 'Afrobass Music Festival', 'Festival · Event Website', 'Events', 'High-impact festival launch site with live countdown, email capture and animated marquee experience.', 'https://afrobassfest.com', 'afrobassfest_com', '#ff8c00', 'AFROBASS' ),
                array( 'Distributel Group', 'Enterprise · Telecom', 'Enterprise', 'Full enterprise telecom platform serving 100K+ Canadian households across five sub-brands.', 'https://distributel.ca', 'distributel_ca', '#4d9fff', 'DISTRIBUTEL' ),
            );
            foreach ( $featured as $p ) : ?>
            <div class="hp-port-card">
                <div class="hp-port-card__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/portfolio/' . $p[5] . '.png' ); ?>"
                         alt="<?php echo esc_attr( $p[0] ); ?>"
                         style="width:100%;height:100%;object-fit:cover;object-position:top;display:block"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <div style="display:none;width:100%;height:100%;align-items:center;justify-content:center;background:linear-gradient(135deg,#080e24,#0d1640)">
                        <span style="font-size:18px;font-weight:900;color:<?php echo esc_attr( $p[6] ); ?>;letter-spacing:.06em;text-transform:uppercase"><?php echo esc_html( $p[7] ); ?></span>
                    </div>
                    <div class="hp-port-card__badge"><?php echo esc_html( $p[2] ); ?></div>
                </div>
                <div class="hp-port-card__info">
                    <div class="hp-port-card__cat"><?php echo esc_html( $p[1] ); ?></div>
                    <div class="hp-port-card__name"><?php echo esc_html( $p[0] ); ?></div>
                    <p class="hp-port-card__desc"><?php echo esc_html( $p[3] ); ?></p>
                    <a href="<?php echo esc_url( $p[4] ); ?>" target="_blank" rel="noopener" class="hp-port-card__link"><?php _e( 'View Project', 'branddevelopers' ); ?> →</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="hp-section-cta">
            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="svc-btn-primary">
                <?php _e( 'View All Projects', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- TRUST BAR -->
<div class="hp-trust">
    <div class="hp-trust__label"><?php _e( 'Trusted by brands across Canada', 'branddevelopers' ); ?></div>
    <div class="hp-trust__logos">
        <?php foreach ( array( 'Sekure Merchants', 'Distributel', 'Afrobass', 'LAVA Computers', 'eBlock', 'Busy2Book', 'YAK.ca' ) as $c ) : ?>
        <span class="hp-trust__logo"><?php echo esc_html( $c ); ?></span>
        <?php endforeach; ?>
    </div>
</div>

<!-- CTA -->
<section class="port-cta">
    <div class="port-cta__bg"></div>
    <div class="container">
        <div class="port-cta__inner">
            <span class="port-cta__eyebrow"><?php _e( "Let's Build Together", 'branddevelopers' ); ?></span>
            <h2 class="port-cta__title"><?php _e( 'Your brand deserves to stand out.', 'branddevelopers' ); ?></h2>
            <p class="port-cta__desc"><?php _e( "Whether you're launching, rebranding, or scaling — we build the brand infrastructure that gets you there. Get a free audit today.", 'branddevelopers' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="port-cta__btn">
                <?php _e( 'Start a Project', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
