    

  <div class="row" id="prefoot">
 
</div>
  <footer class="foot">
    <div class="topfoot row">
        <div class="col-6">
         <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/favicon.png" alt="Brand Developers"></a>
        </div>
        <div class="col-6">
        <?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('ml_footer_widget'); } ?>
        </div>
    </div>
    <div class="footcol">
      <div class="col"><?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('footer_widget1'); } ?></div>
      <div class="col"><?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('footer_widget2'); } ?></div>
      <div class="col"><?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('footer_widget3'); } ?></div>
      <div class="col"><?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('footer_widget4'); } ?></div>
      <div class="col"><?php if ( function_exists('dynamic_sidebar')) { dynamic_sidebar('footer_widget5'); } ?></div>
    </div>
    <div class="footmobile">
   
        <?php wp_nav_menu( array( 'theme_location' => 'bd-menu-main', 'menu_class' => 'bdmenu',));?>
    </div>
<div class="bottomfoot">
   <div class="socials"><a href="https://facebook.com/branddevelopers.ca"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="Facebook"></a><a href="https://www.linkedin.com/company/branddevelopers"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="LinkedIn"></a><a href="https://www.youtube.com/channel/UC2SI07Ugv0Qki4cIbHVsl1w"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" alt="YouTube"></a></div>
   <div class="pp">
   
</div>
<div class="copyright">
   <p><?php _e( '© Brand Developers 2026. All rights reserved', 'your-text-domain' ); ?></p>
</div>
</div>
  
</footer>

<?php wp_footer();?>
</body>
</html>