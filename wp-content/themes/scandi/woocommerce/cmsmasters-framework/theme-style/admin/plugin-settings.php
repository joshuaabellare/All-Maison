<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function scandi_woocommerce_options_general_fields($options, $tab) {
	$defaults = scandi_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'scandi' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Header WooCommerce Cart', 'scandi'),
			'desc' => esc_html__('show', 'scandi'),
			'type' => 'checkbox',
			'std' => $defaults[$tab]['scandi' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'scandi_woocommerce_options_general_fields', 10, 2);

