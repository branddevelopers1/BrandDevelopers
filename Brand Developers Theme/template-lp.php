<?php

/*
Template Name: Landing Page Template


*/

?>

<?php get_header('lp');?>

<div class="section">
<div class="container-fluid bdy">

<?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thembnail">

<?php endif;?>


<?php get_template_part('components/section','content');?>

</div>
</div>

<?php get_footer();?>