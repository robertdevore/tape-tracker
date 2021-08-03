<?php

/**
 * The custom post type functionality of the plugin.
 *
 * @link       https://chaoscinema.club
 * @since      0.0.1
 *
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/admin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'tape_tracker_tapes' ) ) {

    // Register Custom Post Type.
    function tape_tracker_tapes() {

        $labels = array(
            'name'                  => _x( 'Tape Tracker', 'Post Type General Name', 'tape-tracker' ),
            'singular_name'         => _x( 'Tape', 'Post Type Singular Name', 'tape-tracker' ),
            'menu_name'             => __( 'Tape Tracker', 'tape-tracker' ),
            'name_admin_bar'        => __( 'Tape', 'tape-tracker' ),
            'archives'              => __( 'Tape Archives', 'tape-tracker' ),
            'attributes'            => __( 'Tape Attributes', 'tape-tracker' ),
            'parent_item_colon'     => __( 'Parent Tape:', 'tape-tracker' ),
            'all_items'             => __( 'All Tapes', 'tape-tracker' ),
            'add_new_item'          => __( 'Add New Tape', 'tape-tracker' ),
            'add_new'               => __( 'Add New', 'tape-tracker' ),
            'new_item'              => __( 'New Tape', 'tape-tracker' ),
            'edit_item'             => __( 'Edit Tape', 'tape-tracker' ),
            'update_item'           => __( 'Update Tape', 'tape-tracker' ),
            'view_item'             => __( 'View Tape', 'tape-tracker' ),
            'view_items'            => __( 'View Tape', 'tape-tracker' ),
            'search_items'          => __( 'Search Tape', 'tape-tracker' ),
            'not_found'             => __( 'Not found', 'tape-tracker' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'tape-tracker' ),
            'featured_image'        => __( 'Featured Image', 'tape-tracker' ),
            'set_featured_image'    => __( 'Set featured image', 'tape-tracker' ),
            'remove_featured_image' => __( 'Remove featured image', 'tape-tracker' ),
            'use_featured_image'    => __( 'Use as featured image', 'tape-tracker' ),
            'insert_into_item'      => __( 'Insert into tape', 'tape-tracker' ),
            'uploaded_to_this_item' => __( 'Uploaded to this tape', 'tape-tracker' ),
            'items_list'            => __( 'Tapes list', 'tape-tracker' ),
            'items_list_navigation' => __( 'Tapes list navigation', 'tape-tracker' ),
            'filter_items_list'     => __( 'Filter tapes list', 'tape-tracker' ),
        );
        $rewrite = array(
            'slug'                  => 'tape',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Tape Tracker', 'tape-tracker' ),
            'description'           => __( 'Organize and display your VHS collection', 'tape-tracker' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'            => array(),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-playlist-video',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'query_var'             => 'tapes',
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
            'rest_base'             => 'tapes',
        );
        register_post_type( 'tape_tracker_tapes', $args );

    }
    add_action( 'init', 'tape_tracker_tapes', 0 );

}
