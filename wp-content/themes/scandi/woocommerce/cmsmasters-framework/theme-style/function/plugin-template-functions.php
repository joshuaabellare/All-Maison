<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.3
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function scandi_mid_header_woocommerce_cart_dropdown($cmsmasters_option) {
	$cmsmasters_option = scandi_get_global_options();
	
	if (
		$cmsmasters_option['scandi' . '_header_styles'] != 'c_nav' &&
		isset($cmsmasters_option['scandi' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['scandi' . '_woocommerce_cart_dropdown']
	) {
		global $woocommerce;
		
		$cart_url = wc_get_cart_url();
		
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		
		
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart">' .  
				'<a href="' . esc_url($cart_url) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"><span>' . esc_html($cart_count) . '</span></a>' . 
				'<span class="cmsmasters_dynamic_cart_button_hide"></span>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_logo', 'scandi_mid_header_woocommerce_cart_dropdown');


function scandi_bot_header_woocommerce_cart_dropdown($cmsmasters_option) {
	$cmsmasters_option = scandi_get_global_options();
	
	if ($cmsmasters_option['scandi' . '_header_styles'] != 'default' &&
		isset($cmsmasters_option['scandi' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['scandi' . '_woocommerce_cart_dropdown']) {
		
		global $woocommerce;
		
		$cart_url = wc_get_cart_url();
		
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		
		
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart">' .  
				'<a href="' . esc_url($cart_url) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"><span>' . esc_html($cart_count) . '</span></a>' . 
				'<span class="cmsmasters_dynamic_cart_button_hide"></span>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_header_bot', 'scandi_bot_header_woocommerce_cart_dropdown');



/* Add to Cart Button */
function scandi_woocommerce_add_to_cart_button($args = array(), $show = '') {
	global $woocommerce,
	$product;
	
	if (
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock()  
	) {
		$defaults = array(
			'quantity' => 1,
			'class'    => implode( ' ', array_filter( array(
					'product_button',
					'product_type_' . $product->get_type(),
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button cmsmasters_add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) )
		);

		$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );
		
		extract($args);

		$out = '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="product_button product_type_simple add_to_cart_button cmsmasters_add_to_cart_button ajax_add_to_cart">' . 
				'<span class="add_to_cart_tooltip">' . esc_html__('Add to Cart', 'scandi') . '</span>' . 
			'</a>' . 
			'<a href="' . esc_url(wc_get_cart_url()) . '" class="button_to_cart added_to_cart cmsmasters-icon-custom-bag-1 wc-forward" title="' . esc_attr__('View Cart', 'scandi') . '">' . 
				'<span class="add_to_cart_tooltip">' . esc_html__('View Cart', 'scandi') . '</span>' . 
			'</a>'; 
	} else {
		$out = '<a href="' . esc_url(get_permalink($product->get_id())) . '" class="button_to_cart add_to_cart_button cmsmasters-icon-custom-bag-1 wc-forward">' . 
				'<span class="add_to_cart_tooltip">' . esc_html__('Show Details', 'scandi') . '</span>' . 
			'</a>'; 
		'</a>';
	}
	
	
	if ($show) {
		echo scandi_return_content($out);
	} else {
		return $out;
	}
}


/* Rating */
function scandi_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'scandi'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'scandi') . "</span>
</div>
";
	
	
	if ($show) {
		echo scandi_return_content($out);
	} else {
		return $out;
	}
}


/* Price Format */
function scandi_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'scandi_woocommerce_price_format', 1, 2);


/* WooCommerce Dynamic cart count update after ajax */
function woocommerce_header_add_to_cart_count( $dynamic_count ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span><?php echo scandi_return_content($woocommerce->cart->cart_contents_count); ?></span>
	<?php
	
	$dynamic_count['.cmsmasters_dynamic_cart_button span'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_count');
