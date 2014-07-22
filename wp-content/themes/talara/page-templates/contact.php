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
		<h2>Talara Capital Management</h2>
		<h3>New York Office</h3>
		<span>805 Third Ave, Floor 20</span>
		<span>New York, NY 10022</span>
		<div id="new_york" class="map-canvas"></div>
	</div>
	<div class="col-md-6">
		<h2>Talara Capital Management</h2>
		<h3>Houston Office</h3>
		<span>1221 McKinney Street, Floor 21</span>
		<span>Houston, TX 77010</span>
		<div id="houston" class="map-canvas"></div>
	</div>
	<div class="col-md-4">
		<div class="joe">
			<h2>Joseph Tremblay</h2>
			<h3>Director of Marketing</h3>
			<span>646-396-6045</span>
			<span>jtremblay@talaracapital.com</span>
		</div>
	</div>
</div>
<?php get_footer(); ?>