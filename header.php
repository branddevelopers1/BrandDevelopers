<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Developers | We Build Brands That Work. </title>


    
    <?php wp_head();?>
</head>
<body>

<header> 
<nav class="navbar navbar-expand-xxl navbar-light bg-light fixed-top">
  <div class="container-fluid" id="ebheader">
    <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/EBlock-Logo-BlackFont-NoTagline.png" alt="E Block Inc."></a>
    <ul class="desktopmenu navbar-nav justify-content-lg-center flex-grow-*"><?php wp_nav_menu( array( 'theme_location' => 'bd-menu-main', 'menu_class' => 'bdmenu',));?></ul>


    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
      <span class="navbar-toggler-icon"></span></button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <div class="offcanvas-header">
        <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/EBlock-Logo-BlackFont-NoTagline.png" alt="E Block Inc."></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      
    <div class="offcanvas-body">
      <hr class="seperate">
        <ul class="mobilemenu navbar-nav justify-content-lg-center flex-grow-1"><?php wp_nav_menu( array( 'theme_location' => 'bd-menu-main', 'menu_class' => 'bdmenu',));?></ul>
        <hr class="seperate">
        <?php
$lang = apply_filters( 'wpml_current_language', NULL );
?>
     <div class="mobilebtns">
     <a href="https://app.eblock.com/auth/login">
        <button class="btn btn-outline-success" type="button">
            <?php echo ($lang == 'fr') ? 'Connexion' : 'Login'; ?>
        </button>
    </a>
    <a href="https://app.eblock.com/register?s=1">
        <button class="btn btn-success" type="button">
            <?php echo ($lang == 'fr') ? "S’enregistrer" : 'Register'; ?>
        </button>
    </a> 
  </div>
    </div>
  </div>
  
    <div class="menubtns">
    <a href="https://app.eblock.com/auth/login">
        <button class="btn btn-outline-success" type="button">
            <?php echo ($lang == 'fr') ? 'Connexion' : 'Login'; ?>
        </button>
    </a>
    <a href="https://app.eblock.com/register?s=1">
        <button class="btn btn-success" type="button">
            <?php echo ($lang == 'fr') ? "S’enregistrer" : 'Register'; ?>
        </button>
    </a>
   </div>
  </div>
</nav>
</header>

