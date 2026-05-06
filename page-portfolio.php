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

<!-- PORTFOLIO ROWS — all hardcoded, always visible -->
<section class="port-list" style="background:#04060f;padding-top:0">
    <div class="container">

        <!-- ══════════ TIER 1 — FEATURED ══════════ -->
        <div class="port-tier-label"><span><?php esc_html_e( 'Featured Work', 'branddevelopers' ); ?></span></div>

        <!-- Chic Beauty Box -->
        <div class="port-row fade-in-up" data-category="ecommerce">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">E-Commerce · Subscription Platform</span>
                <h2 class="port-row__title">Chic Beauty Box</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">A fully customizable beauty subscription platform — personalized quiz flow, multi-tier subscription plans, Stripe payment integration, WooCommerce shop, and a complete customer account portal.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">WordPress</span>
                    <span class="port-row__tag">WooCommerce</span>
                    <span class="port-row__tag">Stripe</span>
                    <span class="port-row__tag">UX Design</span>
                    <span class="port-row__tag">Subscription</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://chicbeautybox.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
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
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>E-Commerce</span></div>
            </div>
        </div>

        <!-- Afrobass Fest -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Festival · Event Website</span>
                <h2 class="port-row__title">Afrobass Music Festival</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">A high-impact festival launch site built to drive pre-sale momentum — live countdown timer, early access email capture, multi-platform social integration, and a fully animated marquee experience.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">Festival Site</span>
                    <span class="port-row__tag">Live Countdown</span>
                    <span class="port-row__tag">Email Capture</span>
                    <span class="port-row__tag">Animated UI</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://afrobassfest.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
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
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Event Website</span></div>
            </div>
        </div>

        <!-- Afrobass.com -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Brand &amp; Booking Platform</span>
                <h2 class="port-row__title">Afrobass.com</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Full brand platform for Canada's premier Afrobeats event producer — video hero, events listing, artist booking flow, tour pages, and a brand identity built to lead the African music market in North America.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">WordPress</span>
                    <span class="port-row__tag">Video Hero</span>
                    <span class="port-row__tag">Booking Flow</span>
                    <span class="port-row__tag">Brand Platform</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://afrobass.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:#050505;position:relative;gap:10px">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 80% 40%,rgba(200,169,110,.11) 0%,transparent 60%)"></div>
                        <div style="position:relative;font-size:8px;letter-spacing:.24em;color:#c8a96e;text-transform:uppercase">Canada's Premier Event Producer</div>
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
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Entertainment</span></div>
            </div>
        </div>

        <!-- Distributel -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Enterprise · Telecom</span>
                <h2 class="port-row__title">Distributel Group</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Full enterprise telecom platform serving 100K+ Canadian households — five sub-brands built and maintained in-house including Distributel, YAK.ca, Thinktel, Navigata, and Distributel Wholesale.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">Enterprise CMS</span>
                    <span class="port-row__tag">Multi-Brand</span>
                    <span class="port-row__tag">Performance</span>
                    <span class="port-row__tag">Accessibility</span>
                    <span class="port-row__tag">5 Sites</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://distributel.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <a href="https://yak.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">YAK.ca ↗</a>
                    <a href="https://thinktel.ca" target="_blank" rel="noopener" class="port-row__btn port-row__btn--ghost">Thinktel ↗</a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
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
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Enterprise</span></div>
            </div>
        </div>

        <!-- LAVA Computers -->
        <div class="port-row fade-in-up" data-category="enterprise">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">B2B · Hardware Manufacturer</span>
                <h2 class="port-row__title">LAVA Computers MFG</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Multi-domain digital presence for a global hardware manufacturer since 1988 — five product-line websites covering PCIe expansion, USB hubs, enclosures, accessories, and Simulcharge technology.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">Multi-Domain</span>
                    <span class="port-row__tag">B2B Portal</span>
                    <span class="port-row__tag">Product Catalogue</span>
                    <span class="port-row__tag">E-Commerce</span>
                    <span class="port-row__tag">5 Sites</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://lavalink.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
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
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>B2B Hardware</span></div>
            </div>
        </div>

        <!-- Sekure Merchants -->
        <div class="port-row fade-in-up" data-category="fintech">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Fintech · Payment Processing</span>
                <h2 class="port-row__title">Sekure Merchants</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Payment processing platform built in-house — trust-driven design, compliance-first UX, and a high-converting merchant onboarding flow that builds confidence at every step of the journey.</p>
                <div class="port-row__tags">
                    <span class="port-row__tag">Fintech UX</span>
                    <span class="port-row__tag">Compliance</span>
                    <span class="port-row__tag">Conversion</span>
                    <span class="port-row__tag">Onboarding Flow</span>
                </div>
                <div class="port-row__actions">
                    <a href="https://sekuremerchants.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#041a10,#082e18);gap:11px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#22cc66;text-transform:uppercase">Fintech · Payments · In-House</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SEKURE<br>MERCHANTS</div>
                        <div style="height:2px;width:44px;background:linear-gradient(90deg,#22cc66,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.42);line-height:1.6;max-width:200px">Trusted payment processing for Canadian merchants — simple, secure, reliable.</div>
                        <div style="display:flex;gap:14px;margin-top:4px">
                            <div><div style="font-size:20px;font-weight:900;color:#22cc66">100K+</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Merchants</div></div>
                            <div><div style="font-size:20px;font-weight:900;color:#22cc66">99.9%</div><div style="font-size:7px;color:rgba(255,255,255,.38);text-transform:uppercase;letter-spacing:.1em">Uptime</div></div>
                        </div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Fintech</span></div>
            </div>
        </div>

        <!-- ══════════ TIER 2 — MORE WORK ══════════ -->
        <div class="port-tier-label port-tier-label--2"><span><?php esc_html_e( 'More Work', 'branddevelopers' ); ?></span></div>

        <!-- eBlock -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0d1520,#1a2840);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#5599ff;text-transform:uppercase">Automotive · Auction Platform</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.05em;text-transform:uppercase">eBLOCK</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#5599ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Canada's digital automotive wholesale auction platform — real-time bidding at enterprise scale.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Enterprise</span></div>
            </div>
        </div>

        <!-- Busy2Book -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a2a,#102030);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#38b2ff;text-transform:uppercase">SaaS · Appointment Booking</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">BUSY2BOOK</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#38b2ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Simple, powerful booking for Canadian service businesses. Manage appointments anywhere.</div>
                        <div style="background:#38b2ff;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book Now</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>SaaS</span></div>
            </div>
        </div>

        <!-- SALC Ontario -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#111820,#1a2230);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#88aacc;text-transform:uppercase">Non-Profit · Legal Aid · Ontario</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">SALC<br>ONTARIO</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#88aacc,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Community legal aid and advocacy services for Ontario residents — accessible and resource-rich.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Non-Profit</span></div>
            </div>
        </div>

        <!-- Junk-A-Haul -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a1200,#2e2000);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ffaa22;text-transform:uppercase">Local Service · Junk Removal · GTA</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">JUNK-A-HAUL</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ffaa22,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Toronto and GTA junk removal — fast, reliable, eco-friendly. Get a free quote in minutes.</div>
                        <div style="background:#ffaa22;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Get a Quote</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Local Business</span></div>
            </div>
        </div>

        <!-- Lashes Toronto -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0820,#280a30);gap:10px;text-align:center">
                        <div style="font-size:8px;letter-spacing:.25em;color:#dd88cc;text-transform:uppercase">Beauty · Lashes · Toronto</div>
                        <div style="font-size:18px;font-weight:300;color:#f8e8ff;letter-spacing:.16em;font-style:italic">Lashes Toronto<br>&amp; Beauty</div>
                        <div style="height:1px;width:36px;background:linear-gradient(90deg,transparent,#dd88cc,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6;max-width:180px">Premium lash extensions &amp; beauty services in Toronto. Book online.</div>
                        <div style="background:#dd88cc;color:#fff;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 20px;border-radius:40px;font-weight:600">Book Now</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Beauty</span></div>
            </div>
        </div>

        <!-- Playhouse Worldwide -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Entertainment · Media Platform</span>
                <h2 class="port-row__title">Playhouse Worldwide</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Entertainment and media company digital platform — brand identity, content distribution, and an engaging online presence for a globally-minded entertainment brand.</p>
                <div class="port-row__tags"><span class="port-row__tag">Entertainment</span><span class="port-row__tag">Media</span><span class="port-row__tag">Brand</span><span class="port-row__tag">Global</span></div>
                <div class="port-row__actions"><a href="https://playhouseworldwide.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#100a1a,#1e1030);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#aa77ff;text-transform:uppercase">Entertainment · Media · Global</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">PLAYHOUSE<br>WORLDWIDE</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#aa77ff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Global entertainment and media platform — where culture meets content.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Entertainment</span></div>
            </div>
        </div>

        <!-- Menopause Matter -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0a0a,#2e1518);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ff8899;text-transform:uppercase">Health · Advocacy · Education</div>
                        <div style="font-size:22px;font-weight:700;color:#fff;letter-spacing:.03em">Menopause<br>Matter</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ff8899,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Empowering women with resources, community and expert guidance through menopause.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Health</span></div>
            </div>
        </div>

        <!-- Healing at the Intersections -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a1a12,#122a1a);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#44cc88;text-transform:uppercase">Health · Wellness · Community</div>
                        <div style="font-size:20px;font-weight:700;color:#fff;letter-spacing:.02em;line-height:1.2">Healing at the<br>Intersections</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#44cc88,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Culturally responsive healing and wellness support for communities at the intersection.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Wellness</span></div>
            </div>
        </div>

        <!-- Kenaidien Capital -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Finance · Investment Advisory</span>
                <h2 class="port-row__title">Kenaidien Capital</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Investment and capital advisory firm website — trust-building design, service overview, and a professional digital presence tailored to attract high-net-worth clients and institutional investors.</p>
                <div class="port-row__tags"><span class="port-row__tag">Finance</span><span class="port-row__tag">Corporate</span><span class="port-row__tag">Advisory</span><span class="port-row__tag">Trust Design</span></div>
                <div class="port-row__actions"><a href="https://kenaidiencapital.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a0e18,#121828);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#88aaff;text-transform:uppercase">Finance · Investment Advisory</div>
                        <div style="font-size:22px;font-weight:900;color:#fff;letter-spacing:.04em;text-transform:uppercase">KENAIDIEN<br>CAPITAL</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#88aaff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Strategic capital advisory and investment management for discerning investors.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Finance</span></div>
            </div>
        </div>

        <!-- Ms Lee Place -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Real Estate · Hospitality</span>
                <h2 class="port-row__title">Ms Lee Place</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Real estate and hospitality property platform — beautiful property photography showcase, booking integration, and a premium brand experience designed to convert browsers into guests.</p>
                <div class="port-row__tags"><span class="port-row__tag">Real Estate</span><span class="port-row__tag">Hospitality</span><span class="port-row__tag">Booking</span><span class="port-row__tag">Property</span></div>
                <div class="port-row__actions"><a href="https://msleeplace.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#100c08,#201810);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#ddaa66;text-transform:uppercase">Real Estate · Hospitality</div>
                        <div style="font-size:20px;font-weight:300;color:#fff;letter-spacing:.14em;font-style:italic">Ms Lee Place</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#ddaa66,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Premium property experience — where comfort meets elegance. Book your stay today.</div>
                        <div style="background:#ddaa66;color:#000;font-size:8px;letter-spacing:.14em;text-transform:uppercase;padding:8px 18px;border-radius:40px;width:fit-content;font-weight:700;margin-top:4px">Book a Stay</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Hospitality</span></div>
            </div>
        </div>

        <!-- KennedyOG -->
        <div class="port-row fade-in-up" data-category="web-development">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Personal Brand · Creative</span>
                <h2 class="port-row__title">KennedyOG</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Personal brand and creative portfolio website — bold visual identity, custom typography, and a digital space that positions the client as a leader in their creative field.</p>
                <div class="port-row__tags"><span class="port-row__tag">Personal Brand</span><span class="port-row__tag">Creative</span><span class="port-row__tag">Portfolio</span><span class="port-row__tag">Identity</span></div>
                <div class="port-row__actions"><a href="https://kennedyog.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0a0a0a,#1a1a1a);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:rgba(255,255,255,.4);text-transform:uppercase">Personal Brand · Creative</div>
                        <div style="font-size:26px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">KENNEDY<span style="color:#2d4ef5">OG</span></div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#fff,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Bold personal brand presence — creative leadership, original voice, digital impact.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Personal Brand</span></div>
            </div>
        </div>

        <!-- Afro-Fête -->
        <div class="port-row fade-in-up" data-category="events">
            <div class="port-row__bar"></div>
            <div class="port-row__content">
                <span class="port-row__category">Events · Afro Caribbean Culture</span>
                <h2 class="port-row__title">Afro-Fête</h2>
                <div class="port-row__rule"></div>
                <p class="port-row__desc">Afro Caribbean party and event series website — event listings, ticket sales, photo galleries, and a vibrant brand aesthetic celebrating African and Caribbean culture through music and dance.</p>
                <div class="port-row__tags"><span class="port-row__tag">Events</span><span class="port-row__tag">Culture</span><span class="port-row__tag">Ticketing</span><span class="port-row__tag">Caribbean</span></div>
                <div class="port-row__actions"><a href="https://afro-fete.com" target="_blank" rel="noopener" class="port-row__btn port-row__btn--primary">View Live Site <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
            </div>
            <div class="port-row__visual">
                <div class="port-row__img-wrap">
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#1a0805,#2e1008);gap:10px;text-align:center;position:relative">
                        <div style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50%,rgba(255,80,20,.12) 0%,transparent 70%)"></div>
                        <div style="position:relative;font-size:8px;letter-spacing:.22em;color:#ff6622;text-transform:uppercase">Events · Afro Caribbean</div>
                        <div style="position:relative;font-size:28px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">AFRO-FÊTE</div>
                        <div style="position:relative;height:2px;width:36px;background:linear-gradient(90deg,transparent,#ff6622,transparent)"></div>
                        <div style="position:relative;font-size:9px;color:rgba(255,255,255,.4);line-height:1.6;max-width:200px">Celebrating African &amp; Caribbean culture through music, dance and unforgettable events.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Events</span></div>
            </div>
        </div>

        <!-- MLRS -->
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
                    <div style="display:flex;flex-direction:column;justify-content:center;padding:28px;width:100%;height:100%;background:linear-gradient(135deg,#0e1218,#141c26);gap:10px">
                        <div style="font-size:8px;letter-spacing:.2em;color:#7799bb;text-transform:uppercase">Community · Organization</div>
                        <div style="font-size:24px;font-weight:900;color:#fff;letter-spacing:.06em;text-transform:uppercase">MLRS.ca</div>
                        <div style="height:2px;width:40px;background:linear-gradient(90deg,#7799bb,transparent)"></div>
                        <div style="font-size:9px;color:rgba(255,255,255,.4);line-height:1.6">Community services and resources — accessible design for those who need it most.</div>
                    </div>
                    <div class="port-row__img-shine"></div>
                </div>
                <div class="port-row__img-badge"><span>Community</span></div>
            </div>
        </div>

        <!-- ══════════ TIER 3 — ALSO BUILT BY US ══════════ -->
        <div class="port-tier-label port-tier-label--3"><span><?php esc_html_e( 'Also Built By Us', 'branddevelopers' ); ?></span></div>
        <div class="port-group-row">
            <p class="port-group-row__intro"><?php esc_html_e( 'Additional projects across music, events, and entertainment:', 'branddevelopers' ); ?></p>
            <div class="port-group-row__grid">
                <a href="https://intunezwetrust.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">DJ Tunez</span><span class="port-group-row__name">In Tunez We Trust</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://djtunezblackout.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">DJ Tunez</span><span class="port-group-row__name">DJ Tunez Blackout</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://afrocarnivalfest.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Afro Carnival Fest</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://afrobeatnights.nyc" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Afrobeat Nights NYC</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://amapianonights.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Events</span><span class="port-group-row__name">Amapiano Nights</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://tunezradio.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Music</span><span class="port-group-row__name">Tunez Radio</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://topcat-ent.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Entertainment</span><span class="port-group-row__name">Top Cat Entertainment</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaports.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Ports</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaenclosures.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Enclosures</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavaaccessory.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Accessory</span><span class="port-group-row__arrow">↗</span></a>
                <a href="https://lavasimulcharge.com" target="_blank" rel="noopener" class="port-group-row__item"><span class="port-group-row__cat">Hardware</span><span class="port-group-row__name">LAVA Simulcharge</span><span class="port-group-row__arrow">↗</span></a>
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
