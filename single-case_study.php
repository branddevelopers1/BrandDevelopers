<?php
/**
 * Single Case Study template
 */
get_header();

$client  = get_post_meta( get_the_ID(), '_bd_client',  true );
$service = get_post_meta( get_the_ID(), '_bd_service', true );
$year    = get_post_meta( get_the_ID(), '_bd_year',    true );
$url     = get_post_meta( get_the_ID(), '_bd_url',     true );
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="cs-hero">
    <div class="cs-hero__bg"></div>
    <div class="container">
        <div class="cs-hero__content">
            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="cs-hero__back">
                <i class="fas fa-arrow-left"></i> <?php esc_html_e( 'All Projects', 'branddevelopers' ); ?>
            </a>
            <?php if ( $service ) : ?>
            <span class="cs-hero__tag"><?php echo esc_html( $service ); ?></span>
            <?php endif; ?>
            <h1 class="cs-hero__title"><?php the_title(); ?></h1>
            <div class="cs-hero__meta">
                <?php if ( $client ) : ?>
                <span><i class="fas fa-building"></i> <?php echo esc_html( $client ); ?></span>
                <?php endif; ?>
                <?php if ( $year ) : ?>
                <span><i class="fas fa-calendar"></i> <?php echo esc_html( $year ); ?></span>
                <?php endif; ?>
                <?php if ( $url ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="cs-hero__live">
                    <i class="fas fa-external-link-alt"></i> <?php esc_html_e( 'Live Site', 'branddevelopers' ); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FEATURED IMAGE
     ============================================================ -->
<?php if ( has_post_thumbnail() ) : ?>
<div class="cs-cover">
    <div class="container">
        <?php the_post_thumbnail( 'bd-case-study', array( 'class' => 'cs-cover__img' ) ); ?>
    </div>
</div>
<?php endif; ?>

<!-- ============================================================
     BODY — content + sidebar
     ============================================================ -->
<section class="cs-body section">
    <div class="container">
        <div class="cs-body__grid">

            <!-- Main content -->
            <div class="cs-body__content">
                <?php the_content(); ?>
            </div>

            <!-- Sidebar -->
            <aside class="cs-sidebar">
                <div class="cs-sidebar__card">
                    <h5 class="cs-sidebar__heading"><?php esc_html_e( 'Project Details', 'branddevelopers' ); ?></h5>
                    <ul class="cs-sidebar__list">
                        <?php if ( $client ) : ?>
                        <li>
                            <span class="cs-sidebar__label"><?php esc_html_e( 'Client', 'branddevelopers' ); ?></span>
                            <span class="cs-sidebar__value"><?php echo esc_html( $client ); ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if ( $service ) : ?>
                        <li>
                            <span class="cs-sidebar__label"><?php esc_html_e( 'Service', 'branddevelopers' ); ?></span>
                            <span class="cs-sidebar__value"><?php echo esc_html( $service ); ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if ( $year ) : ?>
                        <li>
                            <span class="cs-sidebar__label"><?php esc_html_e( 'Year', 'branddevelopers' ); ?></span>
                            <span class="cs-sidebar__value"><?php echo esc_html( $year ); ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if ( $url ) : ?>
                        <li>
                            <span class="cs-sidebar__label"><?php esc_html_e( 'Live URL', 'branddevelopers' ); ?></span>
                            <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="cs-sidebar__value cs-sidebar__url">
                                <?php echo esc_html( preg_replace( '#^https?://#', '', rtrim( $url, '/' ) ) ); ?>
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php if ( $url ) : ?>
                    <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary" style="width:100%;justify-content:center;margin-top:var(--space-md)">
                        <?php esc_html_e( 'Visit Live Site', 'branddevelopers' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                    <?php endif; ?>
                </div>

                <!-- Share -->
                <div class="cs-sidebar__card cs-sidebar__share">
                    <h5 class="cs-sidebar__heading"><?php esc_html_e( 'Share', 'branddevelopers' ); ?></h5>
                    <div class="cs-share-btns">
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>"
                           target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>"
                           target="_blank" rel="noopener noreferrer" aria-label="Share on X">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>"
                           target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- ============================================================
     NEXT / PREV PROJECT NAV
     ============================================================ -->
<?php
$prev = get_previous_post();
$next = get_next_post();
if ( $prev || $next ) : ?>
<section class="cs-nav-section section--bg">
    <div class="container">
        <div class="cs-project-nav">
            <?php if ( $prev ) :
                $prev_thumb = get_the_post_thumbnail_url( $prev->ID, 'bd-portfolio' );
            ?>
            <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="cs-project-nav__item cs-project-nav__item--prev">
                <?php if ( $prev_thumb ) : ?>
                <div class="cs-project-nav__thumb" style="background-image:url('<?php echo esc_url( $prev_thumb ); ?>')"></div>
                <?php endif; ?>
                <div class="cs-project-nav__info">
                    <span class="cs-project-nav__label"><i class="fas fa-arrow-left"></i> <?php esc_html_e( 'Previous Project', 'branddevelopers' ); ?></span>
                    <strong><?php echo esc_html( get_the_title( $prev->ID ) ); ?></strong>
                </div>
            </a>
            <?php else : ?>
            <div></div>
            <?php endif; ?>

            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="cs-project-nav__all" aria-label="All projects">
                <i class="fas fa-th"></i>
            </a>

            <?php if ( $next ) :
                $next_thumb = get_the_post_thumbnail_url( $next->ID, 'bd-portfolio' );
            ?>
            <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="cs-project-nav__item cs-project-nav__item--next">
                <div class="cs-project-nav__info cs-project-nav__info--right">
                    <span class="cs-project-nav__label"><?php esc_html_e( 'Next Project', 'branddevelopers' ); ?> <i class="fas fa-arrow-right"></i></span>
                    <strong><?php echo esc_html( get_the_title( $next->ID ) ); ?></strong>
                </div>
                <?php if ( $next_thumb ) : ?>
                <div class="cs-project-nav__thumb" style="background-image:url('<?php echo esc_url( $next_thumb ); ?>')"></div>
                <?php endif; ?>
            </a>
            <?php else : ?>
            <div></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================================
     CTA
     ============================================================ -->
<section style="background:var(--color-primary);padding:var(--space-xl) 0;text-align:center">
    <div class="container">
        <span class="small-head" style="color:rgba(255,255,255,0.6);display:block;margin-bottom:16px"><?php esc_html_e( "Let's Work Together", 'branddevelopers' ); ?></span>
        <h2 style="color:#fff;margin-bottom:16px"><?php esc_html_e( 'Your project could be next.', 'branddevelopers' ); ?></h2>
        <p style="color:rgba(255,255,255,0.7);max-width:480px;margin:0 auto var(--space-md)"><?php esc_html_e( "Ready to build something great? Let's talk about your vision.", 'branddevelopers' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--outline" style="border-color:rgba(255,255,255,0.5)">
            <?php esc_html_e( 'Start a Project', 'branddevelopers' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
