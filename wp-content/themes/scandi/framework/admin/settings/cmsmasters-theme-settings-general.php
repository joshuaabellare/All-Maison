<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function scandi_options_general_tabs() {
	$cmsmasters_option = scandi_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'scandi');
	
	if ($cmsmasters_option['scandi' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'scandi');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'scandi');
	}
	
	$tabs['header'] = esc_attr__('Header', 'scandi');
	$tabs['content'] = esc_attr__('Content', 'scandi');
	$tabs['footer'] = esc_attr__('Footer', 'scandi');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function scandi_options_general_sections() {
	$tab = scandi_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'scandi');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'scandi');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'scandi');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'scandi');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'scandi');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'scandi');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function scandi_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = scandi_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = scandi_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'scandi') . '|liquid', 
				esc_html__('Boxed', 'scandi') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'scandi') . '|image', 
				esc_html__('Text', 'scandi') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'scandi'), 
			'desc' => esc_html__('Choose your website logo image.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'scandi'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'scandi'), 
			'desc' => esc_html__('enable', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'scandi'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['scandi' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'scandi' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'scandi'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['scandi' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_col', 
			'title' => esc_html__('Background Color', 'scandi'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['scandi' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_img', 
			'title' => esc_html__('Background Image', 'scandi'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'scandi') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'scandi') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'scandi') . '|repeat-y', 
				esc_html__('Repeat', 'scandi') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'scandi'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['scandi' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'scandi') . '|scroll', 
				esc_html__('Fixed', 'scandi') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'scandi' . '_bg_size', 
			'title' => esc_html__('Background Size', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'scandi') . '|auto', 
				esc_html__('Cover', 'scandi') . '|cover', 
				esc_html__('Contain', 'scandi') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'scandi' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'scandi'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => scandi_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'scandi'), 
			'desc' => esc_html__('enable', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_fixed_header'] 
		);

		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_layout', 
			'title' => esc_html__('Header Layout', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_header_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'scandi') . '|liquid', 
				esc_html__('Boxed', 'scandi') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'scandi'), 
			'desc' => esc_html__('enable', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'scandi'), 
			'desc' => esc_html__('pixels', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'scandi'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'scandi') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['scandi' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'scandi') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'scandi') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'scandi') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'scandi') . '|default', 
				esc_html__('Compact Style Left Navigation', 'scandi') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'scandi') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'scandi') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'scandi'), 
			'desc' => esc_html__('pixels', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'scandi'), 
			'desc' => esc_html__('pixels', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_search', 
			'title' => esc_html__('Header Search', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'scandi') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'scandi') . '|social', 
				esc_html__('Header Custom HTML', 'scandi') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'scandi' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'scandi'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'scandi') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['scandi' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'scandi'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'scandi'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['scandi' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'scandi'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'scandi'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['scandi' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'scandi'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'scandi'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['scandi' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'scandi'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'scandi'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['scandi' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'scandi') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'scandi') . '|left', 
				esc_html__('Right', 'scandi') . '|right', 
				esc_html__('Center', 'scandi') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['scandi' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'scandi'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'scandi') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'scandi') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'scandi') . '|repeat-y', 
				esc_html__('Repeat', 'scandi') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'scandi') . '|scroll', 
				esc_html__('Fixed', 'scandi') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'scandi') . '|auto', 
				esc_html__('Cover', 'scandi') . '|cover', 
				esc_html__('Contain', 'scandi') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'scandi'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['scandi' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'scandi'), 
			'desc' => esc_html__('pixels', 'scandi'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['scandi' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'scandi'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['scandi' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'scandi'), 
			'desc' => esc_html__('show', 'scandi') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'scandi'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['scandi' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'scandi'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['scandi' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);

		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_layout', 
			'title' => esc_html__('Footer Layout', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_footer_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'scandi') . '|liquid', 
				esc_html__('Boxed', 'scandi') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'scandi') . '|default', 
				esc_html__('Small', 'scandi') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'scandi'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['scandi' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'scandi') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'scandi') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'scandi') . '|social', 
				esc_html__('Custom HTML', 'scandi') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'scandi'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'scandi'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'scandi'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['scandi' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'scandi'), 
			'desc' => esc_html__('show', 'scandi'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['scandi' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'scandi'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'scandi') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['scandi' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'scandi' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'scandi'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['scandi' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

