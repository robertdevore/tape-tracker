<?php
/**
 * Tape Tracker Metabox - Tape Details
 *
 * This file is used to define the tape details metabox of the plugin.
 *
 * @link       https://chaoscinema.club
 * @since      0.0.1
 *
 * @package    Tape_Tracker
 * @subpackage Tape_Tracker/admin/partials
 */


/**
 * Tape Details metabox
 *
 * Adds a details metabox to the tapes post type.
 *
 * @since    0.0.1
 */
function tape_tracker_tape_details_metabox() {
    // Add Metabox.
	add_meta_box(
		'tape_tracker_tape_details',
		esc_attr__( 'Tape Details', 'tape-tracker' ),
		'tape_tracker_tape_details_metabox_content',
		'tape_tracker_tapes',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'tape_tracker_tape_details_metabox' );

/**
 * Build the Tape Details metabox
 * 
 * @return void
 */
function tape_tracker_tape_details_metabox_content() {
	global $post;

	// Noncename needed to verify where the data originated.
	echo '<input type="hidden" name="tape_tracker_tape_details_meta_noncename" id="tape_tracker_tape_details_meta_noncename" value="' .
	wp_create_nonce( plugin_basename( __FILE__ ) ) . '" />';

	// Runtime.
	$runtime = get_post_meta( $post->ID, 'runtime', true );
	// Release date.
    $release_date = get_post_meta( $post->ID, 'release_date', true );
    // Condition.
    $condition  = get_post_meta( $post->ID, 'condition', true );

	// Runtime field.
    echo '<div class="input-field">';
	echo '<p>' . __( 'Runtime', 'tape-tracker' ) . '</p>';
	echo '<input type="text" name="runtime" value="' . esc_html( $runtime ) . '" class="widefat" />';
    echo '</div>';
	// Release Date field.
    echo '<div class="input-field">';
	echo '<p>' . __( 'Release Date', 'tape-tracker' ) . '</p>';
	echo '<input type="date" name="release_date" value="' . esc_html( $release_date ) . '" class="widefat" />';
    echo '</div>';

}

/**
 * Save the Metabox Data
 * 
 * @param  int    $post_id
 * @param  object $post
 * @return void
 */
function tape_tracker_tape_details_metabox_save( $post_id, $post ) {

	/**
	 * Verify this came from the our screen and with proper authorization,
	 * because save_post can be triggered at other times
	 */
	if ( ! isset( $_POST['tape_tracker_tape_details_meta_noncename' ] ) || ! wp_verify_nonce( $_POST['tape_tracker_tape_details_meta_noncename'], plugin_basename( __FILE__ ) ) ) {
		return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( ! current_user_can( 'edit_post', $post->ID ) ) {
		return $post->ID;
	}

    // Tape details.
	$details_meta['runtime']      = esc_html( $_POST['runtime'] );
	$details_meta['release_date'] = esc_html( $_POST['release_date'] );

	// Save $details_meta as metadata.
	foreach ( $details_meta as $key => $value ) {
        // Bail on post revisions.
		if ( 'revision' === $post->post_type ) {
			return;
		}
        $value = implode( ',', (array) $value );
        // Check for meta value and either update or add the metadata.
		if ( get_post_meta( $post->ID, $key, false ) ) {
			update_post_meta( $post->ID, $key, $value );
		} else {
			add_post_meta( $post->ID, $key, $value );
        }
        // Delete the metavalue if blank.
		if ( ! $value ) {
			delete_post_meta( $post->ID, $key );
		}
	}
}
add_action( 'save_post', 'tape_tracker_tape_details_metabox_save', 1, 2 );
