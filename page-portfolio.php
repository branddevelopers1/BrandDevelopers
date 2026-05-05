<?php
/**
 * Template Name: Portfolio Page
 * Auto-loads for slug: portfolio
 */
get_header(); ?>

<!-- HERO -->
<section class="port-hero">
    <div class="port-hero__bg"></div>
    <div class="port-hero__grid"></div>
    <div class="container">
        <div class="port-hero__content">
            <span class="port-hero__eyebrow">
                <span class="port-hero__eyebrow-dot"></span>
                <?php esc_html_e( 'Our Work', 'branddevelopers' ); ?>
            </span>
            <h1 class="port-hero__title">
                <?php esc_html_e( 'Real Projects.', 'branddevelopers' ); ?><br>
                <span class="port-hero__title-accent"><?php esc_html_e( 'Real Results.', 'branddevelopers' ); ?></span>
            </h1>
            <p class="port-hero__desc">
                <?php esc_html_e( 'A curated selection of our best work across branding, web, photography, and videography.', 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- FILTER BAR -->
<div class="port-filter-wrap">
    <div class="container">
        <div class="port-filter" id="portfolio-filter">
            <button class="port-filter__btn port-filter__btn--active" data-filter="all"><?php esc_html_e( 'All Work', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="web-development"><?php esc_html_e( 'Web Development', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="graphic-design"><?php esc_html_e( 'Graphic Design', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="photography"><?php esc_html_e( 'Photography', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="videography"><?php esc_html_e( 'Videography', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="branding"><?php esc_html_e( 'Branding', 'branddevelopers' ); ?></button>
        </div>
    </div>
</div>

<!-- PORTFOLIO ROWS -->
<section class="port-list">
    <div class="container">
        <?php
        $portfolio_query = new WP_Query( array(
            'post_type'      => 'case_study',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        if ( $portfolio_query->have_posts() ) :
            while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                $service = get_post_meta( get_the_ID(), '_bd_service', true );
                $client  = get_post_meta( get_the_ID(), '_bd_client',  true );
                $year    = get_post_meta( get_the_ID(), '_bd_year',    true );
                $url     = get_post_meta( get_the_ID(), '_bd_url',     true );
                $tags    = get_post_meta( get_the_ID(), '_bd_tags',    true );

                $cat = 'branding';
                if ( stripos( $service, 'web' ) !== false || stripos( $service, 'development' ) !== false ) $cat = 'web-development';
                elseif ( stripos( $service, 'graphic' ) !== false || stripos( $service, 'logo' ) !== false ) $cat = 'graphic-design';
                elseif ( stripos( $service, 'photo' ) !== false ) $cat = 'photography';
                elseif ( stripos( $service, 'video' ) !== false ) $cat = 'videography';
                elseif ( stripos( $service, 'brand' ) !== false ) $cat = 'branding';
        ?>
        <div class="port-row fade-in-up" data-category="<?php echo esc_attr( $cat ); ?>">
            <!-- LEFT: Content -->
            <div class="port-row__content">
                <?php if ( $service ) : ?>
                <span class="port-row__category"><?php echo esc_html( $service ); ?></span>
                <?php endif; ?>
                <h2 class="port-row__title"><?php the_title(); ?></h2>
                <div class="port-row__rule"></div>
                <div class="port-row__desc"><?php echo wp_trim_words( get_the_excerpt(), 28 ); ?></div>
                <?php if ( $tags ) : ?>
                <div class="port-row__tags">
                    <?php foreach ( explode( ',', $tags ) as $tag ) : ?>
                    <span class="port-row__tag"><?php echo esc_html( trim( $tag ) ); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="port-row__actions">
                    <a href="<?php the_permalink(); ?>" class="port-row__btn port-row__btn--primary">
                        View Case Study
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <?php if ( $url ) : ?>
                    <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">
                        Live Site ↗
                    </a>
                    <?php endif; ?>
                </div>
                <?php if ( $client || $year ) : ?>
                <div class="port-row__meta">
                    <?php if ( $client ) : ?><span><?php echo esc_html( $client ); ?></span><?php endif; ?>
                    <?php if ( $year )   : ?><span><?php echo esc_html( $year );   ?></span><?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <!-- RIGHT: Image card -->
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'large', array( 'class' => 'port-row__img', 'loading' => 'lazy' ) );
                    else : ?>
                        <div class="port-row__img-placeholder">
                            <span><?php the_title(); ?></span>
                        </div>
                    <?php endif; ?>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge">
                    <span><?php echo esc_html( $service ?: 'Project' ); ?></span>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            // ── STATIC FALLBACK — real client projects ──────────────────────
            $projects = array(
                array(
                    'cat'   => 'web-development',
                    'service' => 'E-Commerce · Subscription Platform',
                    'title' => 'Chic Beauty Box',
                    'desc'  => 'A fully customizable beauty subscription platform — personalized quiz flow, multi-tier subscription plans, Stripe payment integration, WooCommerce shop, and a complete customer account portal.',
                    'tags'  => array( 'WordPress', 'WooCommerce', 'Stripe', 'UX Design' ),
                    'url'   => 'https://chicbeautybox.ca',
                    'color_bg' => '#120820',
                    'color_accent' => '#b06fcc',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;padding:28px;height:100%;background:linear-gradient(135deg,#120820,#2a1045)">
                            <div style="font-size:9px;letter-spacing:.25em;color:#b06fcc;text-transform:uppercase">A box full of beauty</div>
                            <div style="font-family:Georgia,serif;font-size:22px;letter-spacing:.2em;color:#f0d8ff;font-weight:300">CHIC BEAUTY BOX</div>
                            <div style="display:flex;gap:8px">
                                <div style="width:60px;height:60px;border:1px solid rgba(176,111,204,.4);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:6px">Bi-Monthly Plan</div>
                                <div style="width:60px;height:60px;border:1px solid rgba(176,111,204,.4);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:6px">6-Month Plan</div>
                                <div style="width:60px;height:60px;border:1px solid rgba(176,111,204,.4);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:6px">12-Month Plan</div>
                            </div>
                            <div style="font-size:36px;color:#f0d8ff;font-weight:300">$34.99</div>
                            <div style="background:#b06fcc;color:#fff;font-size:8px;letter-spacing:.2em;text-transform:uppercase;padding:10px 24px;border-radius:40px">Get Your Box</div>
                        </div>',
                ),
                array(
                    'cat'   => 'web-development',
                    'service' => 'Festival · Event Website',
                    'title' => 'Afrobass Music Festival',
                    'desc'  => 'A high-impact festival launch site built to generate pre-sale momentum — live countdown timer, early access email capture, multi-platform social integration, and a fully animated marquee ticker.',
                    'tags'  => array( 'Festival Site', 'Email Capture', 'Live Countdown', 'Animated UI' ),
                    'url'   => 'https://afrobassfest.com',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;padding:24px;height:100%;background:#000;text-align:center;position:relative">
                            <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 40%,rgba(255,120,0,.18) 0%,transparent 70%)"></div>
                            <div style="position:relative;font-size:8px;letter-spacing:.25em;color:#ff8c00;text-transform:uppercase">Afrobeats · Amapiano · Afro-Caribbean</div>
                            <div style="position:relative;font-size:26px;font-weight:900;letter-spacing:.08em;color:#fff;line-height:1.1;text-transform:uppercase">AFROBASS<br>FEST</div>
                            <div style="position:relative;font-size:9px;color:rgba(255,255,255,.5);letter-spacing:.15em">August 15, 2026 · Toronto</div>
                            <div style="position:relative;display:flex;gap:14px">
                                <div style="text-align:center"><div style="font-size:28px;font-weight:900;color:#fff">115</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Days</div></div>
                                <div style="text-align:center"><div style="font-size:28px;font-weight:900;color:#fff">08</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Hrs</div></div>
                                <div style="text-align:center"><div style="font-size:28px;font-weight:900;color:#fff">42</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Min</div></div>
                            </div>
                            <div style="position:relative;border:1px solid #ff8c00;color:#ff8c00;font-size:8px;letter-spacing:.2em;text-transform:uppercase;padding:8px 22px;border-radius:40px">Get Notified</div>
                        </div>',
                ),
                array(
                    'cat'   => 'web-development',
                    'service' => 'Brand & Booking Platform',
                    'title' => 'Afrobass.com',
                    'desc'  => 'Full brand platform for Canada\'s premier Afrobeats event producer — video hero, events listing, artist booking flow, tour pages, and a brand identity built to lead in the African music market.',
                    'tags'  => array( 'WordPress', 'Video Hero', 'Booking Flow', 'Brand Platform' ),
                    'url'   => 'https://afrobass.com',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;height:100%;background:#050505;position:relative;gap:10px">
                            <div style="position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 80% 40%,rgba(200,169,110,.12) 0%,transparent 60%)"></div>
                            <div style="position:relative;font-size:8px;letter-spacing:.25em;color:#c8a96e;text-transform:uppercase">Canada\'s Premier Event Producer</div>
                            <div style="position:relative;font-size:24px;font-weight:900;color:#fff;line-height:1.1;text-transform:uppercase">WE BRING<br>AFRICA<br>TO THE WORLD</div>
                            <div style="position:relative;display:flex;gap:18px">
                                <div><div style="font-size:22px;font-weight:900;color:#c8a96e">50+</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.15em">Events</div></div>
                                <div><div style="font-size:22px;font-weight:900;color:#c8a96e">10K+</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.15em">Fans</div></div>
                                <div><div style="font-size:22px;font-weight:900;color:#c8a96e">4</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.15em">Cities</div></div>
                            </div>
                            <div style="position:relative;display:flex;gap:8px;margin-top:4px">
                                <div style="background:#c8a96e;color:#000;font-size:8px;letter-spacing:.15em;text-transform:uppercase;padding:8px 18px;border-radius:40px">Buy Tickets</div>
                                <div style="border:1px solid rgba(255,255,255,.2);color:rgba(255,255,255,.5);font-size:8px;letter-spacing:.15em;text-transform:uppercase;padding:8px 18px;border-radius:40px">Book Talent</div>
                            </div>
                        </div>',
                ),
                array(
                    'cat'   => 'web-development',
                    'service' => 'Enterprise · Telecom',
                    'title' => 'Distributel',
                    'desc'  => 'Full enterprise telecom platform serving thousands of Canadian households — built for scale, speed and reliability. Multiple sub-brands including YAK.ca, Thinktel, and Navigata.',
                    'tags'  => array( 'Enterprise CMS', 'Multi-Brand', 'Performance', 'Accessibility' ),
                    'url'   => 'https://distributel.ca',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;height:100%;background:linear-gradient(135deg,#0a1628,#0d2244);gap:12px">
                            <div style="font-size:8px;letter-spacing:.2em;color:#4d9fff;text-transform:uppercase">Telecom · Enterprise</div>
                            <div style="font-size:28px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">DISTRIBUTEL</div>
                            <div style="height:2px;width:48px;background:linear-gradient(90deg,#2d4ef5,transparent)"></div>
                            <div style="font-size:9px;color:rgba(255,255,255,.5);line-height:1.6;max-width:200px">Canada\'s trusted telecom provider — internet, phone & TV services coast to coast.</div>
                            <div style="display:flex;gap:12px;margin-top:4px">
                                <div><div style="font-size:20px;font-weight:900;color:#4d9fff">5+</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.1em">Brands</div></div>
                                <div><div style="font-size:20px;font-weight:900;color:#4d9fff">100K+</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.1em">Customers</div></div>
                            </div>
                        </div>',
                ),
                array(
                    'cat'   => 'web-development',
                    'service' => 'B2B · Hardware Manufacturer',
                    'title' => 'LAVA Computers MFG',
                    'desc'  => 'Multi-domain digital presence for a global hardware manufacturer — product catalogues, dealer portals, and B2B sales flows across five product line websites.',
                    'tags'  => array( 'Multi-Domain', 'B2B Portal', 'Product Catalogue', 'E-Commerce' ),
                    'url'   => 'https://lavalink.com',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;height:100%;background:linear-gradient(135deg,#0f0505,#2a0808);gap:12px">
                            <div style="font-size:8px;letter-spacing:.2em;color:#ff4444;text-transform:uppercase">Hardware Manufacturer · B2B</div>
                            <div style="font-size:28px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">LAVA<br>COMPUTERS</div>
                            <div style="height:2px;width:48px;background:linear-gradient(90deg,#ff4444,transparent)"></div>
                            <div style="font-size:9px;color:rgba(255,255,255,.5);line-height:1.6;max-width:200px">PCIe & USB expansion — powering professional workstations globally since 1988.</div>
                            <div style="display:flex;gap:12px;margin-top:4px">
                                <div><div style="font-size:20px;font-weight:900;color:#ff4444">5</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.1em">Sites</div></div>
                                <div><div style="font-size:20px;font-weight:900;color:#ff4444">35+</div><div style="font-size:7px;color:rgba(255,255,255,.4);text-transform:uppercase;letter-spacing:.1em">Yrs</div></div>
                            </div>
                        </div>',
                ),
                array(
                    'cat'   => 'web-development',
                    'service' => 'Fintech · Payment Processing',
                    'title' => 'Sekure Merchants',
                    'desc'  => 'Payment processing platform — trust-driven design, compliance-first UX, and a high-converting merchant onboarding flow that builds confidence at every step.',
                    'tags'  => array( 'Fintech UX', 'Compliance', 'Conversion Optimized', 'Onboarding Flow' ),
                    'url'   => 'https://sekuremerchants.com',
                    'preview_html' => '
                        <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;height:100%;background:linear-gradient(135deg,#041a10,#082e18);gap:12px">
                            <div style="font-size:8px;letter-spacing:.2em;color:#22cc66;text-transform:uppercase">Fintech · Payments</div>
                            <div style="font-size:28px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SEKURE<br>MERCHANTS</div>
                            <div style="height:2px;width:48px;background:linear-gradient(90deg,#22cc66,transparent)"></div>
                            <div style="font-size:9px;color:rgba(255,255,255,.5);line-height:1.6;max-width:200px">Trusted payment processing for Canadian merchants — simple, secure, reliable.</div>
                            <div style="display:flex;gap:8px;margin-top:4px">
                                <div style="background:#22cc66;color:#000;font-size:8px;letter-spacing:.15em;text-transform:uppercase;padding:8px 16px;border-radius:40px;font-weight:700">Get Started</div>
                            </div>
                        </div>',
                ),
            );

            foreach ( $projects as $i => $p ) :
        ?>
        <div class="port-row fade-in-up" data-category="<?php echo esc_attr( $p['cat'] ); ?>">
            <!-- LEFT: Content -->
            <div class="port-row__content">
                <span class="port-row__category"><?php echo esc_html( $p['service'] ); ?></span>
                <h2 class="port-row__title"><?php echo esc_html( $p['title'] ); ?></h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc"><?php echo esc_html( $p['desc'] ); ?></p>
                <div class="port-row__tags">
                    <?php foreach ( $p['tags'] as $tag ) : ?>
                    <span class="port-row__tag"><?php echo esc_html( $tag ); ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="port-row__actions">
                    <a href="<?php echo esc_url( $p['url'] ); ?>" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">
                        View Live Site
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
            <!-- RIGHT: Visual card -->
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <?php echo $p['preview_html']; ?>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge">
                    <span><?php echo esc_html( explode( '·', $p['service'] )[0] ); ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; endif; ?>
    </div>
</section>

<!-- CTA -->
<section class="port-cta">
    <div class="port-cta__bg"></div>
    <div class="container">
        <div class="port-cta__inner">
            <span class="port-cta__eyebrow"><?php esc_html_e( "Let's Work Together", 'branddevelopers' ); ?></span>
            <h2 class="port-cta__title"><?php esc_html_e( 'Your project could be next.', 'branddevelopers' ); ?></h2>
            <p class="port-cta__desc"><?php esc_html_e( "Ready to create something great? Let's talk about your vision.", 'branddevelopers' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="port-cta__btn">
                <?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
