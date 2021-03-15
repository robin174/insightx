<?php
/*
 * The template for displaying the header
 * This is the template that displays all of the <head> section
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Typekit: Utopia -->
		<link rel="stylesheet" href="https://use.typekit.net/ntc5nyr.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180735634-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-180735634-1');
		</script>
		<?php wp_head(); ?>

		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/8c99a08fd4.js" crossorigin="anonymous"></script>
		
		<!-- Manual load of stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	</head>
			
	<body <?php body_class(); ?>>
		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas' ); ?>
				</header> <!-- end .header -->
				<div class="background-wrapper"><span>.</span>