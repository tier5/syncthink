<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ec37914c96f30ae7df28fb04705d823bc2e7adf0ab"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/themes/SyncThinkWordPressExpansion/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/plugins/wpide/backups/themes/SyncThinkWordPressExpansion/footer_2016-02-01-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
<section class="section section-contacts" id="section-contacts">
			<div class="shell fullscreen-image-container">
				<img src="<?php echo get_stylesheet_directory_uri()?>/css/images/temp/section-bg-6.jpg" height="768" width="1366" alt="" class="fullscreen-image" />
				
				<header class="section-head">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri()?>/css/images/basic-icons/logo.svg" alt="" />
					</figure>

					<h1>How can we help you?</h1>
				</header><!-- /.section-head -->

				<div class="section-body">
					<h5><?php echo ot_get_option('contact_title'); ?> </h5>

					<p><?php echo ot_get_option('contact_sub_content'); ?> </p>

					<div class="cols">
						<div class="col col-1of2">
							<div class="form form-contacts">
								 <?php echo do_shortcode( '[contact-form-7 id="254" title="Contact Form"]' );?> 
							</div><!-- /.form-contacts -->
						</div><!-- /.col-1of2 -->
						
						<div class="col col-1of2">
							<ul class="list-contacts">
								<li>
									<address>
										<strong>Address:</strong>
										<?php echo ot_get_option('address'); ?> 
									</address>
								</li>

								<li>
									<p>
										<strong>E-mail:</strong>

										<a href="<?php echo ot_get_option('email_id_link'); ?> "><?php echo ot_get_option('email_id'); ?> </a>
									</p>
								</li>

								<li>
									<p>
										<strong>Phone:</strong>

										<?php echo ot_get_option('phone_no'); ?> 
									</p>
								</li>
							</ul><!-- /.list-contacts -->
						</div><!-- /.col-1of2 -->
					</div><!-- /.cols -->
				</div><!-- /.section-body -->
			</div><!-- /.shell -->
		</section><!-- /.section section-contacts -->
	</div><!-- /.container -->

</div><!-- /.wrapper -->
	<!-- Vendor JS -->
	

       <script src="<?php echo get_stylesheet_directory_uri()?>/js/custom_function.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/video.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/video-js/media.vimeo.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/core.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/scrollbar.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/touch.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/dropdown/dropdown.js"></script>

	<!-- App JS -->
	<script src="<?php echo get_stylesheet_directory_uri()?>/js/validator.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/custom.js"></script>
	 <script src="<?php echo get_stylesheet_directory_uri()?>/js/retina.min.js"></script>
	
  
  <!-- CallRail Dynamic Number -->
  <script type="text/javascript" src="//cdn.callrail.com/companies/252556179/37ebd9ff4c3a1e238a91/12/swap.js"></script>
  
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