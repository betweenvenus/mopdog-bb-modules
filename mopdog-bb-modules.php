<?php
/**
 * Plugin Name: Mopdog Beaver Builder Modules
 * Plugin URI: https://mopdog.com
 * Description: Special Beaver Builder modules for Mopdog websites.
 * Version: 0.1 
 * Author: Jon Highsmith
 * Author URI: https://gojira.dev
 */
define( 'MOPDOGBB_DIR', plugin_dir_path( __FILE__ ) );
define( 'MOPDOGBB_URL', plugins_url( '/', __FILE__ ) );

function my_load_module_examples() {
  if ( class_exists( 'FLBuilder' ) ) {
      // Include your custom modules here.
      require_once 'md-bucket/md-bucket.php';
  }
}
add_action( 'init', 'my_load_module_examples' );