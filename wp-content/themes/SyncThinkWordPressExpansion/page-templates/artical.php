<?php
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
							$firstPosts[] = $post->ID;
						?>
						<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
			  
						if($fimage) {	?>					
		
                            <div class="outer_brdr"><div class="post_img" style="background-image:url(<?php echo $fimage; ?>"></div></div>
							<?php }?>

                        <h3 class="news_hdng"><?php the_title();?></h3>
                        <span class="src_name"><?php the_field('add_name_of_source');?> <strong>|</strong> <?php the_field('add_publication_date'); ?></span><span class="feature"><strong><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon1.png" alt="" /></strong>Featured</span>
                        <p class="para"><?php 
					$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . ''; 
						?></p>
					
						
                        <a href="<?php the_field("add_view_link"); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
								<?php 
								endwhile; 
							wp_reset_query(); 
									?>
                        <span class="dotted_divider"></span>

                        <div class="recent_atc_wrap">
                           <span> Latest News</span>
							<?php 
							$exclude_featured_args = array(
							'post_type'=>'post',
							'cat'=>4,
							'posts_per_page'=>'3',
							'order'=>'DESC',
								'meta_query' => array(
									array(
										'key' => 'featured_article',
										'value' => 'on',
										'compare' => '!='
									)
								)
							 );
							 //$news_post_args=array('post_type'=>'post','cat'=>4,'posts_per_page'=>'3','order'=>'DESC');
							 //global $wp_query;
							// Merge custom query with $wp_query
							//$merged_args = array_merge( $wp_query->query, $exclude_featured_args );
							//print_r($merged_args);
							// Query posts using the modified arguments
							//print_r(query_posts( $merged_args );
							query_posts(array('post__not_in' => $firstPosts,'post_type'=>'post','cat'=>4,'posts_per_page'=>'3','order'=>'DESC')); 
							$i=1; while(have_posts()) :  the_post();
						?>
                            <div class="article_post  <?php if($i==3){ echo"rt_none"; } ?>">
                                <h4><a href="<?php the_field('add_view_link'); ?>" target="_blank"><?php the_title();?></a></h4>
                                <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong> <?php the_field('add_publication_date'); ?></span>
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
							$firstPostss[] = $post->ID;
						?>
						
						<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
			  
						if($fimage) {	?>					
		
                            <div class="outer_brdr"><div class="post_img" style="background-image:url(<?php echo $fimage; ?>"></div></div>
							<?php }?>

                        <h3 class="news_hdng"><?php the_title();?></h3>
                        <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong> <?php the_field('add_publication_date'); ?></span><span class="feature"><strong><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon12.png" alt="" /></strong>Featured</span>
                        <p class="para"><?php 
					        $content = get_the_content(); 
							echo substr(strip_tags($content), 0, 200) . '...'; 
						?></p>
							
                        <a href="<?php the_field("add_view_link"); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
						<?php 
								endwhile; 
							wp_reset_query(); 
									?>
                        <span class="dotted_divider"></span>

                        <div class="recent_atc_wrap">
                            <span>Latest Research</span>
							<?php 
								query_posts(array('post__not_in' => $firstPostss,'post_type'=>'post','cat'=>6,'posts_per_page'=>'3','order'=>'DESC'));
								 
							 $i=1; while(have_posts()) : the_post();
						?>
                            <div class="article_post <?php if($i==3){ echo"rt_none"; } ?>">
                                <h4><a href="<?php the_field('add_view_link'); ?>" target="_blank"><?php the_title();?></a></h4>
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
                                <h4><a href="<?php the_field('add_view_link'); ?>" target="_blank"><?php the_title();?></a></h4>
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
