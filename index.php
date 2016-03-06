<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main wrapper clearfix">
  <div class="blog-container clearfix">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

<div class="blog-sidebar">
    <?php get_sidebar(); ?>
</div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>