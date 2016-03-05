
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
  
	<?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

