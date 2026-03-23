<?php
/**
 * Template Name: Portfolio Page
 * Auto-loads for slug: portfolio
 */
get_header(); ?>

<!-- HERO -->
<section class="page-hero" style="min-height:50vh">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( 'Our Work', 'branddevelopers' ); ?></span>
            <h1 style="color:#F9FAFB;font-size:72px;line-height:88px"><?php esc_html_e( 'Portfolio', 'branddevelopers' ); ?></h1>
            <p style="color:rgba(255,255,255,0.65);font-size:18px;line-height:28px;max-width:560px;margin-top:16px">
                <?php esc_html_e( 'Real projects. Real results. A curated selection of our best work across branding, web, photography, and videography.', 'branddevelopers' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- FILTER BAR -->
<section style="background:var(--color-bg);padding:24px 0;border-bottom:1px solid rgba(0,0,0,0.06)">
    <div class="container">
        <div class="portfolio-filter" id="portfolio-filter">
            <button class="portfolio-filter__btn portfolio-filter__btn--active" data-filter="all">
                <?php esc_html_e( 'All Work', 'branddevelopers' ); ?>
            </button>
            <button class="portfolio-filter__btn" data-filter="web-development">
                <?php esc_html_e( 'Web Development', 'branddevelopers' ); ?>
            </button>
            <button class="portfolio-filter__btn" data-filter="graphic-design">
                <?php esc_html_e( 'Graphic Design', 'branddevelopers' ); ?>
            </button>
            <button class="portfolio-filter__btn" data-filter="photography">
                <?php esc_html_e( 'Photography', 'branddevelopers' ); ?>
            </button>
            <button class="portfolio-filter__btn" data-filter="videography">
                <?php esc_html_e( 'Videography', 'branddevelopers' ); ?>
            </button>
            <button class="portfolio-filter__btn" data-filter="branding">
                <?php esc_html_e( 'Branding', 'branddevelopers' ); ?>
            </button>
        </div>
    </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="section">
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
        ?>
        <div class="portfolio-masonry" id="portfolio-grid">
            <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                $service  = get_post_meta( get_the_ID(), '_bd_service', true );
                $client   = get_post_meta( get_the_ID(), '_bd_client',  true );
                $year     = get_post_meta( get_the_ID(), '_bd_year',    true );
                // Derive filter category from service
                $cat = 'branding';
                if ( stripos( $service, 'web' ) !== false || stripos( $service, 'development' ) !== false ) $cat = 'web-development';
                elseif ( stripos( $service, 'graphic' ) !== false || stripos( $service, 'logo' ) !== false || stripos( $service, 'design' ) !== false ) $cat = 'graphic-design';
                elseif ( stripos( $service, 'photo' ) !== false ) $cat = 'photography';
                elseif ( stripos( $service, 'video' ) !== false ) $cat = 'videography';
                elseif ( stripos( $service, 'brand' ) !== false || stripos( $service, 'strateg' ) !== false ) $cat = 'branding';
            ?>
            <div class="portfolio-item-card fade-up" data-category="<?php echo esc_attr( $cat ); ?>">
                <div class="portfolio-item-card__image">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'bd-portfolio' );
                    else : ?>
                        <div class="portfolio-item-card__placeholder">
                            <i class="fas fa-image"></i>
                        </div>
                    <?php endif; ?>
                    <div class="portfolio-item-card__overlay">
                        <a href="<?php the_permalink(); ?>" class="portfolio-item-card__view">
                            <i class="fas fa-arrow-right"></i>
                            <?php esc_html_e( 'View Project', 'branddevelopers' ); ?>
                        </a>
                    </div>
                </div>
                <div class="portfolio-item-card__body">
                    <?php if ( $service ) : ?>
                    <span class="portfolio-item-card__tag"><?php echo esc_html( $service ); ?></span>
                    <?php endif; ?>
                    <h4 class="portfolio-item-card__title"><?php the_title(); ?></h4>
                    <div class="portfolio-item-card__meta">
                        <?php if ( $client ) : ?>
                        <span><i class="fas fa-building"></i> <?php echo esc_html( $client ); ?></span>
                        <?php endif; ?>
                        <?php if ( $year ) : ?>
                        <span><i class="fas fa-calendar"></i> <?php echo esc_html( $year ); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>

        <?php else : ?>
        <!-- No posts yet — show placeholder grid -->
        <div class="portfolio-masonry" id="portfolio-grid">
            <?php
            $placeholders = array(
                array( 'title' => 'Brand Identity Design',     'service' => 'Graphic Design',     'cat' => 'graphic-design'   ),
                array( 'title' => 'Corporate Website Rebuild', 'service' => 'Web Development',    'cat' => 'web-development'  ),
                array( 'title' => 'Event Photography',         'service' => 'Photography',        'cat' => 'photography'      ),
                array( 'title' => 'Product Launch Video',      'service' => 'Videography',        'cat' => 'videography'      ),
                array( 'title' => 'Logo & Brand Package',      'service' => 'Branding',           'cat' => 'branding'         ),
                array( 'title' => 'E-Commerce Platform',       'service' => 'Web Development',    'cat' => 'web-development'  ),
                array( 'title' => 'Social Media Campaign',     'service' => 'Graphic Design',     'cat' => 'graphic-design'   ),
                array( 'title' => 'Headshot Session',          'service' => 'Photography',        'cat' => 'photography'      ),
                array( 'title' => 'Brand Story Film',          'service' => 'Videography',        'cat' => 'videography'      ),
            );
            foreach ( $placeholders as $ph ) : ?>
            <div class="portfolio-item-card fade-up" data-category="<?php echo esc_attr( $ph['cat'] ); ?>">
                <div class="portfolio-item-card__image">
                    <div class="portfolio-item-card__placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="portfolio-item-card__overlay">
                        <a href="#" class="portfolio-item-card__view">
                            <i class="fas fa-arrow-right"></i>
                            <?php esc_html_e( 'View Project', 'branddevelopers' ); ?>
                        </a>
                    </div>
                </div>
                <div class="portfolio-item-card__body">
                    <span class="portfolio-item-card__tag"><?php echo esc_html( $ph['service'] ); ?></span>
                    <h4 class="portfolio-item-card__title"><?php echo esc_html( $ph['title'] ); ?></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p style="text-align:center;color:var(--color-grey);margin-top:var(--space-lg);font-size:14px">
            <?php esc_html_e( 'Add projects via WP Admin → Case Studies → Add New', 'branddevelopers' ); ?>
        </p>
        <?php endif; ?>

    </div>
</section>

<!-- CTA -->
<section style="background:var(--color-primary);padding:var(--space-xl) 0;text-align:center">
    <div class="container">
        <span class="small-head" style="color:rgba(255,255,255,0.6);display:block;margin-bottom:16px"><?php esc_html_e( "Let's Work Together", 'branddevelopers' ); ?></span>
        <h2 style="color:#fff;margin-bottom:16px"><?php esc_html_e( 'Your project could be next.', 'branddevelopers' ); ?></h2>
        <p style="color:rgba(255,255,255,0.7);max-width:480px;margin:0 auto var(--space-md)"><?php esc_html_e( "Ready to create something great? Let's talk about your vision.", 'branddevelopers' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--outline" style="border-color:rgba(255,255,255,0.5)">
            <?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
