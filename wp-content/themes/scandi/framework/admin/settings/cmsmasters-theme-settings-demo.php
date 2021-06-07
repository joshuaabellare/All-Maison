<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function scandi_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'scandi');
	$tabs['export'] = esc_attr__('Export', 'scandi');
	
	
	return $tabs;
}


function scandi_options_demo_sections() {
	$tab = scandi_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'scandi');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'scandi');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function scandi_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = scandi_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'scandi' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'scandi'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'scandi') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'scandi') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'scandi') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'scandi') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'scandi' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'scandi'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'scandi') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'scandi') . '<br />' . esc_html__("Theme Style can be set", 'scandi') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'scandi') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'scandi'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

