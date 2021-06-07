<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function scandi_theme_fonts() {
	$cmsmasters_option = scandi_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	div.wpforms-container form.wpforms-form .wpforms-field-label,
	div.wpforms-container form.wpforms-form .wpforms-field-label-inline,
	.nf-form-wrap .nf-form-layout .nf-form-content .nf-field-label label,
	kbd,
	#wp-calendar tbody td, 
	#wp-calendar tbody th,
	.cmsmasters_post_default .cmsmasters_post_cont_info,
	.cmsmasters_post_default .cmsmasters_post_cont_info a,
	.cmsmasters_post_default .cmsmasters_post_cont_info a span.fn,
	.widget_recent_entries a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_latest li a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_popular li a,
	.widget_custom_contact_info_entries .contact_info_item_desc {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_content_font_google_font']) . $cmsmasters_option['scandi' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_content_font_font_style'] . ";
	}
	
	#wp-calendar tbody td, 
	#wp-calendar tbody th,
	.widget_custom_contact_info_entries .contact_info_item_desc {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_content_font_font_size'] - 2) . "px;
	}

	.widget_recent_entries a,
	.widget_custom_contact_info_entries .contact_info_item_desc,
	.widget_custom_contact_info_entries .contact_info_item_desc a {
		line-height:" . ((int) $cmsmasters_option['scandi' . '_content_font_line_height'] - 4) . "px;
	}

	.cmsmasters_post_default .cmsmasters_post_cont_info a {
		font-weight:" . $cmsmasters_option['scandi' . '_h4_font_font_weight'] . ";
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['scandi' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	.subpage_nav > span:not([class]),
	.cmsmasters_wrap_pagination ul li .page-numbers,
	.cmsmasters_comment_item_title {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_link_font_google_font']) . $cmsmasters_option['scandi' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_link_font_text_decoration'] . ";
	}

	.bottom_inner a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_link_font_font_size'] - 1) . "px;
	}

	a:hover {
		text-decoration:" . $cmsmasters_option['scandi' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span,
	.header_top_meta,
	.navigation > li > a, 
	.top_line_nav > li > a {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_nav_title_font_google_font']) . $cmsmasters_option['scandi' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_nav_title_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_font_size'] - 1) . "px;
	}
	
	.header_top_meta,
	.navigation .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_font_size'] - 1) . "px;
		font-weight:normal;
		text-transform:none;
	}

	.header_top_meta {
		font-weight:" . $cmsmasters_option['scandi' . '_content_font_font_weight'] . ";
	}
	
	.navigation .nav_tag {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_line_height'] - 4) . "px;
	}
	
	ul.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_nav_title_font_line_height'] - 4) . "px;
	}
	
	#header .navigation .cmsmasters_resp_nav_toggle {
		height:" . $cmsmasters_option['scandi' . '_nav_title_font_line_height'] . "px;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a, 
	.footer_nav > li > a {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['scandi' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.top_line_nav ul li a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_nav_dropdown_font_line_height'] - 2) . "px;
	}
	
	nav > div > ul div.menu-item-mega-container > ul > li > a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_nav_dropdown_font_font_size'] + 1) . "px;
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title, 
	.cmsmasters_archive_type .cmsmasters_archive_item_title a,
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day,
	.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h1_font_google_font']) . $cmsmasters_option['scandi' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_placeholder:before,
	blockquote:before, 
	.cmsmasters_quotes_grid .cmsmasters_quotes_list:after,
	.cmsmasters_dropcap {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h1_font_google_font']) . $cmsmasters_option['scandi' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['scandi' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h1_font_google_font']) . $cmsmasters_option['scandi' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['scandi' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		font-size:70px; /* static */
		line-height:70px; /* static */
	}
	
	blockquote:before {
		font-size:72px; /* static */
		line-height:72px; /* static */
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_placeholder:before {
		font-size:120px; /* static */
		line-height:150px; /* static */
		font-weight:bold; /* static */
		font-style:italic; /* static */
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quotes_list:after {
		font-size:50px; /* static */
		line-height:70px; /* static */
		font-weight:bold; /* static */
		font-style:normal; /* static */
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:56px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:34px; /* static */
		line-height:60px; /* static */
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 10) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 20) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 20) . "px;
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 6) . "px;
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['scandi' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['scandi' . '_h1_font_line_height'] + 15) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	table caption,
	.cmsmasters_pricing_table .cmsmasters_currency,
	.comment-respond .comment-reply-title a,
	.comment-respond .comment-reply-title,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title a {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h2_font_google_font']) . $cmsmasters_option['scandi' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h2_font_text_decoration'] . ";
	}

	.cmsmasters_post_header h2,
	.cmsmasters_post_header h2 a {
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h2_font_line_height'] - 2) . "px;
	}

	@media only screen and (max-width: 768px) and (min-width: 540px) {
		.cmsmasters_project_puzzle .cmsmasters_project_title a {
			font-size:" . ((int) $cmsmasters_option['scandi' . '_h2_font_font_size'] - 12) . "px;
			line-height:" . ((int) $cmsmasters_option['scandi' . '_h2_font_line_height'] - 14) . "px;		
		}
	}

	@media only screen and (max-width: 400px) {
		.cmsmasters_project_puzzle .cmsmasters_project_title a {
			font-size:" . ((int) $cmsmasters_option['scandi' . '_h2_font_font_size'] - 12) . "px;
			line-height:" . ((int) $cmsmasters_option['scandi' . '_h2_font_line_height'] - 14) . "px;		
		}
	}

	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.widget_wysija .widgettitle,
	.widget_rss ul li .rsswidget,
	table thead tr th,
	table thead tr td,
	table tfoot tr th,
	table tfoot tr td,
	.cmsmasters_latest_posts_list li .cmsmasters_latest_posts_cont a,
	.cmsmasters_open_profile .profile_details_item_title, 
	.cmsmasters_open_profile .profile_features_item_title,
	.cmsmasters_open_project .project_details_item_title, 
	.cmsmasters_open_project .project_features_item_title,
	.comment-respond .comment-reply-title a,
	.post_nav > span a,
	.cmsmasters_toggles .cmsmasters_toggle_title a,
	.cmsmasters_wrap_items_loader .cmsmasters_items_loader,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_4 .cmsmasters_post_masonry h2,
	.cmsmasters_4 .cmsmasters_post_masonry h2 a {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h3_font_google_font']) . $cmsmasters_option['scandi' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h3_font_text_decoration'] . ";
	}

	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_open_profile .profile_details_item_title, 
	.cmsmasters_open_profile .profile_features_item_title,
	.cmsmasters_open_project .project_details_item_title, 
	.cmsmasters_open_project .project_features_item_title {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h3_font_font_size'] - 2) . "px;
		line-height:20px; /* static */
	}
	
	
	table tfoot tr th,
	table tfoot tr td {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h3_font_font_size'] - 1) . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,
	#wp-calendar caption,
	.widget_rss .widgettitle a,
	.widgettitle,
	#wp-calendar thead th,
	.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_img_caption,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h4_font_google_font']) . $cmsmasters_option['scandi' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h4_font_text_decoration'] . ";
	}
	
	#wp-calendar caption {
		text-transform:none;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	#sb_instagram .sbi_follow_btn a,
	.cmsmasters_archive_read_more,
	.widget_custom_twitter_entries .tweet_time,
	.widget_tag_cloud a,
	.widget_custom_popular_projects_entries .cmsmasters_project_category a, 
	.widget_custom_latest_projects_entries .cmsmasters_project_category a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item:before,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.widget_categories li a,
	.widget_categories li,  
	.widget_archive li a, 
	.widget_meta li a,
	.widget_pages li a,
	.widget_nav_menu li a,
	.share_posts a,
	.comment-edit-link,
	.comment-reply-title small #cancel-comment-reply-link,
	.post_nav > span .post_nav_sub,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	.cmsmasters_open_profile .profile_details_item_desc, 
	.cmsmasters_open_profile .profile_features_item_desc,
	.cmsmasters_open_profile .profile_details_item_desc a,
	.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_category,
	.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_category a,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_category,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_category a,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_tags,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_tags a,
	.cmsmasters_project_grid .cmsmasters_project_category a,
	.cmsmasters_project_puzzle .cmsmasters_project_category a,
	.cmsmasters_open_project .project_details_item_desc, 
	.cmsmasters_open_project .project_details_item_desc a, 
	.cmsmasters_open_project .project_features_item_desc,
	.cmsmasters_open_project .project_features_item_desc a,
	.cmsmasters_post_category a,
	.cmsmasters_slider_post_category a,
	.cmsmasters_slider_project_category a,
	.cmsmasters_open_post .cmsmasters_post_tags a,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_year,
	.cmsmasters_pricing_table .pricing_title,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_likes a span,
	.cmsmasters_comments a span,
	.widget_custom_contact_info_entries .contact_info_item_title,
	.widget_custom_contact_info_entries .contact_info_item_desc a,
	.comment-form-rating label,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h5_font_google_font']) . $cmsmasters_option['scandi' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h5_font_text_decoration'] . ";
	}

	.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_tags a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h5_font_font_size'] - 2) . "px;
	}

	.cmsmasters_post_author .fn {
		font-size:" . $cmsmasters_option['scandi' . '_h5_font_font_size'] . "px;
	}

	.widget_categories li a,
	.widget_categories li, 
	.widget_archive li a, 
	.widget_meta li a,
	.widget_pages li a,
	.widget_nav_menu li a {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h5_font_font_size'] - 2) . "px;
	}

	.widget_custom_contact_info_entries .contact_info_item_desc a {
		line-height:" . ((int) $cmsmasters_option['scandi' . '_h5_font_line_height'] + 6) . "px;
		text-transform:" . $cmsmasters_option['scandi' . '_h6_font_text_transform'] . ";
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_year,
	.comment-form-rating label {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h5_font_font_size'] + 1) . "px;
	}

	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.widget_custom_contact_info_entries .contact_info_item_title {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h5_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_open_profile .profile_details_item_desc, 
	.cmsmasters_open_profile .profile_features_item_desc,
	.cmsmasters_open_profile .profile_details_item_desc a,
	.cmsmasters_open_project .project_details_item_desc, 
	.cmsmasters_open_project .project_details_item_desc a, 
	.cmsmasters_open_project .project_features_item_desc,
	.cmsmasters_open_project .project_features_item_desc a {
		text-transform:none; /* static */
		line-height:20px; /* static */
	}

	.comment-form-rating label,
	.wp-caption-text {
		text-transform:none; /* static */
	}
	
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_category,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_category a,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_tags,
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_tags a {
		line-height:20px; /* static */
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	address,
	.comment-respond .comment-form-author label, 
	.comment-respond .comment-form-email label, 
	.comment-respond .comment-form-comment label,
	.cmsmasters_archive_type .cmsmasters_archive_item_info,
	.cmsmasters_archive_type .cmsmasters_archive_item_info a,
	.cmsmasters-form-builder .form_info > label,
	.cmsmasters_post_masonry .cmsmasters_post_cont_info,
	.cmsmasters_open_post .cmsmasters_post_cont_info,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.cmsmasters_project_read_more {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_h6_font_google_font']) . $cmsmasters_option['scandi' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['scandi' . '_h6_font_text_decoration'] . ";
	}

	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.cmsmasters_project_read_more {
		text-transform:" . $cmsmasters_option['scandi' . '_h6_font_text_transform'] . ";
	}

	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.cmsmasters_project_read_more {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_h6_font_font_size'] + 2) . "px;
	}

	.cmsmasters_post_masonry .cmsmasters_post_cont_info,
	.cmsmasters_open_post .cmsmasters_post_cont_info,
	.cmsmasters_likes a span,
	.cmsmasters_comments a span {
		font-weight:" . $cmsmasters_option['scandi' . '_input_font_font_weight'] . ";
	}
	
	address {
		font-weight:normal;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit],
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_button_font_google_font']) . $cmsmasters_option['scandi' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_button_font_text_transform'] . ";
	}

	.r_sidebar .button,
	l_sidebar .button,
	.sidebar .button {
		line-height:" . ((int) $cmsmasters_option['scandi' . '_button_font_line_height'] - 6) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['scandi' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['scandi' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['scandi' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	.cmsmasters_latest_posts_list li .cmsmasters_latest_posts_cont > .published,
	.widget_rss ul li .rss-date,
	.widget_recent_comments .post-date, 
	.widget_recent_entries .post-date,
	#wp-calendar tfoot a,
	.widget_archive li, 
	.widget_meta li,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.cmsmasters_post_timeline .cmsmasters_post_cont_info,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	form .formError .formErrorContent,
	.cmsmasters_product .cmsmasters_product_but_wrap .cmsmasters_add_to_cart_button span,
	.cmsmasters_quick_view_button .quick_view_tooltip,
	.cmsmasters_add_wishlist_button .browse_wishlist_tooltip,
	.cmsmasters_add_wishlist_button .add_to_wishlist_tooltip,
	.cmsmasters_product .cmsmasters_product_but_wrap .add_to_cart_tooltip,
	.cmsmasters_product .cmsmasters_product_but_wrap .cmsmasters_quick_view_button span:not(:last-child) {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_small_font_google_font']) . $cmsmasters_option['scandi' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['scandi' . '_small_font_text_transform'] . ";
	}

	.cmsmasters_product .button.cmsmasters_quick_view_button  {
		line-height:" . ((int) $cmsmasters_option['scandi' . '_small_font_line_height'] + 20) . "px;
	}

	.widget_recent_entries .post-date,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_small_font_font_size'] - 1 ) . "px;
	}

	.cmsmasters_open_post .cmsmasters_post_cont_info a,
	.cmsmasters_post_masonry .cmsmasters_post_cont_info a,
	.cmsmasters_post_timeline .cmsmasters_post_cont_info a, {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_small_font_font_size'] + 1 ). "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_small_font_google_font']) . $cmsmasters_option['scandi' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['scandi' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['scandi' . '_small_font_line_height'] . "px !important;
	}
	
	.cmsmasters_likes a span, 
	.cmsmasters_comments a span {
		line-height:20px;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	.cmsmasters_contact_form div.wpforms-container .wpforms-form select,
	.cmsmasters_contact_form div.wpforms-container .wpforms-form textarea,
	.cmsmasters_contact_form div.wpforms-container .wpforms-form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option,
	.check_parent label {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_input_font_google_font']) . $cmsmasters_option['scandi' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['scandi' . '_input_font_font_size'] . "px !important;
	}

	@media only screen and (max-width: 1440px) and (min-width: 950px) {
		.widget input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
			font-size:" . ((int) $cmsmasters_option['scandi' . '_input_font_font_size'] - 2) . "px;
		}
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.cmsmasters_quotes_grid .cmsmasters_quote_content,
	.cmsmasters_quotes_slider .cmsmasters_quote_content,
	blockquote {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_quote_font_google_font']) . $cmsmasters_option['scandi' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['scandi' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['scandi' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['scandi' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . scandi_get_google_font($cmsmasters_option['scandi' . '_quote_font_google_font']) . $cmsmasters_option['scandi' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['scandi' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['scandi' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_quote_font_font_size'] + 18) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_quote_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['scandi' . '_quote_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['scandi' . '_quote_font_line_height'] + 2) . "px;
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('scandi_theme_fonts_filter', $custom_css);
}

