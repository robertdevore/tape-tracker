<?php
/**
 * Tape Tracker Taxonomy - Genres
 *
 * This file is used to define the genres taxonomy of the plugin.
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
 * Genres Taxonomy
 *
 * Adds the Genres taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_genres() {

	$labels = array(
		'name'                       => _x( 'Genres', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Genre', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Genres', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Genres', 'tape-tracker' ),
		'all_items'                  => __( 'All Genres', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Genre', 'tape-tracker' ),
		'update_item'                => __( 'Update Genre', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Genre', 'tape-tracker' ),
		'new_item_name'              => __( 'New Genre Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate genres with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove genres', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used genres', 'tape-tracker' ),
		'not_found'                  => __( 'No genres found', 'tape-tracker' ),
		'menu_name'                  => __( 'Genres', 'tape-tracker' ),
	);

	register_taxonomy( 'genres', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'genre',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_genres', 0 );
