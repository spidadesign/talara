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
	<script src="<?php bloginfo('template_directory'); ?>/bower_components/sprockets-modernizr/modernizr.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/javascripts/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/bower_components/twbs-bootstrap-sass/assets/javascripts/bootstrap/dropdown.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/bower_components/twbs-bootstrap-sass/assets/javascripts/bootstrap/collapse.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/bower_components/twbs-bootstrap-sass/assets/javascripts/bootstrap/transition.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
			$('.header-slider').slick({
				fade: true,
				dots: true,
			});
			$('.header-slider .slick-dots').addClass('container');
			$('.blog-slider').slick({});

			var type = '<?php echo $type ?>';
			if(type === 'staff'){
				$(".staff").addClass('active');
			}
			else if(type === 'advisory'){
				$(".advisory").addClass('active');
			}
			console.log(type);
		});
		  (function(d) {
		    var config = {
		      kitId: 'xlw8cob',
		      scriptTimeout: 3000
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		  $("button.more").click(function(){
				if($(this).hasClass('alive')){
					$(this).removeClass('alive');
					$(this).text(function () {
    					return $(this).text().replace("Less", "More"); 
					});//$(this).text().replace('Less', 'More');
				}
				else{
					$(this).addClass('alive');
					$(".alive").text(function () {
    					return $(this).text().replace("More", "Less"); 
					});
				}
			});

		</script>
	</body>
</html>