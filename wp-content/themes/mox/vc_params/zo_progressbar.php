<?php
	$params = array(
		array(
	        "type" => "textfield",
	        "class" => "",
	        "heading" => __("Progress Custom Icon", 'creativ'),
	        "param_name" => "zo_progress_custom_icon",
	        "value" => '',
	        "description" => __("Select icon website(http://fortawesome.github.io/Font-Awesome/icons - http://ionicons.com/)",'creativ')
	    ),
		array(
			"type" => "colorpicker",
			"heading" => __("Progress Icon Color",'creativ'),
			"param_name" => "zo_progress_icon_color",
			"value" => ""
		),
		array(
	        "type" => "textfield",
	        "class" => "",
	        "heading" => __("Progress Icon Font Size", 'creativ'),
	        "param_name" => "zo_progress_icon_font_size",
	        "value" => ''
	    ),
            array(
            'type' => 'dropdown',
            'heading' => __("Layout", 'creativ'),
            'param_name' => 'zo_layout',
            'value' => array(
                'Default' => '',
                'Progress 2' => 'zo-progress-2',
                ),
             )

	);