<?php get_header(); ?>

<!-- HERO -->
<section class="page-hero case-studies-hero">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( 'Our Work', 'branddevelopers' ); ?></span>
            <h1 style="color:#F9FAFB;font-size:72px;line-height:88px"><?php esc_html_e( 'Case Studies', 'branddevelopers' ); ?></h1>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="section">
    <div class="container">
        <span class="small-head"><?php esc_html_e( 'What We Do', 'branddevelopers' ); ?></span>
        <p style="margin-top:16px;max-width:720px;font-size:18px;line-height:30px;color:var(--color-black)">
            <?php esc_html_e( 'We design and develop digital platforms that blend beauty with performance. Every site we build is responsive, accessible, and crafted to deliver a seamless user experience.', 'branddevelopers' ); ?>
        </p>
    </div>
</section>

<!-- FEATURED CASE STUDY -->
<?php
$cs_featured_args = array(
    'post_type'      => 'case_study',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'meta_query'     => array( array( 'key' => '_bd_featured', 'value' => '1' ) ),
);
$cs_featured = new WP_Query( $cs_featured_args );

if ( $cs_featured->have_posts() ) :
    $cs_featured->the_post();
    $cs_feat_service = get_post_meta( get_the_ID(), '_bd_service', true );
?>
<section style="position:relative;min-height:60vh;overflow:hidden;display:flex;align-items:flex-end">
    <?php if ( has_post_thumbnail() ) : ?>
        <div style="position:absolute;inset:0"><?php the_post_thumbnail( 'bd-case-study', array( 'style' => 'width:100%;height:100%;object-fit:cover' ) ); ?></div>
    <?php else : ?>
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,#0d0d0d,#003399)"></div>
    <?php endif; ?>
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.85) 0%,transparent 60%)"></div>
    <div class="container" style="position:relative;z-index:2;padding-bottom:var(--space-xl)">
        <div style="max-width:600px;background:var(--color-primary);border-radius:var(--radius-xl);padding:36px">
            <?php if ( $cs_feat_service ) : ?>
            <span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.6);display:block;margin-bottom:12px"><?php echo esc_html( $cs_feat_service ); ?></span>
            <?php endif; ?>
            <h3 style="color:white;margin-bottom:12px"><?php the_title(); ?></h3>
            <p style="color:rgba(255,255,255,0.7);font-size:14px;line-height:22px;margin-bottom:20px"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn--outline"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
        </div>
    </div>
</section>
<?php
    wp_reset_postdata();
endif;
?>

<!-- CASE STUDY GRID -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="small-head"><?php esc_html_e( 'Case Studies', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( 'Explore Our Work', 'branddevelopers' ); ?></h2>
            <p style="margin-top:12px;max-width:600px"><?php esc_html_e( "See how we've partnered with forward-thinking brands to create meaningful digital experiences. Each project tells a story of collaboration, creativity, and measurable success.", 'branddevelopers' ); ?></p>
        </div>

        <?php
        $cs_all_args = array(
            'post_type'      => 'case_study',
            'posts_per_page' => 6,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $cs_all = new WP_Query( $cs_all_args );

        if ( $cs_all->have_posts() ) :
            $cs_cards = array();
            while ( $cs_all->have_posts() ) : $cs_all->the_post();
                $cs_cards[] = array(
                    'id'      => get_the_ID(),
                    'title'   => get_the_title(),
                    'link'    => get_permalink(),
                    'excerpt' => get_the_excerpt(),
                    'thumb'   => has_post_thumbnail(),
                    'service' => get_post_meta( get_the_ID(), '_bd_service', true ),
                );
            endwhile;
            wp_reset_postdata();
        ?>

        <!-- Row 1: 2 equal cards -->
        <div class="cs-grid-row cs-grid-row--2col">
            <?php foreach ( $cs_cards as $cs_idx => $cs_card ) :
                if ( $cs_idx >= 2 ) break;
                $cs_is_blue = ( $cs_idx === 0 );
            ?>
            <div class="case-study-card <?php echo $cs_is_blue ? 'case-study-card--blue' : ''; ?> fade-up">
                <div class="case-study-card__image">
                    <?php if ( $cs_card['thumb'] ) :
                        echo get_the_post_thumbnail( $cs_card['id'], 'bd-portfolio' );
                    else : ?>
                        <div style="background:<?php echo $cs_is_blue ? '#002277' : '#e0e0e0'; ?>;min-height:200px"></div>
                    <?php endif; ?>
                </div>
                <div class="case-study-card__body">
                    <?php if ( $cs_card['service'] ) : ?>
                    <span class="case-study-card__tag"><?php echo esc_html( $cs_card['service'] ); ?></span>
                    <?php endif; ?>
                    <h4><?php echo esc_html( $cs_card['title'] ); ?></h4>
                    <p><?php echo esc_html( $cs_card['excerpt'] ); ?></p>
                    <a href="<?php echo esc_url( $cs_card['link'] ); ?>" class="case-study-card__link"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Row 2: remaining cards in 3-col grid -->
        <?php if ( count( $cs_cards ) > 2 ) : ?>
        <div class="cs-grid-row cs-grid-row--3col" style="margin-top:var(--space-md)">
            <?php foreach ( $cs_cards as $cs_idx => $cs_card ) :
                if ( $cs_idx < 2 ) continue;
            ?>
            <div class="case-study-card fade-up">
                <div class="case-study-card__image">
                    <?php if ( $cs_card['thumb'] ) :
                        echo get_the_post_thumbnail( $cs_card['id'], 'bd-portfolio' );
                    else : ?>
                        <div style="background:#e0e0e0;min-height:200px"></div>
                    <?php endif; ?>
                </div>
                <div class="case-study-card__body">
                    <?php if ( $cs_card['service'] ) : ?>
                    <span class="case-study-card__tag"><?php echo esc_html( $cs_card['service'] ); ?></span>
                    <?php endif; ?>
                    <h4><?php echo esc_html( $cs_card['title'] ); ?></h4>
                    <p><?php echo esc_html( $cs_card['excerpt'] ); ?></p>
                    <a href="<?php echo esc_url( $cs_card['link'] ); ?>" class="case-study-card__link"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php else :
            // Placeholder cards — no posts yet
            $cs_placeholders = array(
                array( 'label' => 'Logo Design',    'tag' => 'Brand Strategy & Creative', 'blue' => false ),
                array( 'label' => 'Mobile App',     'tag' => 'Web Design & Development',  'blue' => true  ),
                array( 'label' => 'Campaign Magic', 'tag' => 'Digital Growth',             'blue' => false ),
            );
        ?>
        <div class="cs-grid-row cs-grid-row--3col">
            <?php foreach ( $cs_placeholders as $cs_ph ) : ?>
            <div class="case-study-card <?php echo $cs_ph['blue'] ? 'case-study-card--blue' : ''; ?> fade-up">
                <div class="case-study-card__image">
                    <div style="background:<?php echo $cs_ph['blue'] ? '#003399' : '#e0e0e0'; ?>;min-height:200px"></div>
                </div>
                <div class="case-study-card__body">
                    <span class="case-study-card__tag"><?php echo esc_html( $cs_ph['tag'] ); ?></span>
                    <h4><?php echo esc_html( $cs_ph['label'] ); ?></h4>
                    <p><?php esc_html_e( "See how we've partnered with forward-thinking brands to create meaningful digital experiences.", 'branddevelopers' ); ?></p>
                    <a href="#" class="case-study-card__link"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
