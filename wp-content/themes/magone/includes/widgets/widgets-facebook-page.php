<?php
function magone_widget_facebook_page( $args, $instance, $widget_id, $widget_declaration) {
	$instance = magone_set_widget_instance($instance, $widget_declaration);
	magone_widget_common_header('HTML', $instance);	
	
	static $fb_page_id = 0;
	$width = 340;
	if (is_numeric($instance['width'])) {
		$width = esc_attr($instance['width']);
	}
	$height = 500;
	if (is_numeric($instance['height'])) {
		$height = esc_attr($instance['height']);
	}
		
	$adapt = esc_attr($instance['adapt-container-width']? 'true': '');
	
//	echo '<div class="fb-page-raw" id="fb-page-'.$fb_page_id.'"'.
//			'data-href="'.esc_attr(esc_url($instance['href'])).'" '.
//			'data-width="'.esc_attr($instance['width']).'" '.
//			'data-height="'.esc_attr($instance['height']).'" '.
//			'data-tabs="timeline" '.
//			'data-hide-cover="'.esc_attr($instance['hide-cover']? 'true': 'false').'" '.
//			'data-show-facepile="'.esc_attr($instance['show-facepile']? 'true': 'false').'" '.
//			'data-adapt-container-width="'.esc_attr($instance['adapt-container-width']? 'true': 'false').'" '.			
//			'data-small-header="'.esc_attr($instance['small-header']? 'true': 'false').'" '.			
//			'data-show-posts="'.esc_attr($instance['show-posts']? 'true': 'false').'" '.
//			'data-lazy="true" '.
//			'></div>';
	$src = add_query_arg(array(
		'href' => esc_attr(esc_url($instance['href'])),
		'height' => $height,		
		'tabs' => 'timeline',
		'hide-cover' => esc_attr($instance['hide-cover']? 'true': 'false'),
		'show-facepile' => esc_attr($instance['show-facepile']? 'true': 'false'),
		'adapt-container-width' => $adapt? 'true': 'false',
		'small-header' => esc_attr($instance['small-header']? 'true': 'false'),
		'show-posts' => esc_attr($instance['show-posts']? 'true': 'false')
	), 'https://www.facebook.com/plugins/page.php');
	
	echo '<iframe class="fb-page-raw-iframe" data-src="' . $src . '" data-adapt="'.$adapt.'" data-width="'.$width.'" height="'.$height.'" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" data-lazy="true"></iframe>';
			
	magone_widget_common_footer();
	$fb_page_id++;
}