<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('scandi_system_fonts_list')) {
	function scandi_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}


// Theme Settings Text Decorations List
if (!function_exists('scandi_text_decoration_list')) {
	function scandi_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'scandi'), 
			'underline' => esc_html__('underline', 'scandi'), 
			'overline' => esc_html__('overline', 'scandi'), 
			'line-through' => esc_html__('line-through', 'scandi'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('scandi_custom_color_schemes_list')) {
	function scandi_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'scandi'), 
			'second' => esc_html__('Custom 2', 'scandi'), 
			'third' => esc_html__('Custom 3', 'scandi') 
		);
		
		
		return apply_filters('scandi_custom_color_schemes_list_filter', $list);
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Require Files Function
if (!function_exists('scandi_locate_template')) {
	function scandi_locate_template($template_names, $require_once = true, $load = true) {
		$located = '';
		
		
		foreach ((array) $template_names as $template_name) {
			if (!$template_name) {
				continue;
			}
			
			
			if (file_exists(get_stylesheet_directory() . '/' . $template_name)) {
				$located = get_stylesheet_directory() . '/' . $template_name;
				
				
				break;
			} elseif (file_exists(get_template_directory() . '/' . $template_name)) {
				$located = get_template_directory() . '/' . $template_name;
				
				
				break;
			}
		}
		
		
		if ($load && $located != '') {
			if ($require_once) {
				require_once($located);
			} else {
				require($located);
			}
		}
		
		
		return $located;
	}
}



// CMSMasters Content Composer Plugin Compatibility
define('CMSMASTERS_CONTENT_COMPOSER', true);

// CMSMasters Donations Plugin Compatibility
define('CMSMASTERS_DONATIONS', false);

// CMSMasters Events Schedule Plugin Compatibility
define('CMSMASTERS_EVENTS_SCHEDULE', false);

// CMSMasters Mega Menu Plugin Compatibility
define('CMSMASTERS_MEGA_MENU', true);

// CMSMasters Sermons Plugin Compatibility
define('CMSMASTERS_SERMONS', false);

// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// CMSMasters Custom Fonts Compatibility
define('CMSMASTERS_CUSTOM_FONTS', true);

// WooCommerce Plugin Compatibility
define('CMSMASTERS_WOOCOMMERCE', class_exists('woocommerce') ? true : false);

// The Events Calendar Plugin Compatibility
define('CMSMASTERS_TRIBE_EVENTS', class_exists('Tribe__Events__Main') ? false : false);

// Timetable Responsive Schedule For WordPress Plugin Compatibility
define('CMSMASTERS_TIMETABLE', function_exists('timetable_events_init') ? false : false);

// MP Timetable and Event Schedule Plugin Compatibility
define('CMSMASTERS_MP_TIMETABLE', class_exists('Mp_Time_Table') ? true : false);

// LearnPress Plugin Compatibility
define('CMSMASTERS_LEARNPRESS', class_exists('LearnPress') ? false : false);

// WordPress Event Ticketing Plugin Compatibility
define('CMSMASTERS_TC_EVENTS', class_exists('TC') ? false : false);

// Instagram Feed Plugin Compatibility
define('CMSMASTERS_INSTAGRAM_FEED', function_exists('sb_instagram_activate') ? true : false);

// MailPoet Plugin Compatibility
define('CMSMASTERS_MAILPOET', (class_exists('WYSIJA') || class_exists('\MailPoet\Config\Initializer')) ? true : false);

// Theme Style Compatibility
define('CMSMASTERS_THEME_STYLE_COMPATIBILITY', false);

// Theme Style
define('CMSMASTERS_THEME_STYLE', (CMSMASTERS_THEME_STYLE_COMPATIBILITY && get_option('cmsmasters_scandi_theme_style') ? get_option('cmsmasters_scandi_theme_style') : ''));

// Theme Colored Categories Compatibility
define('CMSMASTERS_COLORED_CATEGORIES', false);

// Theme Categories Icon Compatibility
define('CMSMASTERS_CATEGORIES_ICON', false);

// Theme Projects Compatibility
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatibility
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Theme Developer Mode
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}

// Yith WooCommerce Quick View Plugin Support Constants
define('CMSMASTERS_WCQV', (class_exists('YITH_WCQV') && CMSMASTERS_WOOCOMMERCE) ? true : false);

// Yith WooCommerce Zoom Magnifier Plugin Support Constants
define('CMSMASTERS_WCMG', (class_exists('YITH_WooCommerce_Zoom_Magnifier') && CMSMASTERS_WOOCOMMERCE) ? true : false);

// Yith WooCommerce Wishlist Plugin Support Constants
define('CMSMASTERS_WCWL', (class_exists('YITH_WCWL') && CMSMASTERS_WOOCOMMERCE) ? true : false);

// Yith WooCommerce Ajax Search Plugin Support Constants
define('CMSMASTERS_WCAS', (class_exists('YITH_WCAS') && CMSMASTERS_WOOCOMMERCE) ? true : false);

// Theme Settings All Theme Styles
if (!function_exists('scandi_all_theme_styles')) {
	function scandi_all_theme_styles() {
		$out = array( 
			'Default|', 
			'Theme Style 1|1', 
			'Theme Style 2|2' 
		);
		
		
		return $out;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('scandi_all_color_schemes_list')) {
	function scandi_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'scandi'), 
			'header' => 		esc_html__('Header', 'scandi'), 
			'navigation' => 	esc_html__('Navigation', 'scandi'), 
			'header_top' => 	esc_html__('Header Top', 'scandi'), 
			'footer' => 		esc_html__('Footer', 'scandi') 
		);
		
		
		$out = array_merge($list, scandi_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_VARS', get_template_directory() . '/theme-vars');
define('CMSMASTERS_VARS_STYLE', CMSMASTERS_VARS . '/theme-style' . CMSMASTERS_THEME_STYLE);
define('CMSMASTERS_DEMO_FILES_PATH', CMSMASTERS_VARS_STYLE . '/admin/demo-content/');


// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/browser.php');

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_VARS_STYLE . '/admin/demo-content-importer.php');
}

require_once(CMSMASTERS_VARS_STYLE . '/admin/theme-settings-defaults.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/general-functions.php');

require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/theme-functions.php');

require_once(CMSMASTERS_VARS_STYLE . '/theme-vars-functions.php');

require_once(CMSMASTERS_VARS . '/plugin-activator.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/views.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-module-functions.php');
}

// Theme Colored Categories functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}

// Theme Categories Icon functions
if (CMSMASTERS_CATEGORIES_ICON) {
	require_once(CMSMASTERS_FUNCTION . '/theme-categories-icon.php');
}

// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Sermons functions
if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	require_once(get_template_directory() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// WooCommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Tribe Events functions
if (CMSMASTERS_TRIBE_EVENTS) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Timetable functions
if (CMSMASTERS_TIMETABLE) {
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// MP Timetable functions
if (CMSMASTERS_MP_TIMETABLE) {
	require_once(get_template_directory() . '/mp-timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// LearnPress functions
if (CMSMASTERS_LEARNPRESS) {
	require_once(get_template_directory() . '/learnpress/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// TC Events functions
if (CMSMASTERS_TC_EVENTS) {
	require_once(get_template_directory() . '/tc-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Yith WooCommerce Quick View functions
if (CMSMASTERS_WCQV) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/cmsmasters-plugin-functions.php');
}

// Yith WooCommerce Zoom Magnifier functions
if (CMSMASTERS_WCMG) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/cmsmasters-plugin-functions.php');
}

// Yith WooCommerce Wishlist functions
if (CMSMASTERS_WCWL) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/cmsmasters-plugin-functions.php');
}

// Yith WooCommerce Ajax Search functions
if (CMSMASTERS_WCAS) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/cmsmasters-plugin-functions.php');
}


// Load Theme Local File
if (!function_exists('scandi_load_theme_textdomain')) {
	function scandi_load_theme_textdomain() {
		load_theme_textdomain('scandi', CMSMASTERS_VARS . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'scandi_load_theme_textdomain')) {
	add_action('after_setup_theme', 'scandi_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('scandi_theme_activation')) {
	function scandi_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'scandi') {
			add_option('cmsmasters_active_theme', 'scandi', '', 'yes');
			
			
			scandi_add_global_options();
			
			
			scandi_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'scandi_theme_activation');



// Framework Deactivation
if (!function_exists('scandi_theme_deactivation')) {
	function scandi_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

add_action('switch_theme', 'scandi_theme_deactivation');



// Plugin Activation Regenerate Styles
if (!function_exists('scandi_plugin_activation')) {
	function scandi_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'scandi_plugin_activation', 10, 2);


if (!function_exists('scandi_plugin_activation_regenerate')) {
	function scandi_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			scandi_regenerate_styles();
			
			scandi_add_global_options();
			
			scandi_add_global_icons();
			
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'scandi_plugin_activation_regenerate');


/* Yith WooCommerce Ajax Search Color Default */
function scandi_woocommerce_catalog_images_default() {
	update_option('shop_catalog_image_size', array(
		'width'  => '450',
		'height' => '450',
		'crop'   => 1
	));
	update_option('shop_thumbnail_image_size', array(
		'width'  => '50',
		'height' => '50',
		'crop'   => 1
	));
}

add_action('activate_woocommerce/woocommerce.php', 'scandi_woocommerce_catalog_images_default');



/* Yith WooCommerce Ajax Search Color Default */
function scandi_ajax_search_premium_colors_default() {
	update_option('yith_wcas_sale_badge_bgcolor', '');
	update_option('yith_wcas_sale_badge_color', '');
	update_option('yith_wcas_featured_badge_bgcolor', '');
	update_option('yith_wcas_featured_badge_color', '');
	update_option('yith_wcas_outofstock_badge_bgcolor', '');
	update_option('yith_wcas_outofstock_badge_color', '');
	update_option('yith_wcas_search_title_color', '');
}

add_action('activate_yith-woocommerce-ajax-search-premium/init.php', 'scandi_ajax_search_premium_colors_default');



/* Yith WooCommerce Ajax Search Color Default */
function scandi_ajax_search_colors_default() {
	update_option('yith_wcas_search_submit_label', '');
}

add_action('activate_yith-woocommerce-ajax-search/init.php', 'scandi_ajax_search_colors_default');



/* Yith WooCommerce Quick View Color Default */
function scandi_quick_view_colors_default() {
	update_option('yith-wcqv-button-label', '');
	update_option('yith-wcqv-background-modal', '');
	update_option('yith-wcqv-close-color', '');
	update_option('yith-wcqv-close-color-hover', '');
}

add_action('activate_yith-woocommerce-quick-view/init.php', 'scandi_quick_view_colors_default');



/* Yith WooCommerce Quick View Color Default */
function scandi_quick_view_premium_colors_default() {
	update_option('yith-wcqv-background-modal', '');
	update_option('yith-wcqv-button-quick-view-color', '');
	update_option('yith-wcqv-button-quick-view-text-color', '');
	update_option('yith-wcqv-button-quick-view-color-hover', '');
	update_option('yith-wcqv-button-quick-view-text-color-hover', '');
	update_option('yith-wcqv-main-text-color', '');
	update_option('yith-wcqv-star-color', '');
	update_option('yith-wcqv-button-cart-color', '');
	update_option('yith-wcqv-button-cart-text-color', '');
	update_option('yith-wcqv-button-cart-color-hover', '');
	update_option('yith-wcqv-button-cart-text-color-hover', '');
	update_option('yith-wcqv-button-details-color', '');
	update_option('yith-wcqv-button-details-text-color', '');
	update_option('yith-wcqv-button-details-color-hover', '');
	update_option('yith-wcqv-button-details-text-color-hover', '');
	update_option('yith-wcqv-close-color', '');
	update_option('yith-wcqv-close-color-hover', '');
}

add_action('activate_yith-woocommerce-quick-view-premium/init.php', 'scandi_quick_view_premium_colors_default');


/* Yith WooCommerce Wishlist Free Options Defaults */
function scandi_wishlist_free_options_defaults() {
    update_option('yith_wcwl_remove_after_add_to_cart', 'no');
}

add_action('activate_yith-woocommerce-wishlist/init.php', 'scandi_wishlist_free_options_defaults');


function scandi_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = scandi_get_custom_all_meta_fields();
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}
	
	
	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'scandi_run_reinit_import_options', 10, 3);

