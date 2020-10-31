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

require_once MOPDOGBB_DIR . 'classes/class-fl-custom-modules-example-loader.php';

// function load_modules() {
//     if(class_exists('FLBuilder')):
//         // load stuff
//         require_once 'modules/md-bucket/md-bucket.php';
//     else:
//         throw new Exception('Beaver Builder must be activated.');
//     endif;
// }

// load_modules();