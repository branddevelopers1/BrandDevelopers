<?php
/**
 * Template Name: Case Studies Page
 *
 * Also auto-loads for pages with slug: case-studies
 * Standalone — no helper function dependencies.
 */
get_header(); ?>

<!-- ============================================================
     PAGE HERO
     ============================================================ -->
<section class="page-hero">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content" style="padding:120px 0 60px">
            <span class="small-head" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:16px"><?php esc_html_e( 'Our Work', 'branddevelopers' ); ?></span>
            <h1 style="color:#F9FAFB;font-size:72px;line-height:88px"><?php esc_html_e( 'Case Studies', 'branddevelopers' ); ?></h1>
        </div>
    </div>
</section>

<!-- ============================================================
     INTRO
     ============================================================ -->
<section class="section">
    <div class="container">
        <span class="small-head"><?php esc_html_e( 'What We Do', 'branddevelopers' ); ?></span>
        <p style="margin-top:16px;max-width:720px;font-size:18px;line-height:30px;color:var(--color-black)">
            <?php esc_html_e( 'We design and develop digital platforms that blend beauty with performance. Every site we build is responsive, accessible, and crafted to deliver a seamless user experience.', 'branddevelopers' ); ?>
        </p>
    </div>
</section>

<!-- ============================================================
     FEATURED CASE STUDY
     ============================================================ -->
<?php
$cs_feat_args = array(
    'post_type'      => 'case_study',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'meta_query'     => array(
        array(
            'key'   => '_bd_featured',
            'value' => '1',
        ),
    ),
);
$cs_feat = new WP_Query( $cs_feat_args );

if ( $cs_feat->have_posts() ) :
    $cs_feat->the_post();
    $cs_feat_service = get_post_meta( get_the_ID(), '_bd_service', true );
?>
<section style="position:relative;min-height:55vh;overflow:hidden;display:flex;align-items:flex-end">
    <?php if ( has_post_thumbnail() ) : ?>
        <div style="position:absolute;inset:0">
            <?php the_post_thumbnail( 'bd-case-study', array( 'style' => 'width:100%;height:100%;object-fit:cover' ) ); ?>
        </div>
    <?php else : ?>
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,#0d0d0d,#003399)"></div>
    <?php endif; ?>
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.85) 0%,transparent 60%)"></div>
    <div class="container" style="position:relative;z-index:2;padding-bottom:var(--space-xl)">
        <div style="max-width:560px;background:var(--color-primary);border-radius:var(--radius-xl);padding:36px">
            <?php if ( $cs_feat_service ) : ?>
            <span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.6);display:block;margin-bottom:12px">
                <?php echo esc_html( $cs_feat_service ); ?>
            </span>
            <?php endif; ?>
            <h3 style="color:#fff;margin-bottom:12px"><?php the_title(); ?></h3>
            <p style="color:rgba(255,255,255,0.7);font-size:14px;line-height:22px;margin-bottom:20px"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn--outline"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
        </div>
    </div>
</section>
<?php
    wp_reset_postdata();
endif;
?>

<!-- ============================================================
     CASE STUDIES GRID
     ============================================================ -->
<section class="section">
    <div class="container">

        <div class="section-header">
            <span class="small-head"><?php esc_html_e( 'Case Studies', 'branddevelopers' ); ?></span>
            <h2><?php esc_html_e( 'Explore Our Work', 'branddevelopers' ); ?></h2>
            <p style="margin-top:12px;max-width:600px">
                <?php esc_html_e( "See how we've partnered with forward-thinking brands to create meaningful digital experiences. Each project tells a story of collaboration, creativity, and measurable success.", 'branddevelopers' ); ?>
            </p>
        </div>

        <?php
        $cs_all_args = array(
            'post_type'      => 'case_study',
            'posts_per_page' => 9,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $cs_all = new WP_Query( $cs_all_args );

        if ( $cs_all->have_posts() ) :
            // Collect all posts first to avoid nested loop issues
            $cs_items = array();
            while ( $cs_all->have_posts() ) :
                $cs_all->the_post();
                $cs_items[] = array(
                    'id'      => get_the_ID(),
                    'title'   => get_the_title(),
                    'link'    => get_permalink(),
                    'excerpt' => get_the_excerpt(),
                    'thumb'   => has_post_thumbnail(),
                    'service' => get_post_meta( get_the_ID(), '_bd_service', true ),
                );
            endwhile;
            wp_reset_postdata();

            // Row 1 — 2 equal cards
            echo '<div class="cs-grid-row cs-grid-row--2col">';
            foreach ( $cs_items as $idx => $item ) :
                if ( $idx >= 2 ) break;
                $is_blue = ( $idx === 0 );
            ?>
            <div class="case-study-card <?php echo $is_blue ? 'case-study-card--blue' : ''; ?> fade-up">
                <div class="case-study-card__image">
                    <?php if ( $item['thumb'] ) :
                        echo get_the_post_thumbnail( $item['id'], 'bd-portfolio' );
                    else : ?>
                        <div style="background:<?php echo $is_blue ? '#002277' : '#e0e0e0'; ?>;min-height:220px"></div>
                    <?php endif; ?>
                </div>
                <div class="case-study-card__body">
                    <?php if ( $item['service'] ) : ?>
                    <span class="case-study-card__tag"><?php echo esc_html( $item['service'] ); ?></span>
                    <?php endif; ?>
                    <h4><?php echo esc_html( $item['title'] ); ?></h4>
                    <p><?php echo esc_html( $item['excerpt'] ); ?></p>
                    <a href="<?php echo esc_url( $item['link'] ); ?>" class="case-study-card__link"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
                </div>
            </div>
            <?php endforeach;
            echo '</div>';

            // Row 2 — remaining cards in 3-col grid
            if ( count( $cs_items ) > 2 ) :
                echo '<div class="cs-grid-row cs-grid-row--3col" style="margin-top:var(--space-md)">';
                foreach ( $cs_items as $idx => $item ) :
                    if ( $idx < 2 ) continue;
                ?>
                <div class="case-study-card fade-up">
                    <div class="case-study-card__image">
                        <?php if ( $item['thumb'] ) :
                            echo get_the_post_thumbnail( $item['id'], 'bd-portfolio' );
                        else : ?>
                            <div style="background:#e0e0e0;min-height:200px"></div>
                        <?php endif; ?>
                    </div>
                    <div class="case-study-card__body">
                        <?php if ( $item['service'] ) : ?>
                        <span class="case-study-card__tag"><?php echo esc_html( $item['service'] ); ?></span>
                        <?php endif; ?>
                        <h4><?php echo esc_html( $item['title'] ); ?></h4>
                        <p><?php echo esc_html( $item['excerpt'] ); ?></p>
                        <a href="<?php echo esc_url( $item['link'] ); ?>" class="case-study-card__link"><?php esc_html_e( 'Explore', 'branddevelopers' ); ?> &rarr;</a>
                    </div>
                </div>
                <?php endforeach;
                echo '</div>';
            endif;

        else :
            // Placeholder cards — no posts added yet
            $cs_placeholders = array(
                array( 'label' => 'Logo Design',    'tag' => 'Brand Strategy & Creative', 'blue' => false ),
                array( 'label' => 'Mobile App',     'tag' => 'Web Design & Development',  'blue' => true  ),
                array( 'label' => 'Campaign Magic', 'tag' => 'Digital Growth',             'blue' => false ),
            );
            echo '<div class="cs-grid-row cs-grid-row--3col">';
            foreach ( $cs_placeholders as $cs_ph ) :
            ?>
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
            <?php endforeach;
            echo '</div>';
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
