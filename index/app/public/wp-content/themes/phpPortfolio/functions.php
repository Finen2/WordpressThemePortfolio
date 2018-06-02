<?php

  function load_css(){
    wp_enqueue_style ('theme-style', get_template_directory_uri().'/myStyle.css');
    //wp_enqueue_style ('my-style', get_template_directory_uri().'/css/mystyle.css', array('theme-style'));
  }
?>
