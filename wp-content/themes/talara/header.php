<!DOCTYPE html>
<html lang="">
	<head>
		<title><?php echo get_bloginfo('name');  wp_title(); ?></title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/styles.css">
	</head>
	<body <?php body_class($class); ?>>
		<nav class="navbar" role="navigation">
			<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url();?>/about">About Us</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Strategies</a>
							<?php 
								wp_nav_menu(
									array(
										'menu_class' => 'dropdown-menu dropdown-menu-right',
										'container' => false
										) 
									); 
								?>
						</li>
						<li><a href="">Team</a></li>
						<li><a href="">News</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="logo">
			<div class="container">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
				</a>
			</div>
		</div>
		