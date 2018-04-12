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



<div class="row">
  <div class="col-md-4">
  1
  </div>
  <div class="col-md-4">
    2
  </div>
  <div class="col-md-4">
    3
  </div>
</div>

<div class="row">
  <div class="col-12">
    <?php the_field( 'button' ); ?>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <?php $portfolio_1 = get_field( 'portfolio_1' ); ?>
<?php if ( $portfolio_1 ) { ?>
	<img src="<?php echo $portfolio_1['url']; ?>" alt="<?php echo $portfolio_1['alt']; ?>" />
<?php } ?>
  </div>
  <div class="col-md-6">
    <?php $portfolio_2 = get_field( 'portfolio_2' ); ?>
<?php if ( $portfolio_2 ) { ?>
	<img src="<?php echo $portfolio_2['url']; ?>" alt="<?php echo $portfolio_2['alt']; ?>" />
<?php } ?>
  </div>
</div>
<?php get_footer(); ?>
