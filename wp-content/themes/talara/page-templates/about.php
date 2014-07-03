<?php
	/* Template Name: About Us */
	get_header();
?>
<div class="title-bar">
	<div class="container">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
</div>
<div class="container">
	<?php echo get_post()->post_content; ?>
</div>
<?php get_footer(); ?>
