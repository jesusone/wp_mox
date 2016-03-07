<?php

$params = array(
    array(
        "type" => "dropdown",
        "heading" => __("Title Size", 'creativ'),
        "param_name" => "zo_title_size",
        "value" => array(
            "H2" => "h2",
            "H3" => "h3",
            "H4" => "h4",
            "H5" => "h5",
            "H6" => "h6"
        ),
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Full Width", 'creativ'),
        "param_name" => "zo_full_width",
        "value" => array(
            "Default" => "",
            "No Padding" => "no-padding"
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show icon", 'creativ'),
        "param_name" => "zo_show_icon",
        "value" => array(
            "Yes" => 1,
            "No" => 0,
        ),
        "template" => array(
            'zo_grid--portfolio-without-text.php'
        )
    ),
    array(
        "type" => "colorpicker",
        "heading" => __("Background Box text", 'creativ'),
        "param_name" => "zo_background_text",
        "template" => array(
            'zo_grid--portfolio-with-text.php'
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Hove event", 'creativ'),
        "param_name" => "zo_hover_item",
        "value" => array(
            "Left" => 'zo_hover_left',
            "Top" => 'zo_hover_top',
            "Right" => 'zo_hover_right',
            "Bottom" => 'zo_hover_bottom',
        ),
        "template" => array(
            'zo_grid--portfolio-without-text.php',
            'zo_grid--portfolio-with-text.php',
            'zo_grid--portfolio-gallery.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show icon", 'creativ'),
        "param_name" => "zo_show_icon_1",
        "value" => array(
            "Yes" => 1,
            "No" => 0,
        ),
        "template" => array(
            'zo_grid--portfolio-with-text.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show icon", 'creativ'),
        "param_name" => "zo_show_icon_2",
        "value" => array(
            "Yes" => 1,
            "No" => 0,
        ),
        "template" => array(
            'zo_grid--portfolio-gallery.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show Pagination", 'creativ'),
        "param_name" => "zo_show_pagination",
        "value" => array(
            "Yes" => 1,
            "No" => 0,
        ),
        "template" => array(
            'zo_grid--blog-classic.php'
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Image Style", 'creativ'),
        "param_name" => "zo_image_style",
        "value" => array(
            "Thumbnail" => "",
            "Medium" => "medium",
            "Full" => "full",
        ),
        "template" => array(
            'zo_grid--blog-classic.php',
            'zo_grid--portfolio-style-1.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Background Item", 'creativ'),
        "param_name" => "zo_background_item",
        "value" => array(
            "No" => "",
            "Yes" => "zo_background_item",
        ),
        "template" => array(
            'zo_grid--blog-classic.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show Title", 'creativ'),
        "param_name" => "zo_show_title",
        "value" => array(
            "No" => "",
            "Yes" => "yes",
        ),
        "template" => array(
            'zo_grid--demo.php',
        )
    ),
    array(
        "type" => "colorpicker",
        "heading" => __("Background Box Pricing", 'creativ'),
        "param_name" => "zo_background_pricing",
        "template" => array(
            'zo_grid--pricing.php'
        )
    ),
);
