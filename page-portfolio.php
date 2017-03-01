<?php
// Template Name: Portfolio Page
?>

<?php get_header(); ?>
<section class="page-title">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile; endif; ?>



</section>

<?php

  $args = array(
    'post_type' => 'portfolio',
  );
  $query = new WP_Query( $args );

?>


<section class="content-page">
  <div class="content-page-title">
      <h1><?php the_author()?></h1><h1><?php the_title(); ?></h1>

  </div>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>


<?php get_footer(); ?>
