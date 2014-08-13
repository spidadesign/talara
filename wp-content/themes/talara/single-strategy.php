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

		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
			$custom = get_post_custom();
			if($strategy_type[1] === 'talara'):
				$st_page = $strategy_type[3];
			else:
				$st_page = $strategy_type[2];
			endif;
?>
<div class="title-bar">
	<div class="container">
		<?php if($st_page === 'private-investment'): ?>
			<h1 class="top-title">Private Equity</h1>
			<div class="pull-right navigation">
				<a class="btn btn-default staff" href="<?php echo site_url(); ?>/portfolio">Portfolio</a>
			</div>
		<?php else: ?>
			<h1>Long Only and Long Short Equity</h1>
		<?php endif; ?>
	</div>
</div>
	<div class="container content">
		<?php the_content(); ?>
	</div>
		<?php
		endwhile;
		endif;
		wp_reset_postdata();
		get_footer();
	?>