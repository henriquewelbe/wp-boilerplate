<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
// TOOD: colocar isso pela .env
define('IS_VITE_DEVELOPMENT', true);

include "inc/inc.vite.php";

add_filter('show_admin_bar', '__return_false');

// TODO: fazer funcionar o app.js pra não precisar do main.js
function my_scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/app.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

// TODO: de preferência sem precisar dessa função que adiciona o type="module" no script
function add_type_attribute($tag, $handle, $src) {
  if ( 'main' !== $handle ) {
      return $tag;
  }

  $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
  return $tag;
}

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
$value = apply_filters( 'script_loader_tag', '', 'main', get_template_directory_uri() . '/src/js/app.js' );


