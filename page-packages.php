<?php
/**
 * Template Name: Packages Page
 * Also auto-loads for pages with slug: packages
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
                <?php esc_html_e( 'Transparent Pricing', 'branddevelopers' ); ?>
            </span>
            <h1 class="port-hero__title">
                <?php esc_html_e( 'Simple Pricing.', 'branddevelopers' ); ?><br>
                <span class="port-hero__title-accent"><?php esc_html_e( 'No Surprises.', 'branddevelopers' ); ?></span>
            </h1>
            <p class="port-hero__desc">
                <?php esc_html_e( "Choose the package that fits your needs. All packages can be customised — get in touch to discuss your project and we'll tailor the perfect solution for your goals and budget.", 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- STICKY TAB NAV -->
<div class="pkg-tabs-wrap">
    <div class="pkg-tabs-inner">
        <div class="pkg-tabs">
            <a href="#brand-development"   class="pkg-tab">Brand Development</a>
            <a href="#web-development"     class="pkg-tab">Web Design &amp; Dev</a>
            <a href="#app-development"     class="pkg-tab">App Design &amp; Dev</a>
            <a href="#graphic-design"      class="pkg-tab">Graphic Design</a>
            <a href="#website-maintenance" class="pkg-tab">Maintenance</a>
            <a href="#ai-integration"      class="pkg-tab">AI Integration</a>
            <a href="#seo-marketing"       class="pkg-tab">SEO &amp; Marketing</a>
            <a href="#social-media"        class="pkg-tab">Social Media</a>
            <a href="#photography"         class="pkg-tab">Photo &amp; Video</a>
        </div>
    </div>
</div>

<div style="background:#04060f">

<!-- 01 BRAND DEVELOPMENT -->
<section class="pkg-section" id="brand-development">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 01</div>
            <h2 class="pkg-section__title">Brand Development</h2>
            <p class="pkg-section__desc">Strategic consultation and planning to build your brand from the ground up — before a single pixel is designed.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Discovery Call</div>
                <div class="pkg-card__price"><span class="pkg-card__price-free">Free</span></div>
                <div class="pkg-card__period">30 minutes</div>
                <p class="pkg-card__desc">A quick intro call to explore your needs — no commitment required.</p>
                <ul class="pkg-card__list">
                    <li>30-minute video call</li><li>Project scope overview</li><li>Budget discussion</li><li>Timeline planning</li><li>No commitment required</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Book Free Call</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Strategy Session</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$250</span></div>
                <div class="pkg-card__period">2 hours</div>
                <p class="pkg-card__desc">Deep-dive into your brand, goals and digital strategy.</p>
                <ul class="pkg-card__list">
                    <li>2-hour video session</li><li>Brand audit review</li><li>Competitor analysis</li><li>Action plan document</li><li>Follow-up summary email</li><li>Applicable to project cost</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Book Session</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Ongoing Advisory</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$500</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Monthly strategic support and guidance for growing brands.</p>
                <ul class="pkg-card__list">
                    <li>4 hours advisory/month</li><li>Weekly check-in calls</li><li>Priority Slack access</li><li>Performance reviews</li><li>Resource recommendations</li><li>Cancel anytime</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 02 WEB DESIGN & DEVELOPMENT -->
<section class="pkg-section pkg-section--alt" id="web-development">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 02</div>
            <h2 class="pkg-section__title">Web Design &amp; Development</h2>
            <p class="pkg-section__desc">Responsive, high-performance websites built to convert — from simple marketing sites to full e-commerce platforms.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Starter</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$1,500</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">Perfect for small businesses getting started online.</p>
                <ul class="pkg-card__list">
                    <li>5-page website</li><li>Mobile responsive design</li><li>Contact form</li><li>Basic SEO setup</li><li>Google Analytics</li><li>1 month support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">E-Commerce</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$2,000</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">Full online store with everything you need to sell.</p>
                <ul class="pkg-card__list">
                    <li>WooCommerce setup</li><li>Product catalogue</li><li>Payment gateway integration</li><li>Mobile responsive design</li><li>Basic SEO setup</li><li>Google Analytics</li><li>2 months support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Business / Enterprise</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$4,500+</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">Full-featured website with advanced custom functionality.</p>
                <ul class="pkg-card__list">
                    <li>Up to 15+ pages</li><li>Custom design from Figma</li><li>CMS (WordPress)</li><li>E-commerce ready</li><li>Advanced SEO</li><li>Speed optimisation</li><li>3 months support</li><li>Training session</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 03 APP DESIGN & DEVELOPMENT -->
<section class="pkg-section" id="app-development">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 03</div>
            <h2 class="pkg-section__title">App Design &amp; Development</h2>
            <p class="pkg-section__desc">Scalable, user-centered apps built for iOS, Android, and the web — designed around your users' real needs.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">MVP App</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$8,000</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">A lean, functional app to validate your idea fast.</p>
                <ul class="pkg-card__list">
                    <li>iOS or Android (one platform)</li><li>Up to 5 core screens</li><li>UX/UI design</li><li>Basic backend &amp; API</li><li>App Store submission</li><li>30-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Full Build</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$18,000</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">A complete, production-ready app built to scale.</p>
                <ul class="pkg-card__list">
                    <li>iOS &amp; Android (both platforms)</li><li>Unlimited screens</li><li>Custom UX/UI design</li><li>Full backend &amp; database</li><li>User auth &amp; admin panel</li><li>App Store &amp; Play Store submission</li><li>60-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">App Maintenance</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Keep your app running smoothly after launch.</p>
                <ul class="pkg-card__list">
                    <li>Monthly updates &amp; patches</li><li>Bug fixes &amp; testing</li><li>Performance monitoring</li><li>OS compatibility updates</li><li>Monthly reports</li><li>Priority support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 04 GRAPHIC DESIGN -->
<section class="pkg-section pkg-section--alt" id="graphic-design">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 04</div>
            <h2 class="pkg-section__title">Graphic Design &amp; Visual Assets</h2>
            <p class="pkg-section__desc">From event flyers to full brand identities — design that makes your brand impossible to ignore.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Social Media Pack</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Consistent, on-brand social content delivered every month.</p>
                <ul class="pkg-card__list">
                    <li>12 custom graphics/month</li><li>Instagram, Facebook, LinkedIn</li><li>Story templates</li><li>2 rounds of revisions</li><li>Source files included</li><li>Content calendar</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Brand Identity</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$2,000</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">A complete brand identity system built to last.</p>
                <ul class="pkg-card__list">
                    <li>Logo design (3 concepts)</li><li>Brand colour palette</li><li>Typography system</li><li>Business card design</li><li>Brand guidelines PDF</li><li>All file formats</li><li>Unlimited revisions</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Event Flyer</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$150</span></div>
                <div class="pkg-card__period">per design</div>
                <p class="pkg-card__desc">Eye-catching flyers for any event or promotion.</p>
                <ul class="pkg-card__list">
                    <li>Print &amp; digital formats</li><li>Custom illustrations</li><li>2 size variations</li><li>3 rounds of revisions</li><li>Delivered in 48hrs</li><li>Social media versions</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 05 WEBSITE MAINTENANCE -->
<section class="pkg-section" id="website-maintenance">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 05</div>
            <h2 class="pkg-section__title">Website Maintenance</h2>
            <p class="pkg-section__desc">Your website is a living product — we keep it fast, secure, and up to date so you can focus on your business.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Basic</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$299</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Essential maintenance for small business websites.</p>
                <ul class="pkg-card__list">
                    <li>Monthly plugin updates</li><li>Security monitoring</li><li>Weekly backups</li><li>Performance check</li><li>Up to 1hr content updates/mo</li><li>Email support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Standard</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Full maintenance for growing businesses.</p>
                <ul class="pkg-card__list">
                    <li>Weekly plugin updates</li><li>Advanced security monitoring</li><li>Daily backups</li><li>Performance optimisation</li><li>Up to 2hrs content updates/mo</li><li>Monthly health report</li><li>Priority email support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Premium</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$799</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Full-service maintenance for high-traffic or complex sites.</p>
                <ul class="pkg-card__list">
                    <li>Daily updates &amp; monitoring</li><li>Enterprise-level security</li><li>Real-time backups</li><li>Speed &amp; Core Web Vitals tuning</li><li>Up to 4hrs content updates/mo</li><li>Monthly strategy call</li><li>Priority phone &amp; Slack support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 06 AI INTEGRATION -->
<section class="pkg-section pkg-section--alt" id="ai-integration">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 06</div>
            <h2 class="pkg-section__title">AI Integration</h2>
            <p class="pkg-section__desc">Future-proof your business with AI — intelligent tools and automation built into your workflow and customer experience.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">AI Starter</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$1,500</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">A quick AI win for small businesses ready to modernise.</p>
                <ul class="pkg-card__list">
                    <li>AI chatbot setup (FAQ bot)</li><li>1 AI tool integration</li><li>Training &amp; onboarding</li><li>Website embedding</li><li>30-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">AI Business</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$4,500</span></div>
                <div class="pkg-card__period">one-time</div>
                <p class="pkg-card__desc">Real automation for growing businesses.</p>
                <ul class="pkg-card__list">
                    <li>Custom AI chatbot (trained on your data)</li><li>2–3 workflow automations</li><li>AI content tool setup</li><li>CRM &amp; website integration</li><li>Team training session</li><li>60-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">AI Retainer</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$999</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Ongoing AI strategy, updates and support.</p>
                <ul class="pkg-card__list">
                    <li>Monthly AI strategy session</li><li>Continuous automation improvements</li><li>New tool integrations as needed</li><li>Performance monitoring &amp; reporting</li><li>Priority support</li><li>Cancel anytime</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 07 SEO & DIGITAL MARKETING -->
<section class="pkg-section" id="seo-marketing">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 07</div>
            <h2 class="pkg-section__title">SEO &amp; Digital Marketing</h2>
            <p class="pkg-section__desc">Data-driven campaigns that grow your visibility and convert traffic into real, measurable revenue.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">SEO Starter</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$599</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Foundation SEO for small businesses.</p>
                <ul class="pkg-card__list">
                    <li>Keyword research &amp; strategy</li><li>On-page SEO optimisation</li><li>Google Business Profile setup</li><li>Monthly performance report</li><li>Technical SEO audit</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">SEO Growth</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$1,299</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Advanced SEO + paid media for growing brands.</p>
                <ul class="pkg-card__list">
                    <li>Everything in Starter</li><li>Google &amp; Meta paid ads</li><li>4 blog posts/month</li><li>Backlink building</li><li>Competitor tracking</li><li>Bi-weekly reporting calls</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Full Digital</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$2,499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Full-service digital marketing for ambitious brands.</p>
                <ul class="pkg-card__list">
                    <li>Everything in Growth</li><li>Email marketing campaigns</li><li>Conversion rate optimisation</li><li>Landing page design</li><li>Full analytics dashboard</li><li>Dedicated account manager</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 08 SOCIAL MEDIA MARKETING -->
<section class="pkg-section pkg-section--alt" id="social-media">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 08</div>
            <h2 class="pkg-section__title">Social Media Marketing</h2>
            <p class="pkg-section__desc">We grow your brand's social presence — strategic content, community management, and campaigns that convert.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Starter</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$799</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Essential social presence for small businesses.</p>
                <ul class="pkg-card__list">
                    <li>2 platforms managed</li><li>12 posts/month</li><li>Content calendar</li><li>Basic community management</li><li>Monthly analytics report</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Growth</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$1,499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Full social strategy for growing brands.</p>
                <ul class="pkg-card__list">
                    <li>3 platforms managed</li><li>20 posts/month</li><li>Story &amp; Reel content</li><li>Active community management</li><li>Influencer outreach (2/mo)</li><li>Bi-weekly strategy calls</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Get Started</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Premium</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$2,499</span></div>
                <div class="pkg-card__period">per month</div>
                <p class="pkg-card__desc">Full-service social media management.</p>
                <ul class="pkg-card__list">
                    <li>4+ platforms managed</li><li>30+ posts/month</li><li>Video &amp; Reel production</li><li>Full community management</li><li>Paid social ads included</li><li>Weekly strategy calls</li><li>Dedicated social manager</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- 09 PHOTOGRAPHY & VIDEOGRAPHY -->
<section class="pkg-section" id="photography">
    <div class="pkg-section__inner">
        <div class="pkg-section__header">
            <div class="pkg-section__num">Service 09</div>
            <h2 class="pkg-section__title">Photography &amp; Videography</h2>
            <p class="pkg-section__desc">Visual storytelling that brings your brand to life — from brand shoots and event coverage to social-ready video content.</p>
        </div>
        <div class="pkg-cards">
            <div class="pkg-card">
                <div class="pkg-card__name">Headshots</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$350</span></div>
                <div class="pkg-card__period">per session</div>
                <p class="pkg-card__desc">Professional headshots for individuals and teams.</p>
                <ul class="pkg-card__list">
                    <li>2-hour studio session</li><li>Up to 5 people</li><li>20 edited photos</li><li>Online gallery</li><li>Commercial license</li><li>48hr turnaround</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Book Now</a>
            </div>
            <div class="pkg-card pkg-card--popular">
                <div class="pkg-card__badge">Most Popular</div>
                <div class="pkg-card__name">Photoshoots</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$800</span></div>
                <div class="pkg-card__period">per session</div>
                <p class="pkg-card__desc">Brand &amp; product photography for your website and marketing.</p>
                <ul class="pkg-card__list">
                    <li>Half-day shoot (4hrs)</li><li>Location of your choice</li><li>60 edited photos</li><li>Team + product photos</li><li>Web-optimised delivery</li><li>Usage rights included</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--primary">Book Now</a>
            </div>
            <div class="pkg-card">
                <div class="pkg-card__name">Event Coverage</div>
                <div class="pkg-card__price"><span class="pkg-card__price-num">$1,200</span></div>
                <div class="pkg-card__period">per event</div>
                <p class="pkg-card__desc">Full photo &amp; video coverage from arrival to close.</p>
                <ul class="pkg-card__list">
                    <li>Full-day coverage (8hrs)</li><li>150+ edited photos</li><li>Highlight reel video</li><li>Online gallery sharing</li><li>Social media ready edits</li><li>72hr turnaround</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-card__btn pkg-card__btn--ghost">Book Now</a>
            </div>
        </div>
    </div>
</section>

<!-- CUSTOM QUOTE -->
<div class="pkg-custom">
    <div class="pkg-custom__inner">
        <div class="pkg-custom__left">
            <span class="pkg-custom__eyebrow">Need Something Custom?</span>
            <h2 class="pkg-custom__title">Don't see what you're<br>looking for? <span>Let's talk.</span></h2>
            <p class="pkg-custom__desc">Every project is unique. Tell us what you need and we'll put together a custom package tailored exactly to your goals and budget — no cookie-cutter solutions.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pkg-custom__btn">
            Request Custom Quote
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>
</div>

</div><!-- end wrapper -->

<?php get_footer(); ?>
