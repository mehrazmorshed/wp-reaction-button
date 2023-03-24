/**
 *
 * WP Reaction Button Register Block
 * @package WPReactionButton
 * Author: Mehraz Morshed
 * Copyright 2023 WPDeveloper
 *
 */

wp.blocks.registerBlockType("ourplugin/wp-reaction-button", {
	title: "WP Reaction Button",
	icon: "smiley",
	category: "common",
	edit: function () {
		return wp.element.createElement("h6", null, "WP Reaction Button")
	},
	save: function () {
		return wp.element.createElement("h6", null, "[reactions]")
	}
})

/**
 * 
 * I borrowed the few line of codes below from LearnWebCode Academy and
 * then re-writed according to my requirements, and I can explain it.
 * The copyright of original code goes to LearnWebCode Academy.
 * 
 * Mehraz Morshed
 * March 23, 2023
 * 
 */
