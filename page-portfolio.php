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
    <div class="container" style="background:transparent;max-width:100%;padding:0 80px">
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
<!-- dark wrapper to prevent sticky white gap -->
<div style="background:#04060f;position:relative">
<!-- FILTER BAR -->
<div class="port-filter-wrap">
    <div class="container" style="background:transparent;max-width:100%;padding:0 80px">
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
<section class="port-list" style="background:#04060f !important;padding-top:0">
    <div class="container" style="background:#04060f !important;padding:0 !important;max-width:100% !important">

        <!-- ══════════ TIER 1 — FEATURED ══════════ -->
        <div class="port-tier-label"><span><?php esc_html_e( 'Featured Work', 'branddevelopers' ); ?></span></div>

        <!-- 1. Sekure Merchants -->
        <div class="port-row fade-in-up" data-category="fintech">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Fintech · Payment Processing</span>
                <h2 class="port-row__title">Sekure Merchants</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Payment processing platform built in-house — trust-driven design, compliance-first UX, and a high-converting merchant onboarding flow that builds confidence at every step of the journey.</p>
                <div class="port-row__tags"><span class="port-row__tag">Fintech UX</span><span class="port-row__tag">Compliance</span><span class="port-row__tag">Conversion</span><span class="port-row__tag">Onboarding</span></div>
                <div class="port-row__actions"><a href="https://sekuremerchants.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/sekuremerchants_com.png" alt="Sekure Merchants" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Fintech</span></div>
            </div>
        </div>

        <!-- 2. Afrobass Music Festival -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Festival · Event Website</span>
                <h2 class="port-row__title">Afrobass Music Festival</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">A high-impact festival launch site built to drive pre-sale momentum — live countdown timer, early access email capture, multi-platform social integration, and a fully animated marquee experience.</p>
                <div class="port-row__tags"><span class="port-row__tag">Festival Site</span><span class="port-row__tag">Live Countdown</span><span class="port-row__tag">Email Capture</span><span class="port-row__tag">Animated UI</span></div>
                <div class="port-row__actions"><a href="https://afrobassfest.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/afrobassfest_com.png" alt="Afrobass Music Festival" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Event Website</span></div>
            </div>
        </div>

        <!-- 3. Distributel -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Enterprise · Telecom</span>
                <h2 class="port-row__title">Distributel Group</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Full enterprise telecom platform serving 100K+ Canadian households — five sub-brands built and maintained in-house including Distributel, YAK.ca, Thinktel, Navigata, and Distributel Wholesale.</p>
                <div class="port-row__tags"><span class="port-row__tag">Enterprise CMS</span><span class="port-row__tag">Multi-Brand</span><span class="port-row__tag">Performance</span><span class="port-row__tag">Accessibility</span><span class="port-row__tag">5 Sites</span></div>
                <div class="port-row__actions">
                    <a href="https://distributel.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <a href="https://yak.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">YAK.ca ↗</a>
                    <a href="https://thinktel.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">Thinktel ↗</a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/distributel_ca.png" alt="Distributel Group" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Enterprise</span></div>
            </div>
        </div>

        <!-- 4. LAVA Computers -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">B2B · Hardware Manufacturer</span>
                <h2 class="port-row__title">LAVA Computers MFG</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Multi-domain digital presence for a global hardware manufacturer since 1988 — five product-line websites covering PCIe expansion, USB hubs, enclosures, accessories, and Simulcharge technology.</p>
                <div class="port-row__tags"><span class="port-row__tag">Multi-Domain</span><span class="port-row__tag">B2B Portal</span><span class="port-row__tag">Product Catalogue</span><span class="port-row__tag">E-Commerce</span><span class="port-row__tag">5 Sites</span></div>
                <div class="port-row__actions"><a href="https://lavalink.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/lavalink_com.png" alt="LAVA Computers MFG" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>B2B Hardware</span></div>
            </div>
        </div>

        <!-- 5. eBlock -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Automotive · Enterprise Platform</span>
                <h2 class="port-row__title">eBlock</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Large-scale automotive auction and wholesale platform — complex dealer portals, inventory management, and real-time bidding built in-house at enterprise scale.</p>
                <div class="port-row__tags"><span class="port-row__tag">Automotive</span><span class="port-row__tag">Auction</span><span class="port-row__tag">Enterprise</span><span class="port-row__tag">In-House</span></div>
                <div class="port-row__actions"><a href="https://eblock.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/eblock_com.png" alt="eBlock" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Enterprise</span></div>
            </div>
        </div>

        <!-- 6. Busy2Book -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">SaaS · Booking Platform</span>
                <h2 class="port-row__title">Busy2Book</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Appointment booking SaaS platform for Canadian service businesses — calendar management, client notifications, and a clean dashboard built for operators on the go.</p>
                <div class="port-row__tags"><span class="port-row__tag">SaaS</span><span class="port-row__tag">Booking</span><span class="port-row__tag">Calendar</span><span class="port-row__tag">Service Business</span></div>
                <div class="port-row__actions"><a href="https://busy2book.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/busy2book_ca.png" alt="Busy2Book" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>SaaS</span></div>
            </div>
        </div>

        <!-- 7. YAK.ca -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Telecom · Consumer Brand</span>
                <h2 class="port-row__title">YAK.ca</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Consumer telecom brand under the Distributel group — clean, conversion-focused design for a no-frills internet and phone service targeting cost-conscious Canadian households.</p>
                <div class="port-row__tags"><span class="port-row__tag">Telecom</span><span class="port-row__tag">Consumer</span><span class="port-row__tag">Sub-Brand</span><span class="port-row__tag">In-House</span></div>
                <div class="port-row__actions"><a href="https://yak.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/Yak_ca.png" alt="YAK.ca" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Telecom</span></div>
            </div>
        </div>

        <!-- ══════════ TIER 2 — MORE WORK ══════════ -->
        <div class="port-tier-label port-tier-label--2"><span><?php esc_html_e( 'More Work', 'branddevelopers' ); ?></span></div>

        <!-- 8. SALC Ontario -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Non-Profit · Legal Aid</span>
                <h2 class="port-row__title">SALC Ontario</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Organization website for a community legal aid and advocacy body — accessible design, clear content hierarchy, and a resource-rich structure for Ontario residents seeking legal help.</p>
                <div class="port-row__tags"><span class="port-row__tag">Non-Profit</span><span class="port-row__tag">Legal Aid</span><span class="port-row__tag">Accessibility</span><span class="port-row__tag">Community</span></div>
                <div class="port-row__actions"><a href="https://salc.on.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/salc.png" alt="SALC Ontario" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Non-Profit</span></div>
            </div>
        </div>

        <!-- 9. Healing at the Intersections -->
        <div class="port-row fade-in-up" data-category="health">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Health · Community Wellness</span>
                <h2 class="port-row__title">Healing at the Intersections</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Community healing and wellness organization website — accessible design, program listings, and a safe digital space for those seeking culturally responsive wellness support.</p>
                <div class="port-row__tags"><span class="port-row__tag">Health</span><span class="port-row__tag">Wellness</span><span class="port-row__tag">Community</span><span class="port-row__tag">Accessible Design</span></div>
                <div class="port-row__actions"><a href="https://healingattheintersections.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/healingattheintersections.png" alt="Healing at the Intersections" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Wellness</span></div>
            </div>
        </div>

        <!-- 10. In Tunez We Trust -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Music · DJ Brand Platform</span>
                <h2 class="port-row__title">In Tunez We Trust</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Full digital brand platform for DJ Tunez — music releases, event listings, mix downloads, and a bold visual identity built to dominate the Afrobeats scene across North America.</p>
                <div class="port-row__tags"><span class="port-row__tag">DJ Brand</span><span class="port-row__tag">Music Platform</span><span class="port-row__tag">Events</span><span class="port-row__tag">Identity</span></div>
                <div class="port-row__actions"><a href="https://intunezwetrust.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/intunezwetrust_com.png" alt="In Tunez We Trust" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Music</span></div>
            </div>
        </div>

        <!-- 11. Afrobass.com -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Brand &amp; Booking Platform</span>
                <h2 class="port-row__title">Afrobass.com</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Full brand platform for Canada's premier Afrobeats event producer — video hero, events listing, artist booking flow, tour pages, and a brand identity built to lead the African music market in North America.</p>
                <div class="port-row__tags"><span class="port-row__tag">WordPress</span><span class="port-row__tag">Video Hero</span><span class="port-row__tag">Booking Flow</span><span class="port-row__tag">Brand Platform</span></div>
                <div class="port-row__actions"><a href="https://afrobass.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/afrobassfest_com.png" alt="Afrobass.com" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Entertainment</span></div>
            </div>
        </div>

        <!-- 12. Chic Beauty Box -->
        <div class="port-row fade-in-up" data-category="ecommerce">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">E-Commerce · Subscription Platform</span>
                <h2 class="port-row__title">Chic Beauty Box</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">A fully customizable beauty subscription platform — personalized quiz flow, multi-tier subscription plans, Stripe payment integration, WooCommerce shop, and a complete customer account portal.</p>
                <div class="port-row__tags"><span class="port-row__tag">WordPress</span><span class="port-row__tag">WooCommerce</span><span class="port-row__tag">Stripe</span><span class="port-row__tag">UX Design</span></div>
                <div class="port-row__actions"><a href="https://chicbeautybox.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/chicbeautybox_ca.png" alt="Chic Beauty Box" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>E-Commerce</span></div>
            </div>
        </div>

        <!-- 13. Lashes Toronto -->
        <div class="port-row fade-in-up" data-category="beauty">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Beauty · Lash &amp; Salon Services</span>
                <h2 class="port-row__title">Lashes Toronto &amp; Beauty</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Lash salon and beauty services booking site — service menu, gallery, online booking integration, and a brand aesthetic designed to attract and convert Toronto beauty clients.</p>
                <div class="port-row__tags"><span class="port-row__tag">Beauty Salon</span><span class="port-row__tag">Online Booking</span><span class="port-row__tag">Gallery</span><span class="port-row__tag">Local SEO</span></div>
                <div class="port-row__actions"><a href="https://lashestorontoandbeauty.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/lashestorontoandbeauty.png" alt="Lashes Toronto &amp; Beauty" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Beauty</span></div>
            </div>
        </div>

        <!-- 14. Junk-A-Haul -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Local Service · Junk Removal</span>
                <h2 class="port-row__title">Junk-A-Haul</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Local junk removal service website with instant quote request, service area map, and SEO-optimized content targeting Toronto and GTA homeowners and businesses.</p>
                <div class="port-row__tags"><span class="port-row__tag">Local Service</span><span class="port-row__tag">SEO</span><span class="port-row__tag">Lead Generation</span><span class="port-row__tag">GTA</span></div>
                <div class="port-row__actions"><a href="https://junk-a-haul.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/junk-a-haul_com.png" alt="Junk-A-Haul" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Local Business</span></div>
            </div>
        </div>

        <!-- 15. Menopause Matter -->
        <div class="port-row fade-in-up" data-category="health">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Health · Advocacy &amp; Education</span>
                <h2 class="port-row__title">Menopause Matter</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Health advocacy and education platform focused on menopause awareness — resource library, community support, and clean accessible design for women navigating this life stage.</p>
                <div class="port-row__tags"><span class="port-row__tag">Health</span><span class="port-row__tag">Non-Profit</span><span class="port-row__tag">Education</span><span class="port-row__tag">Accessibility</span></div>
                <div class="port-row__actions"><a href="https://www.menopausematter.org" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/menopausematter_org.png" alt="Menopause Matter" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Health</span></div>
            </div>
        </div>

        <!-- 16. MLRS -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Community · Organization</span>
                <h2 class="port-row__title">MLRS.ca</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Community organization and services website — clean accessible design, program listings, and clear calls to action for community members seeking resources and support.</p>
                <div class="port-row__tags"><span class="port-row__tag">Community</span><span class="port-row__tag">Organization</span><span class="port-row__tag">Services</span><span class="port-row__tag">Accessible</span></div>
                <div class="port-row__actions"><a href="http://mlrs.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/mlrs_ca.png" alt="MLRS.ca" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Community</span></div>
            </div>
        </div>

        <!-- 17. Top Cat Entertainment -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Entertainment · Agency</span>
                <h2 class="port-row__title">Top Cat Entertainment</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Entertainment agency website — artist roster, event listings, booking enquiries, and a bold brand presence designed to position Top Cat as a leading force in Canadian entertainment.</p>
                <div class="port-row__tags"><span class="port-row__tag">Entertainment</span><span class="port-row__tag">Agency</span><span class="port-row__tag">Events</span><span class="port-row__tag">Booking</span></div>
                <div class="port-row__actions"><a href="https://topcat-ent.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/topcat-ent_com.png" alt="Top Cat Entertainment" style="width:100%;height:100%;object-fit:cover;object-position:top;display:block">
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Entertainment</span></div>
            </div>
        </div>

        <!-- ══════════ TIER 3 — ALSO BUILT BY US ══════════ -->
        <div class="port-tier-label port-tier-label--3"><span><?php esc_html_e( 'Also Built By Us', 'branddevelopers' ); ?></span></div>
        <div class="port-group-row">
            <p class="port-group-row__intro"><?php esc_html_e( 'Additional projects across music, events, and entertainment:', 'branddevelopers' ); ?></p>
            <div class="port-group-row__grid">
                <a href="https://kennedyog.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Personal Brand</span><span class="port-group-row__name">KennedyOG</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://afro-fete.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Afro-Fête</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://msleeplace.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hospitality</span><span class="port-group-row__name">Ms Lee Place</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://playhouseworldwide.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Entertainment</span><span class="port-group-row__name">Playhouse Worldwide</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://djtunezblackout.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">DJ Tunez</span><span class="port-group-row__name">DJ Tunez Blackout</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://afrocarnivalfest.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Afro Carnival Fest</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://afrobeatnights.nyc" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Afrobeat Nights NYC</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://amapianonights.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Amapiano Nights</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://tunezradio.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Music</span><span class="port-group-row__name">Tunez Radio</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaports.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Ports</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaenclosures.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Enclosures</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaaccessory.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Accessory</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavasimulcharge.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Simulcharge</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://kenaidiencapital.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Finance</span><span class="port-group-row__name">Kenaidien Capital</span><span class="port-group-row__arrow">↗</span></a>
            </div>
        </div>

    </div>
</section>
</div><!-- end dark wrapper -->

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
