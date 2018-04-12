<?php
  /*
    Template Name: front page
  */
?>

<?php get_header(); ?>

<div class="row logo-row">
  <div class="span12 logo-container">
    <?php $logo = get_field( 'logo' ); ?>
    <?php if ( $logo ) { ?>
	     <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo" />
    <?php } ?>
  </div>
</div>

<div class="row about-row">
  <div class="span12 about-container">
    <?php the_field( 'text_box' ); ?>
  </div>
</div>



<div class="row">
  <div class="span4">
    <?php $image_one = get_field( 'image_one' ); ?>
  <?php if ( $image_one ) { ?>
  	<img src="<?php echo $image_one['url']; ?>" alt="<?php echo $image_one['alt']; ?>" />
  <?php } ?>
  </div>
  <div class="span4">
    <?php $image_two = get_field( 'image_two' ); ?>
<?php if ( $image_two ) { ?>
	<img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt']; ?>" />
<?php } ?>
  </div>
  <div class="span4">
    <?php $image_three = get_field( 'image_three' ); ?>
<?php if ( $image_three ) { ?>
	<img src="<?php echo $image_three['url']; ?>" alt="<?php echo $image_three['alt']; ?>" />
<?php } ?>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
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
