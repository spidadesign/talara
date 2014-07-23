<?php
	/* Template Name: Team */
	get_header();
	if(!$wp_query->query_vars['type']):
		$type = 'staff';
	else:
		$type = $wp_query->query_vars['type'];
	endif;

	$args = array(
		'post_type' => $type,
		'posts_per_page' => -1,
		'order' => 'asc'
	);
	$attr = array(
		'class'=>'img-responsive',
	);
	$loop = new WP_Query( $args );
?>
<div class="title-bar">
	<div class="container">
		<h1 class="top-title"><?php the_title(); ?></h1>
		<div class="pull-right navigation">
			<a class="btn btn-default staff" href="<?php echo site_url(); ?>/team/staff">Talara Staff</a>
			<a class="btn btn-default advisory" href="<?php echo site_url(); ?>/team/advisory">Advisory Board</a>
		</div>
	</div>
</div>
<div class="container">
	<?php
		if ( $loop->have_posts() ) :
			$count = 0;
			while ( $loop->have_posts() ) :
				$loop->the_post();
				$custom = get_post_custom();
				$content = explode(' ', apply_filters( 'the_content', get_the_content()));
			?>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 team-img">
					<?php echo get_the_post_thumbnail();?>
				</div>
				<div class="col-md-8 col-md-offset-1 col-xs-offset-0 col-sm-offset-1 col-sm-7 col-xs-col-12 member">
					<div class="row">
						<div class="title">
							<?php the_title(); ?>
							<span><?php echo $custom['title'][0]; ?></span>
						</div>
					</div>
					<div class="row">
						<?php 
							$wordCounter = 0;
							foreach($content as $words):
								echo $words.' ';
								$wordCounter++;
								if($wordCounter == 60):
									echo '<div class="full-about collapse" id="team'.$count.'">';
								endif;
							endforeach;
						?>
						</div>
					</div>
					<div class="row">
						<button class="more btn btn-danger" type="button" data-toggle="collapse" data-target="#team<?php echo $count; ?>">More</button>
					</div>
				</div>
			</div>
			<hr>
	<?php
		$count++;
		endwhile;
		endif;
	?>
</div>

<?php get_footer(); ?>