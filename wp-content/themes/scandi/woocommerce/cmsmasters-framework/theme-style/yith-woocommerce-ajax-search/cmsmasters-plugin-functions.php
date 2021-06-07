<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 * 
 * Yith WooCommerce Ajax Search Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Ajax Search Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-template-functions.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-colors.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Ajax Search Plugin */
function scandi_yith_woocommerce_ajax_search_register_styles_scripts() {

	wp_enqueue_style('scandi-yith-woocommerce-ajax-search-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('scandi-yith-woocommerce-ajax-search-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('scandi-yith-woocommerce-ajax-search-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'scandi_yith_woocommerce_ajax_search_register_styles_scripts');

