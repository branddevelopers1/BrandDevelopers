<?php
/**
 * About Us page — auto-loads for /about-us/ slug
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
                <?php esc_html_e( 'About Us', 'branddevelopers' ); ?>
            </span>
            <h1 class="port-hero__title">
                <?php esc_html_e( 'We Build Brands', 'branddevelopers' ); ?><br>
                <?php esc_html_e( 'That', 'branddevelopers' ); ?>
                <span class="port-hero__title-accent"><?php esc_html_e( 'Mean Business.', 'branddevelopers' ); ?></span>
            </h1>
            <p class="port-hero__desc">
                <?php esc_html_e( "We're not just another agency. We're your creative partner — boutique by design, taking the time to understand your brand, your audience, and your ambitions to deliver work that feels tailor-made, not templated.", 'branddevelopers' ); ?>
            </p>
            <div class="about-hero__btns">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="svc-btn-primary">
                    <?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="https://branddevelopers.ca/wp-content/uploads/2026/04/BrandDevelopers-AboutUs.pdf" target="_blank" rel="noopener" class="svc-btn-ghost">
                    <?php esc_html_e( 'Download PDF', 'branddevelopers' ); ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2v8M5 7l3 3 3-3M2 12v1a1 1 0 001 1h10a1 1 0 001-1v-1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="about-intro">
    <div class="about-intro__inner">
        <div class="about-intro__content">
            <div class="svc-eyebrow"><?php esc_html_e( 'Who We Are', 'branddevelopers' ); ?></div>
            <h2 class="about-intro__title">
                <?php esc_html_e( 'A Boutique Agency Built on', 'branddevelopers' ); ?>
                <span><?php esc_html_e( 'Results.', 'branddevelopers' ); ?></span>
            </h2>
            <p class="about-intro__text">
                <?php esc_html_e( "Brand Developers is a Toronto-based boutique branding and web development agency. We work with startups, established businesses, and everything in between — bringing together strategy, design, and technology to create brands and digital experiences that perform.", 'branddevelopers' ); ?>
            </p>

            <div class="about-intro__tags">
                <span class="about-tag">Toronto-Based</span>
                <span class="about-tag">Boutique Agency</span>
                <span class="about-tag">7+ Years</span>
                <span class="about-tag">32+ Projects</span>
                <span class="about-tag">Full-Service</span>
            </div>
        </div>
        <div class="about-intro__visual">
            <?php $portrait = function_exists( 'bd_get' ) ? bd_get( 'bd_about_portrait' ) : ''; ?>
            <?php if ( $portrait ) : ?>
                <img src="<?php echo esc_url( $portrait ); ?>" alt="Brand Developers Team" class="about-intro__img">
            <?php else : ?>
                <div class="about-intro__img-placeholder">
                    <div class="about-intro__img-inner">
                        <div class="about-intro__monogram">BD</div>
                        <div class="about-intro__img-label"><?php esc_html_e( 'Brand Developers', 'branddevelopers' ); ?></div>
                        <div class="about-intro__img-sub"><?php esc_html_e( 'Toronto, Canada', 'branddevelopers' ); ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="about-stats-section">
    <div class="about-stats__inner">
        <?php
        $stats = array(
            array( 'num' => '32+',  'label' => 'Projects Delivered',    'desc' => 'Across industries and verticals' ),
            array( 'num' => '8+',   'label' => 'Years in Business',      'desc' => 'Building brands since 2018' ),
            array( 'num' => '9',    'label' => 'Services Offered',       'desc' => 'Under one roof' ),
            array( 'num' => '98%',  'label' => 'Client Retention',       'desc' => 'Long-term relationships matter' ),
        );
        foreach ( $stats as $stat ) : ?>
        <div class="about-stat">
            <div class="about-stat__num"><?php echo esc_html( $stat['num'] ); ?></div>
            <div class="about-stat__label"><?php echo esc_html( $stat['label'] ); ?></div>
            <div class="about-stat__desc"><?php echo esc_html( $stat['desc'] ); ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- WHAT WE DO -->
<section class="about-services-section">
    <div class="about-services__inner">
        <div class="about-services__header">
            <div class="svc-eyebrow"><?php esc_html_e( 'What We Do', 'branddevelopers' ); ?></div>
            <h2 class="about-services__title">
                <?php esc_html_e( 'Everything Your Brand Needs', 'branddevelopers' ); ?><br>
                <span><?php esc_html_e( 'Under One Roof', 'branddevelopers' ); ?></span>
            </h2>
        </div>
        <div class="about-services__grid">
            <?php
            $services = array(
                array( 'title' => 'Brand Development',              'desc' => 'Strategy, consultation, positioning, and brand registration — the foundation before execution.' ),
                array( 'title' => 'Web Design & Development',       'desc' => 'Custom WordPress sites, WooCommerce stores, and high-performance landing pages built to convert.' ),
                array( 'title' => 'App Design & Development',       'desc' => 'iOS, Android, and web apps designed around your users and built to scale.' ),
                array( 'title' => 'Graphic Design & Visual Assets', 'desc' => 'Logos, brand identity, social graphics, pitch decks, and event materials.' ),
                array( 'title' => 'Website Maintenance',            'desc' => 'Ongoing updates, security monitoring, backups, and performance optimisation.' ),
                array( 'title' => 'AI Integration',                 'desc' => 'Chatbots, workflow automation, and AI tools built into your business.' ),
                array( 'title' => 'SEO & Digital Marketing',        'desc' => 'Organic growth, paid ads, email campaigns, and analytics-driven strategy.' ),
                array( 'title' => 'Social Media Marketing',         'desc' => 'Content creation, community management, and campaigns that grow your audience.' ),
                array( 'title' => 'Photography & Videography',      'desc' => 'Brand shoots, event coverage, product photography, and video production.' ),
            );
            foreach ( $services as $i => $svc ) : ?>
            <div class="about-svc-card fade-in-up">
                <div class="about-svc-card__num"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></div>
                <h3 class="about-svc-card__title"><?php echo esc_html( $svc['title'] ); ?></h3>
                <p class="about-svc-card__desc"><?php echo esc_html( $svc['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="about-services__cta">
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="svc-btn-primary">
                <?php esc_html_e( 'View All Services', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- HOW WE WORK -->
<section class="svc-process" style="background:#04060f">
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

<!-- TESTIMONIALS -->
<section class="about-testi-section">
    <div class="about-testi__inner">
        <div class="svc-eyebrow"><?php esc_html_e( 'Client Reflections', 'branddevelopers' ); ?></div>
        <h2 class="about-testi__title">
            <?php esc_html_e( "Trusted Words from Those", 'branddevelopers' ); ?><br>
            <span><?php esc_html_e( "We've Built For", 'branddevelopers' ); ?></span>
        </h2>
        <div class="about-testi__grid">
            <?php
            $tq = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 3, 'post_status' => 'publish' ) );
            if ( $tq->have_posts() ) :
                while ( $tq->have_posts() ) : $tq->the_post(); ?>
                <div class="about-testi-card fade-in-up">
                    <div class="about-testi-card__quote">&ldquo;</div>
                    <p class="about-testi-card__text"><?php echo wp_kses_post( get_the_content() ); ?></p>
                    <div class="about-testi-card__author"><?php echo esc_html( get_post_meta( get_the_ID(), '_bd_author', true ) ); ?></div>
                    <div class="about-testi-card__role"><?php echo esc_html( get_post_meta( get_the_ID(), '_bd_role', true ) ); ?></div>
                </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                $fallback = array(
                    array( 'text' => '"It was timely, quality, professional and good value. Very responsive and well organized. I highly recommend Brand Developers to all business owners."', 'author' => 'Priya Sharma',  'role' => 'Marketing Head, NovaTech' ),
                    array( 'text' => '"Their SEO strategies helped us climb to the top of search results faster than we thought possible. Exceptional results, every time."',               'author' => 'John McCray',   'role' => 'Founder, Lumora Studio' ),
                    array( 'text' => '"Outstanding design work that transformed our brand identity. The team truly understood our vision and delivered beyond expectations."',              'author' => 'David Alby',    'role' => 'CTO, Nexspace India' ),
                );
                foreach ( $fallback as $t ) : ?>
                <div class="about-testi-card fade-in-up">
                    <div class="about-testi-card__quote">&ldquo;</div>
                    <p class="about-testi-card__text"><?php echo esc_html( $t['text'] ); ?></p>
                    <div class="about-testi-card__author"><?php echo esc_html( $t['author'] ); ?></div>
                    <div class="about-testi-card__role"><?php echo esc_html( $t['role'] ); ?></div>
                </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="port-cta">
    <div class="port-cta__bg"></div>
    <div class="container">
        <div class="port-cta__inner">
            <span class="port-cta__eyebrow"><?php esc_html_e( "Let's Build Together", 'branddevelopers' ); ?></span>
            <h2 class="port-cta__title"><?php esc_html_e( 'Your next chapter starts here.', 'branddevelopers' ); ?></h2>
            <p class="port-cta__desc"><?php esc_html_e( "Toronto brands trust us to build the digital infrastructure that drives real growth. Book a free audit and let's map out your next move.", 'branddevelopers' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="port-cta__btn">
                <?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
