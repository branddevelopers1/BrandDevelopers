<?php
/**
 * Template Name: Packages Page
 * Auto-loads for slug: packages
 */
get_header(); ?>

<!-- HERO -->
<section class="page-hero" style="min-height:45vh">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( 'Transparent Pricing', 'branddevelopers' ); ?></span>
            <h1 style="color:#F9FAFB;font-size:72px;line-height:88px"><?php esc_html_e( 'Our Packages', 'branddevelopers' ); ?></h1>
            <p style="color:rgba(255,255,255,0.65);font-size:18px;line-height:28px;max-width:560px;margin-top:16px">
                <?php esc_html_e( 'Choose the service that fits your needs. All packages can be customised — get in touch to discuss your project.', 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICE 1: WEB DEVELOPMENT & MAINTENANCE
     ============================================================ -->
<section class="section">
    <div class="container">
        <div class="packages-section-header">
            <div class="packages-section-header__icon" style="background:rgba(0,51,153,0.1)">
                <i class="fas fa-code" style="color:var(--color-primary)"></i>
            </div>
            <div>
                <span class="small-head"><?php esc_html_e( 'Service 01', 'branddevelopers' ); ?></span>
                <h2><?php esc_html_e( 'Web Development & Maintenance', 'branddevelopers' ); ?></h2>
                <p><?php esc_html_e( 'Custom websites and ongoing maintenance to keep your digital presence running at its best.', 'branddevelopers' ); ?></p>
            </div>
        </div>

        <div class="packages-grid">
            <?php
            $web_packages = array(
                array(
                    'name'     => 'Starter',
                    'price'    => '1,500',
                    'period'   => 'one-time',
                    'desc'     => 'Perfect for small businesses getting started online.',
                    'features' => array( '5-page website', 'Mobile responsive design', 'Contact form', 'Basic SEO setup', 'Google Analytics', '1 month support' ),
                    'popular'  => false,
                    'cta'      => 'Get Started',
                ),
                array(
                    'name'     => 'Business',
                    'price'    => '4,500',
                    'period'   => 'one-time',
                    'desc'     => 'Full-featured website with advanced functionality.',
                    'features' => array( 'Up to 15 pages', 'Custom design from Figma', 'CMS (WordPress)', 'E-commerce ready', 'Advanced SEO', 'Speed optimisation', '3 months support', 'Training session' ),
                    'popular'  => true,
                    'cta'      => 'Most Popular',
                ),
                array(
                    'name'     => 'Maintenance',
                    'price'    => '299',
                    'period'   => 'per month',
                    'desc'     => 'Keep your site secure, fast and up to date.',
                    'features' => array( 'Monthly updates', 'Security monitoring', 'Daily backups', 'Performance reports', 'Content updates (2hrs/mo)', 'Priority support' ),
                    'popular'  => false,
                    'cta'      => 'Subscribe',
                ),
            );
            foreach ( $web_packages as $pkg ) : ?>
            <div class="package-card <?php echo $pkg['popular'] ? 'package-card--featured' : ''; ?>">
                <?php if ( $pkg['popular'] ) : ?>
                <div class="package-card__badge"><?php esc_html_e( 'Most Popular', 'branddevelopers' ); ?></div>
                <?php endif; ?>
                <div class="package-card__header">
                    <h4 class="package-card__name"><?php echo esc_html( $pkg['name'] ); ?></h4>
                    <div class="package-card__price">
                        <span class="package-card__currency">$</span>
                        <span class="package-card__amount"><?php echo esc_html( $pkg['price'] ); ?></span>
                        <span class="package-card__period"><?php echo esc_html( $pkg['period'] ); ?></span>
                    </div>
                    <p class="package-card__desc"><?php echo esc_html( $pkg['desc'] ); ?></p>
                </div>
                <ul class="package-card__features">
                    <?php foreach ( $pkg['features'] as $feature ) : ?>
                    <li><i class="fas fa-check"></i><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn <?php echo $pkg['popular'] ? 'btn--primary' : 'btn--outline-dark'; ?>" style="width:100%;justify-content:center">
                    <?php esc_html_e( 'Get Started', 'branddevelopers' ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICE 2: GRAPHIC DESIGN
     ============================================================ -->
<section class="section section--bg">
    <div class="container">
        <div class="packages-section-header">
            <div class="packages-section-header__icon" style="background:rgba(0,51,153,0.1)">
                <i class="fas fa-pen-nib" style="color:var(--color-primary)"></i>
            </div>
            <div>
                <span class="small-head"><?php esc_html_e( 'Service 02', 'branddevelopers' ); ?></span>
                <h2><?php esc_html_e( 'Graphic Design Services', 'branddevelopers' ); ?></h2>
                <p><?php esc_html_e( 'From event flyers to full brand identities — design that makes your brand stand out.', 'branddevelopers' ); ?></p>
            </div>
        </div>

        <div class="packages-grid">
            <?php
            $design_packages = array(
                array(
                    'name'     => 'Social Media Pack',
                    'price'    => '499',
                    'period'   => 'per month',
                    'desc'     => 'Consistent, on-brand social content every month.',
                    'features' => array( '12 custom graphics/month', 'Instagram, Facebook, LinkedIn', 'Story templates', '2 rounds of revisions', 'Source files included', 'Content calendar' ),
                    'popular'  => false,
                    'cta'      => 'Get Started',
                ),
                array(
                    'name'     => 'Brand Identity',
                    'price'    => '2,000',
                    'period'   => 'one-time',
                    'desc'     => 'A complete brand identity built to last.',
                    'features' => array( 'Logo design (3 concepts)', 'Brand colour palette', 'Typography system', 'Business card design', 'Brand guidelines PDF', 'All file formats', 'Unlimited revisions' ),
                    'popular'  => true,
                    'cta'      => 'Most Popular',
                ),
                array(
                    'name'     => 'Event Flyer',
                    'price'    => '150',
                    'period'   => 'per design',
                    'desc'     => 'Eye-catching flyers for any event or promotion.',
                    'features' => array( 'Print & digital formats', 'Custom illustrations', '2 size variations', '3 rounds of revisions', 'Delivered in 48hrs', 'Social media versions' ),
                    'popular'  => false,
                    'cta'      => 'Order Now',
                ),
            );
            foreach ( $design_packages as $pkg ) : ?>
            <div class="package-card <?php echo $pkg['popular'] ? 'package-card--featured' : ''; ?>">
                <?php if ( $pkg['popular'] ) : ?>
                <div class="package-card__badge"><?php esc_html_e( 'Most Popular', 'branddevelopers' ); ?></div>
                <?php endif; ?>
                <div class="package-card__header">
                    <h4 class="package-card__name"><?php echo esc_html( $pkg['name'] ); ?></h4>
                    <div class="package-card__price">
                        <span class="package-card__currency">$</span>
                        <span class="package-card__amount"><?php echo esc_html( $pkg['price'] ); ?></span>
                        <span class="package-card__period"><?php echo esc_html( $pkg['period'] ); ?></span>
                    </div>
                    <p class="package-card__desc"><?php echo esc_html( $pkg['desc'] ); ?></p>
                </div>
                <ul class="package-card__features">
                    <?php foreach ( $pkg['features'] as $feature ) : ?>
                    <li><i class="fas fa-check"></i><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn <?php echo $pkg['popular'] ? 'btn--primary' : 'btn--outline-dark'; ?>" style="width:100%;justify-content:center">
                    <?php esc_html_e( 'Get Started', 'branddevelopers' ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICE 3: PHOTOGRAPHY
     ============================================================ -->
<section class="section">
    <div class="container">
        <div class="packages-section-header">
            <div class="packages-section-header__icon" style="background:rgba(0,51,153,0.1)">
                <i class="fas fa-camera" style="color:var(--color-primary)"></i>
            </div>
            <div>
                <span class="small-head"><?php esc_html_e( 'Service 03', 'branddevelopers' ); ?></span>
                <h2><?php esc_html_e( 'Photography Services', 'branddevelopers' ); ?></h2>
                <p><?php esc_html_e( 'Professional photography for your brand, website, events, and more.', 'branddevelopers' ); ?></p>
            </div>
        </div>

        <div class="packages-grid">
            <?php
            $photo_packages = array(
                array(
                    'name'     => 'Headshots',
                    'price'    => '350',
                    'period'   => 'per session',
                    'desc'     => 'Professional headshots for individuals and teams.',
                    'features' => array( '2-hour studio session', 'Up to 5 people', '20 edited photos', 'Online gallery', 'Commercial license', '48hr turnaround' ),
                    'popular'  => false,
                    'cta'      => 'Book Now',
                ),
                array(
                    'name'     => 'Website Package',
                    'price'    => '800',
                    'period'   => 'per session',
                    'desc'     => 'Custom photos for your entire website.',
                    'features' => array( 'Half-day shoot (4hrs)', 'Location of your choice', '60 edited photos', 'Team + product photos', 'Web-optimised delivery', 'Usage rights included' ),
                    'popular'  => true,
                    'cta'      => 'Most Popular',
                ),
                array(
                    'name'     => 'Event Coverage',
                    'price'    => '1,200',
                    'period'   => 'per event',
                    'desc'     => 'Full event photography from arrival to close.',
                    'features' => array( 'Full-day coverage (8hrs)', '150+ edited photos', 'Online gallery sharing', 'Social media ready edits', 'Commercial license', '72hr turnaround' ),
                    'popular'  => false,
                    'cta'      => 'Book Now',
                ),
            );
            foreach ( $photo_packages as $pkg ) : ?>
            <div class="package-card <?php echo $pkg['popular'] ? 'package-card--featured' : ''; ?>">
                <?php if ( $pkg['popular'] ) : ?>
                <div class="package-card__badge"><?php esc_html_e( 'Most Popular', 'branddevelopers' ); ?></div>
                <?php endif; ?>
                <div class="package-card__header">
                    <h4 class="package-card__name"><?php echo esc_html( $pkg['name'] ); ?></h4>
                    <div class="package-card__price">
                        <span class="package-card__currency">$</span>
                        <span class="package-card__amount"><?php echo esc_html( $pkg['price'] ); ?></span>
                        <span class="package-card__period"><?php echo esc_html( $pkg['period'] ); ?></span>
                    </div>
                    <p class="package-card__desc"><?php echo esc_html( $pkg['desc'] ); ?></p>
                </div>
                <ul class="package-card__features">
                    <?php foreach ( $pkg['features'] as $feature ) : ?>
                    <li><i class="fas fa-check"></i><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn <?php echo $pkg['popular'] ? 'btn--primary' : 'btn--outline-dark'; ?>" style="width:100%;justify-content:center">
                    <?php esc_html_e( 'Book Now', 'branddevelopers' ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICE 4: VIDEOGRAPHY
     ============================================================ -->
<section class="section section--bg">
    <div class="container">
        <div class="packages-section-header">
            <div class="packages-section-header__icon" style="background:rgba(0,51,153,0.1)">
                <i class="fas fa-video" style="color:var(--color-primary)"></i>
            </div>
            <div>
                <span class="small-head"><?php esc_html_e( 'Service 04', 'branddevelopers' ); ?></span>
                <h2><?php esc_html_e( 'Videography Services', 'branddevelopers' ); ?></h2>
                <p><?php esc_html_e( 'Compelling video content that tells your story and drives results.', 'branddevelopers' ); ?></p>
            </div>
        </div>

        <div class="packages-grid">
            <?php
            $video_packages = array(
                array(
                    'name'     => 'Brand Video',
                    'price'    => '1,500',
                    'period'   => 'one-time',
                    'desc'     => 'A 60–90 second brand story for your website.',
                    'features' => array( 'Full day shoot', '60–90 sec final edit', 'Professional colour grade', 'Licensed music', '2 rounds of revisions', 'Web + social versions' ),
                    'popular'  => false,
                    'cta'      => 'Get Started',
                ),
                array(
                    'name'     => 'Event Videography',
                    'price'    => '2,000',
                    'period'   => 'per event',
                    'desc'     => 'Full event coverage with a highlight reel.',
                    'features' => array( 'Full event coverage', '3–5 min highlight film', 'Raw footage included', 'Same-day social clip', 'Drone footage (if applicable)', '5 business day delivery' ),
                    'popular'  => true,
                    'cta'      => 'Most Popular',
                ),
                array(
                    'name'     => 'Social Reels Pack',
                    'price'    => '699',
                    'period'   => 'per month',
                    'desc'     => 'Monthly short-form video content for social media.',
                    'features' => array( '4 Reels/TikToks per month', 'Scripting & planning', 'On-location or studio', 'Captions & music', 'Platform-optimised', 'Monthly strategy call' ),
                    'popular'  => false,
                    'cta'      => 'Subscribe',
                ),
            );
            foreach ( $video_packages as $pkg ) : ?>
            <div class="package-card <?php echo $pkg['popular'] ? 'package-card--featured' : ''; ?>">
                <?php if ( $pkg['popular'] ) : ?>
                <div class="package-card__badge"><?php esc_html_e( 'Most Popular', 'branddevelopers' ); ?></div>
                <?php endif; ?>
                <div class="package-card__header">
                    <h4 class="package-card__name"><?php echo esc_html( $pkg['name'] ); ?></h4>
                    <div class="package-card__price">
                        <span class="package-card__currency">$</span>
                        <span class="package-card__amount"><?php echo esc_html( $pkg['price'] ); ?></span>
                        <span class="package-card__period"><?php echo esc_html( $pkg['period'] ); ?></span>
                    </div>
                    <p class="package-card__desc"><?php echo esc_html( $pkg['desc'] ); ?></p>
                </div>
                <ul class="package-card__features">
                    <?php foreach ( $pkg['features'] as $feature ) : ?>
                    <li><i class="fas fa-check"></i><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn <?php echo $pkg['popular'] ? 'btn--primary' : 'btn--outline-dark'; ?>" style="width:100%;justify-content:center">
                    <?php esc_html_e( 'Get Started', 'branddevelopers' ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICE 5: CONSULTATION
     ============================================================ -->
<section class="section section--dark">
    <div class="container">
        <div class="packages-section-header">
            <div class="packages-section-header__icon" style="background:rgba(255,255,255,0.08)">
                <i class="fas fa-comments" style="color:rgba(255,255,255,0.8)"></i>
            </div>
            <div>
                <span class="small-head" style="color:rgba(255,255,255,0.5)"><?php esc_html_e( 'Service 05', 'branddevelopers' ); ?></span>
                <h2 class="text-white"><?php esc_html_e( 'Consultation Services', 'branddevelopers' ); ?></h2>
                <p style="color:rgba(255,255,255,0.65)"><?php esc_html_e( "Not sure where to start? Book a strategy session and we'll map out the best path forward.", 'branddevelopers' ); ?></p>
            </div>
        </div>

        <div class="packages-grid packages-grid--dark">
            <?php
            $consult_packages = array(
                array(
                    'name'     => 'Discovery Call',
                    'price'    => '0',
                    'period'   => 'free',
                    'desc'     => 'A quick 30-minute intro call to explore your needs.',
                    'features' => array( '30-minute video call', 'Project scope overview', 'Budget discussion', 'Timeline planning', 'No commitment required' ),
                    'popular'  => false,
                    'cta'      => 'Book Free Call',
                ),
                array(
                    'name'     => 'Strategy Session',
                    'price'    => '250',
                    'period'   => '2 hours',
                    'desc'     => 'Deep-dive into your brand, goals and digital strategy.',
                    'features' => array( '2-hour video session', 'Brand audit review', 'Competitor analysis', 'Action plan document', 'Follow-up summary email', 'Applicable to project' ),
                    'popular'  => true,
                    'cta'      => 'Book Session',
                ),
                array(
                    'name'     => 'Ongoing Advisory',
                    'price'    => '500',
                    'period'   => 'per month',
                    'desc'     => 'Monthly strategic support for growing brands.',
                    'features' => array( '4 hours advisory/month', 'Weekly check-in calls', 'Priority Slack access', 'Performance reviews', 'Resource recommendations', 'Cancel anytime' ),
                    'popular'  => false,
                    'cta'      => 'Get Started',
                ),
            );
            foreach ( $consult_packages as $pkg ) :
                $is_free = ( $pkg['price'] === '0' );
            ?>
            <div class="package-card package-card--dark <?php echo $pkg['popular'] ? 'package-card--featured' : ''; ?>">
                <?php if ( $pkg['popular'] ) : ?>
                <div class="package-card__badge"><?php esc_html_e( 'Most Popular', 'branddevelopers' ); ?></div>
                <?php endif; ?>
                <div class="package-card__header">
                    <h4 class="package-card__name"><?php echo esc_html( $pkg['name'] ); ?></h4>
                    <div class="package-card__price">
                        <?php if ( $is_free ) : ?>
                        <span class="package-card__amount" style="font-size:36px"><?php esc_html_e( 'Free', 'branddevelopers' ); ?></span>
                        <?php else : ?>
                        <span class="package-card__currency">$</span>
                        <span class="package-card__amount"><?php echo esc_html( $pkg['price'] ); ?></span>
                        <span class="package-card__period"><?php echo esc_html( $pkg['period'] ); ?></span>
                        <?php endif; ?>
                    </div>
                    <p class="package-card__desc"><?php echo esc_html( $pkg['desc'] ); ?></p>
                </div>
                <ul class="package-card__features">
                    <?php foreach ( $pkg['features'] as $feature ) : ?>
                    <li><i class="fas fa-check"></i><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn <?php echo $pkg['popular'] ? 'btn--primary' : 'btn--outline'; ?>" style="width:100%;justify-content:center">
                    <?php echo esc_html( $pkg['cta'] ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CUSTOM QUOTE BANNER -->
<section style="background:var(--color-bg);padding:var(--space-xl) 0">
    <div class="container">
        <div style="background:#fff;border-radius:var(--radius-xl);padding:var(--space-xl);display:grid;grid-template-columns:1fr auto;gap:var(--space-lg);align-items:center;box-shadow:0 8px 40px rgba(0,0,0,0.06)">
            <div>
                <span class="small-head" style="display:block;margin-bottom:12px"><?php esc_html_e( 'Need Something Custom?', 'branddevelopers' ); ?></span>
                <h2 style="margin-bottom:12px"><?php esc_html_e( "Don't see what you're looking for?", 'branddevelopers' ); ?></h2>
                <p><?php esc_html_e( 'Every project is unique. Tell us what you need and we will put together a custom package tailored exactly to your goals and budget.', 'branddevelopers' ); ?></p>
            </div>
            <div style="flex-shrink:0">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary btn--lg" style="white-space:nowrap">
                    <i class="fas fa-envelope" style="margin-right:8px"></i>
                    <?php esc_html_e( 'Request Custom Quote', 'branddevelopers' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
