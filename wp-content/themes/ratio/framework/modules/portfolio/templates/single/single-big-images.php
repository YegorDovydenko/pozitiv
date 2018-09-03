<div class="edgtf-big-image-holder">
    <?php
    $media = ratio_edge_get_portfolio_single_media();

    if(is_array($media) && count($media)) : ?>
        <div class="edgtf-portfolio-media">
            <?php foreach($media as $single_media) : ?>
                <div class="edgtf-portfolio-single-media">
                    <?php ratio_edge_portfolio_get_media_html($single_media); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<div class="edgtf-two-columns-66-33 clearfix">
    <div class="edgtf-column1">
        <div class="edgtf-column-inner">
			<h3 class="edgtf-portfolio-title"><?php the_title(); ?></h3>
            <?php ratio_edge_portfolio_get_info_part('content'); ?>
        </div>
    </div>
    <div class="edgtf-column2">
        <div class="edgtf-column-inner">
            <div class="edgtf-portfolio-info-holder">
                <?php
                //get portfolio custom fields section
                ratio_edge_portfolio_get_info_part('custom-fields');

                //get portfolio date section
                ratio_edge_portfolio_get_info_part('date');

                //get portfolio categories section
                ratio_edge_portfolio_get_info_part('categories');

                //get portfolio tags section
                ratio_edge_portfolio_get_info_part('tags');

                //get portfolio share section
                ratio_edge_portfolio_get_info_part('social');
                ?>
            </div>
        </div>
    </div>
</div>