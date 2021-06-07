<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.4
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function scandi_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('scandi-cmsmasters-c-c-theme-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('scandi-cmsmasters-c-c-theme-extend', 'cmsmasters_theme_shortcodes', array( 
			'gallery_field_layout_descr_note' => 		esc_attr__('For Hover Slider it is recommended that you use images with min size of 860&#215;560 or larger, but with the same image ratio', 'scandi')
		));
	}
}

add_action('admin_enqueue_scripts', 'scandi_theme_register_c_c_scripts');

