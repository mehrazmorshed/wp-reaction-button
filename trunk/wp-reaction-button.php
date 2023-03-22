<?php

/**
 * WP Reaction Button
 *
 * @link              https://wpdeveloper.com
 * @since             1.0.0
 * @package           WPReactionButton
 * @author            Mehraz Morshed
 * @copyright         2023 WPDeveloper
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP Reaction Button
 * Plugin URI:        https://wordpress.org/plugins/wp-reaction-button
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://wpdeveloper.com/wp-reaction-button
 * Text Domain:       wp-reaction-button
 * Domain Path:       /languages
 */

// do not call the file directly

if( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 *
 * Define Block
 *
 */

define( 'WP_REACTION_BUTTON_PLUGIN_VERSION', '1.0.0' );
define( 'WP_REACTION_BUTTON_PLUGIN_FILE', __FILE__ );
define( 'WP_REACTION_BUTTON_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_REACTION_BUTTON_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_REACTION_BUTTON_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 *
 * Function for Loading Text Domain
 *
 */

function wp_reaction_button_load_textdomain() {

    load_plugin_textdomain( 'wp-reaction-button', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'wp_reaction_button_load_textdomain' );

/**
 *
 * Main Function
 *
 */





/**
 *
 * Register Activation Hook for Admin Notification
 *
 */


function wp_reaction_button_notice_hook() {

    set_transient( 'wp-reaction-button-notification', true, 5 );
}
register_activation_hook( __FILE__, 'wp_reaction_button_notice_hook' );

// notification function

function wp_reaction_button_notification() {

    if( get_transient( 'wp-reaction-button-notification' ) ) {

        ?>
        <div class="updated notice is-dismissible">
            <p>
                <?php esc_attr_e( 'Thank you for installing WP Reaction Button plugin!', 'wp-reaction-button' ); ?>        
            </p>
        </div>
        <?php
        delete_transient( 'wp-reaction-button-notification' );
    }
}
add_action( 'admin_notices', 'wp_reaction_button_notification' ); 

