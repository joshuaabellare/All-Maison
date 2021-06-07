/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.4
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Posts Slider Extend
 */
var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = '3';
		
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'blog_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,date,categories,author,comments,likes,more';
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,categories,comments,likes';
		
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes 
		};
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;



/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;


/**
 * Blog Extend
 */

var cmsmasters_blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'layout') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises']['timeline'];
		
		
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else  {
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = cmsmasters_blog_new_fields;


/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = '3';
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;



/**
 * Counters Extend
 */

var cmsmasters_counters_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_counters.fields) {
	if (id === 'icon_size') {
		cmsmastersShortcodes.cmsmasters_counters.fields[id]['def'] = '40';
		
		
		cmsmasters_counters_new_fields[id] = cmsmastersShortcodes.cmsmasters_counters.fields[id];
	} else {
		cmsmasters_counters_new_fields[id] = cmsmastersShortcodes.cmsmasters_counters.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_counters.fields = cmsmasters_counters_new_fields;



/**
 * Gallery Extend
 */

var cmsmasters_gallery_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_gallery.fields) {
	if (id === 'layout') {
		cmsmastersShortcodes.cmsmasters_gallery.fields[id]['descr'] = "<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.gallery_field_layout_descr_note + "</span>";
		
		
		cmsmasters_gallery_new_fields[id] = cmsmastersShortcodes.cmsmasters_gallery.fields[id];
	} else {
		cmsmasters_gallery_new_fields[id] = cmsmastersShortcodes.cmsmasters_gallery.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_gallery.fields = cmsmasters_gallery_new_fields;
