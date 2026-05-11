<?php
/**
 * Template Name: Services Page
 * Also auto-loads for pages with slug: services
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
                <?php esc_html_e( 'What We Offer', 'branddevelopers' ); ?>
            </span>
            <h1 class="port-hero__title">
                <?php esc_html_e( 'Services Built', 'branddevelopers' ); ?><br>
                <?php esc_html_e( 'to', 'branddevelopers' ); ?>
                <span class="port-hero__title-accent"><?php esc_html_e( 'Grow', 'branddevelopers' ); ?></span><br>
                <?php esc_html_e( 'Your Brand.', 'branddevelopers' ); ?>
            </h1>
            <p class="port-hero__desc">
                <?php esc_html_e( 'From brand strategy and consultation to full-stack development, AI integration, and social media — we deliver everything your brand needs under one roof.', 'branddevelopers' ); ?>
            </p>
            <div class="svc-hero__btns">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="svc-btn-primary">
                    <?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="svc-btn-ghost">
                    <?php esc_html_e( 'View Our Work', 'branddevelopers' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="svc-process">
    <div class="svc-section__inner">
        <div class="svc-section__header">
            <div class="svc-eyebrow"><?php esc_html_e( 'How We Work', 'branddevelopers' ); ?></div>
            <h2 class="svc-section__title">
                <?php esc_html_e( 'A Simple, Strategic', 'branddevelopers' ); ?>
                <span><?php esc_html_e( 'Workflow', 'branddevelopers' ); ?></span>
            </h2>
        </div>
        <div class="svc-process__grid">
            <?php
            $steps = array(
                array( 'num' => '01', 'title' => 'Discover', 'desc' => 'We immerse ourselves in your brand — exploring your vision, goals, and audience to uncover insights that shape everything we create.' ),
                array( 'num' => '02', 'title' => 'Create',   'desc' => 'We turn insight into intelligent, design-led solutions — from messaging to moodboards, setting the creative direction and building with purpose.' ),
                array( 'num' => '03', 'title' => 'Launch',   'desc' => 'We test rigorously, refine every detail, and ship on time — fully optimized and ready to make an impact from day one.' ),
                array( 'num' => '04', 'title' => 'Grow',     'desc' => 'After launch we track performance, iterate on what works, and scale your brand — compounding results over time.' ),
            );
            foreach ( $steps as $step ) : ?>
            <div class="svc-process__card">
                <div class="svc-process__num"><?php echo esc_html( $step['num'] ); ?></div>
                <h3 class="svc-process__title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="svc-process__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- SERVICES GRID -->
<section class="svc-section" style="background:#04060f">
    <div class="svc-section__inner">
        <div class="svc-section__header">
            <div class="svc-eyebrow"><?php esc_html_e( 'Core Services', 'branddevelopers' ); ?></div>
            <h2 class="svc-section__title">
                <?php esc_html_e( '9 Services. One Agency.', 'branddevelopers' ); ?><br>
                <span><?php esc_html_e( 'Zero Compromises.', 'branddevelopers' ); ?></span>
            </h2>
        </div>

        <div class="svc-grid">

            <?php
            $services = array(
                array(
                    'num'   => '01',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>',
                    'title' => 'Brand Development',
                    'desc'  => 'The strategic foundation every brand needs — we consult, plan, map, and position your brand for long-term success before a single pixel is designed.',
                    'list'  => array( 'Brand consultation & discovery', 'Brand strategy & roadmapping', 'Market positioning & messaging', 'Brand registration assistance', 'Startup brand procedures' ),
                ),
                array(
                    'num'   => '02',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>',
                    'title' => 'Web Design & Development',
                    'desc'  => 'Responsive, high-performance websites built to convert — from marketing sites and landing pages to full e-commerce platforms.',
                    'list'  => array( 'Custom WordPress builds', 'WooCommerce & e-commerce', 'Landing pages & microsites', 'UI/UX design & prototyping', 'Performance & SEO optimization' ),
                ),
                array(
                    'num'   => '03',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
                    'title' => 'App Design & Development',
                    'desc'  => 'Scalable, user-centered apps built for iOS, Android, and the web — designed from the ground up around your users\' real needs.',
                    'list'  => array( 'Mobile app design & development', 'Web app & SaaS platforms', 'UX research & user testing', 'Booking & subscription systems', 'API integration & backend dev' ),
                ),
                array(
                    'num'   => '04',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>',
                    'title' => 'Graphic Design & Visual Assets',
                    'desc'  => 'Compelling visuals that communicate your brand at every touchpoint — logos, print, social assets, pitch decks and everything in between.',
                    'list'  => array( 'Logo design & identity systems', 'Print & digital collateral', 'Social media graphics & templates', 'Pitch decks & presentations', 'Event & promotional materials' ),
                ),
                array(
                    'num'   => '05',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>',
                    'title' => 'Website Maintenance',
                    'desc'  => 'Your website is a living product — we keep it fast, secure, and up to date so you can focus on running your business, not your tech stack.',
                    'list'  => array( 'Plugin & theme updates', 'Security monitoring & backups', 'Performance optimization', 'Content updates & edits', 'Monthly health reports' ),
                ),
                array(
                    'num'   => '06',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h1l2 6 2-6h1M8 15h8"/></svg>',
                    'title' => 'AI Integration',
                    'desc'  => 'Future-proof your business with AI — we integrate intelligent tools and automation into your workflow, website, and customer experience.',
                    'list'  => array( 'AI chatbot & virtual assistant', 'Workflow & process automation', 'AI content & copywriting tools', 'CRM & sales AI integration', 'Custom AI strategy & consulting' ),
                ),
                array(
                    'num'   => '07',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
                    'title' => 'SEO & Digital Marketing',
                    'desc'  => 'Data-driven campaigns that reach the right audience with the right message — growing your visibility and converting traffic into real revenue.',
                    'list'  => array( 'SEO strategy & optimization', 'Google & Meta paid ads', 'Email marketing campaigns', 'Conversion rate optimization', 'Analytics & monthly reporting' ),
                ),
                array(
                    'num'   => '08',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
                    'title' => 'Social Media Marketing',
                    'desc'  => 'We grow your brand\'s social presence — strategic content, community management, and campaigns that turn followers into loyal customers.',
                    'list'  => array( 'Social media strategy & planning', 'Content creation & scheduling', 'Community management', 'Influencer & partnership outreach', 'Growth analytics & reporting' ),
                ),
                array(
                    'num'   => '09',
                    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>',
                    'title' => 'Photography & Videography',
                    'desc'  => 'Visual storytelling that brings your brand to life — from brand shoots and event coverage to social-ready video and product photography.',
                    'list'  => array( 'Brand & product photography', 'Event & concert coverage', 'Brand films & promo videos', 'Video editing & post-production', 'Social content creation' ),
                ),
            );

            foreach ( $services as $svc ) : ?>
            <div class="svc-card">
                <div class="svc-card__icon"><?php echo $svc['icon']; ?></div>
                <div class="svc-card__num"><?php echo esc_html( $svc['num'] ); ?> —</div>
                <h3 class="svc-card__title"><?php echo esc_html( $svc['title'] ); ?></h3>
                <p class="svc-card__desc"><?php echo esc_html( $svc['desc'] ); ?></p>
                <ul class="svc-card__list">
                    <?php foreach ( $svc['list'] as $item ) : ?>
                    <li><?php echo esc_html( $item ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="svc-card__link">
                    <?php esc_html_e( 'Explore service', 'branddevelopers' ); ?> →
                </a>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- PROOF -->
<section class="svc-proof">
    <div class="svc-section__inner">
        <div class="svc-proof__grid">
            <div class="svc-proof__left">
                <div class="svc-eyebrow"><?php esc_html_e( 'Why Brand Developers', 'branddevelopers' ); ?></div>
                <h2 class="svc-section__title" style="font-size:clamp(26px,3vw,36px)">
                    <?php esc_html_e( 'Results-Driven.', 'branddevelopers' ); ?><br>
                    <span><?php esc_html_e( 'Toronto-Based.', 'branddevelopers' ); ?></span>
                </h2>
                <p class="svc-proof__desc">
                    <?php esc_html_e( "We've built for fintech platforms, enterprise telecoms, beauty brands, festival promoters, and SaaS startups. Every project gets the same care — boutique quality, enterprise thinking, delivered on time.", 'branddevelopers' ); ?>
                </p>
                <div class="svc-proof__stats">
                    <div class="svc-stat"><div class="svc-stat__num">32+</div><div class="svc-stat__lbl"><?php esc_html_e( 'Projects', 'branddevelopers' ); ?></div></div>
                    <div class="svc-stat"><div class="svc-stat__num">7+</div><div class="svc-stat__lbl"><?php esc_html_e( 'Years', 'branddevelopers' ); ?></div></div>
                    <div class="svc-stat"><div class="svc-stat__num">98%</div><div class="svc-stat__lbl"><?php esc_html_e( 'Retention', 'branddevelopers' ); ?></div></div>
                </div>
            </div>
            <div class="svc-proof__right">
                <?php
                $testimonials = array(
                    array( 'text' => '"It was timely, quality, professional and good value. Very responsive and well organized. I highly recommend Brand Developers to all business owners."', 'name' => 'Priya Sharma', 'role' => 'Marketing Head, NovaTech' ),
                    array( 'text' => '"Their SEO strategies helped us climb to the top of search results faster than we thought possible. Exceptional results, every time."', 'name' => 'John McCray', 'role' => 'Founder, Lumora Studio' ),
                    array( 'text' => '"Outstanding design work that transformed our brand identity. The team truly understood our vision and delivered beyond expectations."', 'name' => 'David Alby', 'role' => 'CTO, Nexspace India' ),
                );
                foreach ( $testimonials as $t ) : ?>
                <div class="svc-testi">
                    <p class="svc-testi__text"><?php echo esc_html( $t['text'] ); ?></p>
                    <div class="svc-testi__name"><?php echo esc_html( $t['name'] ); ?></div>
                    <div class="svc-testi__role"><?php echo esc_html( $t['role'] ); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- LET'S BUILD TOGETHER CTA -->
<section class="port-cta">
    <div class="port-cta__bg"></div>
    <div class="container">
        <div class="port-cta__inner">
            <span class="port-cta__eyebrow"><?php esc_html_e( "Let's Build Together", 'branddevelopers' ); ?></span>
            <h2 class="port-cta__title"><?php esc_html_e( 'Ready to start your next project?', 'branddevelopers' ); ?></h2>
            <p class="port-cta__desc"><?php esc_html_e( "Whether you're launching, rebranding, or scaling — we build the brand infrastructure that gets you there. Toronto's boutique agency for brands that mean business.", 'branddevelopers' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="port-cta__btn">
                <?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
