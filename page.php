<?php get_header();  ?>

<div class="main">
  <div class="container">


    <div class="about-content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <hr>
      <div class="about-title-section">

        <h2><?php the_title(); ?></h2>
        <p class="about-sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p class="about-sub-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         
      </div>

 <hr>

    <div class="about-content-wrap clearfix">
      <div class="about-page-hero about-page-half">
        <img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
      </div>

      <div class="about-page-content about-page-half">
        <p><?php the_content(); ?></p>
      </div>
      </div>  <!-- closes about-content-wrap -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

