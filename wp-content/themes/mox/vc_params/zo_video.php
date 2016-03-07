<?php
$params = array(
    array(
        "type" => "dropdown",
        "heading" => __("Show Poup", 'creativ'),
        "param_name" => "show_poup",
        "value" => array(
            "No" => 0,
            "Yes" => 1,
        ),
        "template" => array(
            'zo_video.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show Video Title", 'creativ'),
        "param_name" => "show_video_title",
        "value" => array(
            "No" => 0,
            "Yes" => 1,
        ),
        "template" => array(
            'zo_video.php',
        )
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Show Video Icon", 'creativ'),
        "param_name" => "show_video_icon",
        "value" => array(
            "No" => 0,
            "Yes" => 1,
        ),
        "template" => array(
            'zo_video.php',
        )
    )
);