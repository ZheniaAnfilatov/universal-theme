<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header header-light">
  <div class="container">
    <div class="header-wrapper">
      <?php

      if( is_front_page() ){
        echo "Это главная страница";
      }
      else {
        if( has_custom_logo() ){
          echo '<div class="logo">' . get_custom_logo() . 
          '<a href="' . get_home_url() . '" class="logo-name">' . get_bloginfo( 'name' ) . '</a></div>'; 
        } else {
            echo '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span></div>';
        }
      }
 
        wp_nav_menu( [
          'theme_location'  => 'header_menu',
          'container'       => 'nav', 
          'container_class' => 'header-nav', 
          'menu_class'      => 'header-menu', 
          'echo'            => true,
        ] );
      ?>
      <?php echo get_search_form(); ?>
      <a href="#" class="header-menu-toggle">
      <span></span>
      <span></span>
      <span></span>
      </a>
    </div>
    <!-- header-wrapper -->
  </div>
  <!-- container -->
</header>