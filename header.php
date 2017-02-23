<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width-device-width">
    <title><?php wp_title(); ?></title>
    <?php wp_head();  ?>
  </head>
  <body>
    <header>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <nav>
        <ul>
          <li>Work</li>
          <li>About</li>
          <li>Contact</li>
        </ul>
      </nav>
    </header>
