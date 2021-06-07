<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('scandi_register_theme_plugins')) {

function scandi_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'scandi'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.4.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'scandi'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'scandi'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'scandi'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'scandi'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.11.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'scandi'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.4.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'scandi'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'scandi'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'scandi'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		),
		array( 
			'name'					=> esc_html__('Instagram Feed', 'scandi'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'scandi'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'scandi'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'scandi'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Widget Importer & Exporter', 'scandi'), 
			'slug' 					=> 'widget-importer-exporter', 
			'required' 				=> false 
		),
		array( 
			'name'					=> esc_html__('Yith WooCommerce Ajax Search', 'scandi'), 
			'slug'					=> 'yith-woocommerce-ajax-search', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Quick View', 'scandi'), 
			'slug'					=> 'yith-woocommerce-quick-view', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Wishlist', 'scandi'), 
			'slug'					=> 'yith-woocommerce-wishlist', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Zoom Magnifier', 'scandi'), 
			'slug'					=> 'yith-woocommerce-zoom-magnifier', 
			'required'				=> false 
 		)  
	);
	
	
	$config = array( 
		'id' => 			'scandi', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'scandi'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'scandi'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'scandi') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'scandi_register_theme_plugins');

