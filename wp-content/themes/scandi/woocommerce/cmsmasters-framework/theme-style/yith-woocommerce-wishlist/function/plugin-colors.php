<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Colors Rules
 * Created by CMSMasters
 * 
 */


function scandi_yith_woocommerce_wishlist_colors($custom_css) {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-price del {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-in-stock,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist,
	{$rule}.wishlist_table button,
	{$rule}.wishlist_table .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}

	{$rule} .products .product .cmsmasters_add_wishlist_button a.browse_wishlist:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a.browse_wishlist:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . ", 0.35);
	}
	
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button,
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.submit-wishlist-changes,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-out-of-stock,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a:hover,
	{$rule}.products .product .cmsmasters_add_wishlist_button a:hover,
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button:hover,
	{$rule}.single_add_to_wishlist:hover,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button):hover,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button):after {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}

	{$rule}.wishlist_table button:hover,
	{$rule}.wishlist_table .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}

	{$rule}.wishlist_table button:hover,
	{$rule}.wishlist_table .button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Main Background Color */
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button:hover,
	{$rule}.quantity input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Headings Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a,
	{$rule}.products .product .cmsmasters_add_wishlist_button a,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button),
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-privacy,
	{$rule}.single_add_to_wishlist,
	{$rule}.cmsmasters_single_product .share_posts_inner:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.wishlist_table .button:hover,
	{$rule}.wishlist_table button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button:hover,
	{$rule}.submit-wishlist-changes:hover,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button,
	{$rule}.selectBox-dropdown,
	{$rule}.yes-js .yith-wcwl-popup-content .yith-wcwl-wishlist-select-container select,
	{$rule}.yes-js .pp_woocommerce .yith-wcwl-popup-content .yith-wcwl-visibility select,
	{$rule}.products .product .cmsmasters_add_wishlist_button a,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.woocommerce .yith-wcwl-wishlist-search-form #wishlist_search,
	{$rule}.woocommerce a.selectBox:hover,
	{$rule}.woocommerce a.selectBox {
		border-color:" . $cmsmasters_option['scandi' . '_' . $scheme . '_border'] . " !important;
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#yith-wcwl-form.woocommerce table.wishlist_table,
		{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody tr {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */

	/* Start Alternate Background Color */

	{$rule}.products .product .cmsmasters_add_wishlist_button a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.products .product .cmsmasters_add_wishlist_button a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['scandi' . '_' . $scheme . '_alternate']) . "
	}
	
	/* Finish Alternate Background Color  */

/***************** Finish {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('scandi_theme_colors_secondary_filter', 'scandi_yith_woocommerce_wishlist_colors');

