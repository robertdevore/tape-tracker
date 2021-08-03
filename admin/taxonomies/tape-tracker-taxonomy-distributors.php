<?php
/**
 * Tape Tracker Taxonomy - Distributors
 *
 * This file is used to define the distributors taxonomy of the plugin.
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
 * Distributors Taxonomy
 *
 * Adds the Distributors taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_distributors() {

	$labels = array(
		'name'                       => _x( 'Distributors', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Distributor', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Distributors', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Distributors', 'tape-tracker' ),
		'all_items'                  => __( 'All Distributors', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Distributor', 'tape-tracker' ),
		'update_item'                => __( 'Update Distributor', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Distributor', 'tape-tracker' ),
		'new_item_name'              => __( 'New Distributor Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate distributors with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove distributors', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used distributors', 'tape-tracker' ),
		'not_found'                  => __( 'No distributors found', 'tape-tracker' ),
		'menu_name'                  => __( 'Distributors', 'tape-tracker' ),
	);

	register_taxonomy( 'distributors', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'distributor',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_distributors', 0 );
