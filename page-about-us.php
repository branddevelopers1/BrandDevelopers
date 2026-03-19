<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content">
            <h1><?php _e( 'About Us', 'branddevelopers' ); ?></h1>
            <p><?php _e( "We're not just another agency. We're your creative partner. Boutique by design, we take the time to understand your brand, your audience, and your ambitions — delivering work that feels tailor-made, not templated.", 'branddevelopers' ); ?></p>
            <div style="margin-top:var(--space-md);display:flex;gap:var(--space-sm)">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php _e( 'Get a Free Audit', 'branddevelopers' ); ?></a>
                <a href="#" class="btn btn--outline"><?php _e( 'Download CV', 'branddevelopers' ); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT INTRO / SKILLS -->
<section class="section">
    <div class="container">
        <div class="about-intro">
            <!-- Left col: Intro text + skills -->
            <div>
                <span class="small-head"><?php _e( 'Digital Experiences with 25+ Years of Combined Purpose', 'branddevelopers' ); ?></span>
                <h2 style="margin:16px 0 24px"><?php _e( 'Get to Know Me', 'branddevelopers' ); ?></h2>
                <p><?php _e( 'Our boutique team blends artistry and technical expertise to help brands stand out and scale with purpose. Building brand identities that connect and inspire.', 'branddevelopers' ); ?></p>

                <div class="skills-bars" style="margin-top:40px">
                    <div class="skill-bar">
                        <div class="skill-bar__label">
                            <span><?php _e( 'Brand And Creative Strategy', 'branddevelopers' ); ?></span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar__track"><div class="skill-bar__fill" style="width:90%"></div></div>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar__label">
                            <span><?php _e( 'UX/UI Design and Development', 'branddevelopers' ); ?></span>
                            <span>88%</span>
                        </div>
                        <div class="skill-bar__track"><div class="skill-bar__fill" style="width:88%"></div></div>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar__label">
                            <span><?php _e( 'Digital Growth and SEO', 'branddevelopers' ); ?></span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar__track"><div class="skill-bar__fill" style="width:80%"></div></div>
                    </div>
                </div>
            </div>

            <!-- Right col: Image placeholder -->
            <div>
                <div style="border-radius:var(--radius-xl);overflow:hidden;aspect-ratio:4/5;background:#e0e0e0">
                    <?php
                    $about_img = get_theme_mod( 'bd_about_image' );
                    if ( $about_img ) : ?>
                        <img src="<?php echo esc_url( $about_img ); ?>" alt="About BrandDevelopers" style="width:100%;height:100%;object-fit:cover">
                    <?php else : ?>
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#1a1a1a,#003399);opacity:0.8"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats-row fade-up" style="margin-top:var(--space-xl)">
            <div class="stat-item">
                <h3>420+</h3>
                <p><?php _e( 'Projects Delivered', 'branddevelopers' ); ?></p>
            </div>
            <div class="stat-item">
                <h3>300+</h3>
                <p><?php _e( 'Clients Worldwide', 'branddevelopers' ); ?></p>
            </div>
            <div class="stat-item">
                <h3>14+</h3>
                <p><?php _e( 'Years in UX/UI Design', 'branddevelopers' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- WHAT I DO — SERVICES LIST -->
<section class="section section--bg">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="small-head"><?php _e( 'What I Do', 'branddevelopers' ); ?></span>
            <h2><?php _e( 'Designing Digital Experiences That Feel', 'branddevelopers' ); ?> <span style="color:var(--color-primary)">Effortless</span></h2>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-xl);align-items:center;margin-top:var(--space-lg)">
            <ul style="display:flex;flex-direction:column;gap:16px">
                <?php
                $services = [
                    [ 'icon' => 'fa-layer-group', 'label' => 'UI/UX & Product Design',        'active' => false ],
                    [ 'icon' => 'fa-globe',        'label' => 'Website & Landing Page',         'active' => false ],
                    [ 'icon' => 'fa-pen-nib',      'label' => 'Logo & Brand Identity',          'active' => true  ],
                    [ 'icon' => 'fa-film',         'label' => 'Video Editing & Graphics',       'active' => false ],
                    [ 'icon' => 'fa-rocket',       'label' => 'Development & Deploy',           'active' => false ],
                ];
                foreach ( $services as $s ) : ?>
                <li style="display:flex;align-items:center;gap:16px;font-size:16px;color:<?php echo $s['active'] ? 'var(--color-primary)' : 'var(--color-grey)'; ?>;font-weight:<?php echo $s['active'] ? '500' : '400'; ?>">
                    <i class="fas <?php echo esc_attr( $s['icon'] ); ?>" style="width:20px;text-align:center"></i>
                    <?php echo esc_html( $s['label'] ); ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <div>
                <h3 style="margin-bottom:16px"><?php _e( 'Crafting Digital Experiences', 'branddevelopers' ); ?></h3>
                <p><?php _e( 'We create intuitive interfaces and engaging user journeys — elegant, functional designs users love.', 'branddevelopers' ); ?></p>
                <div style="margin-top:var(--space-md);display:flex;gap:var(--space-sm)">
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn--outline-dark"><?php _e( 'Development &amp; Deploy', 'branddevelopers' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn--primary"><?php _e( 'Explore Now', 'branddevelopers' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SELECTED WORKS (Case Studies preview) -->
<section class="section">
    <div class="container">
        <div class="portfolio-header">
            <div>
                <span class="small-head"><?php _e( 'My Selected Works', 'branddevelopers' ); ?></span>
                <h2><?php _e( 'Latest works Define Purpose', 'branddevelopers' ); ?> &amp; <span style="color:var(--color-primary)">Function</span></h2>
            </div>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--outline-dark"><?php _e( 'See all projects', 'branddevelopers' ); ?></a>
        </div>

        <div class="portfolio-grid">
            <?php
            $works = bd_get_case_studies( 4 );
            $positions = [ 'portfolio-item--featured', 'portfolio-item--tall', 'portfolio-item--small', 'portfolio-item--small' ];
            if ( $works->have_posts() ) :
                $i = 0;
                while ( $works->have_posts() ) : $works->the_post();
                    $pos = $positions[$i] ?? 'portfolio-item--small';
                    $service = get_post_meta( get_the_ID(), '_bd_service', true );
            ?>
            <div class="portfolio-item <?php echo esc_attr( $pos ); ?>">
                <?php if ( has_post_thumbnail() ) the_post_thumbnail( 'bd-portfolio' );
                else : ?><div style="width:100%;height:100%;background:#d8d8d8;min-height:200px"></div><?php endif; ?>
                <div class="portfolio-item__overlay">
                    <?php if ( $service ) : ?><span class="portfolio-item__tag"><?php echo esc_html( $service ); ?></span><?php endif; ?>
                    <h5 class="portfolio-item__title"><?php the_title(); ?></h5>
                </div>
                <a href="<?php the_permalink(); ?>" class="portfolio-item__explore"><?php _e( 'Explore', 'branddevelopers' ); ?> →</a>
            </div>
            <?php   $i++;
                endwhile;
                wp_reset_postdata();
            else :
                $placeholders = [
                    [ 'class' => 'portfolio-item--featured', 'label' => 'Postcard Work', 'tag' => 'Portfolio' ],
                    [ 'class' => 'portfolio-item--tall',     'label' => 'Portfolio',      'tag' => 'Branding' ],
                    [ 'class' => 'portfolio-item--small',    'label' => 'Campaign',       'tag' => 'Digital' ],
                    [ 'class' => 'portfolio-item--small',    'label' => 'Web Design',     'tag' => 'Development' ],
                ];
                foreach ( $placeholders as $p ) : ?>
                <div class="portfolio-item <?php echo esc_attr( $p['class'] ); ?>">
                    <div style="width:100%;height:100%;background:#d8d8d8;min-height:200px"></div>
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

<!-- CTA BANNER -->
<section style="padding:var(--space-xl) 0;background:var(--color-dark-bg)">
    <div class="container" style="text-align:center">
        <h2 class="text-white" style="margin-bottom:16px"><?php _e( 'Elevate Your Project Together!', 'branddevelopers' ); ?></h2>
        <p style="max-width:540px;margin:0 auto var(--space-md)"><?php _e( 'Get a free 1:1 consultation to explore design solutions tailored to your product\'s goals and user experience.', 'branddevelopers' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php _e( "Let's talk", 'branddevelopers' ); ?></a>
    </div>
</section>

<!-- TEAM -->
<?php bd_render_team(); ?>

<!-- HOW WE WORK -->
<div id="process">
<?php bd_render_workflow(); ?>
</div>

<!-- TESTIMONIALS -->
<section class="section section--bg">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="small-head"><?php _e( 'Client Reflections', 'branddevelopers' ); ?></span>
            <h2><?php _e( "Trusted Words from Those I've Designed For", 'branddevelopers' ); ?></h2>
        </div>
        <div class="blog-grid" style="margin-top:var(--space-lg)">
            <?php
            $testimonials = bd_get_testimonials( 4 );
            if ( $testimonials->have_posts() ) :
                while ( $testimonials->have_posts() ) : $testimonials->the_post();
                    $author  = get_post_meta( get_the_ID(), '_bd_author', true );
                    $company = get_post_meta( get_the_ID(), '_bd_role', true );
            ?>
            <div class="blog-card fade-up" style="padding:32px">
                <p style="font-size:32px;color:var(--color-primary);line-height:1;margin-bottom:16px">"</p>
                <p style="color:var(--color-grey);font-size:var(--fs-small);line-height:22px;margin-bottom:16px"><?php the_content(); ?></p>
                <strong><?php echo esc_html( $author ); ?></strong><br>
                <span style="font-size:12px;color:var(--color-grey)"><?php echo esc_html( $company ); ?></span>
            </div>
            <?php    endwhile;
                wp_reset_postdata();
            else :
                $placeholder_testimonials = [
                    [ 'author' => 'John McCray',    'role' => 'Founder, Lumora Studio',      'text' => 'Exceptional design work that transformed our brand identity. The team truly understood our vision.' ],
                    [ 'author' => 'Priya Mehta',    'role' => 'UX Director, CloudMorph Labs', 'text' => 'Their SEO strategies helped us climb to the top of search results faster. Exceptional results, every time!' ],
                    [ 'author' => 'David Alby',     'role' => 'CTO, Nexspace India',         'text' => 'Outstanding development quality. The sites they build are fast, accessible and beautifully crafted.' ],
                    [ 'author' => 'Rakesh Bandit',  'role' => 'Product Head, Innovexa',      'text' => 'A creative team that goes beyond the brief. They helped us think bigger and execute flawlessly.' ],
                ];
                foreach ( $placeholder_testimonials as $t ) : ?>
                <div class="blog-card fade-up" style="padding:32px">
                    <p style="font-size:32px;color:var(--color-primary);line-height:1;margin-bottom:16px">"</p>
                    <p style="color:var(--color-grey);font-size:var(--fs-small);line-height:22px;margin-bottom:16px"><?php echo esc_html( $t['text'] ); ?></p>
                    <strong><?php echo esc_html( $t['author'] ); ?></strong><br>
                    <span style="font-size:12px;color:var(--color-grey)"><?php echo esc_html( $t['role'] ); ?></span>
                </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
