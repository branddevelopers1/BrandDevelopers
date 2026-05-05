<?php
/**
 * Template Name: Portfolio Page
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
                <div class="port-hero__stat"><span class="port-hero__stat-num">32+</span><span class="port-hero__stat-label">Projects</span></div>
                <div class="port-hero__stat-divider"></div>
                <div class="port-hero__stat"><span class="port-hero__stat-num">5</span><span class="port-hero__stat-label">Industries</span></div>
                <div class="port-hero__stat-divider"></div>
                <div class="port-hero__stat"><span class="port-hero__stat-num">7+</span><span class="port-hero__stat-label">Years</span></div>
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

<!-- PORTFOLIO GRID -->
<section class="port-grid-section">
    <div class="container">

        <?php
        $portfolio_query = new WP_Query( array(
            'post_type'      => 'case_study',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );

        if ( $portfolio_query->have_posts() ) :
            echo '<div class="port-masonry" id="portfolio-grid">';
            while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                $service = get_post_meta( get_the_ID(), '_bd_service', true );
                $client  = get_post_meta( get_the_ID(), '_bd_client',  true );
                $year    = get_post_meta( get_the_ID(), '_bd_year',    true );
                $url     = get_post_meta( get_the_ID(), '_bd_url',     true );
                $tags    = get_post_meta( get_the_ID(), '_bd_tags',    true );
                $cat     = get_post_meta( get_the_ID(), '_bd_filter',  true ) ?: 'web-development';
            ?>
            <div class="port-card fade-in-up" data-category="<?php echo esc_attr( $cat ); ?>">
                <div class="port-card__preview">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'large', array( 'class' => 'port-card__img', 'loading' => 'lazy' ) );
                    else : ?>
                        <div class="port-card__placeholder"><span><?php the_title(); ?></span></div>
                    <?php endif; ?>
                    <div class="port-card__overlay">
                        <div class="port-card__cat"><?php echo esc_html( $service ); ?></div>
                        <h3 class="port-card__title"><?php the_title(); ?></h3>
                        <?php if ( $tags ) :
                            $tag_arr = explode( ',', $tags ); ?>
                        <div class="port-card__tags">
                            <?php foreach ( array_slice( $tag_arr, 0, 3 ) as $tag ) : ?>
                            <span class="port-card__tag"><?php echo esc_html( trim( $tag ) ); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="port-card__actions">
                            <a href="<?php the_permalink(); ?>" class="port-card__btn">View Case Study →</a>
                            <?php if ( $url ) : ?>
                            <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" class="port-card__btn port-card__btn--ghost">Live Site ↗</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="port-card__body">
                    <span class="port-card__label"><?php echo esc_html( $service ); ?></span>
                    <h3 class="port-card__name"><?php the_title(); ?></h3>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();
            echo '</div>';

        else :
        /* ── Static fallback with all real projects ── */

        $projects = array(
            /* TIER 1 */
            array(
                'tier' => 1, 'cat' => 'ecommerce',
                'service' => 'E-Commerce · Subscription',
                'title' => 'Chic Beauty Box',
                'url'   => 'https://chicbeautybox.ca',
                'tags'  => array( 'WordPress', 'WooCommerce', 'Stripe' ),
                'badge' => 'E-Commerce',
                'preview' => '
                    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#120820,#2a1045);text-align:center">
                        <div style="font-size:8px;letter-spacing:.28em;color:#b06fcc;text-transform:uppercase">A box full of beauty</div>
                        <div style="font-size:20px;letter-spacing:.2em;color:#f0d8ff;font-weight:300;font-style:italic">CHIC BEAUTY BOX</div>
                        <div style="display:flex;gap:7px">
                            <div style="width:54px;height:54px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:4px;border-radius:4px">Bi-Monthly Plan</div>
                            <div style="width:54px;height:54px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:4px;border-radius:4px">6-Month Plan</div>
                            <div style="width:54px;height:54px;border:1px solid rgba(176,111,204,.38);display:flex;align-items:center;justify-content:center;font-size:7px;color:#b06fcc;text-align:center;padding:4px;border-radius:4px">12-Month Plan</div>
                        </div>
                        <div style="font-size:32px;color:#f0d8ff;font-weight:300">$34.99</div>
                        <div style="background:#b06fcc;color:#fff;font-size:8px;letter-spacing:.18em;text-transform:uppercase;padding:9px 22px;border-radius:40px">Get Your Box</div>
                    </div>',
            ),
            array(
                'tier' => 1, 'cat' => 'events',
                'service' => 'Festival · Event Website',
                'title' => 'Afrobass Music Festival',
                'url'   => 'https://afrobassfest.com',
                'tags'  => array( 'Festival Site', 'Countdown', 'Email Capture' ),
                'badge' => 'Events',
                'preview' => '
                    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:8px;padding:24px;width:100%;height:100%;background:#000;text-align:center;position:relative">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 40%,rgba(255,120,0,.17) 0%,transparent 70%)"></div>
                        <div style="position:relative;font-size:7px;letter-spacing:.25em;color:#ff8c00;text-transform:uppercase">Afrobeats · Amapiano · Afro-Caribbean</div>
                        <div style="position:relative;font-size:22px;font-weight:900;letter-spacing:.07em;color:#fff;text-transform:uppercase;line-height:1.08">AFROBASS<br>MUSIC FEST</div>
                        <div style="position:relative;font-size:8px;color:rgba(255,255,255,.4)">Aug 15, 2026 · Toronto</div>
                        <div style="position:relative;display:flex;gap:14px">
                            <div style="text-align:center"><div style="font-size:24px;font-weight:900;color:#fff">115</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.12em;text-transform:uppercase">Days</div></div>
                            <div style="text-align:center"><div style="font-size:24px;font-weight:900;color:#fff">08</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.12em;text-transform:uppercase">Hrs</div></div>
                            <div style="text-align:center"><div style="font-size:24px;font-weight:900;color:#fff">42</div><div style="font-size:7px;color:#ff8c00;letter-spacing:.12em;text-transform:uppercase">Min</div></div>
                        </div>
                        <div style="position:relative;border:1px solid #ff8c00;color:#ff8c00;font-size:7px;letter-spacing:.18em;text-transform:uppercase;padding:7px 18px;border-radius:40px">Get Notified</div>
                    </div>',
            ),
            array(
                'tier' => 1, 'cat' => 'events',
                'service' => 'Brand & Booking Platform',
                'title' => 'Afrobass.com',
                'url'   => 'https://afrobass.com',
                'tags'  => array( 'WordPress', 'Video Hero', 'Booking Flow' ),
                'badge' => 'Entertainment',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:#050505;position:relative;gap:9px">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 80% 40%,rgba(200,169,110,.11) 0%,transparent 60%)"></div>
                        <div style="position:relative;font-size:7px;letter-spacing:.22em;color:#c8a96e;text-transform:uppercase">Canada\'s Premier Event Producer</div>
                        <div style="position:relative;font-size:20px;font-weight:900;color:#fff;text-transform:uppercase;line-height:1.08;max-width:180px">WE BRING AFRICA TO THE WORLD</div>
                        <div style="position:relative;display:flex;gap:16px">
                            <div><div style="font-size:18px;font-weight:900;color:#c8a96e">50+</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Events</div></div>
                            <div><div style="font-size:18px;font-weight:900;color:#c8a96e">10K+</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Fans</div></div>
                            <div><div style="font-size:18px;font-weight:900;color:#c8a96e">4</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Cities</div></div>
                        </div>
                        <div style="position:relative;display:flex;gap:7px;margin-top:4px">
                            <div style="background:#c8a96e;color:#000;font-size:7px;letter-spacing:.12em;text-transform:uppercase;padding:7px 15px;border-radius:40px;font-weight:700">Buy Tickets</div>
                            <div style="border:1px solid rgba(255,255,255,.18);color:rgba(255,255,255,.45);font-size:7px;letter-spacing:.12em;text-transform:uppercase;padding:7px 14px;border-radius:40px">Book Talent</div>
                        </div>
                    </div>',
            ),
            array(
                'tier' => 1, 'cat' => 'enterprise',
                'service' => 'Enterprise · Telecom',
                'title' => 'Distributel Group',
                'url'   => 'https://distributel.ca',
                'tags'  => array( 'Enterprise', 'Multi-Brand', '5 Sites' ),
                'badge' => 'Enterprise',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0a1628,#0d2244);gap:10px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#4d9fff;text-transform:uppercase">Telecom · Enterprise · 5 Brands</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">DISTRIBUTEL<br>GROUP</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#2d4ef5,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6;max-width:190px">Internet, phone & TV services for 100K+ Canadian customers coast to coast.</div>
                        <div style="display:flex;gap:6px;flex-wrap:wrap;margin-top:2px">
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">YAK.ca</div>
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">Thinktel</div>
                            <div style="background:rgba(45,78,245,.25);color:#7b9fff;font-size:7px;letter-spacing:.1em;padding:3px 9px;border-radius:40px">Navigata</div>
                        </div>
                    </div>',
            ),
            array(
                'tier' => 1, 'cat' => 'enterprise',
                'service' => 'B2B · Hardware Manufacturer',
                'title' => 'LAVA Computers MFG',
                'url'   => 'https://lavalink.com',
                'tags'  => array( 'Multi-Domain', 'B2B', '5 Sites' ),
                'badge' => 'B2B Hardware',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0f0505,#2a0808);gap:10px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#ff4444;text-transform:uppercase">Hardware Manufacturer · B2B</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">LAVA<br>COMPUTERS</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#ff4444,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6;max-width:190px">PCIe & USB expansion powering professional workstations globally since 1988.</div>
                        <div style="display:flex;gap:14px;margin-top:4px">
                            <div><div style="font-size:18px;font-weight:900;color:#ff4444">5</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Sites</div></div>
                            <div><div style="font-size:18px;font-weight:900;color:#ff4444">35+</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Years</div></div>
                        </div>
                    </div>',
            ),
            array(
                'tier' => 1, 'cat' => 'fintech',
                'service' => 'Fintech · Payment Processing',
                'title' => 'Sekure Merchants',
                'url'   => 'https://sekuremerchants.com',
                'tags'  => array( 'Fintech UX', 'Compliance', 'Conversion' ),
                'badge' => 'Fintech',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#041a10,#082e18);gap:10px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#22cc66;text-transform:uppercase">Fintech · Payments · In-House</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SEKURE<br>MERCHANTS</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#22cc66,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6;max-width:190px">Trusted payment processing for Canadian merchants — simple, secure, reliable.</div>
                        <div style="display:flex;gap:14px;margin-top:4px">
                            <div><div style="font-size:18px;font-weight:900;color:#22cc66">100K+</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Merchants</div></div>
                            <div><div style="font-size:18px;font-weight:900;color:#22cc66">99.9%</div><div style="font-size:7px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.1em">Uptime</div></div>
                        </div>
                    </div>',
            ),
            /* TIER 2 */
            array(
                'tier' => 2, 'cat' => 'enterprise',
                'service' => 'Automotive · Enterprise',
                'title' => 'eBlock',
                'url'   => 'https://eblock.com',
                'tags'  => array( 'Automotive', 'Auction', 'In-House' ),
                'badge' => 'Enterprise',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0d1520,#1a2840);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#5599ff;text-transform:uppercase">Automotive · Auction Platform</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.05em;text-transform:uppercase">eBLOCK</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#5599ff,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Canada\'s digital automotive wholesale auction platform.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'SaaS · Booking Platform',
                'title' => 'Busy2Book',
                'url'   => 'https://busy2book.ca',
                'tags'  => array( 'SaaS', 'Booking', 'Service Business' ),
                'badge' => 'SaaS',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a2a,#102030);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#38b2ff;text-transform:uppercase">SaaS · Appointment Booking</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">BUSY2BOOK</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#38b2ff,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Simple, powerful booking for Canadian service businesses.</div>
                        <div style="background:#38b2ff;color:#000;font-size:7px;letter-spacing:.14em;text-transform:uppercase;padding:7px 16px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book Now</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Non-Profit · Legal Aid',
                'title' => 'SALC Ontario',
                'url'   => 'https://salc.on.ca',
                'tags'  => array( 'Non-Profit', 'Legal Aid', 'Accessibility' ),
                'badge' => 'Non-Profit',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#111820,#1a2230);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#88aacc;text-transform:uppercase">Non-Profit · Legal Aid · Ontario</div>
                        <div style="font-size:20px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SALC<br>ONTARIO</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#88aacc,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Community legal aid and advocacy for Ontario residents.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Local Service · GTA',
                'title' => 'Junk-A-Haul',
                'url'   => 'https://junk-a-haul.com',
                'tags'  => array( 'Local SEO', 'Lead Gen', 'GTA' ),
                'badge' => 'Local Business',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#1a1200,#2e2000);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#ffaa22;text-transform:uppercase">Local Service · Junk Removal · GTA</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">JUNK-A-HAUL</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#ffaa22,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Toronto and GTA junk removal — fast, reliable, eco-friendly.</div>
                        <div style="background:#ffaa22;color:#000;font-size:7px;letter-spacing:.14em;text-transform:uppercase;padding:7px 16px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Get a Quote</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'beauty',
                'service' => 'Beauty · Lash & Salon',
                'title' => 'Lashes Toronto & Beauty',
                'url'   => 'https://lashestorontoandbeauty.com',
                'tags'  => array( 'Beauty Salon', 'Booking', 'Local SEO' ),
                'badge' => 'Beauty',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#1a0820,#280a30);gap:9px;text-align:center">
                        <div style="font-size:7px;letter-spacing:.22em;color:#dd88cc;text-transform:uppercase">Beauty · Lashes · Toronto</div>
                        <div style="font-size:18px;font-weight:300;color:#f8e8ff;letter-spacing:.16em;font-style:italic">Lashes Toronto<br>& Beauty</div>
                        <div style="height:1px;width:36px;background:linear-gradient(90deg,transparent,#dd88cc,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6;max-width:160px">Premium lash extensions & beauty services. Book online.</div>
                        <div style="background:#dd88cc;color:#fff;font-size:7px;letter-spacing:.14em;text-transform:uppercase;padding:7px 18px;border-radius:40px;font-weight:600">Book Now</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Entertainment · Media',
                'title' => 'Playhouse Worldwide',
                'url'   => 'https://playhouseworldwide.com',
                'tags'  => array( 'Entertainment', 'Media', 'Global' ),
                'badge' => 'Entertainment',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#100a1a,#1e1030);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#aa77ff;text-transform:uppercase">Entertainment · Media · Global</div>
                        <div style="font-size:20px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">PLAYHOUSE<br>WORLDWIDE</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#aa77ff,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Global entertainment and media — where culture meets content.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'health',
                'service' => 'Health · Advocacy',
                'title' => 'Menopause Matter',
                'url'   => 'https://www.menopausematter.org',
                'tags'  => array( 'Health', 'Non-Profit', 'Education' ),
                'badge' => 'Health',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#1a0a0a,#2e1518);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#ff8899;text-transform:uppercase">Health · Advocacy · Education</div>
                        <div style="font-size:20px;font-weight:700;color:#fff;letter-spacing:.03em">Menopause<br>Matter</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#ff8899,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Empowering women with resources through menopause.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'health',
                'service' => 'Health · Community Wellness',
                'title' => 'Healing at the Intersections',
                'url'   => 'https://healingattheintersections.com',
                'tags'  => array( 'Wellness', 'Community', 'Accessible' ),
                'badge' => 'Wellness',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a12,#122a1a);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#44cc88;text-transform:uppercase">Health · Wellness · Community</div>
                        <div style="font-size:18px;font-weight:700;color:#fff;letter-spacing:.02em;line-height:1.2">Healing at the<br>Intersections</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#44cc88,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Culturally responsive healing for communities at the intersection.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Finance · Investment Advisory',
                'title' => 'Kenaidien Capital',
                'url'   => 'https://kenaidiencapital.com',
                'tags'  => array( 'Finance', 'Corporate', 'Advisory' ),
                'badge' => 'Finance',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0a0e18,#121828);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#88aaff;text-transform:uppercase">Finance · Investment Advisory</div>
                        <div style="font-size:20px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">KENAIDIEN<br>CAPITAL</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#88aaff,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Strategic capital advisory for discerning investors.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Real Estate · Hospitality',
                'title' => 'Ms Lee Place',
                'url'   => 'https://msleeplace.com',
                'tags'  => array( 'Real Estate', 'Hospitality', 'Booking' ),
                'badge' => 'Hospitality',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#100c08,#201810);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#ddaa66;text-transform:uppercase">Real Estate · Hospitality</div>
                        <div style="font-size:20px;font-weight:300;color:#fff;letter-spacing:.14em;font-style:italic">Ms Lee Place</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#ddaa66,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Premium property experience — where comfort meets elegance.</div>
                        <div style="background:#ddaa66;color:#000;font-size:7px;letter-spacing:.14em;text-transform:uppercase;padding:7px 16px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book a Stay</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Personal Brand · Creative',
                'title' => 'KennedyOG',
                'url'   => 'https://kennedyog.com',
                'tags'  => array( 'Personal Brand', 'Creative', 'Portfolio' ),
                'badge' => 'Personal Brand',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0a0a0a,#1a1a1a);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:rgba(255,255,255,.4);text-transform:uppercase">Personal Brand · Creative</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">KENNEDY<span style="color:#2d4ef5">OG</span></div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#fff,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Bold personal brand presence — creative leadership, digital impact.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'events',
                'service' => 'Events · Afro Caribbean',
                'title' => 'Afro-Fête',
                'url'   => 'https://afro-fete.com',
                'tags'  => array( 'Events', 'Culture', 'Caribbean' ),
                'badge' => 'Events',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#1a0805,#2e1008);gap:9px;text-align:center;position:relative">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50%,rgba(255,80,20,.12) 0%,transparent 70%)"></div>
                        <div style="position:relative;font-size:7px;letter-spacing:.22em;color:#ff6622;text-transform:uppercase">Events · Afro Caribbean</div>
                        <div style="position:relative;font-size:26px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">AFRO-FÊTE</div>
                        <div style="position:relative;height:2px;width:36px;background:linear-gradient(90deg,transparent,#ff6622,transparent)"></div>
                        <div style="position:relative;font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Celebrating African & Caribbean culture through music and events.</div>
                    </div>',
            ),
            array(
                'tier' => 2, 'cat' => 'web-development',
                'service' => 'Community · Organization',
                'title' => 'MLRS.ca',
                'url'   => 'http://mlrs.ca',
                'tags'  => array( 'Community', 'Organization', 'Accessible' ),
                'badge' => 'Community',
                'preview' => '
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:24px;width:100%;height:100%;background:linear-gradient(135deg,#0e1218,#141c26);gap:9px">
                        <div style="font-size:7px;letter-spacing:.2em;color:#7799bb;text-transform:uppercase">Community · Organization</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">MLRS.ca</div>
                        <div style="height:2px;width:38px;background:linear-gradient(90deg,#7799bb,transparent)"></div>
                        <div style="font-size:8px;color:rgba(255,255,255,.4);line-height:1.6">Community services and resources — accessible design for those who need it most.</div>
                    </div>',
            ),
        );

        $current_tier = 0;
        foreach ( $projects as $p ) :
            if ( $p['tier'] !== $current_tier ) :
                if ( $current_tier > 0 ) echo '</div>'; // close previous grid
                $current_tier = $p['tier'];
                if ( $current_tier === 1 ) : ?>
                <div class="port-tier-label"><span><?php esc_html_e( 'Featured Work', 'branddevelopers' ); ?></span></div>
                <?php elseif ( $current_tier === 2 ) : ?>
                <div class="port-tier-label port-tier-label--2"><span><?php esc_html_e( 'More Work', 'branddevelopers' ); ?></span></div>
                <?php endif;
                echo '<div class="port-masonry" id="portfolio-grid-' . $current_tier . '">';
            endif;
        ?>
            <div class="port-card fade-in-up" data-category="<?php echo esc_attr( $p['cat'] ); ?>">
                <div class="port-card__preview">
                    <?php echo $p['preview']; ?>
                    <div class="port-card__overlay">
                        <div class="port-card__cat"><?php echo esc_html( $p['service'] ); ?></div>
                        <h3 class="port-card__title"><?php echo esc_html( $p['title'] ); ?></h3>
                        <div class="port-card__tags">
                            <?php foreach ( $p['tags'] as $tag ) : ?>
                            <span class="port-card__tag"><?php echo esc_html( $tag ); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url( $p['url'] ); ?>" target="_blank" rel="noopener" class="port-card__btn">
                            View Live Site →
                        </a>
                    </div>
                </div>
                <div class="port-card__body">
                    <span class="port-card__label"><?php echo esc_html( $p['badge'] ); ?></span>
                    <h3 class="port-card__name"><?php echo esc_html( $p['title'] ); ?></h3>
                </div>
            </div>
        <?php endforeach;
        echo '</div>'; // close last grid
        endif; ?>

        <!-- Also Built By Us (Tier 3 group) -->
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
                <?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?> →
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
