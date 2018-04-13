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

<?php $fields = get_field_objects( 'about_title', 'about_content' ); ?>

<?php if ( $fields ): ?>
  <div class="row about-text-row">
    <div class="span12 about-text-container">
      <h2><?php the_field( 'about_title' ); ?></h2>
      <p><?php the_field( 'about_content' ); ?></p>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
