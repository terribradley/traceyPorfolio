
<!-- Template Name: Artist Info-->

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="banner">
  <h1> <?php the_title(); ?> </h1>
</section>
<section class="content">
  <div class="content-title">
    <h2>Tracy Cockrell</h2>  <h2> <?php the_title(); ?> </h2>
  </div>
  <hr>
  <div class="content-body">
    <p> <?php the_content(); ?> </p>
  </div>
</section>


<?php endwhile; else : ?>

<?php endif; ?>


<?php get_footer(); ?>
