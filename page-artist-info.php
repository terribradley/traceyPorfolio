
<?php
// Template Name: Artist Info
?>

<?php get_header(); ?>

<section class="page-title">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

  <?php endwhile; endif; ?>
</section>

<?php

  $args = array(
    'post_type' => 'artist_info',
  );
  $query = new WP_Query( $args );

?>


<section class="content-page">
  <div class="content-page-title">
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>-----<h1><?php the_title(); ?></h1>
  </div>
  <p><?php the_field('biography'); ?></p>





<?php get_footer(); ?>
</section>
