<?php
vc_map(
	array(
		"name" => __("ZO Video", ZO_NAME),
	    "base" => "zo_video",
	    "class" => "vc-zo-video",
	    "category" => __("ZoTheme Shortcodes", ZO_NAME),
	    "params" => array(
		    array(
			    "type" => "textfield",
			    "heading" => __("Video URL",ZO_NAME),
			    "param_name" => "video_url",
			    "value" => "",
			    "group" => __("Settings", ZO_NAME),
			    "description" => esc_html__('Just support Youtube, Vimeo host')
		    ),
		    array(
			    "type" => "textfield",
			    "heading" => __("Video Width",ZO_NAME),
			    "param_name" => "video_width",
			    "value" => "100%",
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "textfield",
			    "heading" => __("Video Height",ZO_NAME),
			    "param_name" => "video_height",
			    "value" => "100%",
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "dropdown",
			    "heading" => __("Custom Thumbnail",ZO_NAME),
			    "param_name" => "thumbnail_custom",
			    "value" => array(
				    "Disable" => "disable",
				    "Enable" => "enable"
			    ),
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "attach_image",
			    "heading" => __("Thumbnail Image",ZO_NAME),
			    "param_name" => "thumbnail_url",
			    "dependency" => array(
				    "element" => "thumbnail_custom",
				    "value" => "enable"
			    ),
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "dropdown",
			    "heading" => __("Autoplay",ZO_NAME),
			    "param_name" => "video_autoplay",
			    "value" => array(
				    "Disable" => "disable",
				    "Enable" => "enable"
			    ),
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "dropdown",
			    "heading" => __("Hide Controls",ZO_NAME),
			    "param_name" => "video_control",
			    "value" => array(
				    "Disable" => "disable",
				    "Enable" => "enable"
			    ),
			    "group" => __("Settings", ZO_NAME)
		    ),
		    array(
			    "type" => "dropdown",
			    "heading" => __("Hide Video Info",ZO_NAME),
			    "param_name" => "video_info",
			    "value" => array(
				    "Disable" => "disable",
				    "Enable" => "enable"
			    ),
			    "group" => __("Settings", ZO_NAME)
		    ),
	    	array(
	            "type" => "zo_template",
	            "param_name" => "zo_template",
	            "shortcode" => "zo_video",
	            "admin_label" => true,
	            "heading" => __("Shortcode Template",ZO_NAME),
	            "group" => __("Template", ZO_NAME),
	        )
	    )
	)
);
class WPBakeryShortCode_zo_video extends ZoShortcode{
	protected function content($atts, $content = null){
		$atts_extra = shortcode_atts(array(
			'video_url' => '',
			'video_width' => '100%',
			'video_height' => '100%',
			'thumbnail_custom' => 'disable',
			'thumbnail_url'=> '',
			'video_autoplay'=> '',
			'video_control' => '',
			'video_info' => '',
		), $atts);
		$atts = array_merge($atts_extra,$atts);
		if (!empty($atts['thumbnail_url'])) {
			$attachment_image = wp_get_attachment_image_src($atts['thumbnail_url'], 'full');
			$atts['thumbnail_url'] = $attachment_image[0];
		}
		/* Load Zo Video */
		wp_enqueue_script('zo-video-play', ZO_JS. 'zo.video.js', array('jquery'), '1.0.0');

		return parent::content($atts, $content);
	}
}