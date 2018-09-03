<div class="edgtf-portfolio-list-holder-outer edgtf-portfolio-related-holder edgtf-ptf-standard edgtf-hover-outline edgtf-ptf-three-columns clearfix">
    <h2><?php esc_html_e('Related', 'ratio'); ?></h2>
    <div class="edgtf-portfolio-list-holder clearfix">
        <?php
        $query = ratio_edge_get_related_post_type(get_the_ID(), array('posts_per_page' => '3'));
        if (is_object($query)) {
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <?php if (has_post_thumbnail()) {
                    $id = get_the_ID();
                    $item_link = get_permalink($id);
                    if (get_post_meta($id, 'portfolio_external_link', true) !== '') {
                        $item_link = get_post_meta($id, 'portfolio_external_link', true);
                    }

                    $categories = wp_get_post_terms($id, 'portfolio-category');
                    $category_html = '';
                    $k = 1;
                    foreach ($categories as $cat) {
                        $category_html .= '<span>' . $cat->name . '</span>';
                        if (count($categories) != $k) {
                            $category_html .= ' / ';
                        }
                        $k++;
                    }
                    ?>
                    <article class="edgtf-portfolio-item mix">
                    	<div class = "edgtf-item-image-holder">
							<a href="<?php echo esc_url($item_link); ?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(),'ratio_edge_landscape');
								?>
								<span class="edgtf-view-project"><?php esc_html_e('1111','ratio') ?></span>
								<span class="edgtf-hover-border"></span>
							</a>
						</div>
						<div class="edgtf-item-text-holder">
							<div class="h4" class="edgtf-item-title">
								<a href="<?php echo esc_url($item_link); ?>">
									<?php echo esc_attr(get_the_title()); ?>
								</a>	
							</div>
							<div class="h6 edgtf-ptf-category-holder">
								<?php
								print $category_html;
								?>
							</div>
						</div>
                    </article>
                <?php } ?>
                <?php
            endwhile;
                ?>
                <div class="edgtf-portfolio-gap"></div>
                <div class="edgtf-portfolio-gap"></div>
                <div class="edgtf-portfolio-gap"></div>
                <?php
            endif;
            wp_reset_postdata();
        } else { ?>
            <p><?php esc_html_e('No related portfolios were found.', 'ratio'); ?></p>
        <?php }
        ?>
    </div>
</div>

