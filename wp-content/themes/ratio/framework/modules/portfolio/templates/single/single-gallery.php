<div class="edgtf-portfolio-gallery">
	<?php
	$media = ratio_edge_get_portfolio_single_media();

	if(is_array($media) && count($media)) : ?>
		<div class="edgtf-portfolio-media clearfix">
			<?php foreach($media as $single_media) : ?>
				<div class="edgtf-portfolio-single-media">
				<?$single_media = str_replace(array('<h4>','</h4>'),array('<div class="h4">','</div>'),$single_media);?>
					<?php ratio_edge_portfolio_get_media_html($single_media); ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>

<div class="edgtf-one-columns-66-33 clearfix">
	
		

			<?php ratio_edge_portfolio_get_info_part('content'); ?>
		</div>
	</div>
	</div>