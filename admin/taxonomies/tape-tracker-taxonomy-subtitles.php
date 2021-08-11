<?php
/**
 * Tape Tracker Taxonomy - Subtitles
 *
 * This file is used to define the subtitles taxonomy of the plugin.
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
 * Subtitles Taxonomy
 *
 * Adds the Subtitles taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_subtitles() {

	$labels = array(
		'name'                       => _x( 'Subtitles', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Subtitle', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Subtitles', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Subtitles', 'tape-tracker' ),
		'all_items'                  => __( 'All Subtitles', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Subtitle', 'tape-tracker' ),
		'update_item'                => __( 'Update Subtitle', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Subtitle', 'tape-tracker' ),
		'new_item_name'              => __( 'New Subtitle Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate subtitles with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove subtitles', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used subtitles', 'tape-tracker' ),
		'not_found'                  => __( 'No subtitles found', 'tape-tracker' ),
		'menu_name'                  => __( 'Subtitles', 'tape-tracker' ),
	);

	register_taxonomy( 'subtitles', 'tape_tracker_tapes', array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'subtitle',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_subtitles', 0 );
