<?php
  /*
    Template Name: Base Template
  */
?>

<?php the_field( 'heading' ); ?>
<?php the_field( 'text' ); ?>
<?php $image = get_field( 'image' ); ?>
<?php if ( $image ) { ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>
