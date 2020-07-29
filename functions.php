<?php
/** Scoot functions and definitions
*/

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 */

 /**
* Sets up theme defaults and registers support for various WordPress features.
*/

function scoot_theme_support() {
  global $content_width;
  if( !isset ( $content_width )) {
    $content_width = 1110;
  }

  /*
	 * Let WordPress manage the document title.
	 */

  add_theme_support( 'title_tag' );

  /*
  * Switch default core markup to output valid HTML5
  */

  add_theme_support( 'html5', array(
    'search-form',
    'gallery',
    'caption',
    'script',
    'style',
  ));

  /*
  * Make theme available for translation.
  */

  load_theme_textdomain( 'scoot' );

}

add_action( 'after_setup_theme', 'scoot_theme_support');

/**
 * REQUIRED FILES
 * Include required files.
 */

 /**
  * Register and Enqueue Styles
  */

 function scoot_register_styles() {

    $theme_version = wp_get_theme()->get( 'version' );

    wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css2?family=Lexend+Deca&family=Space+Mono:wght@700' );
    wp_enqueue_style( 'scoot_style', get_stylesheet_uri(), array(), $theme_version );
 }

 add_action( 'wp_enqueue_scripts', 'scoot_register_styles' );
