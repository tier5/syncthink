<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SyncThink</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo ot_get_option('fevicon'); ?>" />

	<!-- Vendor Styles -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/vendor/owl-carousel/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/video.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/video-js.css"/>
<!--	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/dropdown.css"/>-->

	<!-- App Styles -->
	<?php wp_head();?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css" />


</head>
<body>
<div class="wrapper">
	<nav class="nav">
		<a href="#" class="btn-menu">
			<span></span>
		</a>

		<ul>
			<?php wp_nav_menu( array('menu' => 'Secondary Menu', 'container' => 'false','items_wrap'=>'%3$s')); ?>
			<!--
			<div class="nav-item">
				<a id="section-research" href="#section-research" data-color="#76767b">Research</a>
			</div>
			-->
		</ul>

		<span class="text"></span>
	</nav><!-- /.nav -->

	<div class="container">
        <header id="header">
            <div class="inner_container">
                <div class="hdr_sec navigation">
                    <div class="logo"><a href="<?php echo ot_get_option('add_link_first_logo'); ?>"><img src="<?php echo ot_get_option('first_logo'); ?> " alt="" /></a></div>
                    <!-- <a class="pull" id="pull_menu" href="#" data-original-title="" title=""><img alt="menu" src="<?php echo get_stylesheet_directory_uri()?>/css/images/menu.png"></a> -->
                    <nav id="nav">
                        <ul class="hdr_menu">
                           <li class="logo_eye active"><a href="<?php echo get_home_url();?>"><img src="<?php echo ot_get_option('second_logo'); ?>" alt="" /></a></li>
							<?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => 'false','items_wrap'=>'%3$s')); ?>
                            <i class="clear_0"></i>
                        </ul>
                    </nav>
                    <i class="clear_0"></i>
                </div>
            </div>
        </header>