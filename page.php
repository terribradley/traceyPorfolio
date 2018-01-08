<?php get_header(); ?>

<section class="page-title">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1> <?php the_title(); ?> </h1>

</section>

<section class="content-page">
  <div class="content-page-title">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>-----<h1><?php the_title(); ?></h1>
  </div>
  <hr>
  <div class="content-body">
    <p> <?php the_content(); ?> </p>
  </div>
</section>


<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
