<?php
/**
 * About Us page — auto-loads for /about-us/ slug
 * No Template Name declaration — loaded automatically by WordPress slug matching.
 */
get_header(); ?>

<!-- ============================================================
     PAGE HERO
     ============================================================ -->
<section class="about-hero">
    <div class="about-hero__bg"></div>
    <div class="container">
        <div class="about-hero__content">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px">About Us</span>
            <h1 class="about-hero__title">About Us</h1>
            <p class="about-hero__desc">
                <?php esc_html_e( "We're not just another agency. We're your creative partner. Boutique by design, we take the time to understand your brand, your audience, and your ambitions — delivering work that feels tailor-made, not templated.", 'branddevelopers' ); ?>
            </p>
            <div class="about-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?></a>
                <a href="https://branddevelopers.ca/wp-content/uploads/2026/04/BrandDevelopers-AboutUs.pdf" class="btn btn--outline" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Download PDF', 'branddevelopers' ); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     INTRO + SKILLS
     ============================================================ -->
<section class="section">
    <div class="container">
        <div class="about-intro-grid">

            <!-- Left: Text + skill bars -->
            <div>
                <span class="small-head" style="display:block;margin-bottom:16px">
                    <?php esc_html_e( 'Digital Experiences with 25+ Years of Combined Purpose', 'branddevelopers' ); ?>
                </span>
                <h2 style="margin-bottom:20px"><?php esc_html_e( 'Get to Know Us', 'branddevelopers' ); ?></h2>
                <p style="margin-bottom:16px"><?php esc_html_e( 'Our boutique team blends artistry and technical expertise to help brands stand out and scale with purpose.', 'branddevelopers' ); ?></p>
                <p><?php esc_html_e( 'Building brand identities that connect and inspire — from strategy through to a polished digital product delivered on time.', 'branddevelopers' ); ?></p>

                <div class="skills-bars">
                    <?php
                    $skills = array(
                        array( 'label' => 'Brand And Creative Strategy',  'pct' => 90 ),
                        array( 'label' => 'UX/UI Design and Development', 'pct' => 88 ),
                        array( 'label' => 'Digital Growth and SEO',       'pct' => 80 ),
                    );
                    foreach ( $skills as $skill ) : ?>
                    <div class="skill-bar">
                        <div class="skill-bar__label">
                            <span><?php echo esc_html( $skill['label'] ); ?></span>
                            <span><?php echo esc_html( $skill['pct'] ); ?>%</span>
                        </div>
                        <div class="skill-bar__track">
                            <div class="skill-bar__fill" style="width:<?php echo esc_attr( $skill['pct'] ); ?>%"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right: Image — shows bd_about_portrait if set, else Unsplash stock -->
            <div class="about-intro-image" style="overflow:hidden">
                <?php $portrait = bd_get( 'bd_about_portrait' ); ?>
                <img src="<?php echo $portrait ? esc_url( $portrait ) : 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&q=80&fit=crop'; ?>"
                     alt="<?php bloginfo( 'name' ); ?>"
                     style="width:100%;height:100%;object-fit:cover">
            </div>
        </div>

        <!-- Stats -->
        <div class="stats-row fade-up">
            <?php
            $stats = array(
                array( 'num' => '420+', 'label' => 'Projects Delivered'   ),
                array( 'num' => '300+', 'label' => 'Clients Worldwide'    ),
                array( 'num' => '14+',  'label' => 'Years in UX/UI Design'),
            );
            foreach ( $stats as $stat ) : ?>
            <div class="stat-item">
                <h3><?php echo esc_html( $stat['num'] ); ?></h3>
                <p><?php echo esc_html( $stat['label'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     WHAT WE DO
     ============================================================ -->
<section class="section section--bg">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="small-head"><?php esc_html_e( 'What I Do', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( 'Designing Digital Experiences That Feel', 'branddevelopers' ); ?> <span style="color:var(--color-primary)">Effortless</span></h2>
        </div>

        <div class="about-services-grid">
            <ul class="about-services-list">
                <?php
                $services = array(
                    array( 'icon' => 'fa-layer-group', 'label' => 'UI/UX & Product Design',   'active' => false ),
                    array( 'icon' => 'fa-globe',        'label' => 'Website & Landing Page',   'active' => false ),
                    array( 'icon' => 'fa-pen-nib',      'label' => 'Logo & Brand Identity',    'active' => true  ),
                    array( 'icon' => 'fa-film',         'label' => 'Video Editing & Graphics', 'active' => false ),
                    array( 'icon' => 'fa-rocket',       'label' => 'Development & Deploy',     'active' => false ),
                );
                foreach ( $services as $svc ) : ?>
                <li class="about-services-list__item <?php echo $svc['active'] ? 'about-services-list__item--active' : ''; ?>">
                    <i class="fas <?php echo esc_attr( $svc['icon'] ); ?>"></i>
                    <?php echo esc_html( $svc['label'] ); ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <div>
                <h3 style="margin-bottom:16px"><?php esc_html_e( 'Crafting Digital Experiences', 'branddevelopers' ); ?></h3>
                <p style="margin-bottom:var(--space-md)"><?php esc_html_e( 'We create intuitive interfaces and engaging user journeys — elegant, functional designs that users love.', 'branddevelopers' ); ?></p>
                <div class="about-hero__actions">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--outline-dark"><?php esc_html_e( 'Development & Deploy', 'branddevelopers' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Explore Now', 'branddevelopers' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SELECTED WORKS
     ============================================================ -->
<section class="section">
    <div class="container">
        <div class="portfolio-header">
            <div>
                <span class="small-head"><?php esc_html_e( 'My Selected Works', 'branddevelopers' ); ?></span>
                <h2><?php esc_html_e( 'Latest works Define Purpose &', 'branddevelopers' ); ?> <span style="color:var(--color-primary)">Function</span></h2>
            </div>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--outline-dark"><?php esc_html_e( 'See all projects', 'branddevelopers' ); ?></a>
        </div>

        <div class="portfolio-grid">
            <?php
            $works = new WP_Query( array(
                'post_type'      => 'case_study',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ) );
            $pf_positions = array( 'portfolio-item--featured', 'portfolio-item--tall', 'portfolio-item--small', 'portfolio-item--small' );
            $pf_idx = 0;

            if ( $works->have_posts() ) :
                while ( $works->have_posts() ) : $works->the_post();
                    $pf_service = get_post_meta( get_the_ID(), '_bd_service', true );
                    $pf_pos = isset( $pf_positions[ $pf_idx ] ) ? $pf_positions[ $pf_idx ] : 'portfolio-item--small';
            ?>
            <div class="portfolio-item <?php echo esc_attr( $pf_pos ); ?> fade-up">
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'bd-portfolio' );
                else : ?><div style="width:100%;height:100%;background:#d8d8d8;min-height:200px"></div><?php endif; ?>
                <div class="portfolio-item__overlay">
                    <?php if ( $pf_service ) : ?><span class="portfolio-item__tag"><?php echo esc_html( $pf_service ); ?></span><?php endif; ?>
                    <h5 class="portfolio-item__title"><?php the_title(); ?></h5>
                </div>
                <a href="<?php the_permalink(); ?>" class="portfolio-item__explore"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
            </div>
            <?php   $pf_idx++;
                endwhile;
                wp_reset_postdata();
            else :
                $pf_ph = array(
                    array( 'class' => 'portfolio-item--featured', 'label' => 'Brand Identity Design', 'tag' => 'Branding',        'img' => 'https://images.unsplash.com/photo-1634942537034-2531766767d1?w=800&q=80&fit=crop' ),
                    array( 'class' => 'portfolio-item--tall',     'label' => 'Creative Direction',    'tag' => 'Art Direction',   'img' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80&fit=crop' ),
                    array( 'class' => 'portfolio-item--small',    'label' => 'Campaign Design',       'tag' => 'Digital',         'img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80&fit=crop' ),
                    array( 'class' => 'portfolio-item--small',    'label' => 'Web Development',       'tag' => 'Development',     'img' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600&q=80&fit=crop' ),
                );
                foreach ( $pf_ph as $p ) : ?>
                <div class="portfolio-item <?php echo esc_attr( $p['class'] ); ?>">
                    <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['label'] ); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
                    <div class="portfolio-item__overlay" style="opacity:1">
                        <span class="portfolio-item__tag"><?php echo esc_html( $p['tag'] ); ?></span>
                        <h5 class="portfolio-item__title"><?php echo esc_html( $p['label'] ); ?></h5>
                    </div>
                </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     ELEVATE CTA
     ============================================================ -->
<section class="about-elevate-cta">
    <div class="container" style="text-align:center">
        <h2 class="text-white" style="margin-bottom:16px"><?php esc_html_e( 'Elevate Your Project Together!', 'branddevelopers' ); ?></h2>
        <p class="about-elevate-cta__desc"><?php esc_html_e( "Get a free 1:1 consultation to explore design solutions tailored to your product's goals and user experience.", 'branddevelopers' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php esc_html_e( "Let's talk", 'branddevelopers' ); ?></a>
    </div>
</section>

<!-- ============================================================
     TEAM — hidden
     ============================================================ -->
<?php /* ?><section class="team-section">
    <div class="container">
        <div class="team-header">
            <div>
                <span class="small-head" style="color:rgba(255,255,255,0.5)"><?php esc_html_e( 'Meet the Makers', 'branddevelopers' ); ?></span>
                <h2 class="text-white"><?php esc_html_e( 'Meet the Team Building the Future', 'branddevelopers' ); ?><span style="color:#4d79cc">*</span></h2>
            </div>
        </div>
        <div class="team-grid">
            <?php
            $team_q = new WP_Query( array(
                'post_type'      => 'team_member',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ) );
            if ( $team_q->have_posts() ) :
                while ( $team_q->have_posts() ) : $team_q->the_post();
                    $tm_role = get_post_meta( get_the_ID(), '_bd_role', true );
            ?>
            <div class="team-card fade-up">
                <div class="team-card__photo">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'bd-team' );
                    else : ?>
                        <div style="width:100%;min-height:250px;display:flex;align-items:center;justify-content:center">
                            <i class="fas fa-user" style="font-size:48px;color:rgba(255,255,255,0.2)"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="team-card__info">
                    <h5 class="team-card__name"><?php the_title(); ?></h5>
                    <?php if ( $tm_role ) : ?><p class="team-card__role"><?php echo esc_html( $tm_role ); ?></p><?php endif; ?>
                </div>
            </div>
            <?php   endwhile;
                wp_reset_postdata();
            else :
                $tm_ph = array(
                    array( 'name' => 'Ryan Taffe',  'role' => 'Lead Creative Partner',  'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80&fit=crop&crop=face' ),
                    array( 'name' => 'Kay Olumofe', 'role' => 'Lead Developer Founder', 'img' => 'https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=400&q=80&fit=crop&crop=face' ),
                    array( 'name' => 'Rosabel',     'role' => 'Developer',               'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80&fit=crop&crop=face' ),
                );
                foreach ( $tm_ph as $p ) : ?>
                <div class="team-card fade-up">
                    <div class="team-card__photo" style="overflow:hidden;min-height:250px">
                        <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" style="width:100%;height:100%;object-fit:cover;min-height:250px">
                    </div>
                    <div class="team-card__info">
                        <h5 class="team-card__name"><?php echo esc_html( $p['name'] ); ?></h5>
                        <p class="team-card__role"><?php echo esc_html( $p['role'] ); ?></p>
                    </div>
                </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section><?php */ ?>

<!-- ============================================================
     HOW WE WORK
     ============================================================ -->
<section id="process" class="workflow-section">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="small-head" style="color:rgba(255,255,255,0.6)"><?php esc_html_e( 'How We Work', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( 'A Simple, Strategic Workflow', 'branddevelopers' ); ?><span style="color:#4d79cc">*</span></h2>
        </div>
        <div class="workflow-steps">
            <?php
            $steps = array(
                array( 'num' => '01', 'title' => 'Discover', 'sub' => "We immerse ourselves in your brand's story.",          'desc' => 'We begin by exploring your vision, goals, and audience. This helps us uncover the insights that shape everything we create.',      'link' => 'Start with Discovery'   ),
                array( 'num' => '02', 'title' => 'Create',   'sub' => 'We turn insight into intelligent, design-led solutions.','desc' => "Using what we've learned, we outline a focused plan — from messaging to moodboards — that sets the creative direction.",     'link' => 'Explore Our Designs'    ),
                array( 'num' => '03', 'title' => 'Launch',   'sub' => 'We deliver refined digital experiences built to perform.','desc' => "Here, we shape bold, thoughtful designs that reflect your brand's personality and bring it to life across every touchpoint.",'link' => 'View Strategy Samples'  ),
                array( 'num' => '04', 'title' => 'Grow',     'sub' => 'We refine, measure, and evolve with your goals.',       'desc' => 'We refine every detail, test thoroughly, and launch your project smoothly — then measure and iterate for ongoing growth.',     'link' => 'See Final Deliverables' ),
            );
            foreach ( $steps as $i => $step ) :
                $side = ( $i % 2 !== 0 ) ? 'workflow-step--right' : 'workflow-step--left';
            ?>
            <div class="workflow-step <?php echo esc_attr( $side ); ?> fade-up">
                <div class="workflow-step__number"><?php echo esc_html( $step['num'] ); ?></div>
                <div class="workflow-step__num-badge"><?php echo esc_html( $step['num'] ); ?></div>
                <h4><?php echo esc_html( $step['title'] ); ?> &mdash; <span style="font-weight:300;opacity:0.7"><?php echo esc_html( $step['sub'] ); ?></span></h4>
                <p><?php echo esc_html( $step['desc'] ); ?></p>
                <a href="#" class="workflow-step__link"><?php echo esc_html( $step['link'] ); ?> &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="section section--bg">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="small-head"><?php esc_html_e( 'Client Reflections', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( "Trusted Words from Those We've Designed For", 'branddevelopers' ); ?></h2>
        </div>
        <div class="blog-grid">
            <?php
            $tq = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 3, 'post_status' => 'publish' ) );
            if ( $tq->have_posts() ) :
                while ( $tq->have_posts() ) : $tq->the_post(); ?>
                <div class="testimonial-card fade-up">
                    <p class="testimonial-card__quote">&ldquo;</p>
                    <p class="testimonial-card__text"><?php echo wp_kses_post( get_the_content() ); ?></p>
                    <strong class="testimonial-card__name"><?php echo esc_html( get_post_meta( get_the_ID(), '_bd_author', true ) ); ?></strong>
                    <span class="testimonial-card__role"><?php echo esc_html( get_post_meta( get_the_ID(), '_bd_role', true ) ); ?></span>
                </div>
            <?php   endwhile;
                wp_reset_postdata();
            else :
                $fallback = array(
                    array( 'author' => 'John McCray',  'role' => 'Founder, Lumora Studio',       'text' => 'Exceptional design work that transformed our brand identity. The team truly understood our vision.' ),
                    array( 'author' => 'Priya Mehta',  'role' => 'UX Director, CloudMorph Labs', 'text' => 'Their SEO strategies helped us climb to the top of search results faster. Exceptional results, every time!' ),
                    array( 'author' => 'David Alby',   'role' => 'CTO, Nexspace India',          'text' => 'Outstanding development quality. Fast, accessible and beautifully crafted.' ),
                );
                foreach ( $fallback as $t ) : ?>
                <div class="testimonial-card fade-up">
                    <p class="testimonial-card__quote">&ldquo;</p>
                    <p class="testimonial-card__text"><?php echo esc_html( $t['text'] ); ?></p>
                    <strong class="testimonial-card__name"><?php echo esc_html( $t['author'] ); ?></strong>
                    <span class="testimonial-card__role"><?php echo esc_html( $t['role'] ); ?></span>
                </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
