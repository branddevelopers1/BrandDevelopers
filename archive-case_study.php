<?php get_header(); ?>

<!-- HERO -->
<section class="page-hero case-studies-hero">
    <div class="page-hero__bg"></div>
    <div class="container">
        <div class="page-hero__content">
            <h1><?php _e( 'Cases Studies', 'branddevelopers' ); ?></h1>
        </div>
    </div>
</section>

<!-- INTRO TEXT -->
<section class="section case-studies-intro">
    <div class="container">
        <span class="small-head"><?php _e( 'What We Do', 'branddevelopers' ); ?></span>
        <p style="margin-top:16px;max-width:720px;font-size:18px;line-height:30px;color:var(--color-black)">
            <?php _e( 'We design and develop digital platforms that blend beauty with performance. Every site we build is responsive, accessible, and crafted to deliver a seamless user experience.', 'branddevelopers' ); ?>
        </p>
    </div>
</section>

<!-- FEATURED CASE STUDY (Full-width image + overlay) -->
<?php
$featured = bd_get_case_studies( 1, true );
if ( $featured->have_posts() ) :
    $featured->the_post();
    $service = get_post_meta( get_the_ID(), '_bd_service', true );
?>
<section style="position:relative;min-height:60vh;overflow:hidden;display:flex;align-items:flex-end">
    <?php if ( has_post_thumbnail() ) : ?>
        <div style="position:absolute;inset:0"><?php the_post_thumbnail( 'bd-case-study', ['style'=>'width:100%;height:100%;object-fit:cover'] ); ?></div>
    <?php else : ?>
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,#0d0d0d,#003399)"></div>
    <?php endif; ?>
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.85) 0%,transparent 60%)"></div>
    <div class="container" style="position:relative;z-index:2;padding-bottom:var(--space-xl)">
        <div style="max-width:600px;background:var(--color-primary);border-radius:var(--radius-xl);padding:36px">
            <span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.6);display:block;margin-bottom:12px"><?php echo esc_html($service); ?></span>
            <h3 style="color:white;margin-bottom:12px"><?php the_title(); ?></h3>
            <p style="color:rgba(255,255,255,0.7);font-size:var(--fs-small);line-height:22px;margin-bottom:20px"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn--outline"><?php _e('Explore','branddevelopers'); ?> →</a>
        </div>
    </div>
</section>
<?php wp_reset_postdata();
endif; ?>

<!-- CASE STUDY GRID -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="small-head"><?php _e( 'Case Studies', 'branddevelopers' ); ?></span>
            <h2><?php _e( "Explore Our Work: See how we've partnered with forward-thinking brands to create meaningful digital experiences.", 'branddevelopers' ); ?></h2>
        </div>

        <!-- Three rows of case study layouts matching the Figma mockup -->
        <?php
        $all_studies = bd_get_case_studies( 6 );
        if ( $all_studies->have_posts() ) :
        ?>

        <!-- Row 1: text + image side-by-side -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-md);margin-bottom:var(--space-md)">
            <?php
            $row1 = 0;
            while ( $all_studies->have_posts() && $row1 < 2 ) : $all_studies->the_post();
                $service = get_post_meta( get_the_ID(), '_bd_service', true );
                $blue = ($row1 === 0);
            ?>
            <div class="case-study-card <?php echo $blue ? 'case-study-card--blue' : ''; ?> fade-up">
                <div class="case-study-card__image">
                    <?php if(has_post_thumbnail()) the_post_thumbnail('bd-portfolio');
                    else: ?><div style="background:<?php echo $blue?'#003399':'#e0e0e0';?>;min-height:200px"></div><?php endif;?>
                </div>
                <div class="case-study-card__body">
                    <span class="case-study-card__tag"><?php echo esc_html($service); ?></span>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="case-study-card__link"><?php _e('Explore','branddevelopers'); ?> →</a>
                </div>
            </div>
            <?php $row1++; endwhile; ?>
        </div>

        <!-- Row 2: wide + narrow -->
        <div style="display:grid;grid-template-columns:2fr 1fr;gap:var(--space-md);margin-bottom:var(--space-md)">
            <?php
            $row2 = 0;
            while ( $all_studies->have_posts() && $row2 < 2 ) : $all_studies->the_post();
                $service = get_post_meta( get_the_ID(), '_bd_service', true );
            ?>
            <div class="case-study-card fade-up">
                <div class="case-study-card__image">
                    <?php if(has_post_thumbnail()) the_post_thumbnail('bd-portfolio');
                    else: ?><div style="background:#e0e0e0;min-height:200px"></div><?php endif;?>
                </div>
                <div class="case-study-card__body">
                    <span class="case-study-card__tag"><?php echo esc_html($service); ?></span>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="case-study-card__link"><?php _e('Explore','branddevelopers'); ?> →</a>
                </div>
            </div>
            <?php $row2++; endwhile; wp_reset_postdata(); ?>
        </div>

        <?php else :
            // Placeholder cards
            $phs = [
                ['label'=>'Logo Design','tag'=>'Brand Strategy & Creative','blue'=>false],
                ['label'=>'Mobile App','tag'=>'Web Design & Development','blue'=>true],
                ['label'=>'Campaign Magic','tag'=>'Digital Growth','blue'=>false],
            ];
            echo '<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md)">';
            foreach($phs as $p):?>
            <div class="case-study-card <?php echo $p['blue']?'case-study-card--blue':''; ?> fade-up">
                <div class="case-study-card__image"><div style="background:<?php echo $p['blue']?'#003399':'#e0e0e0';?>;min-height:200px"></div></div>
                <div class="case-study-card__body">
                    <span class="case-study-card__tag"><?php echo esc_html($p['tag']); ?></span>
                    <h4><?php echo esc_html($p['label']); ?></h4>
                    <p><?php _e('Explore Our Work: See how we\'ve partnered with forward-thinking brands.','branddevelopers'); ?></p>
                    <a href="#" class="case-study-card__link"><?php _e('Explore','branddevelopers'); ?> →</a>
                </div>
            </div>
            <?php endforeach;
            echo '</div>';
        endif; ?>

        <!-- Selected Works carousel placeholder -->
        <div style="margin-top:var(--space-xl)">
            <div class="portfolio-header">
                <div>
                    <span class="small-head"><?php _e('My Selected Works','branddevelopers'); ?></span>
                    <h2><?php _e('Latest works Define Purpose &amp;','branddevelopers'); ?> <span style="color:var(--color-primary)">Function</span></h2>
                </div>
                <a href="#" class="btn btn--outline-dark"><?php _e('See all projects','branddevelopers'); ?></a>
            </div>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-sm);margin-top:var(--space-md)">
                <?php for($i=0;$i<4;$i++): ?>
                <div style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:3/4;background:#e0e0e0;position:relative">
                    <?php if($i===1):?>
                    <div style="position:absolute;bottom:12px;left:50%;transform:translateX(-50%);background:var(--color-primary);color:white;padding:6px 16px;border-radius:100px;font-size:12px;font-weight:500;white-space:nowrap">Portfolio</div>
                    <?php endif;?>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
