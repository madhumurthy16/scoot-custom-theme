<?php

/**
 * Plugin Name:       Job Listings Post Types and Taxonomies
 * Plugin URI:
 * Description:       A plugin for creating custom post types and taxonomies related to job listings.
 * Version:           1.0.0
 * Author:            Madhu Murthy
 * Author URI:        https://madhumurthy.info/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scoot-post-types
 * Domain Path:       /languages
 */

//If this file is called directly, abort.

if( !defined('WPINC') ) {
  die;
}

define( 'SCOOT_VERSION', '1.0.0' );
define( 'SCOOTDOMAIN', 'scoot-post-types' );
define( 'SCOOTPATH', plugin_dir_path( __FILE__ ) );

require_once( SCOOTPATH . '/post-types/register.php' );

add_action( 'init', scoot_register_jobs_types );
