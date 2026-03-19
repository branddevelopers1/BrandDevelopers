<?php get_header(); ?>

<main style="padding-top:100px;min-height:60vh">
    <div class="container section">
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
            <article><?php the_content(); ?></article>
        <?php endwhile;
        else : ?>
            <p><?php _e( 'No content found.', 'branddevelopers' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
