<div class="edgtf-big-image-holder">
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

<div class="edgtf-one-columns-66-33 clearfix">
	
		<div class="edgtf-column-inner">
			<h1 class="edgtf-portfolio-title"><?php the_title(); ?></h1>
			<?php ratio_edge_portfolio_get_info_part('content'); ?>
		</div>
	
</div>