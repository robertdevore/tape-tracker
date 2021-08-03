<?php
/**
 * Tape Tracker Taxonomy - Ratings
 *
 * This file is used to define the ratings taxonomy of the plugin.
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
 * Ratings Taxonomy
 *
 * Adds the Ratings taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_ratings() {

	$labels = array(
		'name'                       => _x( 'Ratings', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Rating', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Ratings', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Ratings', 'tape-tracker' ),
		'all_items'                  => __( 'All Ratings', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Rating', 'tape-tracker' ),
		'update_item'                => __( 'Update Rating', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Rating', 'tape-tracker' ),
		'new_item_name'              => __( 'New Rating Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate ratings with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove ratings', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used ratings', 'tape-tracker' ),
		'not_found'                  => __( 'No ratings found', 'tape-tracker' ),
		'menu_name'                  => __( 'Ratings', 'tape-tracker' ),
	);

	register_taxonomy( 'ratings', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'rating',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_ratings', 0 );
