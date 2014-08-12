<?php
	/* Template Name: Contact */
	get_header();
?>
<div class="title-bar">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="container">
	<div class="col-md-6">
		<h3>New York Office</h3>
		<span>805 Third Ave, Floor 20</span>
		<span>New York, NY 10022</span>
		<div id="new_york" class="map-canvas"></div>
	</div>
	<div class="col-md-6">
		<h3>Houston Office</h3>
		<span>1221 McKinney Street, Floor 21</span>
		<span>Houston, TX 77010</span>
		<div id="houston" class="map-canvas"></div>
	</div>
	<div class="col-md-4">
		<span class="more-info">For more information on Talara Capital Management, please contact us at 
			<span class="red">(646)396-6040</span> 
			or email us at 
			<a href="mailto:info@talaracapital.com">info@talaracapital.com</a>
		</span>
	</div>
</div>
<?php get_footer(); ?>