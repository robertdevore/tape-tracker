<?php
/**
 * The file that defines the taxonomies used by the Tape Tracker plugin
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

// Collection.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-collections.php';

// Genres.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-genres.php';

// Directors.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-directors.php';

// Producers.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-producers.php';

// Writers.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-writers.php';

// Distributors.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-distributors.php';

// Ratings.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-ratings.php';

// Languages.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-languages.php';

// Subtitles.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-subtitles.php';

// Cast Members.
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/taxonomies/tape-tracker-taxonomy-cast-members.php';
