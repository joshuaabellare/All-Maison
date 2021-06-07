<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.0
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('scandi_settings_general_defaults')) {

function scandi_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'scandi' . '_theme_layout' => 		'liquid', 
			'scandi' . '_logo_type' => 			'image', 
			'scandi' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'scandi' . '_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'scandi' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'scandi', 
			'scandi' . '_logo_subtitle' => 		'', 
			'scandi' . '_logo_custom_color' => 	0, 
			'scandi' . '_logo_title_color' => 	'', 
			'scandi' . '_logo_subtitle_color' => '' 
		), 
		'bg' => array( 
			'scandi' . '_bg_col' => 			'#ffffff', 
			'scandi' . '_bg_img_enable' => 	0, 
			'scandi' . '_bg_img' => 			'', 
			'scandi' . '_bg_rep' => 			'no-repeat', 
			'scandi' . '_bg_pos' => 			'top center', 
			'scandi' . '_bg_att' => 			'scroll', 
			'scandi' . '_bg_size' => 		'cover' 
		), 
		'header' => array( 
			'scandi' . '_fixed_header' => 				1, 
			'scandi' . '_header_layout' => 		 'liquid',
			'scandi' . '_header_overlaps' => 			0, 
			'scandi' . '_header_top_line' => 			0, 
			'scandi' . '_header_top_height' => 			'40', 
			'scandi' . '_header_top_line_short_info' => 	'', 
			'scandi' . '_header_top_line_add_cont' => 	'nav', 
			'scandi' . '_header_styles' => 				'l_nav', 
			'scandi' . '_header_mid_height' => 			'100', 
			'scandi' . '_header_bot_height' => 			'60', 
			'scandi' . '_header_search' => 				0, 
			'scandi' . '_header_add_cont' => 			'social', 
			'scandi' . '_header_add_cont_cust_html' => 	'', 
			'scandi' . '_woocommerce_cart_dropdown' => 	0,
		), 
		'content' => array( 
			'scandi' . '_layout' => 				'r_sidebar', 
			'scandi' . '_archives_layout' => 		'r_sidebar', 
			'scandi' . '_search_layout' => 			'r_sidebar', 
			'scandi' . '_other_layout' => 			'r_sidebar', 
			'scandi' . '_heading_alignment' => 		'center', 
			'scandi' . '_heading_scheme' => 			'first', 
			'scandi' . '_heading_bg_image_enable' => 1, 
			'scandi' . '_heading_bg_image' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' .  CMSMASTERS_THEME_STYLE . '/img/headline_bg.jpg',
			'scandi' . '_heading_bg_repeat' => 		'no-repeat', 
			'scandi' . '_heading_bg_attachment' => 	'scroll', 
			'scandi' . '_heading_bg_size' => 		'cover', 
			'scandi' . '_heading_bg_color' => 		'', 
			'scandi' . '_heading_height' => 			'400', 
			'scandi' . '_breadcrumbs' => 			1, 
			'scandi' . '_bottom_scheme' => 			'second', 
			'scandi' . '_bottom_sidebar' => 			0, 
			'scandi' . '_bottom_sidebar_layout' => 	'121414' 
		), 
		'footer' => array( 
			'scandi' . '_footer_scheme' => 				'footer', 
			'scandi' . '_footer_layout' => 		 		'liquid',
			'scandi' . '_footer_type' => 				'small', 
			'scandi' . '_footer_additional_content' => 	'social', 
			'scandi' . '_footer_logo' => 				1, 
			'scandi' . '_footer_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'scandi' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'scandi' . '_footer_nav' => 					1, 
			'scandi' . '_footer_social' => 				1, 
			'scandi' . '_footer_html' => 				'', 
			'scandi' . '_footer_copyright' => 			'This is a sample website - cmsmasters' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'scandi') 
		) 
	);
	
	
	$settings = apply_filters('scandi_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}


/* Theme Settings Fonts Default Values */
if (!function_exists('scandi_settings_font_defaults')) {

function scandi_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'scandi' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'scandi' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'scandi' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'default' 
			), 
			'scandi' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'14', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'default' 
			) 
		), 
		'heading' => array( 
			'scandi' . '_h1_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Vollkorn:400', 
				'font_size' => 			'40', 
				'line_height' => 		'52', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_h2_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Vollkorn:400', 
				'font_size' => 			'30', 
				'line_height' => 		'40', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_h3_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Vollkorn:400', 
				'font_size' => 			'22', 
				'line_height' => 		'30', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'scandi' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'scandi' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'13', 
				'line_height' => 		'38', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'scandi' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'scandi' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Ubuntu:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'scandi' . '_quote_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Vollkorn:400', 
				'font_size' => 			'20', 
				'line_height' => 		'32', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic' 
			) 
		), 
		'google' => array( 
			'scandi' . '_google_web_fonts' => array( 
				'Vollkorn:400|Vollkorn', 
				'Ubuntu:300,400,500,700|Ubuntu'
			) 
		) 
	);
	
	
	$settings = apply_filters('scandi_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#72787b', 
		'#51736e', 
		'#c7a095', 
		'#393b42', 
		'#f2edec', 
		'#ffffff', 
		'#d6d6d6',
		'#eaeaea'
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('scandi_color_schemes_defaults')) {

function scandi_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#72787b', 
			'link' => 		'#51736e', 
			'hover' => 		'#c7a095', 
			'heading' => 	'#393b42', 
			'bg' => 		'#f2edec', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d6d6d6' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#878e91', 
			'mid_link' => 		'#393b42', 
			'mid_hover' => 		'#2c8779', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'#eaeaea', 
			'bot_color' => 		'#878e91', 
			'bot_link' => 		'#393b42', 
			'bot_hover' => 		'#2c8779', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#eaeaea' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#393b42', 
			'title_link_hover' => 		'#2c8779', 
			'title_link_current' => 	'#2c8779', 
			'title_link_subtitle' => 	'#cdc1bd', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#878e91', 
			'dropdown_bg' => 			'#f6f6f6', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#9ea0a6', 
			'dropdown_link_hover' => 	'#c88f7f', 
			'dropdown_link_subtitle' => '#cdc1bd', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.8)', 
			'link' => 					'#ffffff', 
			'hover' => 					'rgba(255,255,255,0.6)', 
			'bg' => 					'#656261', 
			'border' => 				'rgba(255,255,255,0)', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.6)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#dae3e2', 
			'dropdown_border' => 		'#ebebeb', 
			'dropdown_link' => 			'#87908e', 
			'dropdown_link_hover' => 	'#393b42', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.7)', 
			'link' => 		'rgba(255,255,255,0.8)', 
			'hover' => 		'rgba(255,255,255,0.3)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#3c3d3e', 
			'alternate' => 	'#3c3d3e', 
			'border' => 	'rgba(255,255,255,0.2)' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'#ffffff', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#f8efea', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#ebebeb' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#848180', 
			'link' => 		'#706c6c', 
			'hover' => 		'#352e2b', 
			'heading' => 	'#272220', 
			'bg' => 		'#f8f7f5', 
			'alternate' => 	'#f8f7f5', 
			'border' => 	'#cfcdc9' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#878787', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4' 
		) 
	);
	
	
	$settings = apply_filters('scandi_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('scandi_settings_element_defaults')) {

function scandi_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'scandi' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'scandi' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'scandi') . '|true||', 
				'cmsmasters-icon-twitter-1|#|' . esc_html__('Twitter', 'scandi') . '|true||', 
				'cmsmasters-icon-linkedin-1|#|' . esc_html__('Linkedin', 'scandi') . '|true||', 
				'cmsmasters-icon-vimeo|#|' . esc_html__('Vimeo', 'scandi') . '|true||', 
				'cmsmasters-icon-pinterest-1|#|' . esc_html__('Pinterest', 'scandi') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'scandi' . '_ilightbox_skin' => 					'dark', 
			'scandi' . '_ilightbox_path' => 					'vertical', 
			'scandi' . '_ilightbox_infinite' => 				0, 
			'scandi' . '_ilightbox_aspect_ratio' => 			1, 
			'scandi' . '_ilightbox_mobile_optimizer' => 		1, 
			'scandi' . '_ilightbox_max_scale' => 			1, 
			'scandi' . '_ilightbox_min_scale' => 			0.2, 
			'scandi' . '_ilightbox_inner_toolbar' => 		0, 
			'scandi' . '_ilightbox_smart_recognition' => 	0, 
			'scandi' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'scandi' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'scandi' . '_ilightbox_controls_toolbar' => 		1, 
			'scandi' . '_ilightbox_controls_arrows' => 		0, 
			'scandi' . '_ilightbox_controls_fullscreen' => 	1, 
			'scandi' . '_ilightbox_controls_thumbnail' => 	1, 
			'scandi' . '_ilightbox_controls_keyboard' => 	1, 
			'scandi' . '_ilightbox_controls_mousewheel' => 	1, 
			'scandi' . '_ilightbox_controls_swipe' => 		1, 
			'scandi' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'scandi' . '_sitemap_nav' => 		1, 
			'scandi' . '_sitemap_categs' => 		1, 
			'scandi' . '_sitemap_tags' => 		1, 
			'scandi' . '_sitemap_month' => 		1, 
			'scandi' . '_sitemap_pj_categs' => 	1, 
			'scandi' . '_sitemap_pj_tags' => 	1 
		), 
		'error' => array( 
			'scandi' . '_error_color' => 			'#51736e', 
			'scandi' . '_error_bg_color' => 			'#ffffff', 
			'scandi' . '_error_bg_img_enable' => 	0, 
			'scandi' . '_error_bg_image' => 			'', 
			'scandi' . '_error_bg_rep' => 			'no-repeat', 
			'scandi' . '_error_bg_pos' => 			'top center', 
			'scandi' . '_error_bg_att' => 			'scroll', 
			'scandi' . '_error_bg_size' => 			'cover', 
			'scandi' . '_error_search' => 			1, 
			'scandi' . '_error_sitemap_button' => 	1, 
			'scandi' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'scandi' . '_custom_css' => 			'', 
			'scandi' . '_custom_js' => 			'', 
			'scandi' . '_gmap_api_key' => 		'', 
			'scandi' . '_api_key' => 			'', 
			'scandi' . '_api_secret' => 			'', 
			'scandi' . '_access_token' => 		'', 
			'scandi' . '_access_token_secret' => '' 
		), 
		'recaptcha' => array( 
			'scandi' . '_recaptcha_public_key' => 	'', 
			'scandi' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('scandi_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('scandi_settings_single_defaults')) {

function scandi_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'scandi' . '_blog_post_layout' => 		'r_sidebar', 
			'scandi' . '_blog_post_title' => 		1, 
			'scandi' . '_blog_post_date' => 			1, 
			'scandi' . '_blog_post_cat' => 			1, 
			'scandi' . '_blog_post_author' => 		1, 
			'scandi' . '_blog_post_comment' => 		1, 
			'scandi' . '_blog_post_tag' => 			1, 
			'scandi' . '_blog_post_like' => 			1, 
			'scandi' . '_blog_post_nav_box' => 		1, 
			'scandi' . '_blog_post_nav_order_cat' => 0, 
			'scandi' . '_blog_post_share_box' => 	1, 
			'scandi' . '_blog_post_author_box' => 	1, 
			'scandi' . '_blog_more_posts_box' => 	'popular', 
			'scandi' . '_blog_more_posts_count' => 	'3', 
			'scandi' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'scandi' . '_portfolio_project_title' => 		1, 
			'scandi' . '_portfolio_project_details_title' => '', 
			'scandi' . '_portfolio_project_date' => 			1, 
			'scandi' . '_portfolio_project_cat' => 			1, 
			'scandi' . '_portfolio_project_author' => 		1, 
			'scandi' . '_portfolio_project_comment' => 		0, 
			'scandi' . '_portfolio_project_tag' => 			0, 
			'scandi' . '_portfolio_project_like' => 			1, 
			'scandi' . '_portfolio_project_link' => 			0, 
			'scandi' . '_portfolio_project_share_box' => 	1, 
			'scandi' . '_portfolio_project_nav_box' => 		1, 
			'scandi' . '_portfolio_project_nav_order_cat' => 0, 
			'scandi' . '_portfolio_project_author_box' => 	1, 
			'scandi' . '_portfolio_more_projects_box' => 	'popular', 
			'scandi' . '_portfolio_more_projects_count' => 	'4', 
			'scandi' . '_portfolio_more_projects_pause' => 	'5', 
			'scandi' . '_portfolio_project_slug' => 			'project', 
			'scandi' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'scandi' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'scandi' . '_profile_post_title' => 			1, 
			'scandi' . '_profile_post_details_title' => 	'', 
			'scandi' . '_profile_post_cat' => 			1, 
			'scandi' . '_profile_post_comment' => 		1, 
			'scandi' . '_profile_post_like' => 			1, 
			'scandi' . '_profile_post_nav_box' => 		1, 
			'scandi' . '_profile_post_nav_order_cat' => 	0,
			'scandi' . '_profile_post_share_box' => 		1, 
			'scandi' . '_profile_post_slug' => 			'profile', 
			'scandi' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('scandi_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('scandi_project_puzzle_proportion')) {

function scandi_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('scandi_project_puzzle_large_gar_parameters')) {

function scandi_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('scandi_get_image_thumbnail_list')) {

function scandi_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		70, 
			'height' => 	70, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		360, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'scandi') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'scandi') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'scandi') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'scandi') 
		), 
		'cmsmasters-profile-thumb' => array( 
			'width' => 		380, 
			'height' => 	292, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Profile', 'scandi') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	560, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'scandi') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'scandi') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'scandi') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'scandi') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'scandi') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('scandi_project_labels')) {

function scandi_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'scandi'), 
		'singular_name' => 			esc_html__('Project', 'scandi'), 
		'menu_name' => 				esc_html__('Projects', 'scandi'), 
		'all_items' => 				esc_html__('All Projects', 'scandi'), 
		'add_new' => 				esc_html__('Add New', 'scandi'), 
		'add_new_item' => 			esc_html__('Add New Project', 'scandi'), 
		'edit_item' => 				esc_html__('Edit Project', 'scandi'), 
		'new_item' => 				esc_html__('New Project', 'scandi'), 
		'view_item' => 				esc_html__('View Project', 'scandi'), 
		'search_items' => 			esc_html__('Search Projects', 'scandi'), 
		'not_found' => 				esc_html__('No projects found', 'scandi'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'scandi') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'scandi_project_labels');


if (!function_exists('scandi_pj_categs_labels')) {

function scandi_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'scandi'), 
		'singular_name' => 			esc_html__('Project Category', 'scandi') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'scandi_pj_categs_labels');


if (!function_exists('scandi_pj_tags_labels')) {

function scandi_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'scandi'), 
		'singular_name' => 			esc_html__('Project Tag', 'scandi') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'scandi_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('scandi_profile_labels')) {

function scandi_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'scandi'), 
		'singular_name' => 			esc_html__('Profiles', 'scandi'), 
		'menu_name' => 				esc_html__('Profiles', 'scandi'), 
		'all_items' => 				esc_html__('All Profiles', 'scandi'), 
		'add_new' => 				esc_html__('Add New', 'scandi'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'scandi'), 
		'edit_item' => 				esc_html__('Edit Profile', 'scandi'), 
		'new_item' => 				esc_html__('New Profile', 'scandi'), 
		'view_item' => 				esc_html__('View Profile', 'scandi'), 
		'search_items' => 			esc_html__('Search Profiles', 'scandi'), 
		'not_found' => 				esc_html__('No Profiles found', 'scandi'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'scandi') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'scandi_profile_labels');


if (!function_exists('scandi_pl_categs_labels')) {

function scandi_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'scandi'), 
		'singular_name' => 			esc_html__('Profile Category', 'scandi') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'scandi_pl_categs_labels');

