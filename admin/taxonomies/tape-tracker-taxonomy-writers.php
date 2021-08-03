<?php
/**
 * Tape Tracker Taxonomy - Writers
 *
 * This file is used to define the writers taxonomy of the plugin.
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
 * Writers Taxonomy
 *
 * Adds the Writers taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_writers() {

	$labels = array(
		'name'                       => _x( 'Writers', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Writer', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Writers', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Writers', 'tape-tracker' ),
		'all_items'                  => __( 'All Writers', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'tape-tracker' ),
		'update_item'                => __( 'Update Writer', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Writer', 'tape-tracker' ),
		'new_item_name'              => __( 'New Writer Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate writers with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove writers', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used writers', 'tape-tracker' ),
		'not_found'                  => __( 'No writers found', 'tape-tracker' ),
		'menu_name'                  => __( 'Writers', 'tape-tracker' ),
	);

	register_taxonomy( 'writers', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'writer',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_writers', 0 );
