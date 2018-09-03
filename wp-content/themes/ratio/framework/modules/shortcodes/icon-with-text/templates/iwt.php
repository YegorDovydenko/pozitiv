<div <?php ratio_edge_class_attribute($holder_classes); ?>>
    <div class="edgtf-iwt-icon-holder">
        <?php if(!empty($custom_icon)) : ?>
            <?php echo wp_get_attachment_image($custom_icon, 'full'); ?>
        <?php else: ?>
            <?php echo ratio_edge_get_shortcode_module_template_part('templates/icon', 'icon-with-text', '', array('icon_parameters' => $icon_parameters)); ?>
        <?php endif; ?>
    </div>
    <div class="edgtf-iwt-content-holder" <?php ratio_edge_inline_style($content_styles); ?>>
        <div class="edgtf-iwt-title-holder">
            <div class="h4" <?php ratio_edge_inline_style($title_styles); ?>><?php echo esc_html($title); ?></div>
        </div>
        <div class="edgtf-iwt-text-holder">
            <p <?php ratio_edge_inline_style($text_styles); ?>><?php echo esc_html($text); ?></p>

            <?php if(!empty($link) && !empty($link_text)) : ?>
                <a class="edgtf-iwt-link" href="<?php echo esc_attr($link); ?>" <?php ratio_edge_inline_attr($target, 'target'); ?>><?php echo esc_html($link_text); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>