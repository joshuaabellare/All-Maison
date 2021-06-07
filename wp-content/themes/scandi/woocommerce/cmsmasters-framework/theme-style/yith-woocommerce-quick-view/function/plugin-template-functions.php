<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Yith WooCommerce Quick View Plugin Functions
 * Created by CMSMasters
 * 
 */


/* Yith WooCommerce Quick View Add to Cart Button */
function scandi_quick_view_button($product_id = 0, $label = '', $type = '', $use = '', $show = true) {
	global $woocommerce, 
		$product;
	
	// get product id
	! $product_id && $product_id = yit_get_prop( $product, 'id', true );
	// get label
	! $label && $label = YITH_WCQV_Frontend()->get_button_label();
	
	$out = '';
	
	/* Start Yith WooCommerce Quick View Free */
	$quick_view_enable = get_option('yith-wcqv-enable') == 'yes' ? true : false;
	/* Finish Yith WooCommerce Quick View Free */
	
	
	/* Start Yith WooCommerce Quick View Premium */
	if (defined('YITH_WCQV_PREMIUM')) {
		$position = get_option('yith-wcqv-button-position');
		
		$content = $button = '';
		! $type && $type = get_option('yith-wcqv-button-type');
		
		
		// enqueue scripts and product content
		if (
			($position == 'add-cart') || 
			($position == 'image') 
		) {
			add_action('wp_footer', 'scandi_quick_view_modal_window');
		}
		
		
		if ($type === 'icon') {
			$icon = get_option('yith-wcqv-button-icon');
			$content = '<img src="' . esc_url($icon) . '" class="yith-wcqv-icon"/>';
		} else {
			$content = ($label) ? '<span>' . esc_html($label) . '</span>' : '';
		}
	}
	/* Finish Yith WooCommerce Quick View Premium */
	
	
	if ($quick_view_enable) {
		if ( 
			$product->is_purchasable() && 
			$product->is_type( 'simple' ) && 
			$product->is_in_stock() &&
			CMSMASTERS_WCQV
		) {
			if (defined('YITH_WCQV_PREMIUM')) {
				if ($position == 'image') {
					$out .= $button = '<div class="button cmsmasters_quick_view_button yith-wcqv-button cmsmasters-inside-thumb cmsmasters-icon-custom-magnifying-glass' . (($label) ? '' : ' empty cmsmasters-icon-custom-magnifying-glass') . '"' . (($label) ? ' title="' . $label . '"' : '') . ' data-product_id="' . $product_id . '">' . $content . '<span class="quick_view_tooltip">' . esc_html__('Quick View', 'scandi') . '</span>' . '</div>';
				} else {
					$class = ($type === 'button') ? ' button' : '';
					
					$out .= $button = '<a href="#" class="cmsmasters_quick_view_button yith-wcqv-button' . (($label) ? '' : ' empty cmsmasters-icon-custom-magnifying-glass') . $class . '" data-product_id="' . $product_id . '">' . $content . '</a>';
				}
				
				$out = apply_filters( 'yith_wcqv_button_html', $out, $product_id, $content );
			} else {
				$out .= '<div class="button cmsmasters_quick_view_button cmsmasters-inside-thumb cmsmasters-icon-custom-magnifying-glass">' . '<span class="quick_view_tooltip">' . esc_html__('Quick View', 'scandi') . '</span>' . '<a href="#" class="button cmsmasters_quick_view_button yith-wcqv-button inside-thumb' . (($label) ? '' : ' empty cmsmasters-icon-custom-magnifying-glass') . '" title="' . $label . '" data-product_id="' . $product_id . '">' . $label . '</a>' .
				'</div>';
				$out = apply_filters( 'yith_add_quick_view_button_html', $out, $label, $product );
			}
		}
	}
	
	
	if ($show) {
		echo scandi_return_content($out);
	} else {
		return $out;
	}
}


/* Yith WooCommerce Quick View Enqueue Styles */
function scandi_quick_view_enqueue_styles() {
	
	$main_text_color = get_option('yith-wcqv-main-text-color');
	$cart_color = get_option('yith-wcqv-button-cart-color');
	$cart_color_hover = get_option('yith-wcqv-button-cart-color-hover');
	$details_color = get_option('yith-wcqv-button-details-color');
	$details_color_hover = get_option('yith-wcqv-button-details-color-hover');
	
	
	$quick_view_css = "
		.yith-quick-view.yith-modal .cmsmasters_star_rating .cmsmasters_star_color_wrap,
		.yith-quick-view.yith-modal .share_posts_inner > span {
			color: {$main_text_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary button.button.alt {
			border-color: {$cart_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary button.button.alt:hover {
			border-color: {$cart_color_hover};
		}
		
		.yith-quick-view-content.woocommerce div.summary .yith-wcqv-view-details {
			border-color: {$details_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary .yith-wcqv-view-details:hover {
			border-color: {$details_color_hover};
		}
	";
	
	
	wp_add_inline_style('plugin-style', $quick_view_css);
	
}

add_action('wp_enqueue_scripts', 'scandi_quick_view_enqueue_styles');


function scandi_quick_view_modal_window() {
	/* enqueue script */
	wp_enqueue_script('jquery-blockui');
	
	wp_enqueue_script('yith-wcqv-frontend');
	
	wp_enqueue_script('external-plugin');
	
	
	/* enqueue product content */
	$yith_quick_view_modal_window = new YITH_WCQV_Frontend();
	
	$yith_quick_view_modal_window->yith_woocommerce_quick_view();
	
	$yith_quick_view_modal_window->yith_quick_view();
}
