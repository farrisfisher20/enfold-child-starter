<?php
/**
 * Enfold Child Theme - Starter
 *
 * @since Enfold Starter 1.0
 *
 * Add your own functions here. You can also copy some of the theme functions into this file. 
 * Wordpress will use those functions instead of the original functions then.
 * 
 * @link http://www.kriesi.at/documentation/enfold/using-a-child-theme/
 */


/**
 *	Add filter to add or replace Enfold ALB shortcodes with new folder contents
 *	
 *	Note that the shortcodes must be in the same format as those in 
 *	enfold/config-templatebuilder/avia-shortcodes
 *
 *	@link http://www.kriesi.at/documentation/enfold/add-new-or-replace-advanced-layout-builder-elements-from-child-theme/
 */

add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
	$template_url = get_stylesheet_directory();
    	array_unshift($paths, $template_url.'/shortcodes/');

	return $paths;
}


/**
 *	Turn on Custom CSS Class field for all Avia Layout Builder elements
 *	@link http://www.kriesi.at/documentation/enfold/turn-on-custom-css-field-for-all-alb-elements/
 */
	add_theme_support('avia_template_builder_custom_css');