<?php
/**
 * Tape Tracker Taxonomy - Producers
 *
 * This file is used to define the producers taxonomy of the plugin.
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
 * Producers Taxonomy
 *
 * Adds the Producers taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_producers() {

	$labels = array(
		'name'                       => _x( 'Producers', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Producer', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Producers', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Producers', 'tape-tracker' ),
		'all_items'                  => __( 'All Producers', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Producer', 'tape-tracker' ),
		'update_item'                => __( 'Update Producer', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Producer', 'tape-tracker' ),
		'new_item_name'              => __( 'New Producer Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate producers with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove producers', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used producers', 'tape-tracker' ),
		'not_found'                  => __( 'No producers found', 'tape-tracker' ),
		'menu_name'                  => __( 'Producers', 'tape-tracker' ),
	);

	register_taxonomy( 'producers', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'producer',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_producers', 0 );
