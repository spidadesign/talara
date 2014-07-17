<?php
	/* Template Name: Home */
	get_header();
	$slider_args =  array(
		'post_type' => 'home-slider',
		'posts_per_page' => -1,
		'order' => 'asc'
		);
	$slider  = new WP_Query( $slider_args );
?>
	<div class="header-slider">
	<?php if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post();	?>
	<div><?php echo get_the_post_thumbnail();?></div>
	<?php
		endwhile;
		endif;
		wp_reset_postdata();
	?>

	</div>
	<div class="container">
		<div class="col-md-8 col-sm-12 col-xs-12 main">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="container blog-home">
		<div class="col-md-offset-4 col-md-8">
			<div class="title">Latest News</div>
			<?php $loop = new WP_Query( array('post_type' => 'post') );	?>
			<div class="blog-slider">
				<div>
					<?php 
						$count = 0;
						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
							if(($count % 2 === 0) && ($count !== 0)):
								
								echo "</div><div>";
							endif;
							$custom = get_post_custom(get_the_ID());
							$pdf = get_attached_media();
							$date = get_the_date('m/d');
							if($pdf):
								foreach ($pdf as $p):
									if($p->post_mime_type === 'application/pdf'):
										$guid = $p->guid;
									endif;
								endforeach;
							elseif($custom):
								$guid = $custom['site_url'][0]; 
								
							endif;
							
						?>
						   	<div class="col-md-6 ind-post">
						   		<a href="<?php echo $guid ?>" target="_blank">
						   			<div class="row">
						   				<div class="date">
						   					<?php echo $date; ?>
						   				</div>
						   				<div class="row">
						   					<div class="col-md-10">
						   						 <p><?php the_title(); ?></p>
						   					</div>
						   				</div>
						   			</div>
						   				</a>
						   		</div>
					<?php
						unset($guid);
						$count++;
						endwhile;
						wp_reset_postdata();
						 else:
					?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>