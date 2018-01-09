<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width-device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();  ?>
  </head>
  <body>
    <header>
      <nav>
        <a href="<?php bloginfo('url'); ?>">
          <img src='wp-content/themes/tracey-portfolio/img/home_icon2.png' alt="home icon">
        </a>
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' =>'primary-menu',
            'menu_class' => 'top-nav'
          );
          wp_nav_menu($defaults);
          ?>
      </nav>
    </header>
