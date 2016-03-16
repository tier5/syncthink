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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css" />
    
	<script src="<?php echo get_stylesheet_directory_uri()?>/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.simplePagination.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/main.js"></script>
	<?php wp_head(); ?>
    
<style>

.light-theme a, .light-theme span {
	float: left;
	color: #fff !important;
	font-size:14px;
	line-height:24px;
	font-weight: normal;
	text-align: center;
	border: 1px solid #BBB;
	min-width: 14px;
	padding: 0 7px;
	margin: 0 5px 0 0;
	border-radius: 3px;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background: #efefef; /* Old browsers */
	background: -moz-linear-gradient(top, #666 0%, #666 100%) !important; /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#666), color-stop(100%,#666)) !important; /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #666 0%,#666 100%) !important; /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #666 0%,#666 100%) !important; /* Opera11.10+ */
	background: -ms-linear-gradient(top, #666 0%,#666 100%) !important; /* IE10+ */
	background: linear-gradient(top, #666 0%,#666 100%) !important; /* W3C */
}

.light-theme a:hover {
	text-decoration: none;
	background: #FCFCFC !important;
	color:#666 !important;
}

.light-theme .current {
	background: #fff !important;
	color: #666 !important;
	box-shadow: none !important;
	cursor: default;
}
</style>
</head>
<script type="text/javascript" src="//cdn.callrail.com/companies/252556179/37ebd9ff4c3a1e238a91/12/swap.js"></script>
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
        
