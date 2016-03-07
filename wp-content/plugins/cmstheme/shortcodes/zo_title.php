<?php
vc_map(
	array(
		"name" => __("ZO Title", ZO_NAME),
	    "base" => "zo_title",
	    "class" => "vc-zo-title",
	    "category" => __("ZoTheme Shortcodes", ZO_NAME),
	    "params" => array(
	    	array(
				"type" => "textfield",
				"heading" => __("Title",ZO_NAME),
				"param_name" => "title",
				"value" => "",
				"description" => __("Title",ZO_NAME),
				"group" => __("Title Settings", ZO_NAME)
			),
			array(
				"type" => "textfield",
				"heading" => __("Sub title",ZO_NAME),
				"param_name" => "sub_title",
				"value" => "",
				"description" => __("Title",ZO_NAME),
				"group" => __("Title Settings", ZO_NAME)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Font seting default?", 'creativ'),
				"admin_label" => true,
				"param_name" => "zo_font_custom",
				"value" => array(
					"Yes" => "",
					"No" => "no",
				),
				"group" => __("Title Settings", ZO_NAME)
			),
			array(
				"type" => "textfield",
				"heading" => __("Font Family",ZO_NAME),
				"param_name" => "zo_font_family",
				"value" => "",
				"description" => __("Use font family",ZO_NAME),
				"group" => __("Title Settings", ZO_NAME),
				'dependency' => array(
					"element" => "zo_font_custom",
					"value" => "no"
				)
			),
			array(
				"type" => "textfield",
				"heading" => __("Font Weight",ZO_NAME),
				"param_name" => "zo_font_family",
				"value" => "",
				"description" => __("Use font weight",ZO_NAME),
				"group" => __("Title Settings", ZO_NAME),
				'dependency' => array(
					"element" => "zo_font_custom",
					"value" => "no"
				)
			),
			array(
				"type" => "textfield",
				"heading" => __("Font Size",ZO_NAME),
				"param_name" => "zo_font_size",
				"value" => "",
				"description" => __("Use font Size",ZO_NAME),
				"group" => __("Title Settings", ZO_NAME),
				'dependency' => array(
					"element" => "zo_font_custom",
					"value" => "no"
				)
			),
			array(
	            "type" => "textfield",
	            "heading" => __("Extra Class",ZO_NAME),
	            "param_name" => "class",
	            "value" => "",
	            "description" => __("",ZO_NAME),
	            "group" => __("Template", ZO_NAME)
	        ),
	    	array(
	            "type" => "zo_template",
	            "param_name" => "zo_template",
	            "shortcode" => "zo_title",
	            "admin_label" => true,
	            "heading" => __("Shortcode Template",ZO_NAME),
	            "group" => __("Template", ZO_NAME),
	        )
	    )
	)
);
class WPBakeryShortCode_zo_title extends ZoShortcode{
	protected function content($atts, $content = null){
        $html_id = zoHtmlID('zo-title');

		$title = shortcode_atts(array(
			'title' => '',
		), $atts);

        $atts['title_class'] = "zo-title";
        $class = isset($atts['class'])?$atts['class']:'';
        $atts['template'] = 'template-'.str_replace('.php','',$atts['zo_template']). ' '. $class;
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}