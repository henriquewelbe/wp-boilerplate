<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
// TODO: colocar isso pela .env
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


/**
 * Register nav menus.
*/
add_action('after_setup_theme', 'register_menu');

function register_menu()
{
  register_nav_menus(array(
    'main-menu' => 'Menu principal',
    'footer-pages-1' => 'Páginas footer 1',
    'footer-pages-2' => 'Páginas footer 2',
    'footer-pages-3' => 'Páginas footer 3',
    'footer-menu' => 'Rodapé',
  ));
}

/*
* Add post_thumbnails suport.
*/
add_theme_support('post-thumbnails');

/*
* Add theme suport html5.
*/
add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  )
);

add_theme_support( 'responsive-embeds' );

/*
* Add theme suport title.
*/
add_theme_support( 'title-tag' );
