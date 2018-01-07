
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

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="biography-artist-info">
      <img src="<?php the_field('picture'); ?>" alt="">
      <p><?php the_field('biography'); ?></p>
    </div>
    <div class="cv-artist-info">
      <p><?php the_field('curriculum_vitae')?></p>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


<?php get_footer(); ?>
</section>
