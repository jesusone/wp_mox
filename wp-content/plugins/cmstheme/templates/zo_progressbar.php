<div class="zo-progress-wraper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="row zo-progress-body">
        <?php
        $item_class = 'zo-progress-item-wrap';
        $item_title     = $atts['item_title'];
        $icon           = $atts['icon'];
        $show_value     = $atts['show_value'];
        $value          = $atts['value'];
        $value_suffix   = $atts['value_suffix'];
        $bg_color       = $atts['bg_color'];
        $color_type     = $atts['color_type'];
        $color          = $atts['color'];
        $width          = $atts['width'];
        $height         = $atts['height'];
        $border_radius  = $atts['border_radius'];
        $vertical       = ($atts['mode']=='vertical')?true:false;
        $striped        = ($atts['striped']=='yes')?true:false;

        if($color_type == 'false') {
            $startColor = esc_attr($atts['zo_color1']);
            $endColor = esc_attr($atts['zo_color2']);
            $item_color     =  "
                  background-color: '.$startColor.';
                  background-image: -webkit-gradient(linear, left top, right top, from($startColor), to($endColor));
                  background-image: -webkit-linear-gradient(left, $startColor, $endColor);
                  background-image:    -moz-linear-gradient(left, $startColor, $endColor);
                  background-image:     -ms-linear-gradient(left, $startColor, $endColor);
                  background-image:      -o-linear-gradient(left, $startColor, $endColor);
                  background-image:         linear-gradient(left, $startColor, $endColor);
                  filter:            progid:DXImageTransform.Microsoft.gradient(startColorStr='#{$startColor}', endColorStr='#{$endColor}', gradientType='1');
            " ;
        }
        else {
            $item_color =   "background-color:".esc_attr($color).";";
        }
        ?>
        <div class="<?php echo esc_attr($item_class);?>">
            <?php if($icon):?>
                <i class="<?php echo esc_attr($icon);?>"></i>
            <?php endif;?>
            <?php if($item_title):?>
                <div class="zo-progress-title">
                    <?php echo apply_filters('the_title',$item_title);?>
                </div>
            <?php endif;?>
            <div class="zo-progress progress<?php if($vertical){ echo ' vertical bottom'; } ?> <?php if($striped){echo ' progress-striped';}?>"
                 style="background-color:<?php echo esc_attr($bg_color);?>;
                     width:<?php echo esc_attr($width);?>;
                     height:<?php echo esc_attr($height);?>;
                     border-radius:<?php echo esc_attr($border_radius);?>;
                     " >
                <div id="item-<?php echo esc_attr($atts['html_id']); ?>"
                     class="progress-bar" role="progressbar"
                     data-valuetransitiongoal="<?php echo esc_attr($value); ?>"
                     style="<?php echo esc_attr($item_color);?>;
                         border-radius:<?php echo esc_attr($border_radius);?>
                         "
                >
                        <span>
                            <?php if($show_value): ?>
                                <?php echo esc_attr($value.$value_suffix);?>
                            <?php endif; ?>
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>