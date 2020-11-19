<?php
/**
 * Plugin Name: JetSmartFilters - GeneratePress compatibility
 * Plugin URI:  #
 * Description: Adds some compatibility with the GeneratePress theme.
 * Version:     1.0.0
 * Author:      Crocoblock
 * Author URI:  https://crocoblock.com/
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

add_filter( 'jet-smart-filters/providers/epro-products/before-ajax-content', 'jet_smart_filters_generatepress_wc_setup' );
add_filter( 'jet-smart-filters/providers/epro-archive-products/before-ajax-content', 'jet_smart_filters_generatepress_wc_setup' );

if ( ! function_exists( 'jet_smart_filters_generatepress_wc_setup' ) ) {

	function jet_smart_filters_generatepress_wc_setup() {

		if ( function_exists('generatepress_wc_setup') ) {

			generatepress_wc_setup();

		}

	}

}