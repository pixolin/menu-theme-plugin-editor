<?php
/**
 * Plugin Name:     Menu Theme and Plugin Editor
 * Plugin URI:      https://github.com/pixolin/menu-theme-plugin-editor
 * Description:     Display menu item for theme and plugin editor when using block based themes
 * Author:          Bego Mario Garde <pixolin@pixolin.de>
 * Author URI:      https://pixolin.de
 * Text Domain:     menu-theme-plugin-editor
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Menu_Theme_Plugin_Editor
 */

namespace Pixolin;

defined( 'ABSPATH' ) ||  exit;

/**
 * Add submenu entries for theme file editor and plugin file editor, if a
 * block theme is used.
 */
function editor_submenu() {
	if ( wp_is_block_theme() ) {
		add_submenu_page( 'themes.php', __( 'Theme File Editor', 'menu-theme-plugin-editor' ), __( 'Theme File Editor', 'menu-theme-plugin-editor' ), 'manage_options', 'theme-editor.php', '', 99 );
		add_submenu_page( 'plugins.php', __( 'Plugin File Editor', 'menu-theme-plugin-editor' ), __( 'Plugin File Editor', 'menu-theme-plugin-editor' ), 'manage_options', 'plugin-editor.php', '', 99 );
	}
}
add_action( 'admin_menu', 'Pixolin\editor_submenu' );
