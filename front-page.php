
<?php get_header(); ?>

<div class="main">
  <div class="container">

		<img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
  
	<?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop ?>

      <?php 
				$args = new WP_Query( array(
						'posts_per_page' => 3,
						'category' => 'blog',
						'order' => 'DSC'
					));
			 ?>
			<?php // Start the loop ?>
					<?php if ( $args->have_posts() ) : ?>
		  	<?php while ($args->have_posts()) : $args->the_post(); ?>
		         
		  		<div class="single-blog-post">
					 		<h3><?php the_title() ?></h3>
					 		<img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" class = "front-page-blog-image" alt="">
					<div class="post-details">
							 <h3>Written by</h3>
								<?php the_author() ?>
					</div>
					<div class="post-content">
							<?php the_excerpt('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
					</div>
					 		
			 	  </div>
			 	<?php endwhile; ?>	 	​
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
        [stuff that happens if there aren't any posts]
  <?php endif; ?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

