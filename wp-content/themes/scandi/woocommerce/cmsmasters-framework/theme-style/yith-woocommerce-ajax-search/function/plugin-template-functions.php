<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 * 
 * Yith WooCommerce Ajax Search Template Functions
 * Created by CMSMasters
 * 
 */


/* Ajax Search for Header Search */
function scandi_yith_woocommerce_ajax_search_header_search_form() {
	return do_shortcode('[yith_woocommerce_ajax_search]');
}

add_filter('scandi_get_header_search_form_filter', 'scandi_yith_woocommerce_ajax_search_header_search_form');