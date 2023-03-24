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

// define
define( 'WP_REACTION_BUTTON_PLUGIN_VERSION', '1.0.0' );
define( 'WP_REACTION_BUTTON_PLUGIN_FILE', __FILE__ );
define( 'WP_REACTION_BUTTON_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_REACTION_BUTTON_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_REACTION_BUTTON_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

// load text domain for translation
function wp_reaction_button_load_textdomain() {
    load_plugin_textdomain( 'wp-reaction-button', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'wp_reaction_button_load_textdomain' );

// enqueue css files
function wp_reaction_button_enqueue_style() {
    wp_enqueue_style('wp-reaction-button-style', plugins_url('css/wp-reaction-button-style.css', __FILE__));
}
add_action( "wp_enqueue_scripts", "wp_reaction_button_enqueue_style" );

// enqueue jquery and javascript files
function wp_reaction_button_enqueue_script() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-reaction-button-script', plugins_url('js/wp-reaction-button-script.js', __FILE__), array(), '1.0.0', 'true');
}
add_action( "wp_enqueue_scripts", "wp_reaction_button_enqueue_script" );

// main function
function wp_reaction_button_main( $content ) {
    // check the user is logged in or not
    if ( is_user_logged_in() ) {
        // check to display icons only in single posts and pages
        if ( is_single() || is_page() ) {
            // setting up smile icon
            $smile = '<img class="button" id="smile" onclick="smileFunction()" style="width:48px;" src="' .  plugin_dir_url( __FILE__ ) . 'img/smile.png">';
            // setting up straight icon
            $straight = '<img class="button" id="straight" onclick="straightFunction()" style="width: 48px;" src="' .  plugin_dir_url( __FILE__ ) . 'img/straight.png">';
            // setting up sad icon
            $sad = '<img class="button" id="sad" onclick="sadFunction()" style="width: 48px;" src="' .  plugin_dir_url( __FILE__ ) . 'img/sad.png">';
            // combine all three icons to display after the content
            $content .= '<div class="reaction">' . $smile . $straight . $sad . '</div>';
        }
        return $content;
    }
    // diaplay message instead of reaction icons for logged out / guest users
    else {
        $guest= '<div style="border: 2px red dotted;">You need to get Logged-in to give a reaction using <strong>WP Reaction Button</strong></div>';
        $content .= $guest;
        return $content;
    }
}
add_filter( 'the_content', 'wp_reaction_button_main' );
