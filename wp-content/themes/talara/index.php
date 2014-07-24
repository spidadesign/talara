<?php
	/* Template Name: News */
	get_header();
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'posts_per_page' => 8,
		'paged' => $paged,
		);
	$the_query = new WP_Query( $args );
	//echo "<pre>"; print_r($the_query); echo "</pre>";
	$count = 0;
	$evenOdd = 0;
?>
<div class="title-bar">
	<div class="container">
		<h1>News</h1>
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
					<img class="img-responsive" src="http://placehold.it/420x420">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img class="img-responsive" src="http://placehold.it/420x420">
				</div>
				<div class="col-md-7">
					<div class="row">
				<?php
					endif;
				endif;
	?>
			<div class="col-md-6 ind-post">
			   		<a href="<?php echo $guid; ?>" target="_blank">
			   			<div class="row">
			   				<hr>
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
		$count++;
		endwhile;
	?>
</div></div></div>
<div>
	<?php
		echo get_next_posts_link( '<div class="nav-previous"></div>', $the_query->max_num_pages );
		echo get_previous_posts_link( '<div class="nav-next"></div>' );
	?>
	</div>
</div>

<?php
	wp_reset_postdata();
	else:
?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>