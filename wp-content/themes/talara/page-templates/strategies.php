<?php
	/* Template Name: Strategies */
	get_header();
	$count = 0;
?>
<div class="title-bar">
	<div class="container">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
</div>
<?php $custom = get_post_custom(get_the_ID()); ?>
<div class="container">
	<?php
		foreach ( $custom as $key => $value ) :
			if ( ($key != '_edit_last') and ($key != '_edit_lock') and ($key != '_wp_page_template') ):
				$title = explode(' ', $key);
				if ( $count % 2 === 0 ):
	?>
			<div class="row strategy">
				<div class="col-md-4">
					<img class="img-responsive" src="http://placehold.it/350x350">
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="title col-md-8">
							<span><?php echo $title[0]; ?></span>
							<?php echo $title[1]; ?>
						</div>
						<a class="btn btn-default" href="<?php echo get_permalink(); ?>">More</a>
					</div>
					<div class="content">
						<?php echo $value[0]; ?>
					</div>
				</div>
			</div>
		<?php else:	?>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<div class="row">
						<div class="title col-md-9">
							<span><?php echo $title[0]; ?></span>
							<?php echo $title[1]; ?>
						</div>
						<a class="btn btn-default" href="<?php echo get_permalink(); ?>">More</a>
					</div>
					<div class="content">
						<?php echo $value[0]; ?>
					</div>
				</div>
				<div class="col-md-4">
					<img class="img-responsive" src="http://placehold.it/350x350">
				</div>
			</div>
	<?php
			endif;
			$count++;
			endif;
			endforeach;
			unset($title);
			unset($custom);
			unset($key);
			unset($value);
?>
</div>
<?php get_footer(); ?>