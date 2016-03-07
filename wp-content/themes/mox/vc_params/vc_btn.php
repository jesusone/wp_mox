<?php
/**
 * New button implementation
 * array_merge is needed due to merging other shortcode data into params.
 * @since 4.5
 */
global $pixel_icons;
$icons_params = vc_map_integrate_shortcode( 'vc_icon', 'i_', '',
    array(
        'include_only_regex' => '/^(type|icon_\w*)/',
        // we need only type, icon_fontawesome, icon_blabla..., NOT color and etc
    ), array(
        'element' => 'add_icon',
        'value' => 'true',
    )
);
// populate integrated vc_icons params.
if ( is_array( $icons_params ) && ! empty( $icons_params ) ) {
    foreach ( $icons_params as $key => $param ) {
        if ( is_array( $param ) && ! empty( $param ) ) {
            if ( $param['param_name'] == 'i_type' ) {
                // append pixelicons to dropdown
                $icons_params[ $key ]['value'][ __( 'Pixel', 'mox' ) ] = 'pixelicons';
            }
            if ( isset( $param['admin_label'] ) ) {
                // remove admin label
                unset( $icons_params[ $key ]['admin_label'] );
            }

        }
    }
}

//Linear Icons
if ( is_array( $icons_params ) && ! empty( $icons_params ) ) {
    foreach ( $icons_params as $key => $param ) {
        if ( is_array( $param ) && ! empty( $param ) ) {
            if ( $param['param_name'] == 'i_type' ) {
                // append pixelicons to dropdown
                $icons_params[ $key ]['value'][ __( 'Linearicons', 'mox' ) ] = 'linearicons';
            }
            if ( isset( $param['admin_label'] ) ) {
                // remove admin label
                unset( $icons_params[ $key ]['admin_label'] );
            }

        }
    }
}

$params = array_merge(
    array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Text Button', 'mox' ),
            'save_always' => true,
            'param_name' => 'title',
            // fully compatible to btn1 and btn2
            'value' => __( 'Text on the button', 'mox' ),
        ),
        array(
            'type' => 'vc_link',
            'heading' => __( 'URL (Link)', 'mox' ),
            'param_name' => 'link',
            'description' => __( 'Add link to button.', 'mox' ),
            // compatible with btn2 and converted from href{btn1}
        ),
		
		/* Vu edit */
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Button Type", 'creativ'),
            "param_name" => "button_type",
            "value" => array(
                'Button Default' => 'btn btn-default',
                'Button Primary' => 'btn btn-primary',
                'Button Transparent' => 'btn btn-transparent',
                'Button Gray' => 'btn btn-gray',
                'Button Gray Transparent' => 'btn btn-gray btn-transparent',
            )
        ),
		array(
            'type' => 'textfield',
            'heading' => __( 'Padding', 'mox' ),
            'param_name' => 'padding',
            'description' => __( 'Ex: 15px 35px 15px 35px.', 'mox' ),
        ),
		array(
            'type' => 'dropdown',
            'heading' => __( 'Letter Spacing', 'mox' ),
            'param_name' => 'letter_spacing',
            'value' => array(
                __( 'Default', 'mox' ) => '',
                __( 'Letter Spacing: 50', 'mox' ) => '0.05em',
                __( 'Letter Spacing: 100', 'mox' ) => '0.1em',
                __( 'Letter Spacing: 200', 'mox' ) => '0.2em',
                __( 'Letter Spacing: 300', 'mox' ) => '0.3em',
                __( 'Letter Spacing: 400', 'mox' ) => '0.4em',
                __( 'Letter Spacing: 500', 'mox' ) => '0.5em'
            )
        ),
		array(
            'type' => 'textfield',
            'heading' => __( 'Font Size', 'mox' ),
            'param_name' => 'font_size',
            'description' => __( 'Ex: 15px', 'mox' ),
        ),
		array(
            'type' => 'textfield',
            'heading' => __( 'Radius', 'mox' ),
            'param_name' => 'radius',
            'description' => __( 'Ex: 15px 35px 15px 35px.', 'mox' ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Alignment', 'mox' ),
            'param_name' => 'align',
            'description' => __( 'Select button alignment.', 'js_comopser' ),
            // compatible with btn2, default left to be compatible with btn1
            'value' => array(
                __( 'Inline', 'mox' ) => 'inline',
                // default as well
                __( 'Left', 'mox' ) => 'left',
                // default as well
                __( 'Right', 'mox' ) => 'right',
                __( 'Center', 'mox' ) => 'center'
            ),
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Set full width button?', 'mox' ),
            'param_name' => 'button_block',
            'dependency' => array(
                'element' => 'align',
                'value_not_equal_to' => 'inline',
            ),
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add icon?', 'mox' ),
            'param_name' => 'add_icon',
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Icon Alignment', 'mox' ),
            'description' => __( 'Select icon alignment.', 'mox' ),
            'param_name' => 'i_align',
            'value' => array(
                __( 'Left', 'mox' ) => 'left',
                // default as well
                __( 'Right', 'mox' ) => 'right',
            ),
            'dependency' => array(
                'element' => 'add_icon',
                'value' => 'true',
            ),
        ),
    ),
    $icons_params,
    array(
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'mox' ),
            'param_name' => 'i_icon_pixelicons',
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'pixelicons',
                'source' => $pixel_icons,
            ),
            'dependency' => array(
                'element' => 'i_type',
                'value' => 'pixelicons',
            ),
            'description' => __( 'Select icon from library.', 'mox' ),
        ),
    ),
    array(
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'mox' ),
            'param_name' => 'i_icon_linearicons',
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'linearicons',
            ),
            'dependency' => array(
                'element' => 'i_type',
                'value' => 'linearicons',
            ),
            'description' => __( 'Select icon from library.', 'mox' ),
        ),
    ),
    array(
        vc_map_add_css_animation( true ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'mox' ),
            'param_name' => 'el_class',
            'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'mox' ),
        ),
    )
);
/**
 * @class WPBakeryShortCode_VC_Btn
 */
vc_map( array(
    'name' => __( 'Button', 'mox' ),
    'base' => 'vc_btn',
    'icon' => 'icon-wpb-ui-button',
    'category' => array(
        __( 'Content', 'mox' ),
    ),
    'description' => __( 'Eye catching button', 'mox' ),
    'params' => $params,
    'js_view' => 'VcButton3View',
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><button class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-{{ params.shape }} vc_btn3-style-{{ params.style }} vc_btn3-color-{{ params.color }}">{{{ params.title }}}</button></div>',
) );
