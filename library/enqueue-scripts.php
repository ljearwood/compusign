<?php

if (!function_exists('Jasper_scripts')) :
  function Jasper_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // enqueue modernizr, jquery and foundation
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/fastclick.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );

  }

  add_action( 'wp_enqueue_scripts', 'Jasper_scripts' );
endif;

//wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '1.0.0', true );
