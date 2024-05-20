<?php
/**
 * Plugin Name: WhoAmI
 * 
 * Description: This plugin provides the ACF Field Groups for the WhoAmI Options.
 * Version: 1.0.0
 * Author: Kyle Michael Sullivan
 * Author URI: https://kylemichaelsullivan.com/
 * 
 * @link https://www.advancedcustomfields.com/resources/register-fields-via-php/
 * 
 * @since 1.0.0
 */

$slug = 'whoami';

define( 'WHOAMI_VERSION', '1.0.0' );
define( 'WHOAMI_PATH', WPMU_PLUGIN_DIR . "/$slug/" );
define( 'WHOAMI_URL', WPMU_PLUGIN_URL . "/$slug/" );

// if( function_exists( 'acf_add_local_field_group' ) && ! function_exists( 'whoami_add_acf_field_group' ) ) {
if( ! function_exists( 'whoami_add_acf_field_group' ) ) {
	/**
	 * Add ACF Field Groups.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function whoami_add_acf_field_group() {
		$acfs = array(
			'skills',
			'knowledge',
			'experience',
			'education',
			'links',
			'samples'
		);

		if( function_exists( 'acf_add_local_field_group' ) ) {
			foreach($acfs as $acf) {
				require WHOAMI_PATH . "$acf.php";
			}
		}
	}
	add_action( 'plugins_loaded', 'whoami_add_acf_field_group' );
}

if( ! function_exists( 'whoami_acf_add_options_page' ) ) {
	function whoami_acf_add_options_page() {
		if( function_exists( 'acf_add_options_page' ) ){
			acf_add_options_page( array(
				'page_title' => 'WhoAmI',
				'menu_slug' => 'whoami',
				'icon_url' => 'dashicons-media-text',
				'menu_title' => 'WhoAmI',
				'position' => '',
				'redirect' => false,
			) );
		}
	}
	add_action( 'plugins_loaded', 'whoami_acf_add_options_page' );
}
