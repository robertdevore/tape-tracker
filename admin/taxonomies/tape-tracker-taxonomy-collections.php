<?php
/**
 * Tape Tracker Taxonomy - Collections
 *
 * This file is used to define the collections taxonomy of the plugin.
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
 * Collections Taxonomy
 *
 * Adds the Collections taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_collections() {

	$labels = array(
		'name'                       => _x( 'Collections', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Collection', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Collections', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Collections', 'tape-tracker' ),
		'all_items'                  => __( 'All Collections', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Collection', 'tape-tracker' ),
		'update_item'                => __( 'Update Collection', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Collection', 'tape-tracker' ),
		'new_item_name'              => __( 'New Collection Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate collections with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove collections', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used collections', 'tape-tracker' ),
		'not_found'                  => __( 'No collections found', 'tape-tracker' ),
		'menu_name'                  => __( 'Collections', 'tape-tracker' ),
	);

	register_taxonomy( 'collections', 'tape_tracker_tapes', array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'collection',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_collections', 0 );
