<?php $sidebar = ratio_edge_sidebar_layout(); ?>
<?php get_header(); ?>
<?php 

$blog_page_range = ratio_edge_get_blog_page_range();
$max_number_of_pages = ratio_edge_get_max_number_of_pages();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
?>
<?php ratio_edge_get_title(); ?>
	<div class="edgtf-container">
		<?php do_action('ratio_edge_after_container_open'); ?>
		<div class="edgtf-container-inner clearfix">
			<div class="edgtf-container" style="z-index: 1;">
				<?php do_action('ratio_edge_after_container_open'); ?>
				<div class="edgtf-container-inner" >
					<div class="edgtf-blog-holder edgtf-blog-type-standard edgtf-search-page">
				<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="edgtf-post-content">
							<div class="edgtf-post-text">
								<div class="edgtf-post-text-inner">
									<h3>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h3>
									<?php $my_excerpt = get_the_excerpt();
									if ($my_excerpt != '') { ?>
										<p class="edgtf-post-excerpt"><?php echo esc_html($my_excerpt); ?></p>
									<?php } ?>
									<?php echo ratio_edge_read_more_button('', 'edgtf-blog-read-more'); ?>
								</div>
							</div>
						</div>
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<div class="entry">
						<p><?php esc_html_e('По данному запросу ничего не найдено.', 'ratio'); ?></p>
						<p><b>Рекомендации:</b>
                                                <ol><li>убедитесь, что все слова написаны без ошибок и содержат более 3 символов;</li>
						<li>попробуйте использовать другие ключевые слова;</li>
						<li>используйте более популярные ключевые слова;</li><ol></p>
					</div>
					<?php endif; ?>
				</div>
				<?php do_action('ratio_edge_before_container_close'); ?>
			</div>
			</div>
		</div>
		<?php do_action('ratio_edge_before_container_close'); ?>
	</div>
	<div class="edgtf-container edgtf-container-bottom-navigation">
		<div class="edgtf-container-inner">
			<?php
				if(ratio_edge_options()->getOptionValue('pagination') == 'yes') {
					ratio_edge_pagination($max_number_of_pages, $blog_page_range, $paged);
				}
			?>
		</div>
	</div>
	<?php do_action('ratio_edge_after_container_close'); ?>
<?php get_footer(); ?>