<?php
vc_map(array(
    "name" => 'ZO Google Map',
    "base" => "zo_googlemap",
    "icon" => "zo_icon_for_vc",
    "category" => __('ZoTheme Shortcodes', ZO_NAME),
    "description" => __('Map API V3 Unlimited Style', ZO_NAME),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __('API Key', ZO_NAME),
            "param_name" => "api",
            "value" => '',
            "description" => __('Enter you api key of map, get key from (https://console.developers.google.com)', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Address', ZO_NAME),
            "param_name" => "address",
            "value" => 'New York, United States',
            "description" => __('Enter address of Map', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Coordinate', ZO_NAME),
            "param_name" => "coordinate",
            "value" => '',
            "description" => __('Enter coordinate of Map, format input (latitude, longitude)', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Click Show Info window', ZO_NAME),
            "param_name" => "infoclick",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Click a marker and show info window (Default Show).', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Marker Coordinate', ZO_NAME),
            "param_name" => "markercoordinate",
            "value" => '',
            "description" => __('Enter marker coordinate of Map, format input (latitude, longitude)', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Marker Title', ZO_NAME),
            "param_name" => "markertitle",
            "value" => '',
            "description" => __('Enter Title Info windows for marker', ZO_NAME)
        ),
        array(
            "type" => "textarea",
            "heading" => __('Marker Description', ZO_NAME),
            "param_name" => "markerdesc",
            "value" => '',
            "description" => __('Enter Description Info windows for marker', ZO_NAME)
        ),
        array(
            "type" => "attach_image",
            "heading" => __('Marker Icon', ZO_NAME),
            "param_name" => "markericon",
            "value" => '',
            "description" => __('Select image icon for marker', ZO_NAME)
        ),
        array(
            "type" => "textarea_raw_html",
            "heading" => __('Marker List', ZO_NAME),
            "param_name" => "markerlist",
            "value" => '',
            "description" => __('[{"coordinate":"41.058846,-73.539423","icon":"","title":"title demo 1","desc":"desc demo 1"},{"coordinate":"40.975699,-73.717636","icon":"","title":"title demo 2","desc":"desc demo 2"},{"coordinate":"41.082606,-73.469718","icon":"","title":"title demo 3","desc":"desc demo 3"}]', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Info Window Max Width', ZO_NAME),
            "param_name" => "infowidth",
            "value" => '200',
            "description" => __('Set max width for info window', ZO_NAME)
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Map Type", ZO_NAME),
            "param_name" => "type",
            "value" => array(
                "ROADMAP" => "ROADMAP",
                "HYBRID" => "HYBRID",
                "SATELLITE" => "SATELLITE",
                "TERRAIN" => "TERRAIN"
            ),
            "description" => __('Select the map type.', ZO_NAME)
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Style Template", ZO_NAME),
            "param_name" => "style",
            "value" => array(
                "Default" => "",
                "Custom" => "custom",
                "Light Monochrome" => "light-monochrome",
                "Blue water" => "blue-water",
                "Midnight Commander" => "midnight-commander",
                "Paper" => "paper",
                "Red Hues" => "red-hues",
                "Hot Pink" => "hot-pink"
            ),
			"dependency" => array(
				"element"=>"type",
				"value" => "ROADMAP"
			),
            "description" => 'Select your heading size for title.'
        ),
        array(
            "type" => "textarea",
            "heading" => __('Custom Template', ZO_NAME),
            "param_name" => "content",
            "value" => '',
			"dependency" => array(
				"element"=>"style",
				"value" => "custom"
			),
            "description" => __('Get template from http://snazzymaps.com', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Zoom', ZO_NAME),
            "param_name" => "zoom",
            "value" => '13',
            "description" => __('zoom level of map, default is 13', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Width', ZO_NAME),
            "param_name" => "width",
            "value" => 'auto',
            "description" => __('Width of map without pixel, default is auto', ZO_NAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Height', ZO_NAME),
            "param_name" => "height",
            "value" => '350px',
            "description" => __('Height of map without pixel, default is 350px', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Scroll Wheel', ZO_NAME),
            "param_name" => "scrollwheel",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('If false, disables scrollwheel zooming on the map. The scrollwheel is disable by default.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Pan Control', ZO_NAME),
            "param_name" => "pancontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Pan control.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Zoom Control', ZO_NAME),
            "param_name" => "zoomcontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Zoom Control.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Scale Control', ZO_NAME),
            "param_name" => "scalecontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Scale Control.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Map Type Control', ZO_NAME),
            "param_name" => "maptypecontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Map Type Control.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Street View Control', ZO_NAME),
            "param_name" => "streetviewcontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Street View Control.', ZO_NAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Over View Map Control', ZO_NAME),
            "param_name" => "overviewmapcontrol",
            "value" => array(
                __("Yes, please", ZO_NAME) => true
            ),
            "description" => __('Show or hide Over View Map Control.', ZO_NAME)
        )
    )
));

class WPBakeryShortCode_zo_googlemap extends ZoShortcode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}