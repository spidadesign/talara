<?php
	/* Template Name: Team */
	get_header();
	$type = 'staff';
	$type = $wp_query->query_vars['type'];

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
				$custom = get_post_custom( );
			?>
			<div class="row">
				<div class="col-md-3">
					<?php echo get_the_post_thumbnail();?>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<div class="row">
						<div class="title">
							<?php the_title(); ?>
							<span><?php echo $custom['title'][0]; ?></span>
						</div>
					</div>
					<div class="row">
						<?php the_excerpt(); ?>
					</div>
					<div class="row">
						<button class="more btn btn-danger" type="button">More</button>
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