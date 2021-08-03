<?php

/**
 * Fired during plugin activation
 *
 * @link       https://chaoscinema.club
 * @since      0.0.1
 *
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      0.0.1
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/includes
 * @author     Chaos Cinema Club <chaoscinemaclub@gmail.com>
 */
class Tape_Tracker_Activator {

	/**
	 * Run on activation
	 *
	 * @since    0.0.1
	 */
	public static function activate() {
		/**
		 * Tapes CPT.
		 */
		tape_tracker_tapes();

		/**
		 * Flush Rewrite Rules
		 */
		global $wp_rewrite;
		$wp_rewrite->init();
		$wp_rewrite->flush_rules();


	}

}
