<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 * 
 * Yith WooCommerce Quick View Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Quick View Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-template-functions.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Quick View Plugin */
function scandi_yith_woocommerce_quick_view_register_styles_scripts() {

	wp_enqueue_style('scandi-yith-woocommerce-quick-view-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('scandi-yith-woocommerce-quick-view-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('scandi-yith-woocommerce-quick-view-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
}

add_action('wp_enqueue_scripts', 'scandi_yith_woocommerce_quick_view_register_styles_scripts');

