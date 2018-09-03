<article class="edgtf-portfolio-item <?php echo esc_attr($categories)?>" >
	<div class = "edgtf-item-image-holder">
		<a href="<?php echo esc_url($item_link); ?>">
			<?php
			echo get_the_post_thumbnail(get_the_ID(),$thumb_size);
			?>
			<span class="edgtf-view-project"><?php esc_html_e('View Project','edge-cpt') ?></span>
			<span class="edgtf-hover-border"></span>
		</a>
	</div>
	<div class="edgtf-item-text-holder">
		<div class="h4 edgtf-item-title">
		<a href="<?php echo esc_url($item_link); ?>">
			<?php echo esc_attr(get_the_title()); ?>
		</a>
	</div>
	<?php
	echo str_replace('h6','div',$category_html);
	?>
	</div>
</article>
