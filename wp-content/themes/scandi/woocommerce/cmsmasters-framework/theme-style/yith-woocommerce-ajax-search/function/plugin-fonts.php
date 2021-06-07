<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 * 
 * Yith WooCommerce Ajax Search Fonts Rules
 * Created by CMSMasters
 * 
 */


function scandi_yith_woocommerce_ajax_search_fonts($custom_css) {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Ajax Search Font Styles ******************/
	
	/* Start Content Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_content_font_google_font']) . $cmsmasters_option['scandi' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_content_font_font_style'] . ";
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_excerpt {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_content_font_font_size'] - 1) . "px;
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_categories,
	.autocomplete-suggestions .autocomplete-suggestion del {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H5 Font */
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content ins,
	.woocommerce .autocomplete-suggestion .title,
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content > span.amount {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h5_font_google_font']) . $cmsmasters_option['scandi' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start Text Fields Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_input_font_google_font']) . $cmsmasters_option['scandi' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
/***************** Finish Yith WooCommerce Ajax Search Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('scandi_theme_fonts_filter', 'scandi_yith_woocommerce_ajax_search_fonts');

