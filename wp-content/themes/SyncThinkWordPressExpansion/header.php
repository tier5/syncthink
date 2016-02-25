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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/dropdown.css"/>
	
	<!-- App Styles -->
	
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css" />

</head>
<body>

<div class="wrapper article_wrapper">
    <div class="container">
        <header id="header">
            <div class="inner_container">
                <div class="hdr_sec navigation">
                     <div class="logo"><a href="<?php echo ot_get_option('add_link_first_logo'); ?>"><img src="<?php echo ot_get_option('first_logo'); ?> " alt="" /></a></div>
                    
                    <nav id="nav">
                        <ul class="hdr_menu">
                           <li class="logo_eye"><a href="<?php echo get_home_url();?>"><img src="<?php echo ot_get_option('second_logo'); ?>" alt="" /></a></li>
                           <?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => 'false','items_wrap'=>'%3$s')); ?>
                            <i class="clear_0"></i>
                        </ul>
                    </nav>
                    <i class="clear_0"></i>
                </div>
            </div>
        </header>
        