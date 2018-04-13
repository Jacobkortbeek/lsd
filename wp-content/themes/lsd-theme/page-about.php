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

<?php $fields = get_fields( [
  $about => 'about_title',
  $about_cont => 'about_content'
] ); ?>

<?php if ( $fields ): ?>
  <div class="row about-text-row">
    <div class="span12 about-text-container">
      <?php if ( $about ) : ?>
        <h2><?php $about ?></h2>
      <?php endif; ?>
      <p><?php $about_cont ?></p>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
