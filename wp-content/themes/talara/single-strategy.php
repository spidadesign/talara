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
			
		?>
		<div class="container content">
			<div class="row">
				<?php 
					$count = 0;
					$content = get_the_content(); 
					$content = explode('</p>', str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', get_the_content() ) )); 
					//echo "<pre>"; print_r($content); echo "</pre>";
					foreach($content as $c):
						if($count % 3 === 0 && $count !== 0):
					?>
						</div>
						<div class="row">
					<?php endif; ?>
				<?php if($count === 0 || $count === 6): ?>
					<div class="row line">
						<div class="col-md-4 fl">
							<?php echo $c; ?>
						</div>
				<?php elseif( $count === 1 || $count === 2 || $count === 7 || $count === 8): ?>
					<div class="col-md-7 fr">
						<?php echo $c; ?>
					</div>
					<?php if($count === 2 || $count === 8): ?>
						</div>
					<?php  endif; ?>
				<?php elseif($count === 3 || $count === 4 || $count === 9 || $count === 10): ?>
					<div class="row line">
						<div class="col-md-7 fl">
							<?php echo $c; ?>
						</div>
				<?php elseif($count === 5 || $count === 11): ?>
					
						<div class="col-md-4 fr">
							<?php echo $c; ?>
						</div>
						</div>
				<?php endif; ?>
				<?php
					$count++;
					endforeach; 
				?>
			</div>
		</div>
		</div>
		</div>
	<?php 
		endwhile; 
		endif; 
		wp_reset_postdata(); 
		get_footer(); 
	?>