	<footer>
		<div class="container">
			<div class="col-md-4">
				&copy; <?php echo date('Y'); ?> Talara Capital Management <a href="">Contact Us</a>
			</div>
			<div class="col-md-2 pull-right">
				Site By <a href="http://spidadesign.com">Spida Design</a>
			</div>
		</div>
	</footer>
	<script src="<?php bloginfo('template_directory'); ?>/assets/javascripts/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/javascripts/bootstrap/dropdown.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/slick/slick.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.header-slider').slick({});
			$('.blog-slider').slick({});
		});
	</script>
	</body>
</html>