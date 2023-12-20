<?php

function magone_widget_social_icons( $args, $instance, $widget_id, $widget_declaration) {
	$instance = magone_set_widget_instance($instance, $widget_declaration);
	magone_widget_common_header('LinkList social_icons linklist', $instance);	

	$links = $instance['links'];
	global $magone_social_icon_list;
	
	if (empty($links)) {		
		foreach ($magone_social_icon_list as $key => $value) :
			if (empty($instance[$key])) continue;


			$links .= $instance[$key] . PHP_EOL;
		endforeach;	
	}
	
	$links = explode("\n", str_replace("\r", "", $links));
	if (empty($links)) return;

	$html = '';	
	// https://www.quora.com/profile/Sean-Kernan https://myspace.com/atrak https://www.snapchat.com/en-GB https://telegram.org/blog https://www.behance.net/tiennguyenvan https://www.facebook.com/pages/Sneeit/622691404530609 https://plus.google.com/+TienNguyenPlus/posts https://twitter.com/tiennguyentweet https://www.youtube.com/channel/UCMwiaL6nKXKnSrgwqzlbkaw

	foreach ($links as $link) {		
		$link = trim($link);
		if (empty($link)) continue;
		
		$icon = parse_url($link, PHP_URL_HOST);
		$icon = str_replace('www.', '', $icon);
		$icon = str_replace('.com', '', $icon);
		$icon = explode('.', $icon);
		if (count($icon) > 1) {
			$icon = strlen($icon[0]) > strlen($icon[1]) ? $icon[0] : $icon[1];
		} else {
			$icon = $icon[0];
		}
		$icon = esc_attr($icon);
		$title = ucfirst($icon);

		// special links that need special icons
		if (strpos($link, 'myspace')) {
			$icon = 'fas fa-user-friends';
		} else {
			if (!empty($magone_social_icon_list[$icon])) {
				$icon = 'fa fa-'.$icon;
			} else {
				$icon = 'fab fa-'.$icon;
			}			
		}		
		
		$html .= 
		'<li>'.
			'<a href="'. $link .'" title="'.$title.'" class="social-icon '. $title .'" target="_blank">'.
				'<i class="'.$icon.'"></i>'.
			'</a>'.
		'</li>';		
	}

	if ($html) {
		echo '<ul>'.$html.'</ul><div class="clear"></div>';
	}

	/*
	// global $magone_social_icon_list;
	
	// if (count($magone_social_icon_list)):
	// ?><ul><?php
	// 	foreach ($magone_social_icon_list as $key => $value) : 
	// 		if (empty($instance[$key])) {
	// 			continue;
	// 		}
	// 	?><li><a href="<?php echo esc_url($instance[$key]); ?>" title="<?php echo esc_attr($key) ?>" class="social-icon <?php echo esc_attr($key) ?>" target="_blank"><i class="fa fa-<?php echo esc_attr($key) ?>"></i></a></li><?php
	// 	endforeach; 
	// ?></ul><div class="clear"></div><?php 
	// endif;
	*/

	magone_widget_common_footer();
}