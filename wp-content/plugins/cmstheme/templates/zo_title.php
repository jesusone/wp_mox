
<div class="zo-tile-wraper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <h3 class="mox-title"><?php echo esc_attr($atts['title']); ?></h3>
    <?php if(!empty($atts['sub_title'])) : ?>
    <p class="mox-sub-title"><?php echo esc_attr($atts['sub_title']); ?></p>
    <?php endif; ?>
</div>