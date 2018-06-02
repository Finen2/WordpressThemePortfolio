<!DOCTYPE html>
<html>
  <head>
    <title>Tutorial theme</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/myStyle.css'; ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  </head>

  <body>

    <div id="ttr_header" class="jumbotron sideHeader">
      <?php include('navbar.php'); ?>
    </div>
    <div class="container">
