<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * WooCommerce Colors Rules
 * Created by CMSMasters
 * 
 */


function scandi_woocommerce_colors($custom_css) {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/*Start Box Shadow*/	
	{$rule}.cmsmasters_add_wishlist_button,
	{$rule}.cmsmasters_quick_view_button,
	{$rule}.add_to_cart_button,
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .added_to_cart,
	{$rule}.products .product .cmsmasters_add_wishlist_button {
		-webkit-box-shadow:0 2px 6px rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . ", 0.15);;
		box-shadow:0 2px 6px rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . ", 0.15);;
	}
	/*finish Box Shadow*/	


	/* Start Main Content Font Color */
	{$rule}.cmsmasters_product .price, 
	{$rule}.cmsmasters_product .price ins,  
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered,
	{$rule}.cmsmasters_single_product .product_meta .sku,
	{$rule}.cmsmasters_single_product .posted_in a,
	{$rule}.cmsmasters_single_product .tagged_as a {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.required, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.shop_table.order_details .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td,
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cart_totals .cart-subtotal th,
	{$rule}.cart_totals .cart-subtotal td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button, 
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.onsale, 
	{$rule}.out-of-stock, 
	{$rule}.stock, 
	{$rule}ul.order_details li > span,
	{$rule}.woocommerce-store-notice,
	{$rule}.price_slider_amount button:hover,
	{$rule}.woocommerce-mini-cart__buttons a:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .cmsmasters_products .cmsmasters_product .cmsmasters_product_add_inner,
	{$rule}.cmsmasters_product_but_wrap .added_to_cart,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button:hover,
	{$rule}.woocommerce-mini-cart__buttons a:not(#woo_pp_ec_button):hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cart_totals .cart-subtotal th,
	{$rule}.cart_totals .cart-subtotal td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button,
	{$rule}.price_slider_amount button:hover,
	{$rule}.woocommerce-mini-cart__buttons a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_rating_filter ul li a:hover, 
	{$rule}.widget_layered_nav ul li a:hover, 
	{$rule}.widget_layered_nav ul li.chosen a, 
	{$rule}.widget_layered_nav_filters ul li a:hover, 
	{$rule}.widget_layered_nav_filters ul li.chosen a, 
	{$rule}.widget_product_categories ul li a:hover, 
	{$rule}.widget_product_categories ul li.current-cat a, 
	{$rule}.shop_table a:not(.button):hover, 
	{$rule}#page .remove:hover, 
	{$rule}.widget_shopping_cart .cart_list a:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_cat a:hover, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat a:hover, 
	{$rule}.widget > .product_list_widget a:hover,
	{$rule}.cmsmasters_single_product .posted_in a:hover,
	{$rule}.cmsmasters_single_product .tagged_as a:hover,
	{$rule}.cmsmasters_product .product_button span:before,
	{$rule}.cmsmasters_quick_view_button .quick_view_tooltip:before,
	{$rule}.cmsmasters_add_wishlist_button .browse_wishlist_tooltip:before,
	{$rule}.cmsmasters_add_wishlist_button .add_to_wishlist_tooltip:before,
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .add_to_cart_tooltip:before,
	{$rule}.cmsmasters_product .product_button:hover,
	{$rule}.cmsmasters_product .added_to_cart:hover,
	{$rule}.woocommerce-MyAccount-navigation ul > li.is-active a {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.widget_product_tag_cloud a:hover,
	{$rule}.price_slider_amount button,
	{$rule}.widget_price_filter .ui-slider-range,
	{$rule}.widget_price_filter .ui-slider-handle,
	{$rule}.woocommerce-mini-cart__buttons a:not(#woo_pp_ec_button),
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .cmsmasters_add_to_cart_button span,
	{$rule}.product .cmsmasters_product .cmsmasters_product_but_wrap .cmsmasters_quick_view_button .quick_view_tooltip,
	{$rule}.cmsmasters_add_wishlist_button .browse_wishlist_tooltip,
	{$rule}.cmsmasters_add_wishlist_button .add_to_wishlist_tooltip,
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .add_to_cart_tooltip {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.widget_product_tag_cloud a:hover, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single,
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.link_hover_color,
	{$rule}.price_slider_amount button,
	{$rule}.woocommerce-mini-cart__buttons a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.widget_product_tag_cloud a,
	{$rule}.widget_shopping_cart .total strong,
	{$rule}.cmsmasters_added_product_info_text,
	{$rule}.shop_table.woocommerce-checkout-review-order-table td.product-name,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	{$rule}.cmsmasters_single_product .cmsmasters_product_cat,
	{$rule}.cmsmasters_single_product .cmsmasters_product_cat a,
	{$rule}.cmsmasters_product .cmsmasters_product_cat, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat a, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error li, 
	{$rule}#page .remove, 
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat, 
	{$rule}.cmsmasters_single_product .product_meta, 
	{$rule}.shop_attributes th, 
	{$rule}.shop_table a:not(.button), 
	{$rule}.cart_totals table, 
	{$rule}ul.order_details strong, 
	{$rule}.widget_rating_filter ul li a, 
	{$rule}.widget_layered_nav ul li a, 
	{$rule}.widget_layered_nav_filters ul li a, 
	{$rule}.widget_product_categories ul li a, 
	{$rule}.widget > .product_list_widget a, 
	{$rule}.widget_shopping_cart .cart_list a,
	{$rule}.widget_shopping_cart .cart_list .quantity,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity,
	{$rule}.widget_shopping_cart .amount,
	{$rule}.woocommerce-mini-cart__total .amount,
	{$rule}.cmsmasters_product .price,
	{$rule}.cmsmasters_product .price ins,
	{$rule}.cmsmasters_single_product .price, 
	{$rule}.cmsmasters_single_product .price ins,
	{$rule}.cmsmasters_product .product_button,
	{$rule}.cmsmasters_product .added_to_cart,
	{$rule}.widget_products .price .amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_wishlist_wrap:before {
		" . cmsmasters_color_css('background', $cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_single_product .price del,
	{$rule}.cmsmasters_product .price del {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . ", 0.35);
	}
	/* Finish Headings Color */
	

	
	/* Start Main Background Color */
	{$rule}.woocommerce-store-notice, 
	{$rule}.woocommerce-store-notice p a, 
	{$rule}.woocommerce-store-notice p a:hover, 
	{$rule}.widget_product_tag_cloud a:hover,
	{$rule}.cart_totals .cart-subtotal th,
	{$rule}.cart_totals .cart-subtotal td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link,
	{$rule}.select2-container .select2-selection--single,
	{$rule}.widget_product_tag_cloud a,
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.woocommerce-checkout-payment, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error,
	{$rule}table.variations {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_product_category_shortcode.puzzle .cmsmasters_products .cmsmasters_product .cmsmasters_product_inner {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_link']) . ", 0.95);
	}
	/* Finish Main Background Color */

	/* Start Breadcrumbs Color */
	{$rule}.woocommerce-breadcrumb:last-child {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_header_top_title_link_hover']) . "
	}
	/* Finish Breadcrumbs Color */

	/* Start Header Top Navigation Title Link Background Color */
	.puzzle .products .product .cmsmasters_add_wishlist_button a,
	.puzzle .cmsmasters_product .button.cmsmasters_quick_view_button,
	.puzzle .cmsmasters_products .cmsmasters_product .cmsmasters_product_add_inner .product_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_header_top_title_link_bg']) . "
	}
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.onsale, 
	{$rule}.out-of-stock, 
	{$rule}.stock, 
	{$rule}ul.order_details,
	{$rule}.woocommerce-breadcrumb,
	{$rule}.woocommerce-mini-cart__buttons a:hover,
	{$rule}.price_slider_amount button:hover,
	{$rule}.puzzle .cmsmasters_product_title a,
	{$rule}.puzzle .cmsmasters_product .price,
	{$rule}.puzzle .cmsmasters_product .price ins,
	{$rule}.puzzle .cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a,
	{$rule}.puzzle .cmsmasters_products .cmsmasters_product .cmsmasters_product_add_inner .product_button,
	{$rule}.cmsmasters_quick_view_button .quick_view_tooltip,
	{$rule}.cmsmasters_add_wishlist_button .browse_wishlist_tooltip,
	{$rule}.cmsmasters_add_wishlist_button .add_to_wishlist_tooltip,
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .add_to_cart_tooltip,
	{$rule}.cmsmasters_product_but_wrap .added_to_cart {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.puzzle .cmsmasters_product .cmsmasters_product_cat a {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . ", 0.8);
	}

	{$rule}.puzzle .cmsmasters_star_rating .cmsmasters_star:before,
	{$rule}.puzzle .cmsmasters_products .cmsmasters_product .cmsmasters_product_add_inner .product_button:hover,
	{$rule}.puzzle .cmsmasters_product .cmsmasters_product_cat a:hover,
	{$rule}.puzzle .cmsmasters_product_title a:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a:hover,
	{$rule}.puzzle .cmsmasters_product .price del {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . ", 0.35);
	}
	
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}ul.order_details > li,
	{$rule}.select2-container .select2-selection--single,
	{$rule}.select2-container--default .select2-results>.select2-results__options,
	{$rule}.cmsmasters_product .cmsmasters_product_but_wrap .cmsmasters_quick_view_button span:not(:last-child) {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.cmsmasters_product_but_wrap .add_to_cart_button,
	{$rule}.cmsmasters_product_but_wrap .added_to_cart {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.cmsmasters_product,
	{$rule}.cmsmasters_woo_tabs,
	{$rule}.shop_attributes,
	{$rule}.cmsmasters_product_but_wrap .add_to_cart_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_price_filter .price_slider, 
	{$rule}.cmsmasters_woo_tabs:before, 
	{$rule}div.products:before,
	{$rule}.yith-wcwl-add-to-wishlist:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_product_tag_cloud a,
	{$rule}.widget_rating_filter ul li, 
	{$rule}.widget_layered_nav ul li, 
	{$rule}.widget_layered_nav_filters ul li, 
	{$rule}.widget_product_categories ul li,
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box, 
	{$rule}.woocommerce-checkout-payment, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.cmsmasters_product, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table th, 
	{$rule}.cart_totals table td, 
	{$rule}.shop_table .cart_item,
	{$rule}.select2-dropdown,
	{$rule}.select2-container .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}.shop_table.cart {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('scandi_theme_colors_secondary_filter', 'scandi_woocommerce_colors');

