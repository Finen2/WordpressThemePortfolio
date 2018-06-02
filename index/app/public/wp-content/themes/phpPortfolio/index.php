
    <?php get_header(); ?>
    <div class="container backgroundColor">
      <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

          <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php include('post.php'); ?>

            <?php endwhile; else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
          </div>
        </div>

      </div>

      <?php get_sidebar(); ?>

      <?php get_footer(); ?>
    </div>
  </body>
</html>
