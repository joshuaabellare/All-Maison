<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function scandi_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'scandi');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'scandi');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'scandi');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'scandi');
	$tabs['error'] = esc_attr__('404', 'scandi');
	$tabs['code'] = esc_attr__('Custom Codes', 'scandi');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'scandi');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function scandi_options_element_sections() {
	$tab = scandi_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'scandi');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'scandi');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'scandi');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'scandi');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'scandi');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'scandi');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'scandi');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function scandi_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = scandi_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = scandi_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'scandi' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'scandi'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['scandi' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'scandi' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'scandi'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['scandi' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'scandi'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'scandi') . '|dark', 
				esc_html__('Light', 'scandi') . '|light', 
				esc_html__('Mac', 'scandi') . '|mac', 
				esc_html__('Metro Black', 'scandi') . '|metro-black', 
				esc_html__('Metro White', 'scandi') . '|metro-white', 
				esc_html__('Parade', 'scandi') . '|parade', 
				esc_html__('Smooth', 'scandi') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'scandi'), 
			'desc' => esc_html__('Sets path for switching windows', 'scandi'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'scandi') . '|vertical', 
				esc_html__('Horizontal', 'scandi') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'scandi'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'scandi'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'scandi'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'scandi'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'scandi'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'scandi'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'scandi'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'scandi'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'scandi'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'scandi'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'scandi') . '|center', 
				esc_html__('Fit', 'scandi') . '|fit', 
				esc_html__('Fill', 'scandi') . '|fill', 
				esc_html__('Stretch', 'scandi') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'scandi'), 
			'desc' => esc_html__('Sets buttons be available or not', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'scandi'), 
			'desc' => esc_html__('Enable the arrow buttons', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'scandi'), 
			'desc' => esc_html__('Sets the fullscreen button', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'scandi'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'scandi'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'scandi'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'scandi'), 
			'desc' => esc_html__('Sets the swipe navigation', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'scandi' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'scandi'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'scandi' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_color', 
			'title' => esc_html__('Text Color', 'scandi'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['scandi' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'scandi'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'scandi'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'scandi') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'scandi') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'scandi') . '|repeat-y', 
				esc_html__('Repeat', 'scandi') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'scandi'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'scandi') . '|top left', 
				esc_html__('Top Center', 'scandi') . '|top center', 
				esc_html__('Top Right', 'scandi') . '|top right', 
				esc_html__('Center Left', 'scandi') . '|center left', 
				esc_html__('Center Center', 'scandi') . '|center center', 
				esc_html__('Center Right', 'scandi') . '|center right', 
				esc_html__('Bottom Left', 'scandi') . '|bottom left', 
				esc_html__('Bottom Center', 'scandi') . '|bottom center', 
				esc_html__('Bottom Right', 'scandi') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'scandi') . '|scroll', 
				esc_html__('Fixed', 'scandi') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'scandi') . '|auto', 
				esc_html__('Cover', 'scandi') . '|cover', 
				esc_html__('Contain', 'scandi') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_search', 
			'title' => esc_html__('Search Line', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'scandi' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'scandi'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['scandi' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'scandi'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['scandi' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'scandi' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'scandi' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'scandi' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

