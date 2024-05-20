<?php
/**
 * Plugin Name: Hide Menu Icons
 * 
 * Description: This plugin hides menu items from the site's admin.
 * Version: 1.0.0
 * Author: Beer City Bands
 * Author URI: https://beercitybands.com/
 * 
 * @link https://www.mitostudios.com/blog/how-to-remove-posts-blog-post-type-from-wordpress/
 * @link https://developer.wordpress.org/reference/functions/remove_menu_page/
 * @link https://developer.wordpress.org/reference/functions/remove_submenu_page/
 *
 * @since 1.0.0
 */

$slug = 'hide-menu-icons';

define( 'HIDE_MENU_ICONS_VERSION', '1.0.0' );

if( ! function_exists( 'hide_wp_admin_bar_items' ) ) {
	/**
	 * Hide Admin Bar Items.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function hide_wp_admin_bar_items( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'new-post' );
		// $wp_admin_bar->remove_node( 'new-media' );
		$wp_admin_bar->remove_node( 'new-page' );
		$wp_admin_bar->remove_node( 'new-user' );
	}
	add_action( 'admin_bar_menu', 'hide_wp_admin_bar_items', 999 );
}

if( ! function_exists( 'hide_admin_sidebar_items' ) ) {
	/**
	 * Hide Admin Sidebars.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function hide_admin_sidebar_items() {
		$menus = array(
			// 'edit.php',                           // posts
			'edit-comments.php',                     // comments
			// 'upload.php',                         // media
			'edit.php?post_type=page',               // pages
			// 'tools.php',                          // tools
			// 'edit.php?post_type=acf-field-group', // ACF
		);

		foreach($menus as $menu) {
			remove_menu_page( $menu );
		}
	}
	add_action( 'admin_menu', 'hide_admin_sidebar_items', 15, 0 ); // priority must be > 10 to hide ACF
}