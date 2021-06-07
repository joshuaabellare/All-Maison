<?php
/**
 * @cmsmasters_package 	Scandi
 * @cmsmasters_version 	1.0.0
 */


global $product; 
?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<?php echo scandi_return_content($product->get_image()); ?>
		<span class="product-title"><?php echo wp_kses_post($product->get_name()); ?></span>
	</a>

	<?php if ( ! empty( $show_rating ) ) : ?>
		<?php scandi_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full'); ?>
	<?php endif; ?>

	<?php woocommerce_template_loop_price(); ?>

	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>