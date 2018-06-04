<?php

  // function load_css(){
  //   wp_enqueue_style ('theme-style', get_template_directory_uri().'/style.css');
  //   wp_enqueue_style ('my-style', get_template_directory_uri().'/css/myStyle.css', array('theme-style'));
  // }

  function register_my_menu() {
    register_nav_menu('additional-menu',__( 'Additional Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    // function register_my_menus() {
    //   register_nav_menus(
    //   array(
    //    'additional-menu' => __( 'Additional Menu' ),
    //    'another-menu' => __( 'Another Menu' ),
    //    'extra-menu' => __( 'Extra Menu' )
    //    )
    //    );
    //   }
    //   add_action( 'init', 'register_my_menus' );

    add_theme_support( 'custom-logo' );
?>
