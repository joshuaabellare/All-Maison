<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function scandi_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'scandi');
	$tabs['link'] = esc_attr__('Links', 'scandi');
	$tabs['nav'] = esc_attr__('Navigation', 'scandi');
	$tabs['heading'] = esc_attr__('Heading', 'scandi');
	$tabs['other'] = esc_attr__('Other', 'scandi');
	$tabs['google'] = esc_attr__('Google Fonts', 'scandi');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function scandi_options_font_sections() {
	$tab = scandi_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'scandi');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'scandi');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'scandi');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'scandi');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'scandi');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'scandi');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function scandi_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = scandi_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = scandi_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'scandi' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'scandi' . '_link_font', 
			'title' => esc_html__('Links Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'scandi' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'scandi'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['scandi' . '_link_hover_decoration'], 
			'choices' => scandi_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'scandi' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'scandi' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'scandi' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'scandi' . '_button_font', 
			'title' => esc_html__('Button Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'scandi' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'scandi' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'scandi' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'scandi'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['scandi' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'scandi' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'scandi'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['scandi' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'scandi' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'scandi'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'scandi') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'scandi') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'scandi') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'scandi') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'scandi') . '|' . 'greek', 
				esc_html__('Greek Extended', 'scandi') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'scandi') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'scandi') . '|' . 'japanese', 
				esc_html__('Korean', 'scandi') . '|' . 'korean', 
				esc_html__('Thai', 'scandi') . '|' . 'thai', 
				esc_html__('Bengali', 'scandi') . '|' . 'bengali', 
				esc_html__('Devanagari', 'scandi') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'scandi') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'scandi') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'scandi') . '|' . 'hebrew', 
				esc_html__('Kannada', 'scandi') . '|' . 'kannada', 
				esc_html__('Khmer', 'scandi') . '|' . 'khmer', 
				esc_html__('Malayalam', 'scandi') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'scandi') . '|' . 'myanmar', 
				esc_html__('Oriya', 'scandi') . '|' . 'oriya', 
				esc_html__('Sinhala', 'scandi') . '|' . 'sinhala', 
				esc_html__('Tamil', 'scandi') . '|' . 'tamil', 
				esc_html__('Telugu', 'scandi') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

