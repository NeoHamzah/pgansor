<?php if (!get_theme_mod('hide_header_social_icons')) : 
	$header_social_icon_links = get_theme_mod('header_social_icon_links');
	
	global $magone_social_icon_list;
	
	if (empty($header_social_icon_links)) {		
		foreach ($magone_social_icon_list as $key => $value) :
			$link = get_theme_mod($key);
			if (empty($link)) continue;
			$header_social_icon_links .= $link . PHP_EOL;
		endforeach;	
	}	
	
	$header_social_icon_links = explode("\n", str_replace("\r", "", $header_social_icon_links));	
	if (empty($header_social_icon_links)) return;
	
	$html = '';	

	foreach ($header_social_icon_links as $link) {		
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
		echo '<div class="header-social-icons"><ul>'.$html.'</ul><div class="clear"></div></div>';
	}
/*
?>							
	<?php global $customize_social_icon_list;
	if (count($customize_social_icon_list)):?>						
		<div class="header-social-icons">						
			<ul>
			<?php 
			foreach ($customize_social_icon_list as $key => $value) : ?>
				<li><a href="<?php echo esc_url($value); ?>" title="<?php echo esc_attr($key) ?>" class="social-icon <?php echo esc_attr($key) ?>" target="_blank"><i class="fa fa-<?php echo esc_attr($key) ?>"></i></a></li>
			<?php endforeach; ?>
			</ul>
			<div class="clear"></div>
		</div>
	<?php endif; ?>							
<?php 
*/
endif;