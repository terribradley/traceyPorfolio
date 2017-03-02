<?php get_header();  ?>

<section class="portfolio-piece">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="page-title">
      <h1><?php the_title(); ?></h1>
    </section>



<section class="content-page">
  <div class="content-page-title">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>-----<h1><a href="<?php bloginfo('url'); ?>/works">Works</a></h1>
  </div>
  <div class="two-columns">
    <!-- Primary Column -->
    <div class="primary">
      <div class="gallery">
        <?php the_field('images'); ?>
      </div>
      <div class="audio">
        <h1>Listen</h1>
          <?php the_field('sound'); ?>

      </div>
      <div class="video">
        <h1>View</h1>
        <?php the_field('video'); ?>

      </div>
    </div>



    <!-- Secondary Column -->
    <div class="secondary">
      <h2><?php the_title(); ?></h2>
      <p><?php the_field('description'); ?></p>

      <p>
        <?php previous_post_link(); ?><?php next_post_link(); ?>
      </p>

    </div>
  <?php endwhile; endif; ?>

  </div>

  <?php get_footer(); ?>
</section>


</section>
