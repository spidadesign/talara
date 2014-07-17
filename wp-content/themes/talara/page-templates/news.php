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
			   		<a href="<?php echo $guid; ?>">
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
		$count++;
		endwhile;
    	wp_reset_postdata();
	?>
</div></div></div></div>
<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>