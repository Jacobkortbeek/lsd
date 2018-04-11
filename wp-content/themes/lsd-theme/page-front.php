<?php
  /*
    Template Name: front page
  */
?>

<?php get_header(); ?>

<div class="row">
  <div class="col-12">
    <?php $logo = get_field( 'logo' ); ?>
    <?php if ( $logo ) { ?>
	     <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
    <?php } ?>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <?php the_field( 'text_box' ); ?>
  </div>
</div>

<?php get_footer(); ?>
