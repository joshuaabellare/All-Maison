<?php 
/**
 * @package 	WordPress
 * @subpackage 	Scandi
 * @version		1.0.0
 * 
 * Archive Template
 * Created by CMSMasters
 * 
 */

/* Project Vars */
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_archive_type'); ?>>
	<?php 
	if (!post_password_required() && has_post_thumbnail()) {
		echo '<div class="cmsmasters_archive_item_img_wrap">';
		
			scandi_thumb(get_the_ID(), 'cmsmasters-square-thumb');
			
		echo '</div>';
	}
	?>
	<div class="cmsmasters_archive_item_cont_wrap">
		<div class="cmsmasters_archive_item_info">
			<div class="cmsmasters_archive_item_type">
				<?php
				$post_type_obj = get_post_type_object(get_post_type());
				
				echo esc_html__('in', 'scandi') . ' <span>' . $post_type_obj->labels->singular_name . ' </span>';
				?>
			</div>
			<?php
			if (get_post_type() == 'post') {
				echo '<span class="cmsmasters_archive_item_user_name"> ' . 
						esc_html__('by', 'scandi') . ' ' . 
						'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author" title="' . esc_attr__('Posts by', 'scandi') . ' ' . get_the_author_meta('display_name') . '">' . get_the_author_meta('display_name') . '</a>' . 
					'</span>' . 
					'<span class="cmsmasters_archive_item_date_wrap"> ' . 
					esc_html__('on', 'scandi') . ' ' . 
					'<abbr class="published cmsmasters_archive_item_date" title="' . esc_attr(get_the_date()) . '">';
						
						
						if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
							echo '<a href="' . esc_url(get_permalink()) . '">' . 
								get_the_date() . 
							'</a>';
						} else {
							echo get_the_date();
						}
						
						
					echo '</abbr>' . 
					'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
						get_the_modified_date() . 
					'</abbr>' . 
				'</span>';
			}
			?>
		</div>
		
		<?php
		if (cmsmasters_title(get_the_ID(), false) != get_the_ID()) {
			if(get_post_type() == 'project' && $cmsmasters_project_link_url != "") {
				scandi_project_heading(get_the_ID(), 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
			} else {
			?>
			<header class="cmsmasters_archive_item_header entry-header">
				<h2 class="cmsmasters_archive_item_title entry-title">
					<a href="<?php the_permalink(); ?>">
						<?php cmsmasters_title(get_the_ID(), true); ?>
					</a>
				</h2>
			</header>
			<?php 
			}
		}
		
		
		if (scandi_excerpt(55, false) != '') {
			echo cmsmasters_divpdel('<div class="cmsmasters_archive_item_content entry-content">' . "\n" . 
				wpautop(scandi_excerpt(55, false)) . 
			'</div>' . "\n");
		}
		
		echo '<a class="cmsmasters_archive_read_more" href="' . esc_url(get_permalink(get_the_ID())) . '">' . esc_html__('Read More', 'scandi') . '</a>';
		?>
	</div>
</article>