<!--Background Image-->
<div class="background">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg-large.jpg" alt="">
</div>
		
<!--Begin Wrap-->
<div class="wrap">

	<header>
		<a href="<?php echo bloginfo('url'); ?>/">
			<!-- Picturefill for loading images based on user's viewport width. 
			     More info here: https://github.com/scottjehl/picturefill-->
			<span data-picture data-alt="Review of Intellectual Property Law Blog">
				<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-320.png"></span>
				<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-480.png" data-media="(min-width: 320px)"></span>
				<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-600.png" data-media="(min-width: 480px)"></span>
				<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-760.png" data-media="(min-width: 600px)"></span>
				<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-960.png" data-media="(min-width: 760px)"></span>
				
				<!-- Fallback for browsers that don't support media queries -->
				<!--[if (lt IE 10) & (!IEMobile)]>
					<span data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-960.png"></span>
				<![endif]-->

				<!-- Fallback content for non-JS browsers -->
				<noscript>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-banner-960.png" alt="Review of Intellectual Property Law Blog | The John Marshall Law School">
				</noscript>
			</span>
		</a>
	</header>

	<!--Begin Container3-->
	<div class="container3">
	
		<!--Begin Container2-->
		<div class="container2">
		
			<!--Begin Container1-->
			<div class="container1">