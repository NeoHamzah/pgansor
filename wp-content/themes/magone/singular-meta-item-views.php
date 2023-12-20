<?php
if ($p->args['show_view_count']): 
	$key = MAGONE_META_KEY_VIEWS;
	if (get_theme_mod('view_count_key')) {
		$key = get_theme_mod('view_count_key');
	}
	$views = get_post_meta($p->id, $key, true);
	if ($views) : ?>
		<span class="views post-meta post-meta-views" >
			<i class="fa fa-eye"></i>  
			<span><?php echo $views; ?></span>
		</span>
	<?php endif; ?>
<?php endif;