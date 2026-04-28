<?php get_header(); ?>

<!-- ============================================================
     HERO — v2: Editorial / Sharp / Conversion-focused
     ============================================================ -->
<section class="hero hero--v2">
    <div class="hero__grid-lines" aria-hidden="true"></div>
    <div class="hero__accent-bar" aria-hidden="true"></div>

    <?php
    $hero_img = get_theme_mod( 'bd_hero_image' );
    if ( $hero_img ) : ?>
    <img class="hero__bg-image" src="<?php echo esc_url( $hero_img ); ?>" alt="" aria-hidden="true">
    <?php endif; ?>

    <div class="container">
        <div class="hero--v2__body">

            <!-- LEFT: Headline + CTA -->
            <div class="hero--v2__left">
                <p class="hero__eyebrow">
                    <span class="hero__eyebrow-dot" aria-hidden="true"></span>
                    <?php _e( 'Toronto-based &middot; Est. 2017', 'branddevelopers' ); ?>
                </p>
                <h1 class="hero__title hero__title--v2">
                    <?php _e( 'Your brand', 'branddevelopers' ); ?><br>
                    <span class="hero__title-accent"><?php _e( 'closes', 'branddevelopers' ); ?></span>
                    <span class="hero__title-stroke"><?php _e( 'deals.', 'branddevelopers' ); ?></span>
                </h1>
                <p class="hero__desc hero__desc--v2">
                    <?php _e( 'We build brands that do the heavy lifting — from identity and web to growth marketing. Design that converts, not just impresses.', 'branddevelopers' ); ?>
                </p>
                <div class="hero__actions hero__actions--v2">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--primary btn--sharp">
                        <?php _e( 'See our work', 'branddevelopers' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--ghost">
                        <span class="btn__arrow" aria-hidden="true"></span>
                        <?php _e( 'Talk to us', 'branddevelopers' ); ?>
                    </a>
                </div>
            </div>

            <!-- RIGHT: Services mini-grid -->
            <div class="hero--v2__right">
                <p class="hero__services-label"><?php _e( 'What we do', 'branddevelopers' ); ?></p>
                <div class="hero__services-grid">
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hero__service-item hero__service-item--featured">
                        <span class="hero__service-num">01</span>
                        <span class="hero__service-name"><?php _e( 'Brand Identity', 'branddevelopers' ); ?></span>
                        <span class="hero__service-desc"><?php _e( 'Logo, visual systems &amp; guidelines', 'branddevelopers' ); ?></span>
                        <span class="hero__service-arrow" aria-hidden="true"></span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hero__service-item">
                        <span class="hero__service-num">02</span>
                        <span class="hero__service-name"><?php _e( 'Web Design', 'branddevelopers' ); ?></span>
                        <span class="hero__service-desc"><?php _e( 'Conversion-first sites that rank &amp; sell', 'branddevelopers' ); ?></span>
                        <span class="hero__service-arrow" aria-hidden="true"></span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hero__service-item">
                        <span class="hero__service-num">03</span>
                        <span class="hero__service-name"><?php _e( 'Digital Marketing', 'branddevelopers' ); ?></span>
                        <span class="hero__service-desc"><?php _e( 'Social, ads &amp; campaigns that perform', 'branddevelopers' ); ?></span>
                        <span class="hero__service-arrow" aria-hidden="true"></span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hero__service-item">
                        <span class="hero__service-num">04</span>
                        <span class="hero__service-name"><?php _e( 'App Development', 'branddevelopers' ); ?></span>
                        <span class="hero__service-desc"><?php _e( 'Custom apps your audience will love', 'branddevelopers' ); ?></span>
                        <span class="hero__service-arrow" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Scrolling ticker -->
    <div class="hero__ticker" aria-hidden="true">
        <div class="hero__ticker-inner">
            <?php
            $ticker_items = array(
                'Brand Strategy', 'Web Development', 'Visual Identity',
                'Digital Marketing', 'E-Commerce', 'App Development',
                'Brand Strategy', 'Web Development', 'Visual Identity',
                'Digital Marketing', 'E-Commerce', 'App Development',
            );
            foreach ( $ticker_items as $item ) : ?>
            <span class="hero__ticker-item"><?php echo esc_html( $item ); ?></span>
            <span class="hero__ticker-sep">&middot;</span>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Stats bar -->
    <div class="hero__stats">
        <div class="container">
            <div class="hero__stats-inner">
                <div class="hero__stat">
                    <span class="hero__stat-num">7+</span>
                    <span class="hero__stat-label"><?php _e( 'Years in market', 'branddevelopers' ); ?></span>
                </div>
                <div class="hero__stat-divider" aria-hidden="true"></div>
                <div class="hero__stat">
                    <span class="hero__stat-num">120+</span>
                    <span class="hero__stat-label"><?php _e( 'Brands built', 'branddevelopers' ); ?></span>
                </div>
                <div class="hero__stat-divider" aria-hidden="true"></div>
                <div class="hero__stat">
                    <span class="hero__stat-num">98%</span>
                    <span class="hero__stat-label"><?php _e( 'Client retention', 'branddevelopers' ); ?></span>
                </div>
                <div class="hero__stat-divider" aria-hidden="true"></div>
                <div class="hero__stat">
                    <span class="hero__stat-num">CA</span>
                    <span class="hero__stat-label"><?php _e( 'Toronto-based', 'branddevelopers' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     WHAT WE DO — SERVICES OVERVIEW
     ============================================================ -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header">
            <span class="small-head" style="color:rgba(255,255,255,0.5)"><?php _e( 'What We Do', 'branddevelopers' ); ?></span>
            <h2 class="text-white"><?php _e( 'Brand Strategy to Digital Growth', 'branddevelopers' ); ?></h2>
        </div>
        <div class="services-grid">
            <div class="service-card fade-up">
                <div class="service-card__icon"><i class="fas fa-palette"></i></div>
                <h4><?php _e( 'Brand Strategy &amp; Creative', 'branddevelopers' ); ?></h4>
                <p><?php _e( 'From identity design to campaigns, we create brand experiences that connect and inspire.', 'branddevelopers' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-card__link"><?php _e( 'Explore', 'branddevelopers' ); ?> →</a>
            </div>
            <div class="service-card fade-up">
                <div class="service-card__icon"><i class="fas fa-code"></i></div>
                <h4><?php _e( 'Web Design &amp; Development', 'branddevelopers' ); ?></h4>
                <p><?php _e( 'We design and develop digital platforms that blend beauty with performance — responsive, accessible and crafted to deliver seamless user experiences.', 'branddevelopers' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-card__link"><?php _e( 'Explore', 'branddevelopers' ); ?> →</a>
            </div>
            <div class="service-card fade-up">
                <div class="service-card__icon"><i class="fas fa-chart-line"></i></div>
                <h4><?php _e( 'Digital Growth &amp; SEO', 'branddevelopers' ); ?></h4>
                <p><?php _e( 'From SEO to paid media and social strategy, we help your brand grow through creative campaigns that convert.', 'branddevelopers' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-card__link"><?php _e( 'Explore', 'branddevelopers' ); ?> →</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     RECENT WORK / CASE STUDIES
     ============================================================ -->
<section class="section section--bg">
    <div class="container">
        <div class="portfolio-header">
            <div>
                <span class="small-head"><?php _e( 'Recent Work Highlights', 'branddevelopers' ); ?></span>
                <h2><?php _e( 'Real Projects That Ignite Business', 'branddevelopers' ); ?> <span style="color:var(--color-primary)">Growth</span></h2>
            </div>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--outline-dark">
                <?php _e( 'See all projects', 'branddevelopers' ); ?>
            </a>
        </div>

        <?php
        $case_studies = bd_get_case_studies( 5 );
        $positions = array( 'portfolio-item--featured', 'portfolio-item--tall', 'portfolio-item--wide', 'portfolio-item--small', 'portfolio-item--small' );
        ?>
        <div class="portfolio-grid">
            <?php if ( $case_studies->have_posts() ) :
                $idx = 0;
                while ( $case_studies->have_posts() ) : $case_studies->the_post();
                    $service = get_post_meta( get_the_ID(), '_bd_service', true );
                    $pos_class = $positions[ $idx ] ?? 'portfolio-item--small';
            ?>
            <div class="portfolio-item <?php echo esc_attr( $pos_class ); ?> fade-up">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'bd-portfolio' ); ?>
                <?php else : ?>
                    <div style="width:100%;height:100%;background:#d0d0d0;min-height:200px"></div>
                <?php endif; ?>
                <div class="portfolio-item__overlay">
                    <?php if ( $service ) : ?>
                    <span class="portfolio-item__tag"><?php echo esc_html( $service ); ?></span>
                    <?php endif; ?>
                    <h5 class="portfolio-item__title"><?php the_title(); ?></h5>
                    <p class="portfolio-item__sub"><?php the_excerpt(); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>" class="portfolio-item__explore"><?php _e( 'Explore', 'branddevelopers' ); ?> →</a>
            </div>
            <?php   $idx++;
                endwhile;
                wp_reset_postdata();
            else :
                // Placeholder cards with Unsplash stock images
                $placeholders = array(
                    array(
                        'class' => 'portfolio-item--featured',
                        'label' => 'Brand Identity Design',
                        'sub'   => 'Brand Campaign',
                        'img'   => 'https://images.unsplash.com/photo-1634942537034-2531766767d1?w=800&q=80&fit=crop',
                    ),
                    array(
                        'class' => 'portfolio-item--tall',
                        'label' => 'UI/UX Design',
                        'sub'   => 'Web Development',
                        'img'   => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80&fit=crop',
                    ),
                    array(
                        'class' => 'portfolio-item--wide',
                        'label' => 'Campaign Magic',
                        'sub'   => 'Digital Marketing',
                        'img'   => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80&fit=crop',
                    ),
                    array(
                        'class' => 'portfolio-item--small',
                        'label' => 'Product Launch',
                        'sub'   => 'Strategy',
                        'img'   => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80&fit=crop',
                    ),
                    array(
                        'class' => 'portfolio-item--small',
                        'label' => 'Mobile App',
                        'sub'   => 'UI/UX',
                        'img'   => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80&fit=crop',
                    ),
                );
                foreach ( $placeholders as $p ) : ?>
                <div class="portfolio-item <?php echo esc_attr( $p['class'] ); ?>">
                    <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['label'] ); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
                    <div class="portfolio-item__overlay" style="opacity:1">
                        <span class="portfolio-item__tag"><?php echo esc_html( $p['sub'] ); ?></span>
                        <h5 class="portfolio-item__title"><?php echo esc_html( $p['label'] ); ?></h5>
                    </div>
                </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIAL
     ============================================================ -->
<section class="testimonial-section">
    <div class="container">
        <?php
        $testimonials_query = bd_get_testimonials( 3 );
        $all_testimonials = array();
        if ( $testimonials_query->have_posts() ) :
            while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                $all_testimonials[] = array(
                    'quote'   => strip_tags( get_the_content() ),
                    'author'  => get_post_meta( get_the_ID(), '_bd_author', true ),
                    'company' => get_post_meta( get_the_ID(), '_bd_role', true ),
                );
            endwhile;
            wp_reset_postdata();
        endif;

        // Fallback testimonials from Figma / live site
        if ( empty( $all_testimonials ) ) :
            $all_testimonials = array(
                array(
                    'quote'   => 'It was a timely, quality, professional and good value that I had with Brand Developers. Very responsive team and well organized company. I highly recommend Brand Developers to all business owners.',
                    'author'  => 'Priya Sharma',
                    'company' => 'Marketing Head, NovaTech',
                ),
                array(
                    'quote'   => 'Their SEO strategies helped us climb to the top of search results faster. Exceptional results, every time!',
                    'author'  => 'John McCray',
                    'company' => 'Founder, Lumora Studio',
                ),
                array(
                    'quote'   => 'Outstanding design work that transformed our brand identity. The team truly understood our vision and delivered beyond expectations.',
                    'author'  => 'David Alby',
                    'company' => 'CTO, Nexspace India',
                ),
            );
        endif;
        ?>

        <!-- Testimonial slides wrapper -->
        <div class="testimonial-slider" style="position:relative">
            <?php foreach ( $all_testimonials as $ti => $t ) : ?>
            <div class="testimonial-slide" data-index="<?php echo $ti; ?>" style="<?php echo $ti > 0 ? 'display:none' : ''; ?>">
                <div style="font-size:56px;color:var(--color-primary);line-height:1;margin-bottom:8px;font-family:Georgia,serif;opacity:0.6">&ldquo;</div>
                <p class="testimonial-quote"><?php echo esc_html( $t['quote'] ); ?></p>
                <div class="testimonial-author">
                    <strong><?php echo esc_html( $t['author'] ); ?></strong>
                    <?php echo esc_html( $t['company'] ); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="testimonial-dots">
            <?php foreach ( $all_testimonials as $ti => $t ) : ?>
            <span class="<?php echo $ti === 0 ? 'active' : ''; ?>" data-slide="<?php echo $ti; ?>"></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     HOW WE WORK
     ============================================================ -->
<?php bd_render_workflow(); ?>

<!-- ============================================================
     INSIGHTS / BLOG — only shown when published posts exist
     ============================================================ -->
<?php
$bd_blog_posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'post_status' => 'publish' ) );
if ( $bd_blog_posts->have_posts() ) : ?>
<section class="section section--bg">
    <div class="container">
        <div class="portfolio-header" style="margin-bottom:var(--space-lg)">
            <div>
                <span class="small-head"><?php _e( 'Insights &amp; Ideas', 'branddevelopers' ); ?></span>
                <h2><?php _e( 'Where Strategy Meets Imagination', 'branddevelopers' ); ?></h2>
            </div>
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn--outline-dark"><?php _e( 'View all blogs', 'branddevelopers' ); ?></a>
        </div>
        <div class="blog-grid">
            <?php while ( $bd_blog_posts->have_posts() ) : $bd_blog_posts->the_post(); ?>
            <div class="blog-card fade-up">
                <div class="blog-card__image">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'bd-blog' );
                    else : ?><div style="width:100%;height:100%;background:#e0e0e0;min-height:180px"></div><?php endif; ?>
                </div>
                <div class="blog-card__body">
                    <p class="blog-card__date"><?php the_date(); ?></p>
                    <h4 class="blog-card__title"><?php the_title(); ?></h4>
                    <p class="blog-card__excerpt"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="blog-card__link"><?php _e( 'View details', 'branddevelopers' ); ?> →</a>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================================
     TEAM — hidden
     ============================================================ -->
<?php // bd_render_team(); ?>

<?php get_footer(); ?>
