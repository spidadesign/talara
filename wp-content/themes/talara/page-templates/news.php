<?php
	/* Template Name: News */
	get_header();
	$args = array('posts_per_page' => 8);
	$the_query = new WP_Query( $args );
	$count = 0;
	$evenOdd = 0;
?>
<div class="title-bar">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="row">
	<?php
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				if ( $count !== 0 ) :
					//close the row content row
					if ( ($count % 2 === 0) and ($count % 4 !== 0) ) :
						echo '</div><div class="row">';
					//create a new row
					elseif ( $count % 3 === 0) :
						echo '';
					endif;
					//close content block
					if ( $count % 4 === 0 ) :
				?>
					</div>
				</div>
				<div class="col-md-4">
					<img class="img-responsive" src="http://placehold.it/350x350">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img class="img-responsive" src="http://placehold.it/350x350">
				</div>
				<div class="col-md-7">
					<div class="row">
				<?php
					endif;
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
    	wp_reset_postdata();
	?>
</div></div></div></div>
<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>