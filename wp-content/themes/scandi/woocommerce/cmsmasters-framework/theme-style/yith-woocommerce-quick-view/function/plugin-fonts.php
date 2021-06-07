<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.1
 * 
 * Yith WooCommerce Quick View Fonts Rules
 * Created by CMSMasters
 * 
 */


function scandi_yith_woocommerce_quick_view_fonts($custom_css) {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Quick View Font Styles ******************/
	
	/* Start Content Font */
	#yith-quick-view-modal .single-product {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_content_font_google_font']) . $cmsmasters_option['scandi' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_content_font_font_style'] . ";
	}

	.cmsmasters_product_inner .cmsmasters_quick_view_button,
	.cmsmasters_product_but_wrap .cmsmasters_quick_view_button {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H2 Font */
	html #yith-quick-view-modal .single-product > .product > .product .product_title,
	html .yith-quick-view.slide-in .single-product > .product > .product .summary-content .product_title,
	html .yith-quick-view.fade-in .single-product > .product > .product .summary-content .product_title,
	html .yith-quick-view.scale-in .single-product > .product > .product .summary-content .product_title,
	.yith-quick-view.yith-inline .single-product > .product > .product .summary-content .product_title {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h2_font_google_font']) . $cmsmasters_option['scandi' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Finish H5 Font */
	.yith-quick-view.slide-in .single-product div.summary .product_meta,
	.yith-quick-view.fade-in .single-product div.summary .product_meta,
	.yith-quick-view.scale-in .single-product div.summary .product_meta,
	.yith-quick-view.yith-inline .single-product div.summary .product_meta,
	html .yith-quick-view .single-product div.summary .product_meta, 
	html .yith-quick-view .single-product div.summary .product_meta a, 
	#yith-quick-view-modal .single-product div.summary .product_meta,
	#yith-quick-view-modal .single-product div.summary .product_meta a {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h5_font_google_font']) . $cmsmasters_option['scandi' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	#yith-quick-view-modal .single-product .price,
	.yith-quick-view.slide-in .single-product div.summary .price,
	.yith-quick-view.fade-in .single-product div.summary .price,
	.yith-quick-view.scale-in .single-product div.summary .price,
	li.product .cmsmasters_product > .yith-wcqv-button.inside-thumb > span,
	html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	.yith-quick-view.yith-inline .single-product div.summary .price,
	.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h6_font_google_font']) . $cmsmasters_option['scandi' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h6_font_text_decoration'] . ";
	}
	
	#yith-quick-view-modal .single-product .price,
	.yith-quick-view.slide-in .single-product div.summary .price,
	.yith-quick-view.fade-in .single-product div.summary .price,
	.yith-quick-view.scale-in .single-product div.summary .price,
	.yith-quick-view.yith-inline .single-product div.summary .price {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h6_font_font_size'] + 7) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h6_font_line_height'] + 8) . "px;
	}
	
	#yith-quick-view-modal .single-product .price del *,
	.yith-quick-view.slide-in .single-product div.summary .price del *,
	.yith-quick-view.fade-in .single-product div.summary .price del *,
	.yith-quick-view.scale-in .single-product div.summary .price del *,
	li.product .cmsmasters_product > .yith-wcqv-button.inside-thumb > span,
	.yith-quick-view.yith-inline .single-product div.summary .price del * {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h6_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h6_font_line_height'] + 2) . "px;
	}
	
	#yith-quick-view-modal .single-product .price del,
	.yith-quick-view.slide-in .single-product div.summary .price del,
	.yith-quick-view.fade-in .single-product div.summary .price del,
	.yith-quick-view.scale-in .single-product div.summary .price del,
	.yith-quick-view.yith-inline .single-product div.summary .price del {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h6_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h6_font_line_height'] + 5) . "px;
	}
	
	html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h6_font_line_height'] - 2) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
/***************** Finish Yith WooCommerce Quick View Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('scandi_theme_fonts_filter', 'scandi_yith_woocommerce_quick_view_fonts');

