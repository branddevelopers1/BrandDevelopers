<?php
/**
 * About Us page — auto-loads for /about-us/ slug
 * NOTE: No Template Name declaration — loaded automatically by WordPress slug matching.
 * All sections are self-contained with no external helper function dependencies.
 */
get_header(); ?>

<!-- ============================================================
     PAGE HERO
     ============================================================ -->
<section style="min-height:55vh;display:flex;align-items:center;position:relative;overflow:hidden;background:#0d0d0d;padding-top:100px;">
    <div style="position:absolute;inset:0;background:linear-gradient(135deg,#0d0d0d 0%,#001a66 100%)"></div>
    <div class="container" style="position:relative;z-index:2;padding:80px 0 60px">
        <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:rgba(255,255,255,0.5);display:block;margin-bottom:16px">About Us</span>
        <h1 style="color:#F9FAFB;font-size:72px;line-height:88px;margin-bottom:24px">About Us</h1>
        <p style="color:rgba(255,255,255,0.65);font-size:18px;line-height:28px;max-width:560px;margin-bottom:var(--space-md)">
            <?php esc_html_e( "We're not just another agency. We're your creative partner. Boutique by design, we take the time to understand your brand, your audience, and your ambitions — delivering work that feels tailor-made, not templated.", 'branddevelopers' ); ?>
        </p>
        <div style="display:flex;gap:16px;flex-wrap:wrap">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:var(--color-primary);color:#F9FAFB;border:2px solid var(--color-primary);transition:all 0.3s ease">
                <?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?>
            </a>
            <a href="#" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:transparent;color:#F9FAFB;border:2px solid rgba(255,255,255,0.4);transition:all 0.3s ease">
                <?php esc_html_e( 'Download CV', 'branddevelopers' ); ?>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     INTRO + SKILLS
     ============================================================ -->
<section style="padding:var(--space-xl) 0">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-xl);align-items:start">

            <!-- Left: Text + skill bars -->
            <div>
                <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:var(--color-primary);display:block;margin-bottom:16px">
                    <?php esc_html_e( 'Digital Experiences with 25+ Years of Combined Purpose', 'branddevelopers' ); ?>
                </span>
                <h2 style="margin-bottom:20px"><?php esc_html_e( 'Get to Know Us', 'branddevelopers' ); ?></h2>
                <p style="margin-bottom:16px">
                    <?php esc_html_e( 'Our boutique team blends artistry and technical expertise to help brands stand out and scale with purpose.', 'branddevelopers' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'Building brand identities that connect and inspire — from strategy through to a polished digital product delivered on time.', 'branddevelopers' ); ?>
                </p>

                <!-- Skill bars -->
                <div style="margin-top:40px;display:flex;flex-direction:column;gap:20px">
                    <?php
                    $skills = array(
                        array( 'label' => 'Brand And Creative Strategy',  'pct' => 90 ),
                        array( 'label' => 'UX/UI Design and Development', 'pct' => 88 ),
                        array( 'label' => 'Digital Growth and SEO',       'pct' => 80 ),
                    );
                    foreach ( $skills as $skill ) : ?>
                    <div>
                        <div style="display:flex;justify-content:space-between;font-size:14px;color:#161616;margin-bottom:8px">
                            <span><?php echo esc_html( $skill['label'] ); ?></span>
                            <span><?php echo esc_html( $skill['pct'] ); ?>%</span>
                        </div>
                        <div style="height:4px;background:rgba(0,0,0,0.1);border-radius:2px;overflow:hidden">
                            <div style="height:100%;width:<?php echo esc_attr( $skill['pct'] ); ?>%;background:var(--color-primary);border-radius:2px;transition:width 1.2s ease"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right: Image -->
            <div style="border-radius:24px;overflow:hidden;aspect-ratio:4/5;background:linear-gradient(135deg,#161616,#003399);min-height:400px">
                <!-- Upload an About image via Appearance > Customize -->
            </div>
        </div>

        <!-- Stats row -->
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md);background:var(--color-primary);border-radius:32px;padding:var(--space-lg);text-align:center;margin-top:var(--space-xl)">
            <?php
            $stats = array(
                array( 'num' => '420+', 'label' => 'Projects Delivered' ),
                array( 'num' => '300+', 'label' => 'Clients Worldwide'  ),
                array( 'num' => '14+',  'label' => 'Years in UX/UI Design' ),
            );
            foreach ( $stats as $stat ) : ?>
            <div>
                <h3 style="font-family:var(--font-heading);font-size:52px;font-weight:400;color:#F9FAFB;margin-bottom:8px"><?php echo esc_html( $stat['num'] ); ?></h3>
                <p style="color:rgba(255,255,255,0.7);font-size:14px"><?php echo esc_html( $stat['label'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     WHAT WE DO
     ============================================================ -->
<section style="padding:var(--space-xl) 0;background:var(--color-bg)">
    <div class="container">
        <div style="text-align:center;margin-bottom:var(--space-lg)">
            <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:var(--color-primary);display:block;margin-bottom:12px">What I Do</span>
            <h2>Designing Digital Experiences That Feel <span style="color:var(--color-primary)">Effortless</span></h2>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-xl);align-items:center">
            <!-- Services list -->
            <ul style="display:flex;flex-direction:column;gap:16px">
                <?php
                $services = array(
                    array( 'icon' => 'fa-layer-group', 'label' => 'UI/UX & Product Design',   'active' => false ),
                    array( 'icon' => 'fa-globe',        'label' => 'Website & Landing Page',   'active' => false ),
                    array( 'icon' => 'fa-pen-nib',      'label' => 'Logo & Brand Identity',    'active' => true  ),
                    array( 'icon' => 'fa-film',         'label' => 'Video Editing & Graphics', 'active' => false ),
                    array( 'icon' => 'fa-rocket',       'label' => 'Development & Deploy',     'active' => false ),
                );
                foreach ( $services as $svc ) : ?>
                <li style="display:flex;align-items:center;gap:14px;font-size:16px;color:<?php echo $svc['active'] ? 'var(--color-primary)' : 'var(--color-grey)'; ?>;font-weight:<?php echo $svc['active'] ? '500' : '400'; ?>">
                    <i class="fas <?php echo esc_attr( $svc['icon'] ); ?>" style="width:20px;text-align:center"></i>
                    <?php echo esc_html( $svc['label'] ); ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <!-- Description + CTA -->
            <div>
                <h3 style="margin-bottom:16px"><?php esc_html_e( 'Crafting Digital Experiences', 'branddevelopers' ); ?></h3>
                <p style="margin-bottom:var(--space-md)"><?php esc_html_e( 'We create intuitive interfaces and engaging user journeys — elegant, functional designs that users love.', 'branddevelopers' ); ?></p>
                <div style="display:flex;gap:16px;flex-wrap:wrap">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:transparent;color:#161616;border:2px solid #161616;transition:all 0.3s ease">
                        <?php esc_html_e( 'Development & Deploy', 'branddevelopers' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:var(--color-primary);color:#F9FAFB;border:2px solid var(--color-primary);transition:all 0.3s ease">
                        <?php esc_html_e( 'Explore Now', 'branddevelopers' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SELECTED WORKS
     ============================================================ -->
<section style="padding:var(--space-xl) 0">
    <div class="container">
        <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:var(--space-lg);flex-wrap:wrap;gap:var(--space-md)">
            <div>
                <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:var(--color-primary);display:block;margin-bottom:12px">My Selected Works</span>
                <h2>Latest works Define Purpose &amp; <span style="color:var(--color-primary)">Function</span></h2>
            </div>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:transparent;color:#161616;border:2px solid #161616">
                <?php esc_html_e( 'See all projects', 'branddevelopers' ); ?>
            </a>
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
                <?php if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'bd-portfolio' );
                else : ?>
                    <div style="width:100%;height:100%;background:#d8d8d8;min-height:200px"></div>
                <?php endif; ?>
                <div class="portfolio-item__overlay">
                    <?php if ( $pf_service ) : ?>
                        <span class="portfolio-item__tag"><?php echo esc_html( $pf_service ); ?></span>
                    <?php endif; ?>
                    <h5 class="portfolio-item__title"><?php the_title(); ?></h5>
                </div>
                <a href="<?php the_permalink(); ?>" class="portfolio-item__explore"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
            </div>
            <?php
                    $pf_idx++;
                endwhile;
                wp_reset_postdata();
            else :
                $pf_placeholders = array(
                    array( 'class' => 'portfolio-item--featured', 'label' => 'Postcard Work', 'tag' => 'Portfolio'    ),
                    array( 'class' => 'portfolio-item--tall',     'label' => 'Portfolio',      'tag' => 'Branding'    ),
                    array( 'class' => 'portfolio-item--small',    'label' => 'Campaign',       'tag' => 'Digital'     ),
                    array( 'class' => 'portfolio-item--small',    'label' => 'Web Design',     'tag' => 'Development' ),
                );
                foreach ( $pf_placeholders as $pf_ph ) : ?>
                <div class="portfolio-item <?php echo esc_attr( $pf_ph['class'] ); ?>">
                    <div style="width:100%;height:100%;background:#d8d8d8;min-height:200px"></div>
                    <div class="portfolio-item__overlay" style="opacity:1">
                        <span class="portfolio-item__tag"><?php echo esc_html( $pf_ph['tag'] ); ?></span>
                        <h5 class="portfolio-item__title"><?php echo esc_html( $pf_ph['label'] ); ?></h5>
                    </div>
                </div>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     ELEVATE CTA BANNER
     ============================================================ -->
<section style="padding:var(--space-xl) 0;background:#0d0d0d;text-align:center">
    <div class="container">
        <h2 style="color:#F9FAFB;margin-bottom:16px"><?php esc_html_e( 'Elevate Your Project Together!', 'branddevelopers' ); ?></h2>
        <p style="color:rgba(255,255,255,0.65);max-width:540px;margin:0 auto var(--space-md)">
            <?php esc_html_e( "Get a free 1:1 consultation to explore design solutions tailored to your product's goals and user experience.", 'branddevelopers' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-body);font-size:14px;font-weight:500;padding:12px 28px;border-radius:100px;background:var(--color-primary);color:#F9FAFB;border:2px solid var(--color-primary)">
            <?php esc_html_e( "Let's talk", 'branddevelopers' ); ?>
        </a>
    </div>
</section>

<!-- ============================================================
     TEAM
     ============================================================ -->
<section style="background:#0d0d0d;padding:var(--space-xl) 0">
    <div class="container">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-lg);flex-wrap:wrap;gap:var(--space-md)">
            <div>
                <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:rgba(255,255,255,0.5);display:block;margin-bottom:12px">Meet the Makers</span>
                <h2 style="color:#F9FAFB">Meet the Team Building the Future<span style="color:#4d79cc">*</span></h2>
            </div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md)">
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
            <div style="background:#1a1a1a;border:1px solid rgba(255,255,255,0.06);border-radius:24px;overflow:hidden">
                <div style="aspect-ratio:1;background:#2a2a2a;overflow:hidden">
                    <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'bd-team', array( 'style' => 'width:100%;height:100%;object-fit:cover' ) );
                    else : ?>
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;min-height:250px">
                            <i class="fas fa-user" style="font-size:48px;color:rgba(255,255,255,0.2)"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div style="padding:20px 24px">
                    <h5 style="color:#F9FAFB;margin-bottom:4px"><?php the_title(); ?></h5>
                    <?php if ( $tm_role ) : ?>
                    <p style="font-size:14px;color:rgba(255,255,255,0.5)"><?php echo esc_html( $tm_role ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                $tm_placeholders = array(
                    array( 'name' => 'Ryan Taffe',  'role' => 'Lead Creative Partner'  ),
                    array( 'name' => 'Kay Olumofe', 'role' => 'Lead Developer Founder' ),
                    array( 'name' => 'Rosabel',     'role' => 'Developer'               ),
                );
                foreach ( $tm_placeholders as $tm_ph ) : ?>
                <div style="background:#1a1a1a;border:1px solid rgba(255,255,255,0.06);border-radius:24px;overflow:hidden">
                    <div style="background:#2a2a2a;min-height:250px;display:flex;align-items:center;justify-content:center">
                        <i class="fas fa-user" style="font-size:48px;color:rgba(255,255,255,0.2)"></i>
                    </div>
                    <div style="padding:20px 24px">
                        <h5 style="color:#F9FAFB;margin-bottom:4px"><?php echo esc_html( $tm_ph['name'] ); ?></h5>
                        <p style="font-size:14px;color:rgba(255,255,255,0.5)"><?php echo esc_html( $tm_ph['role'] ); ?></p>
                    </div>
                </div>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     HOW WE WORK — INLINE (no bd_render_workflow dependency)
     ============================================================ -->
<section id="process" style="background:var(--color-primary);padding:var(--space-xl) 0">
    <div class="container">
        <div style="text-align:center;margin-bottom:var(--space-lg)">
            <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:rgba(255,255,255,0.6);display:block;margin-bottom:12px">How We Work</span>
            <h2 style="color:#F9FAFB">A Simple, Strategic Workflow<span style="color:#4d79cc">*</span></h2>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-md)">
            <?php
            $wf_steps = array(
                array( 'num' => '01', 'title' => 'Discover', 'sub' => "We immerse ourselves in your brand's story.",          'desc' => 'We begin by exploring your vision, goals, and audience. This helps us uncover the insights that shape everything we create.',      'link' => 'Start with Discovery'   ),
                array( 'num' => '02', 'title' => 'Create',   'sub' => 'We turn insight into intelligent, design-led solutions.', 'desc' => "Using what we've learned, we outline a focused plan — from messaging to moodboards — that sets the creative direction.",     'link' => 'Explore Our Designs'    ),
                array( 'num' => '03', 'title' => 'Launch',   'sub' => 'We deliver refined digital experiences built to perform.','desc' => "Here, we shape bold, thoughtful designs that reflect your brand's personality and bring it to life across every touchpoint.",'link' => 'View Strategy Samples'  ),
                array( 'num' => '04', 'title' => 'Grow',     'sub' => 'We refine, measure, and evolve with your goals.',       'desc' => 'We refine every detail, test thoroughly, and launch your project smoothly — then measure and iterate for ongoing growth.',     'link' => 'See Final Deliverables' ),
            );
            foreach ( $wf_steps as $wf_i => $wf_step ) :
                $wf_margin = ( $wf_i % 2 !== 0 ) ? 'margin-top:60px' : '';
            ?>
            <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:24px;padding:36px;position:relative;<?php echo esc_attr( $wf_margin ); ?>">
                <div style="position:absolute;top:-20px;right:24px;font-family:var(--font-heading);font-size:80px;font-weight:400;color:rgba(255,255,255,0.06);line-height:1;pointer-events:none">
                    <?php echo esc_html( $wf_step['num'] ); ?>
                </div>
                <div style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;border:2px solid rgba(255,255,255,0.3);border-radius:50%;font-size:14px;font-weight:500;color:#F9FAFB;margin-bottom:16px">
                    <?php echo esc_html( $wf_step['num'] ); ?>
                </div>
                <h4 style="color:#F9FAFB;margin-bottom:12px;font-size:20px;line-height:28px">
                    <?php echo esc_html( $wf_step['title'] ); ?> &mdash;
                    <span style="font-weight:300;opacity:0.7"><?php echo esc_html( $wf_step['sub'] ); ?></span>
                </h4>
                <p style="color:rgba(255,255,255,0.65);font-size:14px;line-height:22px;margin-bottom:16px">
                    <?php echo esc_html( $wf_step['desc'] ); ?>
                </p>
                <a href="#" style="font-size:14px;font-weight:500;color:rgba(255,255,255,0.9);display:inline-flex;align-items:center;gap:6px">
                    <?php echo esc_html( $wf_step['link'] ); ?> &rarr;
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section style="padding:var(--space-xl) 0;background:var(--color-bg)">
    <div class="container">
        <div style="text-align:center;margin-bottom:var(--space-lg)">
            <span style="font-family:var(--font-body);font-size:14px;letter-spacing:1.3px;text-transform:uppercase;color:var(--color-primary);display:block;margin-bottom:12px">Client Reflections</span>
            <h2>Trusted Words from Those We've Designed For</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md)">
            <?php
            $tq = new WP_Query( array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );

            if ( $tq->have_posts() ) :
                while ( $tq->have_posts() ) : $tq->the_post();
                    $tq_author  = get_post_meta( get_the_ID(), '_bd_author', true );
                    $tq_role    = get_post_meta( get_the_ID(), '_bd_role', true );
            ?>
            <div style="background:#fff;border:1px solid rgba(0,0,0,0.08);border-radius:24px;padding:32px">
                <p style="font-size:32px;color:var(--color-primary);line-height:1;margin-bottom:16px">&ldquo;</p>
                <p style="color:var(--color-grey);font-size:14px;line-height:22px;margin-bottom:16px"><?php echo wp_kses_post( get_the_content() ); ?></p>
                <strong style="display:block;font-size:14px;color:#161616"><?php echo esc_html( $tq_author ); ?></strong>
                <span style="font-size:12px;color:var(--color-grey)"><?php echo esc_html( $tq_role ); ?></span>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                $tq_fallback = array(
                    array( 'author' => 'John McCray',   'role' => 'Founder, Lumora Studio',       'text' => 'Exceptional design work that transformed our brand identity. The team truly understood our vision.' ),
                    array( 'author' => 'Priya Mehta',   'role' => 'UX Director, CloudMorph Labs', 'text' => 'Their SEO strategies helped us climb to the top of search results faster. Exceptional results, every time!' ),
                    array( 'author' => 'David Alby',    'role' => 'CTO, Nexspace India',          'text' => 'Outstanding development quality. Fast, accessible and beautifully crafted.' ),
                );
                foreach ( $tq_fallback as $tq_fb ) : ?>
                <div style="background:#fff;border:1px solid rgba(0,0,0,0.08);border-radius:24px;padding:32px">
                    <p style="font-size:32px;color:var(--color-primary);line-height:1;margin-bottom:16px">&ldquo;</p>
                    <p style="color:var(--color-grey);font-size:14px;line-height:22px;margin-bottom:16px"><?php echo esc_html( $tq_fb['text'] ); ?></p>
                    <strong style="display:block;font-size:14px;color:#161616"><?php echo esc_html( $tq_fb['author'] ); ?></strong>
                    <span style="font-size:12px;color:var(--color-grey)"><?php echo esc_html( $tq_fb['role'] ); ?></span>
                </div>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
