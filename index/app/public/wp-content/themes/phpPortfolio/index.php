<html>
  <head>
    <title>Tutorial theme</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>">

    <!--<link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>">-->
  </head>

  <body class="backgroundColor">
    <?php include('navbar.php'); ?>
    <?php get_header(); ?>
    <div class="container backgroundColor">
      <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

          <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 backgroundColor">
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_content(__('(more...)')); ?></p>
              </div>

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
