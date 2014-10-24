<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
<link rel="stylesheet" media='screen and (max-width: 979px) and (min-width: 768px)' href="<?php bloginfo('template_url'); ?>/style-tablet.css"/>
<link rel="stylesheet" media='screen and (max-width: 767px)' href="<?php bloginfo('template_url'); ?>/style-phone.css"/>


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">

	<div id="menu">
		
		<?php wp_nav_menu("menu"); ?> 

	</div>
</div>

<img src="<?php bloginfo('template_url'); ?>/images/logo.png" id="logo" alt="Lucia Marin fisioterapista a Vicenza" />

<div id="outer">



