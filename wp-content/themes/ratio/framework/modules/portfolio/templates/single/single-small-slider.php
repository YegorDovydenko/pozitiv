<div class="edgtf-two-columns-66-33 clearfix">
	<div class="edgtf-column1">
		<div class="edgtf-column-inner">
			<?php
			$media = ratio_edge_get_portfolio_single_media();

			if(is_array($media) && count($media)) : ?>
				<div class="edgtf-portfolio-media edgtf-slick-slider edgtf-slick-slider-navigation-style">
					<?php foreach($media as $single_media) : ?>
						<div class="edgtf-portfolio-single-media">
							<?php ratio_edge_portfolio_get_media_html($single_media); ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="edgtf-column2">
		<div class="edgtf-column-inner">
			<div class="edgtf-portfolio-info-holder">
				<?php
				//get portfolio content section
				ratio_edge_portfolio_get_info_part('content');

				//get portfolio custom fields section
				ratio_edge_portfolio_get_info_part('custom-fields');

				
				?>
			</div>
		</div>
	</div>
</div>