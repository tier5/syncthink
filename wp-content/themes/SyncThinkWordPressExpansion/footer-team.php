<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	<!-- Vendor JS -->
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/video.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/media.vimeo.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/core.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/scrollbar.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/touch.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/dropdown.js"></script>

	<!-- App JS -->
	<script src="<?php echo get_stylesheet_directory_uri()?>/js/validator.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/retina.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/custom.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/custom_function.js"></script>
  <!-- CallRail Dynamic Number -->
  <script type="text/javascript" src="//cdn.callrail.com/companies/252556179/37ebd9ff4c3a1e238a91/12/swap.js"></script>
  <script type="text/javascript">

  </script>
  
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69457716-1', 'auto');
    ga('send', 'pageview');

  </script>


	<?php wp_footer(); ?>
</body>
</html>