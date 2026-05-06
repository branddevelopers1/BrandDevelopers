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
                <?php esc_html_e( 'A curated selection of our best work across e-commerce, enterprise platforms, events, branding and beyond.', 'branddevelopers' ); ?>
            </p>
            <div class="port-hero__stats">
                <div class="port-hero__stat">
                    <span class="port-hero__stat-num">32+</span>
                    <span class="port-hero__stat-label">Projects</span>
                </div>
                <div class="port-hero__stat-divider"></div>
                <div class="port-hero__stat">
                    <span class="port-hero__stat-num">5</span>
                    <span class="port-hero__stat-label">Industries</span>
                </div>
                <div class="port-hero__stat-divider"></div>
                <div class="port-hero__stat">
                    <span class="port-hero__stat-num">7+</span>
                    <span class="port-hero__stat-label">Years</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FILTER BAR -->
<div class="port-filter-wrap">
    <div class="container">
        <div class="port-filter" id="portfolio-filter">
            <button class="port-filter__btn port-filter__btn--active" data-filter="all"><?php esc_html_e( 'All Work', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="web-development"><?php esc_html_e( 'Web Dev', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="ecommerce"><?php esc_html_e( 'E-Commerce', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="enterprise"><?php esc_html_e( 'Enterprise', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="events"><?php esc_html_e( 'Events', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="fintech"><?php esc_html_e( 'Fintech', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="health"><?php esc_html_e( 'Health', 'branddevelopers' ); ?></button>
            <button class="port-filter__btn" data-filter="beauty"><?php esc_html_e( 'Beauty', 'branddevelopers' ); ?></button>
        </div>
    </div>
</div>

<!-- PORTFOLIO ROWS -->
<section class="port-list">
    <div class="container">

        <?php
        /* ── Live WP posts ── */
        $portfolio_query = new WP_Query( array(
            'post_type'      => 'case_study',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );

        if ( $portfolio_query->have_posts() ) :
            while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                $service = get_post_meta( get_the_ID(), '_bd_service', true );
                $client  = get_post_meta( get_the_ID(), '_bd_client',  true );
                $year    = get_post_meta( get_the_ID(), '_bd_year',    true );
                $url     = get_post_meta( get_the_ID(), '_bd_url',     true );
                $tags    = get_post_meta( get_the_ID(), '_bd_tags',    true );
                $cat     = get_post_meta( get_the_ID(), '_bd_filter',  true ) ?: 'web-development';
        ?>
        <div class="port-row fade-in-up" data-category="<?php echo esc_attr( $cat ); ?>">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <?php if ( $service ) : ?>
                <span class="port-row__category"><?php echo esc_html( $service ); ?></span>
                <?php endif; ?>
                <h2 class="port-row__title"><?php the_title(); ?></h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                <?php if ( $tags ) : ?>
                <div class="port-row__tags">
                    <?php foreach ( explode( ',', $tags ) as $tag ) : ?>
                    <span class="port-row__tag"><?php echo esc_html( trim( $tag ) ); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="port-row__actions">
                    <a href="<?php the_permalink(); ?>" class="port-row__btn port-row__btn--primary">
                        View Case Study <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <?php if ( $url ) : ?>
                    <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">Live Site ↗</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'large', array( 'class' => 'port-row__img', 'loading' => 'lazy' ) );
                    else : ?>
                        <div class="port-row__img-placeholder"><span><?php the_title(); ?></span></div>
                    <?php endif; ?>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span><?php echo esc_html( $service ?: 'Project' ); ?></span></div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();

        else :
        /* ── Static fallback — all 19 real projects ── */

        $projects = array(

            /* ══ TIER 1 — FEATURED ══ */
            array(
                'tier'    => 1,
                'cat'     => 'ecommerce',
                'service' => 'E-Commerce · Subscription Platform',
                'title'   => 'Chic Beauty Box',
                'url'     => 'https://chicbeautybox.ca',
                'desc'    => 'A fully customizable beauty subscription platform — personalized quiz flow, multi-tier subscription plans, Stripe payment integration, WooCommerce shop, and a complete customer account portal.',
                'tags'    => array( 'WordPress', 'WooCommerce', 'Stripe', 'UX Design', 'Subscription' ),
                'badge'   => 'E-Commerce',
                'preview' => '
                    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:11px;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#120820,#2a1045);text-align:center">
                        <div style="font-size:8px;letter-spacing:.28em;color:#b06fcc;text-transform:uppercase">A box full of beauty</div>
                        <div style="font-size:20px;letter-spacing:.2em;color:#f0d8ff;font-weight:300;font-style:italic">CHIC BEAUTY BOX</div>
                        <div style="display:flex;gap:8px">
                            <div style="width:58px;height:58px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:5px;border-radius:4px">Bi-Monthly<br>Plan</div>
                            <div style="width:58px;height:58px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:5px;border-radius:4px">6-Month<br>Plan</div>
                            <div style="width:58px;height:58px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:5px;border-radius:4px">12-Month<br>Plan</div>
                        </div>
                        <div style="font-size:34px;color:#f0d8ff;font-weight:300">$34.99</div>
                        <div style="background:#b06fcc;color:#fff;font-size:8px;letter-spacing:.18em;text-transform:uppercase;padding:10px 24px;border-radius:40px">Get Your Box</div>
                    </div>',
            ),
            array(
                'tier'    => 1,
                'cat'     => 'events',
                'service' => 'Festival · Event Website',
                'title'   => 'Afrobass Music Festival',
                'url'     => 'https://afrobassfest.com',
                'desc'    => 'A high-impact festival launch site built to drive pre-sale momentum — live countdown timer, early access email capture, multi-platform social integration, and a fully animated marquee experience.',
                'tags'    => array( 'Festival Site', 'Live Countdown', 'Email Capture', 'Animated UI' ),
                'badge'   => 'Event Website',
                'preview' => '
                    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:9px;padding:24px;width:100%;height:100%;background:#000;text-align:center;position:relative">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 40%,rgba(255,120,0,.17) 0%,transparent 70%)"></div>
                        <div style="position:relative;font-size:8px;letter-spacing:.25em;color:#ff8c00;text-transform:uppercase">Afrobeats · Amapiano · Afro-Caribbean</div>
                        <div style="position:relative;font-size:24px;font-weight:900;letter-spacing:.07em;color:#fff;text-transform:uppercase;line-height:1.08">AFROBASS<br>MUSIC FEST</div>
                        <div style="position:relative;font-size:8px;color:rgba(255,255,255,.4)">Aug 15, 2026 · Toronto, Canada</div>
                        <div style="position:relative;display:flex;gap:16px">
                            <div style="text-align:center"><div style="font-size:26px;font-weight:900;color:#fff">115</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Days</div></div>
                            <div style="text-align:center"><div style="font-size:26px;font-weight:900;color:#fff">08</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Hrs</div></div>
                            <div style="text-align:center"><div style="font-size:26px;font-weight:900;color:#fff">42</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.15em;text-transform:uppercase">Min</div></div>
                        </div>
                        <div style="position:relative;border:1px solid #ff8c00;color:#ff8c00;font-size:8px;letter-spacing:.18em;text-transform:uppercase;padding:8px 22px;border-radius:40px">Get Notified</div>
                    </div>',
            ),
            array(
                'tier'    => 1,
                'cat'     => 'events',
                'service' => 'Brand & Booking Platform',
                'title'   => 'Afrobass.com',
                'url'     => 'https://afrobass.com',
                'desc'    => 'Full brand platform for Canada\'s premier Afrobeats event producer — video hero, events listing, artist booking flow, tour pages, and a brand identity built to lead the African music market in North America.',
                'tags'    => array( 'WordPress', 'Video Hero', 'Booking Flow', 'Brand Platform', 'Entertainment' ),
                'badge'   => 'Entertainment',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:#050505;position:relative;gap:10px">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 80% 40%,rgba(200,169,110,.11) 0%,transparent 60%)"></div>
                        <div style="position:relative;font-size:8px;letter-spacing:.24em;color:#c8a96e;text-transform:uppercase">Canada\'s Premier Event Producer</div>
                        <div style="position:relative;font-size:22px;font-weight:900;color:#fff;text-transform:uppercase;line-height:1.08;max-width:210px">WE BRING AFRICA TO THE WORLD</div>
                        <div style="position:relative;display:flex;gap:18px">
                            <div><div style="font-size:20px;font-weight:900;color:#c8a96e">50+</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.12em">Events</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#c8a96e">10K+</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.12em">Fans</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#c8a96e">4</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.12em">Cities</div></div>
                        </div>
                        <div style="position:relative;display:flex;gap:8px;margin-top:4px">
                            <div style="background:#c8a96e;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;font-weight:700">Buy Tickets</div>
                            <div style="border:1px solid rgba(255,255,255,.18);color:rgba(255,255,255,.45);font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 16px;border-radius:40px">Book Talent</div>
                        </div>
                    </div>',
            ),
            array(
                'tier'    => 1,
                'cat'     => 'enterprise',
                'service' => 'Enterprise · Telecom',
                'title'   => 'Distributel Group',
                'url'     => 'https://distributel.ca',
                'desc'    => 'Full enterprise telecom platform serving 100K+ Canadian households — five sub-brands built and maintained in-house including Distributel, YAK.ca, Thinktel, Navigata, and Distributel Wholesale.',
                'tags'    => array( 'Enterprise CMS', 'Multi-Brand', 'Performance', 'Accessibility', '5 Sites' ),
                'badge'   => 'Enterprise',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a1628,#0d2244);gap:11px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#4d9fff;text-transform:uppercase">Telecom · Enterprise · 5 Brands</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">DISTRIBUTEL<br>GROUP</div>
                        <div style="height:2px;width:44px;background:linear-gradient(90deg,#2d4ef5,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.42);line-height:1.6;max-width:200px">Internet, phone &amp; TV services for 100K+ Canadian customers coast to coast.</div>
                        <div style="display:flex;gap:6px;flex-wrap:wrap;margin-top:2px">
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">YAK.ca</div>
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">Thinktel</div>
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">Navigata</div>
                        </div>
                    </div>',
            ),
            array(
                'tier'    => 1,
                'cat'     => 'enterprise',
                'service' => 'B2B · Hardware Manufacturer',
                'title'   => 'LAVA Computers MFG',
                'url'     => 'https://lavalink.com',
                'desc'    => 'Multi-domain digital presence for a global hardware manufacturer since 1988 — five product-line websites covering PCIe expansion, USB hubs, enclosures, accessories, and Simulcharge technology.',
                'tags'    => array( 'Multi-Domain', 'B2B Portal', 'Product Catalogue', 'E-Commerce', '5 Sites' ),
                'badge'   => 'B2B Hardware',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0f0505,#2a0808);gap:11px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ff4444;text-transform:uppercase">Hardware Manufacturer · B2B</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">LAVA<br>COMPUTERS</div>
                        <div style="height:2px;width:44px;background:linear-gradient(90deg,#ff4444,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.42);line-height:1.6;max-width:200px">PCIe &amp; USB expansion powering professional workstations globally since 1988.</div>
                        <div style="display:flex;gap:14px;margin-top:4px">
                            <div><div style="font-size:20px;font-weight:900;color:#ff4444">5</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Sites</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#ff4444">35+</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Years</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#ff4444">Global</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Reach</div></div>
                        </div>
                    </div>',
            ),
            array(
                'tier'    => 1,
                'cat'     => 'fintech',
                'service' => 'Fintech · Payment Processing',
                'title'   => 'Sekure Merchants',
                'url'     => 'https://sekuremerchants.com',
                'desc'    => 'Payment processing platform built in-house — trust-driven design, compliance-first UX, and a high-converting merchant onboarding flow that builds confidence at every step of the journey.',
                'tags'    => array( 'Fintech UX', 'Compliance', 'Conversion', 'Onboarding Flow' ),
                'badge'   => 'Fintech',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#041a10,#082e18);gap:11px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#22cc66;text-transform:uppercase">Fintech · Payments · In-House</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SEKURE<br>MERCHANTS</div>
                        <div style="height:2px;width:44px;background:linear-gradient(90deg,#22cc66,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.42);line-height:1.6;max-width:200px">Trusted payment processing for Canadian merchants — simple, secure, reliable.</div>
                        <div style="display:flex;gap:14px;margin-top:4px">
                            <div><div style="font-size:20px;font-weight:900;color:#22cc66">100K+</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Merchants</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#22cc66">99.9%</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Uptime</div></div>
                        </div>
                    </div>',
            ),

            /* ══ TIER 2 — MORE WORK ══ */
            array(
                'tier'    => 2,
                'cat'     => 'enterprise',
                'service' => 'Automotive · Enterprise Platform',
                'title'   => 'eBlock',
                'url'     => 'https://eblock.com',
                'desc'    => 'Large-scale automotive auction and wholesale platform — complex dealer portals, inventory management, and real-time bidding built in-house at enterprise scale.',
                'tags'    => array( 'Automotive', 'Auction', 'Enterprise', 'In-House' ),
                'badge'   => 'Enterprise',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0d1520,#1a2840);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#5599ff;text-transform:uppercase">Automotive · Auction Platform</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.05em;text-transform:uppercase">eBLOCK</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#5599ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Canada\'s digital automotive wholesale auction platform — real-time bidding at enterprise scale.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'SaaS · Booking Platform',
                'title'   => 'Busy2Book',
                'url'     => 'https://busy2book.ca',
                'desc'    => 'Appointment booking SaaS platform for Canadian service businesses — calendar management, client notifications, and a clean dashboard built for operators on the go.',
                'tags'    => array( 'SaaS', 'Booking', 'Calendar', 'Service Business' ),
                'badge'   => 'SaaS',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a2a,#102030);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#38b2ff;text-transform:uppercase">SaaS · Appointment Booking</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">BUSY2BOOK</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#38b2ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Simple, powerful booking for Canadian service businesses. Manage appointments anywhere.</div>
                        <div style="background:#38b2ff;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book Now</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Non-Profit · Legal Aid',
                'title'   => 'SALC Ontario',
                'url'     => 'https://salc.on.ca',
                'desc'    => 'Organization website for a community legal aid and advocacy body — accessible design, clear content hierarchy, and a resource-rich structure for Ontario residents seeking legal help.',
                'tags'    => array( 'Non-Profit', 'Legal Aid', 'Accessibility', 'Community' ),
                'badge'   => 'Non-Profit',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#111820,#1a2230);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#88aacc;text-transform:uppercase">Non-Profit · Legal Aid · Ontario</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SALC<br>ONTARIO</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#88aacc,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Community legal aid and advocacy services for Ontario residents — accessible and resource-rich.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Local Service · Junk Removal',
                'title'   => 'Junk-A-Haul',
                'url'     => 'https://junk-a-haul.com',
                'desc'    => 'Local junk removal service website with instant quote request, service area map, and SEO-optimized content targeting Toronto and GTA homeowners and businesses.',
                'tags'    => array( 'Local Service', 'SEO', 'Lead Generation', 'GTA' ),
                'badge'   => 'Local Business',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a1200,#2e2000);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ffaa22;text-transform:uppercase">Local Service · Junk Removal · GTA</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">JUNK-A-HAUL</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ffaa22,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Toronto and GTA junk removal — fast, reliable, eco-friendly. Get a free quote in minutes.</div>
                        <div style="background:#ffaa22;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Get a Quote</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'beauty',
                'service' => 'Beauty · Lash &amp; Salon Services',
                'title'   => 'Lashes Toronto &amp; Beauty',
                'url'     => 'https://lashestorontoandbeauty.com',
                'desc'    => 'Lash salon and beauty services booking site — service menu, gallery, online booking integration, and a brand aesthetic designed to attract and convert Toronto beauty clients.',
                'tags'    => array( 'Beauty Salon', 'Online Booking', 'Gallery', 'Local SEO' ),
                'badge'   => 'Beauty',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0820,#280a30);gap:10px;text-align:center">
                        <div style="font-size:8px;letter-spacing:.25em;color:#dd88cc;text-transform:uppercase">Beauty · Lashes · Toronto</div>
                        <div style="font-size:18px;font-weight:300;color:#f8e8ff;letter-spacing:.16em;font-style:italic">Lashes Toronto<br>&amp; Beauty</div>
                        <div style="height:1px;width:36px;background:linear-gradient(90deg,transparent,#dd88cc,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6;max-width:180px">Premium lash extensions &amp; beauty services in Toronto. Book online.</div>
                        <div style="background:#dd88cc;color:#fff;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 20px;border-radius:40px;font-weight:600">Book Now</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Entertainment · Media Platform',
                'title'   => 'Playhouse Worldwide',
                'url'     => 'https://playhouseworldwide.com',
                'desc'    => 'Entertainment and media company digital platform — brand identity, content distribution, and an engaging online presence for a globally-minded entertainment brand.',
                'tags'    => array( 'Entertainment', 'Media', 'Brand', 'Global' ),
                'badge'   => 'Entertainment',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#100a1a,#1e1030);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#aa77ff;text-transform:uppercase">Entertainment · Media · Global</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">PLAYHOUSE<br>WORLDWIDE</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#aa77ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Global entertainment and media platform — where culture meets content.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'health',
                'service' => 'Health · Advocacy &amp; Education',
                'title'   => 'Menopause Matter',
                'url'     => 'https://www.menopausematter.org',
                'desc'    => 'Health advocacy and education platform focused on menopause awareness — resource library, community support, and clean accessible design for women navigating this life stage.',
                'tags'    => array( 'Health', 'Non-Profit', 'Education', 'Accessibility' ),
                'badge'   => 'Health',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0a0a,#2e1518);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ff8899;text-transform:uppercase">Health · Advocacy · Education</div>
                        <div style="font-size:22px;font-weight:700;color:#fff;letter-spacing:.03em">Menopause<br>Matter</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ff8899,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Empowering women with resources, community and expert guidance through menopause.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'health',
                'service' => 'Health · Community Wellness',
                'title'   => 'Healing at the Intersections',
                'url'     => 'https://healingattheintersections.com',
                'desc'    => 'Community healing and wellness organization website — accessible design, program listings, and a safe digital space for those seeking culturally responsive wellness support.',
                'tags'    => array( 'Health', 'Wellness', 'Community', 'Accessible Design' ),
                'badge'   => 'Wellness',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a12,#122a1a);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#44cc88;text-transform:uppercase">Health · Wellness · Community</div>
                        <div style="font-size:20px;font-weight:700;color:#fff;letter-spacing:.02em;line-height:1.2">Healing at the<br>Intersections</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#44cc88,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Culturally responsive healing and wellness support for communities at the intersection.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Finance · Investment Advisory',
                'title'   => 'Kenaidien Capital',
                'url'     => 'https://kenaidiencapital.com',
                'desc'    => 'Investment and capital advisory firm website — trust-building design, service overview, and a professional digital presence tailored to attract high-net-worth clients and institutional investors.',
                'tags'    => array( 'Finance', 'Corporate', 'Advisory', 'Trust Design' ),
                'badge'   => 'Finance',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a0e18,#121828);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#88aaff;text-transform:uppercase">Finance · Investment Advisory</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">KENAIDIEN<br>CAPITAL</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#88aaff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Strategic capital advisory and investment management for discerning investors.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Real Estate · Hospitality',
                'title'   => 'Ms Lee Place',
                'url'     => 'https://msleeplace.com',
                'desc'    => 'Real estate and hospitality property platform — beautiful property photography showcase, booking integration, and a premium brand experience designed to convert browsers into guests.',
                'tags'    => array( 'Real Estate', 'Hospitality', 'Booking', 'Property' ),
                'badge'   => 'Hospitality',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#100c08,#201810);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ddaa66;text-transform:uppercase">Real Estate · Hospitality</div>
                        <div style="font-size:20px;font-weight:300;color:#fff;letter-spacing:.14em;font-style:italic">Ms Lee Place</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ddaa66,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Premium property experience — where comfort meets elegance. Book your stay today.</div>
                        <div style="background:#ddaa66;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book a Stay</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Personal Brand · Creative',
                'title'   => 'KennedyOG',
                'url'     => 'https://kennedyog.com',
                'desc'    => 'Personal brand and creative portfolio website — bold visual identity, custom typography, and a digital space that positions the client as a leader in their creative field.',
                'tags'    => array( 'Personal Brand', 'Creative', 'Portfolio', 'Identity' ),
                'badge'   => 'Personal Brand',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a0a0a,#1a1a1a);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:rgba(255,255,255,.4);text-transform:uppercase">Personal Brand · Creative</div>
                        <div style="font-size:26px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">KENNEDY<span style="color:#2d4ef5">OG</span></div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#fff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Bold personal brand presence — creative leadership, original voice, digital impact.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'events',
                'service' => 'Events · Afro Caribbean Culture',
                'title'   => 'Afro-Fête',
                'url'     => 'https://afro-fete.com',
                'desc'    => 'Afro Caribbean party and event series website — event listings, ticket sales, photo galleries, and a vibrant brand aesthetic celebrating African and Caribbean culture through music and dance.',
                'tags'    => array( 'Events', 'Culture', 'Ticketing', 'Caribbean' ),
                'badge'   => 'Events',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0805,#2e1008);gap:10px;text-align:center;position:relative">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50%,rgba(255,80,20,.12) 0%,transparent 70%)"></div>
                        <div style="position:relative;font-size:8px;letter-spacing:.22em;color:#ff6622;text-transform:uppercase">Events · Afro Caribbean</div>
                        <div style="position:relative;font-size:28px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">AFRO-FÊTE</div>
                        <div style="position:relative;height:2px;width:36px;background:linear-gradient(90deg,transparent,#ff6622,transparent)"></div>
                        <div style="position:relative;font-size:9px;color:rgba(255,255,255,.4);line-height:1.6;max-width:200px">Celebrating African &amp; Caribbean culture through music, dance and unforgettable events.</div>
                    </div>',
            ),
            array(
                'tier'    => 2,
                'cat'     => 'web-development',
                'service' => 'Community · Organization',
                'title'   => 'MLRS.ca',
                'url'     => 'http://mlrs.ca',
                'desc'    => 'Community organization and services website — clean accessible design, program listings, and clear calls to action for community members seeking resources and support.',
                'tags'    => array( 'Community', 'Organization', 'Services', 'Accessible' ),
                'badge'   => 'Community',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0e1218,#141c26);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#7799bb;text-transform:uppercase">Community · Organization</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">MLRS.ca</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#7799bb,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Community services and resources — accessible design for those who need it most.</div>
                    </div>',
            ),
        );

        $current_tier = 0;
        foreach ( $projects as $p ) :
            if ( $p['tier'] !== $current_tier ) :
                $current_tier = $p['tier'];
                if ( $current_tier === 1 ) : ?>
                <div class="port-tier-label"><span><?php esc_html_e( 'Featured Work', 'branddevelopers' ); ?></span></div>
                <?php elseif ( $current_tier === 2 ) : ?>
                <div class="port-tier-label port-tier-label--2"><span><?php esc_html_e( 'More Work', 'branddevelopers' ); ?></span></div>
                <?php endif;
            endif; ?>
            <div class="port-row fade-in-up" data-category="<?php echo esc_attr( $p['cat'] ); ?>">
                <div class="port-row__bar"></div>
                <div class="port-row__content">
                    <span class="port-row__category"><?php echo $p['service']; ?></span>
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
                            View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </div>
                <div class="port-row__visual">
                    <div class="port-row__img-wrap">
                        <?php echo $p['preview']; ?>
                        <div class="port-row__img-shine"></div>
                    </div>
                    <div class="port-row__img-badge"><span><?php echo esc_html( $p['badge'] ); ?></span></div>
                </div>
            </div>
        <?php endforeach;
        endif; ?>

        <!-- TIER 3 — Also Built By Us -->
        <div class="port-tier-label port-tier-label--3"><span><?php esc_html_e( 'Also Built By Us', 'branddevelopers' ); ?></span></div>
        <div class="port-group-row">
            <p class="port-group-row__intro"><?php esc_html_e( 'Additional projects across music, events, and entertainment:', 'branddevelopers' ); ?></p>
            <div class="port-group-row__grid">
                <?php
                $group = array(
                    array( 'name' => 'In Tunez We Trust',     'url' => 'https://intunezwetrust.com',   'cat' => 'DJ Tunez' ),
                    array( 'name' => 'DJ Tunez Blackout',     'url' => 'https://djtunezblackout.com',  'cat' => 'DJ Tunez' ),
                    array( 'name' => 'Afro Carnival Fest',    'url' => 'https://afrocarnivalfest.com', 'cat' => 'Events'   ),
                    array( 'name' => 'Afrobeat Nights NYC',   'url' => 'https://afrobeatnights.nyc',   'cat' => 'Events'   ),
                    array( 'name' => 'Amapiano Nights',       'url' => 'https://amapianonights.com',   'cat' => 'Events'   ),
                    array( 'name' => 'Tunez Radio',           'url' => 'https://tunezradio.com',       'cat' => 'Music'    ),
                    array( 'name' => 'Top Cat Entertainment', 'url' => 'https://topcat-ent.com',       'cat' => 'Entertainment' ),
                    array( 'name' => 'LAVA Ports',            'url' => 'https://lavaports.com',        'cat' => 'Hardware' ),
                    array( 'name' => 'LAVA Enclosures',       'url' => 'https://lavaenclosures.com',   'cat' => 'Hardware' ),
                    array( 'name' => 'LAVA Accessory',        'url' => 'https://lavaaccessory.com',    'cat' => 'Hardware' ),
                    array( 'name' => 'LAVA Simulcharge',      'url' => 'https://lavasimulcharge.com',  'cat' => 'Hardware' ),
                );
                foreach ( $group as $gp ) : ?>
                <a href="<?php echo esc_url( $gp['url'] ); ?>" target="_blank" rel="noopener" class="port-group-row__item">
                    <span class="port-group-row__cat"><?php echo esc_html( $gp['cat'] ); ?></span>
                    <span class="port-group-row__name"><?php echo esc_html( $gp['name'] ); ?></span>
                    <span class="port-group-row__arrow">↗</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

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
