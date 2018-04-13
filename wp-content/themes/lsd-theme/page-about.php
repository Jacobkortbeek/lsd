<?php
  /*
    Template Name: About Page
  */
?>

<?php get_header(); ?>

<div class="row">
  <div class="span12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
      <?php endwhile; else : ?>
        <p><?php _e ( 'Sorry, no post matched your criteria.' ); ?>
      <?php endif; ?>
  </div>
</div>

<div class="row">
  <div class="span12">
    <?php if ( the_field( 'about_title' ) : ?>
      <?php the_field( 'about_title' ); ?>
    <?php else: ?>
      <p><?php _e( 'this is an error message!!' ); ?>
    <?php endif ?>
  </div>
</div>

<?php get_footer(); ?>