<?php
// Template Name: Porfolio Page
?>

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
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; endif; ?>


<?php
  $args = array(
    'post_type' => 'portfolio'
  );
  $the_query = new WP_Query( $args );
 ?>

 <?php if( $the_query -> have_post() ) : while( $the_query->have_posts() ) : $the_query -> the_post(); ?>

   <div class="gallery">
     <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large');?> </a>
   </div>

   <p>post</p>

<?php endwhile; endif; wp_reset_postdata();  ?>




<?php get_footer(); ?>
