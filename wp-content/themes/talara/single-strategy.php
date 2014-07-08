<?php
	get_header();
 	$strategy_type = explode('/', $_SERVER[REQUEST_URI]);
 	foreach($strategy_type as $st):
 		if($st === 'public-investments'):
 			$post_name = 'public-investments';
 			$other_post_name = 'private-investments';
 		elseif($st === 'private-investments'):
 			$post_name = 'private-investments';
 			$other_post_name = 'public-investments';
 		endif;
 	endforeach;
	$args =  array(
		'post_type' => 'strategy',
		'posts_per_page' => 1,
		'name' => $post_name
		);
	$loop = new WP_Query( $args );
	$count = 0;
	$other_strategy = explode('-', $other_post_name);
	$other_strategy = implode(' ', $other_strategy);
	$other_strategy = ucwords(strtolower($other_strategy));

	//echo "<pre>"; print_r($loop); echo "</pre>";
?>

	<div class="header-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-1.jpg" alt=""></div>
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-2.jpg" alt=""></div>
	</div>
	<?php 
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
		$custom = get_post_custom();
	?>
		<div class="container content">
			<div class="row title-row">
				<div class="title col-md-3">
					<?php echo $custom['title'][0]; ?>
				</div>
				<div class="pull-right">
					<a class="btn btn-default" href="#">Check out our Portfolio</a>
					<a href="<?php echo site_url(); ?>/strategies/<?php echo $other_post_name; ?>" class="btn btn-default">Check out our <?php echo $other_strategy; ?></a>
				</div>
			</div>
			<div class="row">
			<?php 
				$content = explode('</p>', str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', get_the_content() ) )); 
				//echo "<pre>"; print_r($content); echo "</pre>";
				foreach($content as $c):
					if($count % 3 === 0):
				?>
					</div><div class="row">
				<?php endif; ?>
				<div class="col-md-4">
					<?php echo $c ?> </p>
				</div>
				<?php
					$count++;
					endforeach;
				?>
			</div>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>