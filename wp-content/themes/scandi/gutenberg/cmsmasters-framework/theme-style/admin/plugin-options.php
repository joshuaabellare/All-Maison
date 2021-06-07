<?php 
/**
 * @package 	WordPress
 * @subpackage 	Right Candidate
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */

/* Filter for Product Options */
function right_candidate_sidebar_wide_full_meta_fields($custom_all_meta_fields) {
	$custom_all_meta_fields_new = array();
	
	$cmsmasters_option_name = 'cmsmasters_';
	
	
	if (
		/* Post Type Post */
		(isset($_GET['post_type']) && $_GET['post_type'] == 'post') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'post') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'post') ||

		/* Post Type Page */
		(isset($_GET['post_type']) && $_GET['post_type'] == 'page') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'page') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'page') ||

		/* Post Type Project */
		(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') ||

		/* Post Type Profiles */
		(isset($_GET['post_type']) && $_GET['post_type'] == 'profiles') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'profiles') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'profiles')
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_layout') {
				if(isset($custom_all_meta_field['desc'])) {
					$custom_all_meta_field['desc'] = $custom_all_meta_field['desc'] . '</br>' . esc_html__('Wide width and Full width options in Block Editor work only for posts without sidebars.', 'scandi');
				}


				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'right_candidate_sidebar_wide_full_meta_fields');