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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKGY4G6u_ZpjZPizMVu6E__tqxXay_Nfc"> </script>
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
		$('.single-strategy img.size-medium').addClass('img-responsive');
		  (function(d) {
		    var config = {
		      kitId: 'xlw8cob',
		      scriptTimeout: 3000
		    },
		    h=d.documentElement,t=setTimeout(function(){
		    	h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";
		    },
		    config.scriptTimeout),tk=d.createElement("script"),
		    f=false,s=d.getElementsByTagName("script")[0],a;
		    h.className+=" wf-loading";
		    tk.src='//use.typekit.net/'+config.kitId+'.js';
		    tk.async=true;
		    tk.onload=tk.onreadystatechange=function(){
		    	a=this.readyState;
		    	if(f||a&&a!="complete"&&a!="loaded")
		    		return;
		    	f=true;
		    	clearTimeout(t);
		    	try{Typekit.load(config)}catch(e){}};
		    	s.parentNode.insertBefore(tk,s)
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
			function initialize() {
				var styles = [
					{
				      stylers: [
				        //{ hue: "#b5b1a9" },
				        { saturation: -100 },
				        { lightness: -10 },
				        { gamma: 1.00 }
				      ]
				    },{
				      featureType: "road",
				      elementType: "geometry",
				      stylers: [
				        { lightness: 100 },
				        { visibility: "simplified" }
				      ]
				    },{
				      featureType: "road",
				      elementType: "labels",
				      stylers: [
				        { visibility: "off" }
				      ]
				    },{
					    featureType: "poi.business",
					    elementType: "labels",
					    stylers: [
					      { visibility: "off" }
					    ]
					  },
				  ];
				var styledMap = new google.maps.StyledMapType(styles,
    				{name: "Styled Map"});

				var mapOptions = {
		        	center: new google.maps.LatLng(40.7554746, -73.970512),
		          	zoom: 15,
		          	mapTypeControlOptions: {
      				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    				}
		        };
		        var houstonOptions = {
		        	center: new google.maps.LatLng(29.756016, -95.362459),
		          	zoom: 15,
		          	mapTypeControlOptions: {
      				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'houston_style']
    				}
		        };

		        var map = new google.maps.Map(document.getElementById("new-york"),
		        								mapOptions);
		        var houston = new google.maps.Map(document.getElementById("houston"),
		        								houstonOptions);

		        var image = "<?php bloginfo('template_directory'); ?>/assets/images/marker.png";
		        var nyLatLng= new google.maps.LatLng(40.7554746, -73.970512);
		        var houstonLatLng= new google.maps.LatLng(29.756016, -95.362459);
		        var talMarker = new google.maps.Marker({
     				position: nyLatLng,
      				map: map,
      				icon: image
  				});
  				var houstonMarker = new google.maps.Marker({
     				position: houstonLatLng,
      				map: houston,
      				icon: image
  				});
  				map.mapTypes.set('map_style', styledMap);
  				map.setMapTypeId('map_style');

  				houston.mapTypes.set('houston_style', styledMap);
  				houston.setMapTypeId('houston_style');
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</body>
</html>