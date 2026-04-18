<?php
/**
 * Template Name: Services Page
 *
 * Also auto-loads for pages with slug: services
 */
get_header(); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="min-height:55vh">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( 'What We Offer', 'branddevelopers' ); ?></span>
            <h1><?php esc_html_e( 'Services', 'branddevelopers' ); ?></h1>
        </div>
    </div>
</section>

<!-- CORE SERVICES 4-UP -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="small-head"><?php esc_html_e( 'Core Services', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( 'Our', 'branddevelopers' ); ?> <span style="color:var(--color-primary)">Services</span><span style="color:#bbb">*</span></h2>
            <p style="max-width:540px;margin-top:12px"><?php esc_html_e( 'We combine creativity and strategy to build brands and digital experiences that stand out and perform.', 'branddevelopers' ); ?></p>
        </div>
        <div class="svc-grid-4col">
            <?php
            $core_services = array(
                array( 'icon' => 'fa-chess',      'title' => 'Product Strategy', 'desc' => 'Strategic planning to validate and launch product ideas fast.' ),
                array( 'icon' => 'fa-pen-nib',    'title' => 'UI/UX Design',     'desc' => 'User-first designs to boost conversion and delight users.' ),
                array( 'icon' => 'fa-mobile-alt', 'title' => 'App Development',  'desc' => 'Scalable apps built using modern tech stacks.' ),
                array( 'icon' => 'fa-cloud',      'title' => 'Cloud & DevOps',   'desc' => 'From code to cloud — we ensure smooth delivery every time.' ),
            );
            foreach ( $core_services as $srv ) : ?>
            <div class="fade-up" style="background:var(--color-bg);border-radius:var(--radius-lg);padding:32px 24px">
                <div style="width:52px;height:52px;background:rgba(0,51,153,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:16px;color:var(--color-primary);font-size:22px">
                    <i class="fas <?php echo esc_attr( $srv['icon'] ); ?>"></i>
                </div>
                <h5 style="margin-bottom:8px;font-size:18px"><?php echo esc_html( $srv['title'] ); ?></h5>
                <p style="font-size:14px;line-height:22px;color:var(--color-grey)"><?php echo esc_html( $srv['desc'] ); ?></p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:500;color:var(--color-primary);margin-top:16px">
                    <?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- WEB DESIGN & DEVELOPMENT -->
<section class="section section--bg">
    <div class="container">
        <div class="svc-grid-2col">
            <div style="border-radius:var(--radius-xl);overflow:hidden;aspect-ratio:4/3;min-height:300px"><img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&q=80&fit=crop" alt="Web Design" style="width:100%;height:100%;object-fit:cover"></div>
            <div>
                <span class="small-head"><?php esc_html_e( 'What We Do', 'branddevelopers' ); ?></span>
                <h2 style="margin:16px 0 20px"><?php esc_html_e( 'Web Design & Development', 'branddevelopers' ); ?></h2>
                <p style="margin-bottom:16px"><?php esc_html_e( 'We design and develop digital platforms that blend beauty with performance. Every site we build is responsive, accessible, and crafted to deliver a seamless user experience.', 'branddevelopers' ); ?></p>
                <ul style="display:flex;flex-direction:column;gap:10px;margin-bottom:var(--space-md)">
                    <?php
                    $web_list = array( 'UI/UX & Product Design', 'Website & Landing Page', 'Logo & Brand Identity', 'Video Editing & Graphics', 'Development & Deploy' );
                    foreach ( $web_list as $item ) : ?>
                    <li style="display:flex;align-items:center;gap:10px;font-size:14px;color:var(--color-grey)">
                        <i class="fas fa-check" style="color:var(--color-primary);font-size:12px"></i>
                        <?php echo esc_html( $item ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div style="display:flex;gap:16px;flex-wrap:wrap">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Explore Now', 'branddevelopers' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--outline-dark"><?php esc_html_e( 'Get a Free Audit', 'branddevelopers' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BRAND STRATEGY & DIGITAL GROWTH -->
<section class="section">
    <div class="container">
        <div class="svc-grid-2col">
            <div>
                <span class="small-head"><?php esc_html_e( 'Digital Growth', 'branddevelopers' ); ?></span>
                <h2 style="margin:16px 0 20px"><?php esc_html_e( 'Brand Strategy & Digital Growth', 'branddevelopers' ); ?></h2>
                <p style="margin-bottom:16px"><?php esc_html_e( 'From SEO to paid media and social strategy, we help your brand grow through creative campaigns that convert. Our goal is simple: reach the right audience with the right message.', 'branddevelopers' ); ?></p>
                <p style="margin-bottom:var(--space-md)"><?php esc_html_e( 'We create intuitive interfaces and engaging user journeys — elegant, functional designs that users love, built on a foundation of solid strategy.', 'branddevelopers' ); ?></p>
                <div style="display:flex;gap:16px;flex-wrap:wrap">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?></a>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--outline-dark"><?php esc_html_e( 'See Our Work', 'branddevelopers' ); ?></a>
                </div>
            </div>
            <div style="border-radius:var(--radius-xl);overflow:hidden;aspect-ratio:4/3;min-height:300px"><img src="https://images.unsplash.com/photo-1553028826-f4804a6dba3b?w=800&q=80&fit=crop" alt="Brand Strategy" style="width:100%;height:100%;object-fit:cover"></div>
        </div>
    </div>
</section>

<!-- DARK FEATURE SECTION -->
<section class="section section--dark">
    <div class="container">
        <div class="svc-grid-2col">
            <div>
                <span class="small-head" style="color:rgba(255,255,255,0.5)"><?php esc_html_e( 'Our Approach', 'branddevelopers' ); ?></span>
                <h2 class="text-white" style="margin:16px 0 20px"><?php esc_html_e( 'Crafting Digital Experiences', 'branddevelopers' ); ?></h2>
                <p style="color:rgba(255,255,255,0.65);margin-bottom:var(--space-md)"><?php esc_html_e( 'We create intuitive interfaces and engaging user journeys — elegant, functional designs users love. Every pixel is intentional, every interaction considered.', 'branddevelopers' ); ?></p>
                <?php
                $approach_list = array(
                    array( 'icon' => 'fa-layer-group', 'text' => 'UI/UX & Product Design',   'active' => false ),
                    array( 'icon' => 'fa-globe',        'text' => 'Website & Landing Page',   'active' => false ),
                    array( 'icon' => 'fa-pen-nib',      'text' => 'Logo & Brand Identity',    'active' => true  ),
                    array( 'icon' => 'fa-film',         'text' => 'Video Editing & Graphics', 'active' => false ),
                    array( 'icon' => 'fa-rocket',       'text' => 'Development & Deploy',     'active' => false ),
                );
                ?>
                <ul style="display:flex;flex-direction:column;gap:12px;margin-bottom:var(--space-md)">
                    <?php foreach ( $approach_list as $al ) : ?>
                    <li style="display:flex;align-items:center;gap:12px;font-size:14px;color:<?php echo $al['active'] ? 'var(--color-primary-light)' : 'rgba(255,255,255,0.5)'; ?>;font-weight:<?php echo $al['active'] ? '500' : '400'; ?>">
                        <i class="fas <?php echo esc_attr( $al['icon'] ); ?>" style="width:18px;text-align:center"></i>
                        <?php echo esc_html( $al['text'] ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Explore Now', 'branddevelopers' ); ?></a>
            </div>
            <div style="background:var(--color-dark-card);border-radius:var(--radius-xl);padding:var(--space-lg);border:1px solid rgba(255,255,255,0.06)">
                <p style="font-size:12px;color:rgba(255,255,255,0.35);margin-bottom:16px;letter-spacing:1px;text-transform:uppercase">&mdash; <?php esc_html_e( 'Client Brief', 'branddevelopers' ); ?></p>
                <h4 class="text-white" style="font-size:18px;line-height:28px;margin-bottom:16px;font-style:italic">&ldquo;<?php esc_html_e( 'We need a brand identity that feels premium yet approachable — digital-first but timeless.', 'branddevelopers' ); ?>&rdquo;</h4>
                <div style="height:1px;background:rgba(255,255,255,0.08);margin:20px 0"></div>
                <p style="font-size:12px;color:rgba(255,255,255,0.35);margin-bottom:16px;letter-spacing:1px;text-transform:uppercase">&mdash; <?php esc_html_e( 'Our Response', 'branddevelopers' ); ?></p>
                <p style="font-size:14px;color:rgba(255,255,255,0.65);line-height:22px"><?php esc_html_e( 'We immerse ourselves in your brand story, craft a visual system rooted in strategy, and deliver assets that perform across every channel.', 'branddevelopers' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDIES PREVIEW -->
<section class="section section--bg">
    <div class="container">
        <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:var(--space-lg);flex-wrap:wrap;gap:var(--space-md)">
            <div>
                <span class="small-head"><?php esc_html_e( 'Case Studies', 'branddevelopers' ); ?></span>
                <h2 style="margin-top:8px"><?php esc_html_e( 'Explore Our Work', 'branddevelopers' ); ?></h2>
                <p style="max-width:480px;margin-top:12px"><?php esc_html_e( "See how we've partnered with forward-thinking brands to create meaningful digital experiences.", 'branddevelopers' ); ?></p>
            </div>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn--outline-dark"><?php esc_html_e( 'See all projects', 'branddevelopers' ); ?></a>
        </div>

        <div class="portfolio-grid">
            <?php
            $cs_query = new WP_Query( array(
                'post_type'      => 'case_study',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );
            $cs_positions = array( 'portfolio-item--featured', 'portfolio-item--tall', 'portfolio-item--small' );
            $cs_idx = 0;

            if ( $cs_query->have_posts() ) :
                while ( $cs_query->have_posts() ) : $cs_query->the_post();
                    $cs_service = get_post_meta( get_the_ID(), '_bd_service', true );
                    $cs_pos = isset( $cs_positions[ $cs_idx ] ) ? $cs_positions[ $cs_idx ] : 'portfolio-item--small';
            ?>
            <div class="portfolio-item <?php echo esc_attr( $cs_pos ); ?> fade-up">
                <?php if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'bd-portfolio' );
                else : ?>
                    <div style="width:100%;height:100%;min-height:200px"><img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=800&q=80&fit=crop" alt="Project" style="width:100%;height:100%;object-fit:cover"></div>
                <?php endif; ?>
                <div class="portfolio-item__overlay">
                    <?php if ( $cs_service ) : ?>
                        <span class="portfolio-item__tag"><?php echo esc_html( $cs_service ); ?></span>
                    <?php endif; ?>
                    <h5 class="portfolio-item__title"><?php the_title(); ?></h5>
                </div>
                <a href="<?php the_permalink(); ?>" class="portfolio-item__explore"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
            </div>
            <?php
                    $cs_idx++;
                endwhile;
                wp_reset_postdata();
            else :
                $cs_placeholders = array(
                    array( 'class' => 'portfolio-item--featured', 'label' => 'Logo Design',    'tag' => 'Brand Strategy & Creative' ),
                    array( 'class' => 'portfolio-item--tall',     'label' => 'Mobile App',     'tag' => 'Web Design & Development'  ),
                    array( 'class' => 'portfolio-item--small',    'label' => 'Campaign Magic', 'tag' => 'Digital Growth'            ),
                );
                foreach ( $cs_placeholders as $cs_ph ) : ?>
                <div class="portfolio-item <?php echo esc_attr( $cs_ph['class'] ); ?>">
                    <div style="width:100%;height:100%;min-height:200px"><img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=800&q=80&fit=crop" alt="Project" style="width:100%;height:100%;object-fit:cover"></div>
                    <div class="portfolio-item__overlay" style="opacity:1">
                        <span class="portfolio-item__tag"><?php echo esc_html( $cs_ph['tag'] ); ?></span>
                        <h5 class="portfolio-item__title"><?php echo esc_html( $cs_ph['label'] ); ?></h5>
                    </div>
                </div>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
