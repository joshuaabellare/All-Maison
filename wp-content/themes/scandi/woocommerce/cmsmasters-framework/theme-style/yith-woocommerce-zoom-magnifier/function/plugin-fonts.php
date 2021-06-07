<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Yith WooCommerce Zoom Magnifier Fonts Rules
 * Created by CMSMasters
 * 
 */


function scandi_yith_woocommerce_zoom_magnifier_fonts($custom_css) {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Zoom Magnifier Font Styles ******************/
	
	
	
/***************** Finish Yith WooCommerce Zoom Magnifier Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('scandi_theme_fonts_filter', 'scandi_yith_woocommerce_zoom_magnifier_fonts');

