<?php get_header();  ?>

<section>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section>
      <h1><?php the_field('show_title'); ?></p></h1>
    </section>

  <!-- Primary Column -->
    <div class="primary">
      <?php the_field('images'); ?>
    </div>



	  <!-- Secondary Column -->
		<div class="secondary">
      <h1><?php the_title(); ?></h1>
      <p><?php the_field('description'); ?></p>


			<hr>

			<p>
				<?php previous_post_link(); ?> -
				<a href="<?php bloginfo('url'); ?>/works">Back to Portfolio</a> -
				<?php next_post_link(); ?>
			</p>

		</div>
	<?php endwhile; endif; ?>
  </div>
</section>




<?php get_footer(); ?>
