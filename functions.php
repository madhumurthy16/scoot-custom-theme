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
 * Custom logo
 */

 $logo_width = 108;
 $logo_height = 29;

 add_theme_support(
    'custom-logo',
    array(
        'height'      => $logo_height,
        'width'       => $logo_width,
        'flex-height' => true,
        'flex-width'  => true,
    )
 );

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

require get_template_directory() . '/inc/template-tags.php';

/**
* Register and Enqueue Styles.
*/

function scoot_register_styles() {

  $theme_version = wp_get_theme()->get( 'version' );

  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css2?family=Lexend+Deca&family=Space+Mono:wght@700&display=swap' );
  wp_enqueue_style( 'scoot_style', get_stylesheet_uri(), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'scoot_register_styles' );

/**
* Register and Enqueue Scripts.
*/

function scoot_register_scripts() {

  $theme_version = wp_get_theme()->get( 'version' );

  wp_enqueue_script( 'scoot-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'scoot_register_scripts' );

/**
 * Register navigaton menus.
 */

function scoot_menus() {
  $locations = array(
    'primary' => __( 'Desktop Header Menu', 'scoot' ),
    'mobile'  => __( 'Mobile Menu', 'scoot'),
    'footer'  => __( 'Footer Menu', 'scoot' ),
    'social'  => __( 'Social Menu', 'scoot' )
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'scoot_menus' );

if( ! function_exists( 'wp_body_open' )) {

  /**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */

   function wp_body_open() {
     do_action( 'wp_body_open' );
   }
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */

 function scoot_skip_link() {
   echo '<a class="skip-link screen-reader-text" href="#main-content">' . __( 'Skip to the content', 'scoot' ) . '</a>';
 }

 add_action( 'wp_body_open', 'scoot_skip_link', 5 );
