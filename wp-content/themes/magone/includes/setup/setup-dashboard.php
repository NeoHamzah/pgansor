<?php
if (function_exists('sneeit_framework') &&
/* since 2.8, we require sneeit 3.1 to work */
defined('SNEEIT_PLUGIN_VERSION') && version_compare(SNEEIT_PLUGIN_VERSION, '3.1', '>=') &&
is_admin()) :
	
	$magone_demo_declarations = array(				
		'magone' => array(
			'name' => esc_html__('MagOne', 'magone'), 
			'screenshot' => MAGONE_THEME_URL_IMAGES .'/demo-screenshot-magone.jpg',
			'demo' => 'http://magone.sneeit.com',
			'files' => array(
				// database file
				// 'https://www.dropbox.com/s/yu2bl0r841jx98v/sneeit-demo-data-1465459716.gz?dl=1',					
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-data-1465459716.gz',

				// media structure
				// 'https://www.dropbox.com/s/hf86q6xeprb5qwk/sneeit-demo-media-structure-1465459717.gz?dl=1', 
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-structure-1465459717.gz', 

				// media files
				// 'https://www.dropbox.com/s/pmf8v3l8at4m3s8/sneeit-demo-media-files-1465459718.gz?dl=1',
				// 'https://www.dropbox.com/s/qzx0l0u677dmqis/sneeit-demo-media-files-1465459720.gz?dl=1',
				// 'https://www.dropbox.com/s/f7qi5loi54rvmwe/sneeit-demo-media-files-1465459721.gz?dl=1',
				// 'https://www.dropbox.com/s/5eyd69qlvvsccvl/sneeit-demo-media-files-1465459728.gz?dl=1',
				// 'https://www.dropbox.com/s/wmzwa53e82vfxbw/sneeit-demo-media-files-1465459730.gz?dl=1',
				// 'https://www.dropbox.com/s/l8lnag7jrg6lqy6/sneeit-demo-media-files-1465459732.gz?dl=1',
				// 'https://www.dropbox.com/s/0ia268rh3udn3le/sneeit-demo-media-files-1465459733.gz?dl=1',
				// 'https://www.dropbox.com/s/2goom0hu7t4iyv5/sneeit-demo-media-files-1465459735.gz?dl=1',
				// 'https://www.dropbox.com/s/00su8src7mf7m09/sneeit-demo-media-files-1465459737.gz?dl=1',				
				
				
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459718.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459720.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459721.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459728.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459730.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459732.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459733.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459735.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459737.gz',				

				
			)
		),
		'flatone' => array(
			'name' => esc_html__('FlatOne', 'magone'), 
			'screenshot' => MAGONE_THEME_URL_IMAGES .'/demo-screenshot-flatone.jpg',
			'demo' => 'http://magone.sneeit.com/flatone',
			'files' => array(
				// database file
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/flatone/sneeit-demo-data-1465718071.gz?dl=1',

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-structure-1465459717.gz', 				

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459718.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459720.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459721.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459728.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459730.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459732.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459733.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459735.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459737.gz',	
			)
		),
		'newsone' => array(
			'name' => esc_html__('NewsOne', 'magone'), 
			'screenshot' => MAGONE_THEME_URL_IMAGES .'/demo-screenshot-newsone.jpg',
			'demo' => 'http://magone.sneeit.com/newsone',
			'files' => array(
				// database file
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/newsone/sneeit-demo-data-1465784722.gz?dl=1',

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-structure-1465459717.gz', 				

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459718.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459720.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459721.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459728.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459730.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459732.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459733.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459735.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459737.gz',	
			)
		),
		'sahione' => array(
			'name' => esc_html__('SahiOne', 'magone'), 
			'screenshot' => MAGONE_THEME_URL_IMAGES .'/demo-screenshot-sahione.jpg',
			'demo' => 'http://magone.sneeit.com/sahione',
			'files' => array(
				// database file
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/sahione/sneeit-demo-data-1465786365.gz?dl=1',

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-structure-1465459717.gz', 				

				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459718.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459720.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459721.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459728.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459730.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459732.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459733.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459735.gz',
				'https://raw.githubusercontent.com/tiennguyenvan/cdn/main/wp-magone/demos/magone/sneeit-demo-media-files-1465459737.gz',	
			)
		),		
	);
	

	$magone_demo_installer = array(
		'menu-title' => esc_html__('Demo Installation', 'magone'), 
		'page-title' => esc_html__('Demo Installation', 'magone'),
		'html-before' => '',
		'html-after' => '',
		'declarations' => $magone_demo_declarations,
	);
	do_action('sneeit_demo_installer', $magone_demo_installer);
	
	if (0) :
		$magone_envato_theme_activation = array(
			'menu-title' => esc_html__('Theme Activation', 'magone'), 
			'page-title' => esc_html__('Theme Activation', 'magone'),
		);
		if ( ! apply_filters( 'sneeit_envato_theme_activation_check', 0 ) ) {
			$magone_envato_theme_activation['html-before'] 
				= esc_html__( 'After activating theme, you will get auto update feature!', 'magone' ); 		
		} else {
			$magone_envato_theme_activation['html-before'] 
				= esc_html__( 'You activated the theme successful!', 'magone' );
		}
		do_action('sneeit_envato_theme_activation', $magone_envato_theme_activation);
		do_action('sneeit_envato_theme_auto_update');
	endif;
	
	do_action( 'sneeit_social_api_key_collector', array(
		'menu-title' => esc_html__('Social API Keys', 'magone'), 
		'page-title' => esc_html__('Social API Keys', 'magone'),
		'html-before' => '',
		'html-after' => '',
		'declarations' => array(
			'youtube' => true,
			'instagram' => true
		),
	));
	
	
endif;