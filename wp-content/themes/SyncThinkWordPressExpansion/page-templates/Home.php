<?php
/**
 * Template Name: Home Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(home); ?>
		<section class="section section-intro fullscreen-image-container" id="section-intro">
			<img src="<?php the_field('add_banner_image');?>" height="768" width="1366" alt="" class="fullscreen-image" />

			<div class="shell">
				<div class="section-content">
					<figure>
						<img src="<?php the_field('add_logo_image');?>" alt="" />
					</figure>

					<h1><?php the_field('add_title');?></h1>
				
					<p><?php the_field('add_content');?></p>
				</div><!-- /.section-content -->
				
				<figure class="section-image tablet-visible">
					<img src="<?php the_field('add_banner_image');?>"  alt=""  width="1366"  height="768" />
				</figure><!-- /.section-image -->
			</div><!-- /.shell -->
		</section><!-- /.section section-intro -->

		<section class="section section-product" id="section-product">
			<div class="shell">
				<h1><?php the_field('add_title');?></h1>
				
				<div class="box box-xlarge">
					<h6><?php the_field('add_first_sub_title');?></h6>
					
					<p><?php the_field('add_first_sub_contain');?></p>
				</div><!-- /.box -->
				
				<div class="box box-images box-position-1">
					<figure class="alt">
						<img src="<?php the_field('add_product_image_4');?>"  alt=""  width="119"  height="119" />
					</figure>
				
					<figure> 
						<img src="<?php the_field('add_product_image_5');?>" alt="" width="119" height="120"  />
					</figure>
				</div><!-- /.box box-images -->
				
				<div class="box box-medium alignright">
					<h6><?php the_field('add_second_sub_title');?></h6>
				
					<p><?php the_field('add_second_sub_content');?></p>

					<div class="box box-images box-position-2">
						<figure>
							<img src="<?php the_field('add_product_image_1');?>"  alt=""  width="119"  height="119" />
						</figure>
					
						<figure class="alt"> 
							<img src="<?php the_field('add_product_image_2');?>" alt="" width="119" height="120"  />
						</figure>
					</div><!-- /.box box-image -->
				</div><!-- /.box -->
				
				<div class="box box-large alignleft">
					<h6><?php the_field('add_third_sub_title');?></h6>
				
					<p><?php the_field('add_third_sub_content');?></p>
				</div><!-- /.box -->
				
				<div class="box box-images box-image-large box-position-3">
					<figure>
						<img src="<?php the_field('add_product_image_3');?>" height="646" width="1069" alt="" />
					</figure>
				</div><!-- /.box box-image -->
				
				<div class="box box-small">
					<h6><?php the_field('add_fourth_sub_title');?></h6>
				
					<p><?php the_field('add_fourth_sub_content');?></p>
				</div><!-- /.box -->
			</div><!-- /.shell -->
		</section><!-- /.section section-product -->

		<section class="section section-video" id="section-video">
			<div class="video-container">
				<video id="player1" src="" class="video-js vjs-default-skin" poster='<?php the_field('add_image');?>' data-src='https://vimeo.com/142006550'></video>
			</div><!-- /.video-container -->

			<div class="section-content">
				<h1><?php the_field('add_ghajar_title');?></h1>

				<p><?php the_field('add_ghajar_content');?></p>

				<a href="#section-video" class="btn btn-red btn-start-video">
					Play Video
				</a>
			</div><!-- /.section-content -->
		</section><!-- /.section section-video -->

		<section class="section section-science" id="section-science">
			<div class="shell fullscreen-image-container">
				<img src="<?php echo get_stylesheet_directory_uri()?>/css/images/temp/section-bg-3.jpg" alt="" class="fullscreen-image" />

				<div class="slider slider-default">
					<div class="slider-clip">
						<div class="slides owl-carousel">
						<?php if(get_field('visual_attention_pathways')):  while(the_repeater_field('visual_attention_pathways')): ?>
							<div class="slide">
								<h1><?php the_sub_field('add_title');?></h1>
					
								<div class="slide-content">
									<p class="alignleft">   <?php the_sub_field('add_content');?> </p>	
									
									<figure class="alignright">
										<img src="<?php the_sub_field('add_image');?>" alt="" />
									</figure>
								</div><!-- /.slide-content -->
							</div><!-- /.slide -->
							<?php endwhile; endif; ?>
							<?php if(get_field('objective_attention_measurement')):  while(the_repeater_field('objective_attention_measurement')): ?>
							<div class="slide">
								<h1><?php the_sub_field('add_title');?></h1>
					
								<div class="slide-content">
									<p class="full-width">   <?php the_sub_field('add_content');?>  </p>	
									
									<figure class="alignleft" style="width:25%">
										Slow Recovery:
									</br>
									</br>
										<img src="<?php the_sub_field('add_slowrecovery_image');?> " alt="" />
									</figure>
									<figure class="alignleft" style="width:25%; margin-left:25%;">
										Quick Recovery:
									</br>
									</br>
										<img width="50%"src="<?php the_sub_field('add_quickrecovery_image');?> " alt="" />
									</figure>
								</div><!-- /.slide-content -->
							</div><!-- /.slide -->
							<?php endwhile; endif; ?>
							
							<?php if(get_field('quantifying_attention')):  while(the_repeater_field('quantifying_attention')): ?>
							<div class="slide">
								<h1><?php the_sub_field('add_title');?></h1>
					
								<div class="slide-content">
									<div class="slide-content-inner">

									
									
									
									
									<?php the_sub_field('add_content');?>
									
									
									</div><!-- /.slide-content-inner -->
									
									<figure class="alt">
										<img src="<?php the_sub_field('add_image');?>" alt="" />
									</figure>
								</div><!-- /.slide-content -->
							</div><!-- /.slide -->
							<?php endwhile; endif; ?>
						</div><!-- /.slides -->
					</div><!-- /.slider-clip -->
					<div class="slider-nav">
					
						<div class="thumbs">
						<?php if(get_field('thumbnail_image')):  while(the_repeater_field('thumbnail_image')): ?>
							<div class="thumb">
								<?php the_sub_field('add_title');?>

								<figure class="fullscreen-image-container">
									<img src="<?php the_sub_field('add_image');?>" alt="" class="fullscreen-image" />
									<img src="<?php the_sub_field('add_hover_image');?>" alt="" />
									
								</figure>
							</div><!-- /.thumb -->
					
							<?php endwhile; endif; ?>
						</div>
						
						
					</div><!-- /.slider-nav -->
				</div><!-- /.slider slider-default -->
			</div><!-- /.shell -->
		</section><!-- /.section section-science -->

		<section class="section section-services" id="section-services">
			<div class="section-content">
				<div class="content-holder">
					<h1>Valuable insight in <br /><strong>60 seconds or less.</strong></h1>
					
					<ul class="services">
					<?php if(get_field('service')):  while(the_repeater_field('service')): ?>
						<li class="service">
							<div class="service-content">
								<h3 class="service-title">
									<figure>
										<img src="<?php the_sub_field('add_logo_image');?>" alt="" width="444" height="58"  />
									</figure>
					
									 <span><?php the_sub_field('add_text_after_logo');?></span>
								</h3><!-- /.service-title -->
					
								<p><?php the_sub_field('add_content');?></p>
							</div><!-- /.service-content -->
					
							<figure class="service-image">
								<img src="<?php the_sub_field('add_thumbnail__image');?>" alt="" />
							</figure><!-- /.service-image -->
						</li><!-- /.service -->
					<?php endwhile; endif; ?>
					</ul><!-- /.services -->
				</div><!-- /.content-holder -->

				<div class="timer">
					<div class="timer-inner">
						<span class="seconds">60</span>
						<span class="text">seconds</span>
					</div><!-- /.timer-inner -->
				</div><!-- /.timer -->
			</div><!-- /.section-content -->

			<div class="video-container video-container-alt">
				<video id="player2" src="" class="video-js vjs-default-skin" data-src='<?php the_field('add_video_source');?>' poster='<?php the_field('add_video_image');?>'></video>
			</div><!-- /.video-container -->

			<div class="section-description">
				<h1><?php the_field('ada_test_demo_title');?></h1>

				<p><?php the_field('ada_test_demo_content');?></p>

				<a href="#section-services" class="btn btn-red btn-start-video">
					Play Demo
				</a>
			</div><!-- /.section-description -->
		</section><!-- /.section section-services -->

		<section class="section section-partners" id="section-partners">
			<section class="section-review fullscreen-image-container">
				<img src="<?php echo get_stylesheet_directory_uri()?>/css/images/temp/section-bg-4.jpg" height="768" width="1366" alt="" class="fullscreen-image" />

				<div class="shell">
					<div class="content-holder">
						<div class="content-holder-inner">
							<div class="section-content">
								<h1><?php the_field('add_environment_title');?></h1>	
							
								<h6><?php the_field('add_environment_sub_title');?></h6>
							
								<p>  <?php the_field('add_environment_content');?>   </p>
							</div><!-- /.section-content -->
							
							<div class="slider slider-review">
								<div class="slider-clip">
									<div class="slides">
									<?php if(get_field('slider')): $i=1;  while(the_repeater_field('slider')): ?>
									<div class="slide <?php if($i=1) { echo"active"; }?>">
											<figure class="slide-image fullscreen-image-container">
												<img src="<?php the_sub_field('add_image');?>" alt="" class="fullscreen-image" />
								
												<figcaption>
													<span class="solid-bg"></span>
													<p><?php the_sub_field('add_over_text');?></p>
												</figcaption>
											</figure><!-- /.slide-image -->
								
											<h4><?php the_sub_field('add_title');?></h4>
										</div><!-- /.slide -->
										<?php $i++; endwhile; endif; ?>
										
										
										
									</div><!-- /.slides -->
								</div><!-- /.slider-clip -->
							</div><!-- /.slider slider-review -->
						</div><!-- /.content-holder-inner -->
					</div><!-- /.content-holder -->
				</div><!-- /.shell -->
			</section><!-- /.section section-review -->

			<header class="section-head">
				<h3 class="section-title">
					Proud partners of
				</h3><!-- /.section-title -->

				<figure>
						<img src="<?php echo get_stylesheet_directory_uri()?>/css/images/basic-icons/logo.svg" alt="" />
					</figure>
			</header><!-- /.section-head -->

			<div class="section-body">
				<ul class="list-partners">
				<?php if(get_field('list')):  while(the_repeater_field('list')): ?>
					<li>
						<img src="<?php the_sub_field('image');?>" alt="" />
					</li>
		<?php endwhile; endif; ?>
					
				</ul><!-- /.list-partners -->
			</div><!-- /.section-body -->
		</section><!-- /.section section-partners -->

		<section class="section section-testimonials fullscreen-image-container" id="section-testimonials">
			<div class="section-body">
				<div class="slider slider-testimonials">
					<div class="slider-clip">
						<div class="testimonials slides owl-carousel">
						
						<?php if(get_field('testimonial')):  while(the_repeater_field('testimonial')): ?>
							<div class="testimonial slide fullscreen-image-container">
								<img src="<?php the_sub_field('add_background_image');?>" height="767" width="1366" alt="" class="fullscreen-image" />

								<div class="shell">
									<figure class="slide-image fullscreen-image-container">
										<img src="<?php the_sub_field('add_testimonial_image');?>" height="370" width="374" alt="" class="fullscreen-image" />
									</figure>

									<div class="slide-content">
										<h1>Client Testimonial: <strong><?php the_sub_field('add_testimonial_title');?></strong></h1>	

										<p><?php the_sub_field('add_testimonial_content');?></p>
									</div><!-- /.slide-content -->

									<div class="testimonial-meta">
										<p class="testimonial-person">
											<strong><?php the_sub_field('add_client_name');?></strong><br />
											<?php the_sub_field('add_client_designation');?>
										</p><!-- /.testimonial-person -->
											
										<blockquote>
											<?php the_sub_field('add_feedback');?>
										</blockquote>	
									</div><!-- /.testimonial-meta -->
								</div><!-- /.shell -->
							</div><!-- /.slide -->
							<?php endwhile; endif; ?>
							
							
						</div><!-- /.slides -->
					</div><!-- /.slider-clip -->
				</div><!-- /.slider slider-testimonials -->
			</div><!-- /.section-body -->
		</section><!-- /.section section-testimonials -->


<?php

get_footer();
?>