<div class="edgtf-portfolio-info-item edgtf-content-item">
	<?php if($params['type'] !== 'big-images' && $params['type'] !== 'big-slider' && $params['type'] !== 'big-masonry'): ?>
	<?php ratio_edge_custom_breadcrumbs(); ?>
    <h1 class="edgtf-portfolio-title"><?php the_title(); ?></h1>
	<?php endif; ?>
    <div class="edgtf-portfolio-content">
        <?php the_content(); ?>
    </div>
</div>