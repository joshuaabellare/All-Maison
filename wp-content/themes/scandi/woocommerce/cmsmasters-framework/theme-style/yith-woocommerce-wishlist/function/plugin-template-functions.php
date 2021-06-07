<?php
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version 	1.0.3
 *
 * Yith WooCommerce Wishlist Functions
 * Created by CMSMasters
 *
 */


/* Add the "Add to Wishlist" button. */
function scandi_add_wishlist_button( $show = true ) {
	global $product;

	// product object
	$current_product = ( isset( $atts['product_id'] ) ) ? wc_get_product( $atts['product_id'] ) : false;
	$current_product = $current_product ? $current_product : $product;

	$product_added = get_option( 'yith_wcwl_product_added_text' );
	$wcwl_use_button = get_option( 'yith_wcwl_use_button' );

	// button class
	$link_classes = apply_filters( 'yith_wcwl_add_to_wishlist_button_classes', 'yes' === $wcwl_use_button ? 'add_to_wishlist single_add_to_wishlist button alt' : 'add_to_wishlist' );

	// default wishlist id
	$default_wishlists = ( is_user_logged_in() ? ( YITH_WCWL()->get_wishlists( array( 'is_default' => true ) ) ) : false );

	if ( ! empty( $default_wishlists ) ) {
		$default_wishlist = $default_wishlists[0]['ID'];
	} else {
		$default_wishlist = false;
	}

	// exists in default wishlist
	$exists = YITH_WCWL()->is_product_in_wishlist( $current_product->get_id(), $default_wishlist );

	if ( defined( 'YITH_WCWL_PREMIUM_INIT' ) ) {
		$multi_wishlist = ( 'yes' === get_option( 'yith_wcwl_multi_wishlist_enable' ) ) ? true : false;
		$available_multi_wishlist = $multi_wishlist && is_user_logged_in();
	} else {
		$available_multi_wishlist = false;
	}

	$product_added_text = $product_added;

	$out = '';
	$product_id = $current_product->get_id();
	$unique_id = wp_rand();
	// get wishlist url
	$wishlist_url = YITH_WCWL()->get_wishlist_url();
	// get product type
	$product_type = $current_product->get_type();
	$disable_wishlist = false;
	$show_exists = 'yes' === get_option( 'yith_wcwl_show_exists_in_a_wishlist' );
	$popup_title = apply_filters( 'yith_wcwl_add_to_wishlist_popup_title', __( 'Select a Wishlist', 'scandi' ) );
	$product_image = '';
	$link_popup_classes = apply_filters( 'yith_wcwl_add_to_wishlist_popup_classes', 'yes' === $wcwl_use_button ? 'add_to_wishlist popup_button single_add_to_wishlist button alt' : 'add_to_wishlist popup_button' );
	$label_option = get_option( 'yith_wcwl_add_to_wishlist_popup_text' );
	$label_popup = apply_filters( 'yith_wcwl_button_popup_label', $label_option );

	$out .= '<div class="cmsmasters_add_wishlist_button add-to-wishlist-' . $product_id . '">';

	if ( ! ( $disable_wishlist && ! is_user_logged_in() ) ) {
		$out .= '<div class="yith-wcwl-add-button ' . ( ( $exists && ! $available_multi_wishlist ) ? 'hide' : 'show' ) . '" style="display:' . ( ( $exists && ! $available_multi_wishlist ) ? 'none' : 'block' ) . '">';

		if ( ! $available_multi_wishlist ) {
			$out .= '<a href="' . esc_url( add_query_arg( 'add_to_wishlist', $product_id ) ) . '" rel="nofollow" data-product-id="' . $product_id . '" data-product-type="' . $product_type . '" class="button cmsmasters-icon-custom-like ' . $link_classes . '" >' .
				'<span class="add_to_wishlist_tooltip">' .
					esc_html__( 'Add to Wishlist', 'scandi' ) .
				'</span>' .
			'</a>' .
			'<img src="' . esc_url( get_template_directory_uri() ) . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/img/loader.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />';
		} else {
			if ( $show_exists && $exists ) {
				/*  ALREADY IN A WISHLIST MESSAGE  */
				$out .= '<div class="yith-wcwl-wishlistexistsbrowse ' . esc_attr( $exists ? 'show' : 'hide' ) . '" style="display:' . esc_attr( $exists ? 'block' : 'none' ) . '">' .
					'<span class="feedback">' .
						esc_html( $already_in_wishslist_text ) .
					'</span>' .
					'<a href="' . esc_url( $wishlist_url ) . '">' .
						apply_filters( 'yith-wcwl-browse-wishlist-label', $browse_wishlist_text ) .
					'</a>' .
				'</div>';
			} else {
				/*  WISHLIST POPUP OPENER  */
				$out .= '<a href="#add_to_wishlist_popup_' . $product_id . '_' . $unique_id . '" rel="nofollow" class="button cmsmasters-icon-custom-like ' . $link_classes . ' open-pretty-photo" data-rel="prettyPhoto[add_to_wishlist_' . $product_id . '_' . $unique_id . ']" ></a>' .

				/*  WISHLIST POPUP  */
				'<div id="add_to_wishlist_popup_' . $product_id . '_' . $unique_id . '" class="yith-wcwl-popup">' .
					'<form class="yith-wcwl-popup-form" method="post" action="' . esc_url( add_query_arg( array( 'add_to_wishlist' => $product_id ) ) ) . '">' .
						'<div class="yith-wcwl-popup-content">' .
							'<div class="yith-wcwl-first-row">' .
								'<div class="yith-wcwl-wishlist-select-container">' .
									'<h3>' .
										esc_html( $popup_title ) .
									'</h3>' .
									'<select name="wishlist_id" class="wishlist-select">' .
										'<option value="0">' . apply_filters( 'yith_wcwl_default_wishlist_name', __( 'My Wishlist', 'scandi' ) ) . '</option>';

				if ( ! empty( $lists ) ) {
					foreach ( $lists as $list ) {
						if ( ! $list['is_default'] ) {
							$out .= '<option value="' . esc_attr( $list['ID'] ) . '">' .
								esc_html( $list['wishlist_name'] ) .
							'</option>';
						}
					}
				}

										$out .= '<option value="new">' .
											apply_filters( 'yith_wcwl_create_new_list_text', __( 'Create a new list', 'scandi' ) ) .
										'</option>' .
									'</select>' .
								'</div>' .
								'<div class="yith-wcwl-wishlist-thumb">' .
									$product_image .
								'</div>' .
							'</div>' .
							'<div class="yith-wcwl-second-row">' .
								'<div class="yith-wcwl-popup-new">' .
									'<label for="wishlist_name">' .
										apply_filters( 'yith_wcwl_new_list_title_text', __( 'Wishlist name', 'scandi' ) ) .
									'</label>' .
									'<input name="wishlist_name" class="wishlist-name" type="text" class="wishlist-name" />' .
								'</div>' .
								'<div class="yith-wcwl-visibility">' .
									'<select name="wishlist_visibility" class="wishlist-visibility">' .
										'<option value="0" class="public-visibility">' .
											apply_filters( 'yith_wcwl_public_wishlist_visibility', __( 'Public', 'scandi' ) ) .
										'</option>' .
										'<option value="1" class="shared-visibility">' .
											apply_filters( 'yith_wcwl_shared_wishlist_visibility', __( 'Shared', 'scandi' ) ) .
										'</option>' .
										'<option value="2" class="private-visibility">' .
											apply_filters( 'yith_wcwl_private_wishlist_visibility', __( 'Private', 'scandi' ) ) .
										'</option>' .
									'</select>' .
								'</div>' .
							'</div>' .
						'</div>' .
						'<div class="yith-wcwl-popup-footer">' .
							'<div class="yith-wcwl-popup-button">' .
								'<img src="' . esc_url( admin_url( 'images/wpspin_light.gif' ) ) . '" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />' .
								'<a rel="nofollow" class="wishlist-submit ' . $link_popup_classes . '" data-product-id="' . $product_id . '" data-product-type="' . $product_type . '">' .
									$label_popup .
								'</a>' .
							'</div>' .
						'</div>' .
					'</form>' .
				'</div>';
			}
		}

		$out .= '</div>' .
		'<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">' .
			'<a href="' . esc_url( $wishlist_url ) . '" class="button browse_wishlist cmsmasters-icon-custom-like" rel="nofollow">' .
				'<span class="browse_wishlist_tooltip">' .
					esc_html__( 'Browse Wishlist', 'scandi' ) .
				'</span>' .
			'</a>' .
		'</div>' .
		'<div class="yith-wcwl-wishlistexistsbrowse ' . esc_attr( ( $exists && ! $available_multi_wishlist ) ? 'show' : 'hide' ) . '" style="display:' . esc_attr( ( $exists && ! $available_multi_wishlist ) ? 'block' : 'none' ) . '">' .
			'<a href="' . esc_url( $wishlist_url ) . '" class="button browse_wishlist cmsmasters-icon-custom-like" rel="nofollow">' .
				'<span class="browse_wishlist_tooltip">' .
					esc_html__( 'Browse Wishlist', 'scandi' ) .
				'</span>' .
			'</a>' .
		'</div>';
	} else {
		$out .= '<a href="' . esc_url( add_query_arg(
			array(
				'wishlist_notice' => 'true',
				'add_to_wishlist' => $product_id,
			),
			get_permalink( wc_get_page_id( 'myaccount' ) )
		) ) . '" rel="nofollow" class="' . str_replace( 'add_to_wishlist', '', $link_classes ) . '"></a>';
	}

	$out .= '</div>';

	if ( $show ) {
		echo scandi_return_content( $out );
	} else {
		return $out;
	}
}



/* Wishlist Count */
function scandi_wishlist_count() {
	$wishlist_url = YITH_WCWL()->get_wishlist_url();

	$wishlists = YITH_WCWL()->get_wishlists(
		array(
			'user_id' => get_current_user_id(),
			'is_default' => 1,
		)
	);

	if ( ! empty( $wishlists ) ) {

		$count = YITH_WCWL()->count_products();
	} else {
		$count = 0;
	}

	$output = '<div class="cmsmasters_wishlist_wrap">' .
		'<a href="' . esc_url( $wishlist_url ) . '" class="cmsmasters-icon-custom-like" rel="nofollow"></a>' .
	'</div>';

	echo scandi_return_content( $output );
}

add_action( 'cmsmasters_after_header_mid_search', 'scandi_wishlist_count' );
add_action( 'cmsmasters_after_header_bot', 'scandi_wishlist_count' );
