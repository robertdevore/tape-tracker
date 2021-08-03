<?php
/**
 * Tape Tracker Taxonomy - Directors
 *
 * This file is used to define the directors taxonomy of the plugin.
 *
 * @link       https://chaoscinema.club
 * @since      0.0.1
 *
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/admin/taxonomies
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Directors Taxonomy
 *
 * Adds the Directors taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_directors() {

	$labels = array(
		'name'                       => _x( 'Directors', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Director', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Directors', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Directors', 'tape-tracker' ),
		'all_items'                  => __( 'All Directors', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Director', 'tape-tracker' ),
		'update_item'                => __( 'Update Director', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Director', 'tape-tracker' ),
		'new_item_name'              => __( 'New Director Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate directors with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove directors', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used directors', 'tape-tracker' ),
		'not_found'                  => __( 'No directors found', 'tape-tracker' ),
		'menu_name'                  => __( 'Directors', 'tape-tracker' ),
	);

	register_taxonomy( 'directors', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'director',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_directors', 0 );
