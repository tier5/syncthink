<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ec37914c96f30ae7df28fb04705d823bb91691391e"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/themes/SyncThinkWordPressExpansion/page-templates/artical.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/plugins/wpide/backups/themes/SyncThinkWordPressExpansion/page-templates/artical_2016-02-04-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Artical Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 
 
 <section class="article_wrap">
                <div class="inner_container">
                    <div class="news_wrapper">
                        <h3> <span class="icon"><img src="<?php the_field('add_concussion_news_icon');?>" alt="" /></span><?php the_field('add_concussion_news_text');?></h3>
						
							<?php 
								query_posts(array('post_type'=>'post','featured'=>yes,'cat'=>4,'posts_per_page'=>'1','order'=>'DESC')); 
							while(have_posts()) : the_post();
						?>
                        <h3 class="news_hdng"><?php the_title();?></h3>
                        <span class="src_name"><?php the_field('add_name_of_source');?> <strong>|</strong> <?php the_field('add_publication_date'); ?></span><span class="feature"><strong><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon1.png" alt="" /></strong>Featured</span>
                        <p class="para"><?php 
					$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . ''; 
						?></p>
						<?php 
								endwhile; 
							wp_reset_query(); 
									?>
						
                        <a href="<?php the_field("add_news_full_artical_link"); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
							
                        <span class="dotted_divider"></span>

                        <div class="recent_atc_wrap">
                           <span> Latest Research </span>
							<?php 
								query_posts(array('post_type'=>'post','cat'=>4,'posts_per_page'=>'3','order'=>'ASC')); 
							$i=1; while(have_posts()) :  the_post();
						?>
                            <div class="article_post  <?php if($i==3){ echo"rt_none"; } ?>">
                                <h4><?php the_title();?></h4>
                                <span class="src_name"><?php the_field('add_name_of_source');?>  <strong>|</strong> <?php the_field('add_publication_date'); ?></span>
                                <p><?php 
					       $content = get_the_content(); 
							echo substr(strip_tags($content), 0, 200) . '...'; 
						?></p>
                            </div>
							<?php 
							$i++;	endwhile; 
							wp_reset_query(); 
							?>
                             
                            <i class="clear_0"></i>
                        </div>

                        <span class="dotted_divider"></span>
                        <a href="<?php the_field('add_view_full_archive_link_of_concussion_news');?>" target="_blank" class="archive">View Full Archive<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
                    </div>
                </div>
        </section>
        
         <section class="reserach_wrap">
                <div class="inner_container">
                    <div class="news_wrapper">
                        <h3> <span class="icon"><img src="<?php the_field('add_research_icon');?>" alt="" /></span><?php the_field('add_research_title');?></h3>
						<?php 
								query_posts(array('post_type'=>'post','featured'=>yes,'cat'=>6,'posts_per_page'=>'1','order'=>'DESC')); 
							while(have_posts()) : the_post();
						?>
                        <h3 class="news_hdng"><?php the_title();?></h3>
                        <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong> <?php the_field('add_publication_date'); ?></span><span class="feature"><strong><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon12.png" alt="" /></strong>Featured</span>
                        <p class="para"><?php 
					        $content = get_the_content(); 
							echo substr(strip_tags($content), 0, 200) . '...'; 
						?></p>
						
                        <a href="<?php the_field(add_research_full_artical_link); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
						<?php 
								endwhile; 
							wp_reset_query(); 
									?>
                        <span class="dotted_divider"></span>

                        <div class="recent_atc_wrap">
                            <a href="<?php the_field('add_latest_research_link');?>" target="_blank">Latest Research</a>
							<?php 
								query_posts(array('post_type'=>'post','cat'=>6,'posts_per_page'=>'3','order'=>'ASC')); 
							 $i=1; while(have_posts()) : the_post();
						?>
                            <div class="article_post <?php if($i==3){ echo"rt_none"; } ?>">
                                <h4><?php the_title();?></h4>
                                <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_field('add_publication_date'); ?></span>
                                <p><?php 
					        $content = get_the_content(); 
							echo substr(strip_tags($content), 0, 200) . '...'; 
						?></p>
                            </div>
							<?php 
							$i++;	endwhile; 
							wp_reset_query(); 
							?>
                            
                            <i class="clear_0"></i>
                        </div>

                        <span class="dotted_divider"></span>
                        <a href="<?php the_field('add_view_full_archive_link_of_research');?>" target="_blank" class="archive">View Full Archive<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
                    </div>
                </div>
        </section>
        
         <section class="patent_wrap">
                <div class="inner_container">
                    <div class="news_wrapper">
                        <h3> <span class="icon"><img src="<?php the_field('add_patents_icon');?>" alt="" /></span><?php the_field('add_patents_title');?></h3><span class="logo_hdr"><a href="#"><img src="<?php the_field('add_logo');?>" alt="" /></a></span>
                        <i class="clear_0"></i>
                        <p class="para"><?php the_field('add_content_of_parents');?></p>

                        <span class="dotted_divider"></span>

                        <div class="recent_atc_wrap">
						<?php 
								query_posts(array('post_type'=>'post','cat'=>'5','posts_per_page'=>'3','order'=>'ASC')); 
							$i=1; while(have_posts()) :  the_post();
						?>
                            <div class="article_post <?php if($i==3){ echo"rt_none"; } ?>">
							<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
			  
							
						if($fimage) {	?>					
				
                                <div class="outer_brdr"><div class="post_img"><a href="#"><img src="<?php echo $fimage; ?>" alt="" /></div></div>
								<?php }?>
                                <h4><?php the_title();?></h4>
                                <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_time('M. j, Y'); ?></span>
                                <p><?php 
					        $content = get_the_content(); 
							echo substr(strip_tags($content), 0, 200) . '...'; 
						?></p>
                                <a class="article" href="<?php the_field('add_view_link'); ?>" target="_blank">View<i><img alt="" src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png"></i></a>
                            </div>
							<?php 
							$i++;	endwhile; 
							wp_reset_query(); 
							?>
                            
                            <i class="clear_0"></i>
                        </div>

                        <span class="dotted_divider"></span>
                        <a href="<?php the_field('add_view_full_archive_link_of_parents');?>" target="_blank" class="archive">View Full Archive<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
                    </div>
                </div>
        </section>
		
		
		
<?php

get_footer();
?>		
