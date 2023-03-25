<?php

/**
 *
 * WP Reaction Button Admin Settings
 * @package WPReactionButton
 * Author: Mehraz Morshed
 * Copyright 2023 WPDeveloper
 *
 */

// Plugin Settings Page Setup

function wp_reaction_button_settings_page(){
	add_menu_page( 'WP Reaction Button Settings', 'WP Reaction Button', 'manage_options', 'wp-reaction-button', 'wp_reaction_button_create_settings_page', 'dashicons-admin-plugins', 101 );
}
add_action( 'admin_menu', 'wp_reaction_button_settings_page' );


// Load Settings CSS
function wp_reaction_button_style_settings() {
	wp_enqueue_style( 'wp-reaction-button-settings', plugins_url( 'css/wp-reaction-button-settings.css', __FILE__ ), false, "1.0.0" );
}
add_action('admin_enqueue_scripts', 'wp_reaction_button_style_settings');


// Plugin Callback Function

function wp_reaction_button_create_settings_page() {
	?>
	<div class="wp-reaction-button-main">
		<div class="wp-reaction-button-body wp-reaction-button-common">
			<h1 id="page-title"><?php print esc_attr( 'WP Reaction Button Settings' ); ?></h1><br>
			<h1 style="text-align: center; font-size: 52px; color: #ccc;">Coming Soon ...</h1>
			<br><br>
			<h1 class="author-title"><?php print esc_attr( 'Checkout Our Featured Products' ); ?></h1><br>
			<div class="wp-reaction-button-products">
				<div class="wp-reaction-button-featured">
					<a class="link" href="https://wpdeveloper.com/plugins/essential-addons-elementor" target="_blank">
						<img class="center" src="<?php print plugin_dir_url( __FILE__ ) . '/img/ea.png'; ?>" width="240px"><br>
						<b>Essential Addons</b>
					</a>
				</div>
				<div class="wp-reaction-button-featured">
					<a class="link" href="https://templately.com" target="_blank">
						<img class="center" src="<?php print plugin_dir_url( __FILE__ ) . '/img/templately.png'; ?>" width="240px"><br>
						<b>Templately</b>
					</a>
				</div>
			</div>
		</div>
		<div class="wp-reaction-button-aside wp-reaction-button-common">
			<h2 class="aside-title"><?php print esc_attr( 'About Plugin Author' ); ?></h2>
			<div class="author-card">
				<a class="link" href="https://profiles.wordpress.org/mehrazmorshed/" target="_blank">
					<img class="center" src="<?php print plugin_dir_url( __FILE__ ) . '/img/author.png'; ?>" width="128px">
					<h3 class="author-title"><?php print esc_attr( 'Mehraz Morshed' ); ?></h3>
					<h4 class="author-title"><?php print esc_attr( 'WordPress Developer' ); ?></h4>
				</a>
				<h1 class="author-title">
					<a class="link" href="https://www.facebook.com/mehrazmorshed" target="_blank">
						<span class="dashicons dashicons-facebook"></span>
					</a>
					<a class="link" href="https://twitter.com/mehrazmorshed" target="_blank">
						<span class="dashicons dashicons-twitter"></span>
					</a>
					<a class="link" href="https://www.linkedin.com/in/mehrazmorshed" target="_blank">
						<span class="dashicons dashicons-linkedin"></span>
					</a>
					<a class="link" href="https://www.youtube.com/@mehrazmorshed" target="_blank">
						<span class="dashicons dashicons-youtube"></span>
					</a>
				</h1>
			</div>
			<h3 class="aside-title"><?php print esc_attr( 'Other Useful Plugins' ); ?></h3>
			<div class="author-card">
				<a class="link" href="https://wpdeveloper.com/plugins/betterdocs" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>BetterDocs</b>
				</a>
				&nbsp; | &nbsp;
				<a class="link" href="https://wpdeveloper.com/plugins/betterlinks" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>BetterLinks</b>
				</a>
				<hr>
				<a class="link" href="https://wpdeveloper.com/plugins/reviewx" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>ReviewX</b>
				</a>
				&nbsp; | &nbsp;
				<a class="link" href="https://wpdeveloper.com/plugins/notificationx" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>NotificationX</b>
				</a>
				<hr>
				<a class="link" href="https://wpdeveloper.com/plugins/embedpress" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>EmbedPress</b>
				</a>
				&nbsp; | &nbsp;
				<a class="link" href="https://wpdeveloper.com/plugins/wp-scheduled-posts" target="_blank">
					<span class="dashicons dashicons-admin-plugins"></span> <b>SchedulePress</b>
				</a>
			</div>
			<a class="link" href="https://wpdeveloper.com" target="_blank">
				<p class="text-center">Copyright &copy; 2023</p>
				<img class="center" src="<?php print plugin_dir_url( __FILE__ ) . '/img/wpdeveloper.png'; ?>" width="180px">
			</a>
		</div>
	</div>
	<?php
}



