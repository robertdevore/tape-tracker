<?php
/**
 * Tape Tracker Taxonomy - Languages
 *
 * This file is used to define the languages taxonomy of the plugin.
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
 * Languages Taxonomy
 *
 * Adds the Languages taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_languages() {

	$labels = array(
		'name'                       => _x( 'Languages', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Language', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Languages', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Languages', 'tape-tracker' ),
		'all_items'                  => __( 'All Languages', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Language', 'tape-tracker' ),
		'update_item'                => __( 'Update Language', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Language', 'tape-tracker' ),
		'new_item_name'              => __( 'New Language Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate languages with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove languages', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used languages', 'tape-tracker' ),
		'not_found'                  => __( 'No languages found', 'tape-tracker' ),
		'menu_name'                  => __( 'Languages', 'tape-tracker' ),
	);

	register_taxonomy( 'languages', 'tape_tracker_tapes', array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'language',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_languages', 0 );
