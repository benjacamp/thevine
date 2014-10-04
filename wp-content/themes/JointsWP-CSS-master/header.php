<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
		
		
		<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Nunito:400,700,300:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  
  
	  <script>
	// Picture element HTML5 shiv
	document.createElement( "picture" );
	</script>
	<script src="library/js/picturefill.min.js" async></script>

	</head>

	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap">
		<div class="inner-wrap">
			<div id="container">
			<div class="container info-bar">
				<div class="row">
					<div class="small-12 medium-5 columns">Sunday Services: 9:00am and 10:45am</div>
					<div class="small-12 medium-7 columns">12 Nob Hill Rd. Madison, WI 52718</div>
				</div>
			</div>
	
				<header class="header" role="banner">
	
					<div id="inner-header" class="row">
							
						
						 <?php // get_template_part( 'partials/nav', 'offcanvas' ); ?> 
						
						 <?php  get_template_part( 'partials/nav', 'topbar' ); ?>
						 
						 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>  								
						
						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->
										
					</div> <!-- end #inner-header -->
	
				</header> <!-- end header -->