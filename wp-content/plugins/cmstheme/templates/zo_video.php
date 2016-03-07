<div class="zo-video-play-wrapper">
	<a class="play-button" href="#" title="Click to Play Video"
	   data-video="<?php echo esc_url($atts['video_url']); ?>"
	   data-width="<?php echo esc_attr($atts['video_width']); ?>"
		data-height="<?php echo esc_attr($atts['video_height']); ?>"
		data-autoplay="<?php echo $atts['video_autoplay'] == "enable" ? 1 : 0; ?>"
		data-control="<?php echo $atts['video_control'] == "enable" ? 0 : 1; ?>"
		data-info="<?php echo $atts['video_info'] == "enable" ? 0 : 1; ?>">
		<img src="<?php echo esc_url( $atts['thumbnail_url'] ); ?>" alt="Video Thumbnail" />
	</a>
	<div class="video-player">
		<a class="video-close" href="#" title="Close Video">X</a>
	</div>
</div>
