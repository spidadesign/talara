<?php
	/* Template Name: Home */
	get_header();
?>
	<div class="header-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-1.jpg" alt=""></div>
		<div><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/slider-2.jpg" alt=""></div>
	</div>
	<div class="container">
		<div class="col-md-7 col-sm-12 col-xs-12 main">
			<span>
				<span>T</span>alara Capital Management 
			</span>
			(“<span class="italics">Talara</span>”) is a real asset investment firm focused on the global resource and industrial sectors. Talara, through both private and public investments, takes a long-term fundamental approach with the objective of generating superior risk-adjusted returns for investors
		</div>
	</div>
	<div class="container blog-home">
		<div class="col-md-offset-4 col-md-8">
			<div class="title">Latest News</div>
			<?php 
				$args = array('post_type' => 'post');
				$loop = new WP_Query( $args ); 
				//echo "<pre>"; print_r($loop); echo "</pre>";
			?>
			<div class="blog-slider">
				<div>
					<?php 
						$count = 0;
						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
							if(($count % 2 === 0) && ($count !== 0)):
								echo "</div><div>";
							endif;
						?>
						   	<div class="col-md-6 ind-post">
						   		<a href="<?php the_permalink(); ?>">
						   			<div class="row">
						   				<div class="date">
						   					<?php the_date('m/d'); ?>
						   				</div>
						   				<div class="row">
						   					<div class="col-md-10">
						   						 <?php the_excerpt(); ?>
						   					</div>
						   				</div>
						   			</div>
						   				</a>
						   		</div>
						   
					<?php 
						$count++;
						endwhile; 
					?>
					<?php wp_reset_postdata(); ?>

					<?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>