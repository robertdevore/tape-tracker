<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://chaoscinema.club
 * @since             0.0.1
 * @package           Tape_Tracker
 *
 * @wordpress-plugin
 * Plugin Name:       Tape Tracker
 * Plugin URI:        https://chaoscinema.club/tape-tracker-wordpress-plugin
 * Description:       Easily archive and display your movie collection
 * Version:           0.0.1
 * Author:            Chaos Cinema Club
 * Author URI:        https://chaoscinema.club
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tape-tracker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'TAPE_TRACKER_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tape-tracker-activator.php
 */
function activate_tape_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tape-tracker-activator.php';
	Tape_Tracker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tape-tracker-deactivator.php
 */
function deactivate_tape_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tape-tracker-deactivator.php';
	Tape_Tracker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tape_tracker' );
register_deactivation_hook( __FILE__, 'deactivate_tape_tracker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tape-tracker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_tape_tracker() {

	$plugin = new Tape_Tracker();
	$plugin->run();

}
run_tape_tracker();
