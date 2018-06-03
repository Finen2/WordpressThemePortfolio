<!DOCTYPE html>
<html>
  <head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/myStyle.css'; ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  </head>

  <body>

    <div id="ttr_header" class="jumbotron sideHeader">
      <div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12 colorWhite">
        <?php include('navbar.php'); ?>
      </div>
      <div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12 colorWhite">
          <h2>Menu</h2>
          <?php wp_nav_menu( array( 'theme_location' => 'additional-menu' ) ); ?>
      </div>
      <div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12 colorWhite">
          <?php get_sidebar(); ?>
      </div>
    </div>
