<?php
/**
 * @cmsmasters_package 	Scandi
 * @cmsmasters_version 	1.0.0
 */


global $post, $product;

$cat_count =  count(get_the_terms( $post->ID, 'product_cat' ) ?: []);
$tag_count =  count(get_the_terms( $post->ID, 'product_tag' ) ?: []);

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><span class="sku_name"><?php esc_html_e( 'SKU:', 'scandi' ); ?></span><span class="sku" itemprop="sku"><?php echo scandi_return_content(( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'scandi' )); ?></span></span>

	<?php endif; ?>

	<?php
	if (! empty( $cat_count ) && get_the_terms($product->get_id(), 'product_cat')) {
		echo '<span class="posted_in">' . 
			'<span class="cmsmasters_product_cat_title">' . esc_html(_n('Category:', 'Categories:', $cat_count, 'scandi')) . '</span> ' . 
			'<span class="categories_tagname">' . scandi_get_the_category_list($product->get_id(), 'product_cat', ' ') . '</span> ' . 
		'</span>';
	}
	?>

	<?php
	if ( ! empty( $tag_count ) && get_the_terms($product->get_id(), ' ')) {
		echo '<span class="tagged_as_tag">' . 
			'<span class="tagged_as_tags">' . esc_html(_n('Tag:', 'Tags:', $tag_count, 'scandi')) . '</span> ' . 
			'<span class="tagged_as">' . wc_get_product_tag_list($product->get_id(), '', ' ') . '</span> ' . 
		'</span>';
	}
	?>
	
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
