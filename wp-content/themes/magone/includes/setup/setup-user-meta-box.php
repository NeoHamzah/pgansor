<?php
// global $magone_social_icon_list;
// global $user_social_links_fields;
// $user_social_links_fields = array();

// // attach social icon to customizer declaration
// foreach ($magone_social_icon_list as $key => $name) {
// 	$user_social_links_fields[$key] = array(
// 		'label' => $name,
// 		'description' => wp_kses(
// 			sprintf(__('Input %s Link', 'magone'), '<i class="fa fa-'.$key.'"></i>'),
// 			array(
// 				'i' => array('class'=>array())
// 			)
// 		)
// 	);
// }



// user-meta-box without handle or action will call shortcode as default
do_action('sneeit_setup_user_meta_box', array(
	'author-social-links' => array(
		'title' => esc_html__('Author Social Links', 'magone'),		
		// 'fields' => $user_social_links_fields
		'fields' => array(
			'author-social-links' => array(
				'label' => esc_html__('Your Socical Links (One Link Per Line)', 'magone'), 
				'type' => 'textarea',
				'description' => 'Input your social links. One link per line. The order of the link will be kept when displaying on the front-page'
			)
		)
	),	
));
function sneeit_author_social_links($author_id) {
	global $magone_social_icon_list;
	$author_social_links = get_user_meta($author_id, 'author-social-links', true);
	if (empty($author_social_links)) {		
		foreach ($magone_social_icon_list as $key => $value) :
			$link = get_user_meta($key);
			if (empty($link)) continue;
			$author_social_links .= $link . PHP_EOL;
		endforeach;	
	}
	if (empty($author_social_links)) return;
	
	$author_social_links = explode("\n", str_replace("\r", "", $author_social_links));	
	
	$html = '';	

	foreach ($author_social_links as $link) {		
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
		
			'<a href="'. $link .'" title="'.$title.'" rel="nofollow" class="author-social-links social-icon '. $title .'" target="_blank">'.
				'<i class="'.$icon.'"></i>'.
			'</a>';
		
	}

	if ($html) {
		echo '<div class="author-social-icon-links">'.$html.'<div class="clear"></div></div>';
	}
}


											
											
