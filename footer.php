    

  <div class="row" id="prefoot">
  <div id="hubspotform">
  <?php
    $current_lang = apply_filters( 'wpml_current_language', NULL );
    if ( $current_lang == 'fr' ) {
        dynamic_sidebar('hubspot_footer_widget_fr'); 
    } else {
        dynamic_sidebar('hubspot_footer_widget'); 
    }
?>
  </div>
  </div>
  <footer class="foot">
    <div class="topfoot row">
        <div class="col-6">
         <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/favicon.svg" alt="E Block Inc."></a>
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
   <div class="socials"><a href="https://facebook.com/eblock.inc"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="Facebook"></a><a href="https://www.linkedin.com/company/eblock-inc."><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="LinkedIn"></a><a href="https://www.youtube.com/channel/UC2SI07Ugv0Qki4cIbHVsl1w"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" alt="YouTube"></a></div>
   <div class="pp">
   <a href="<?php echo esc_url( get_permalink( icl_object_id( get_page_by_path( 'policies' )->ID, 'page', true ) ) ); ?>">
      <?php _e( 'Our Policies', 'your-text-domain' ); ?>
   </a>
   <a href="<?php echo esc_url( get_permalink( icl_object_id( get_page_by_path( 'privacy-policy' )->ID, 'page', true ) ) ); ?>">
      <?php _e( 'Privacy Policy', 'your-text-domain' ); ?>
   </a>
   <a href="<?php echo esc_url( get_permalink( icl_object_id( get_page_by_path( 'accessibility-policy' )->ID, 'page', true ) ) ); ?>">
      <?php _e( 'Accessibility Policy', 'your-text-domain' ); ?>
   </a>
</div>
<div class="copyright">
   <p><?php _e( '© EBlock 2025. All rights reserved', 'your-text-domain' ); ?></p>
</div>
</div>
  
</footer>

<?php wp_footer();?>
</body>
</html>