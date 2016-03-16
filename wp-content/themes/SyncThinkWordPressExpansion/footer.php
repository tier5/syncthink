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
								 <?php //echo do_shortcode( '[contact-form-7 id="254" title="Contact Form"]' );?> 
								 <!-------form Contacts------->

							
<form onsubmit="$.post('http://syncthink.com/form_submit.php', $('form').serialize(), function(){}); return false;" id="contact-form" class="form-validate form-validated" method="post" action="#section-contacts" novalidate="true">
<header class="form-head">
<h3>Contact us</h3>
</header>
<div class="form-body">
<div class="form-cols">
<div class="form-col form-col-1of2">
<div class="form-row">
<div class="form-controls error">
<input type="text" data-validate="['name']" required="" placeholder="name" value="" id="field-name" name="field-name" class="field">
</div>
</div>
</div>
<div class="form-col form-col-1of2">
<div class="form-row">
<div class="form-controls">
<input type="text" placeholder="company/institution" value="" id="field-company" name="field-company" class="field">
</div>
</div>
</div>
</div>
<div class="form-cols">
<div class="form-col form-col-1of2">
<div class="form-row">
<div class="form-controls">
<input type="tel" placeholder="phone" value="" id="field-phone" name="field-phone" class="field"  onBlur="phonenumber(this);">
</div>
</div>
</div>
<div class="form-col form-col-1of2">
<div class="form-row">
<div class="form-controls error">
<input type="email" data-validate="['email']" required="" placeholder="email" value="" id="field-email" name="field-email" class="field">
</div>
</div>
</div>
</div>
<div class="form-row">
	<select class="select fs-dropdown-element" name="field-use" tabindex="-1"><option selected="" class="fs-dropdown-item_placeholder" value="">use</option>
<option value="clinic">clinic</option>
<option value="athletics">athletics</option>
<option value="military">military</option>
<option value="other">other</option>
</select>
<div class="form-controls">
<div class="select-holder">
<div tabindex="0" class="fs-dropdown "><button class="fs-dropdown-selected fs-touch-element" type="button">use</button><div class="fs-dropdown-options"><button data-value="" class="fs-dropdown-item fs-dropdown-item_placeholder fs-dropdown-item_selected" type="button">use</button><button data-value="clinic" class="fs-dropdown-item" type="button">clinic</button><button data-value="athletics" class="fs-dropdown-item" type="button">athletics</button><button data-value="military" class="fs-dropdown-item" type="button">military</button><button data-value="other" class="fs-dropdown-item" type="button">other</button></div></div>
</div>
</div>
</div>
<div class="form-row">
<div class="form-controls">
<div class="textarea-holder">
<textarea placeholder="message" id="field-message" name="field-message" class="textarea field"></textarea>
</div>
</div>
</div>
</div>
<div class="form-actions">
<button onclick="ga('send', 'event', 'Forms', 'submit', 'Contact Us');" class="btn btn-grey" type="submit">
<span>Submit</span>
<span class="hidden">A SyncThink&reg; representative will be in contact shortly</span>
</button>
</div>
</form>

								 <!--------------->
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
	
	<script src="<?php echo get_stylesheet_directory_uri()?>/vendor/jquery-1.11.3.min.js"></script>
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
 <script type="text/javascript">
	function phonenumber(me) {
		//alert("Not a valid Phone Number");
    var x = $('#field-phone').val();
    //alert(x);
    if (x!=''){
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(x.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("Not a valid Phone Number");
		me.focus();
        return false;
        }
	  }
    }
</script>

	<?php wp_footer(); ?> 
</body>
</html>
