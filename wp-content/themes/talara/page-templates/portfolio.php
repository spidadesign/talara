<?php
	/* Template Name: Portfolio */
	get_header();
	$args = array(
		'post_type' => 'portfolio',
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
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="container">
	<?php 
		while( $loop->have_posts() ) : $loop->the_post();	
		$custom = get_post_custom();
	?>
		<div class="individual-portfolio">
			<div class="row">
				<div class="col-md-4">
					<div class="portfolio-img">
						<?php the_post_thumbnail(get_the_ID(), 'thumbnail',  $attr); ?>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<h3><?php the_title( ); ?></h3>
						<?php if($custom['site_url'][0]): ?>
							<a class="btn btn-default" href="<?php echo $custom['site_url'][0];?>" target="_blank">Visit Website</a>
						<?php endif; ?>
					</div>
					<div class="row">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

</div>
<?php get_footer(); ?>