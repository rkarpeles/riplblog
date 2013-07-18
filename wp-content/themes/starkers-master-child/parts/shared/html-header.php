<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7 lt-ie9" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8 lt-ie9" lang="en"><![endif]--> 
<!--[if IE 9 ]><html class="no-js ie9 lt-ie10" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!--Load jQuery script-->
		<?php wp_enqueue_script("jquery"); ?>
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />		
		<!--Custom stylesheet for this particular JMLS blog-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ripl.css"/>
		<!--Favicon-->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>		
		<!--Picturefill for responsive images: https://github.com/scottjehl/picturefill-->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/picturefill.min.js"></script> 		
		<!--[if IE]>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css">	
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script> 
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv-printshiv.js"></script> 
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>