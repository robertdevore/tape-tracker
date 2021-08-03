<?php
/**
 * The file that defines the metaboxes used by the Tape Tracker plugin
 *
 * @link       https://chaoscinema.club
 * @since      0.0.1
 *
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/admin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Tape details.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/metaboxes/tape-tracker-metabox-tape-details.php';
