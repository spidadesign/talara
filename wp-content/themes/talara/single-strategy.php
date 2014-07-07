<?php
	get_header();
 	$strategy_type = explode('/', $_SERVER[REQUEST_URI]);
 	foreach($strategy_type as $st):
 		if($st === 'public-investments'):
 			$post_name = 'public-investments';
 		elseif($st === 'private-investments'):
 			$post_name = 'private-investments';
 		endif;
 	endforeach;
	$args =  array(
		'post_type' => 'strategy',
		'posts_per_page' => 1,
		'name' => $post_name
		);
	$loop = new WP_Query( $args );
	//echo "<pre>"; print_r($loop); echo "</pre>";
?>

	<div class="header-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-1.jpg" alt=""></div>
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-2.jpg" alt=""></div>
	</div>
	<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();	?>
		<div class="container">
			<?php 
			echo get_the_content();
				$content = explode('<p>', get_the_content()); 
				echo "<pre>"; print_r($content); echo "</pre>";
			?>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>