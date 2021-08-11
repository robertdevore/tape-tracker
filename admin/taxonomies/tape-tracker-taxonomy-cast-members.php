<?php
/**
 * Tape Tracker Taxonomy - Cast Members
 *
 * This file is used to define the cast members taxonomy of the plugin.
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
 * Cast Members Taxonomy
 *
 * Adds the Cast Members taxonomy to the Tape Tracker custom post type
 *
 * @since    0.0.1
 */
function tape_tracker_taxonomy_cast_members() {

	$labels = array(
		'name'                       => _x( 'Cast Members', 'general name', 'tape-tracker' ),
		'singular_name'              => _x( 'Cast Member', 'singular name', 'tape-tracker' ),
		'search_items'               => __( 'Search Cast Members', 'tape-tracker' ),
		'popular_items'              => __( 'Popular Cast Members', 'tape-tracker' ),
		'all_items'                  => __( 'All Cast Members', 'tape-tracker' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Cast Member', 'tape-tracker' ),
		'update_item'                => __( 'Update Cast Member', 'tape-tracker' ),
		'add_new_item'               => __( 'Add New Cast Member', 'tape-tracker' ),
		'new_item_name'              => __( 'New Cast Member Name', 'tape-tracker' ),
		'separate_items_with_commas' => __( 'Separate cast members with commas', 'tape-tracker' ),
		'add_or_remove_items'        => __( 'Add or remove cast members', 'tape-tracker' ),
		'choose_from_most_used'      => __( 'Choose from the most used cast members', 'tape-tracker' ),
		'not_found'                  => __( 'No cast members found', 'tape-tracker' ),
		'menu_name'                  => __( 'Cast Members', 'tape-tracker' ),
	);

	register_taxonomy( 'cast_members', 'tape_tracker_tapes', array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'show_admin_column'     => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'update_count_callback' => '_update_post_term_count',
		'rewrite'               => array(
			'slug' => 'cast',
		),
	) );

}
add_action( 'init', 'tape_tracker_taxonomy_cast_members', 0 );
