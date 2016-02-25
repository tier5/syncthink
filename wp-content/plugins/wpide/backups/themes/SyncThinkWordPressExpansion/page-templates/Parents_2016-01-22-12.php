<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "5632f0328d9e3f81c63e058515d9b56f109bf15fc5"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/themes/SyncThinkWordPressExpansion/page-templates/Parents.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/plugins/wpide/backups/themes/SyncThinkWordPressExpansion/page-templates/Parents_2016-01-22-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Patents Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="article_wrap archive">
                <div class="inner_container">
                    <div class="news_wrapper">
                        <h3> <span class="icon"><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon3.png" alt="" /></span>Patents Archives</h3>
                        
						<span class="dotted_divider"></span>
						<?php
	query_posts('category_name=patents');
	if (have_posts()) : while (have_posts()) : the_post();
        $posttags = get_the_tags();
		if ($posttags) {
			foreach($posttags as $tag) {
				$all_tags_arr[] = $tag -> name;
			
				
				//USING JUST $tag MAKING $all_tags_arr A MULTI-DIMENSIONAL ARRAY, WHICH DOES WORK WITH array_unique
			}
		}
	endwhile; endif; 

	$tags_arr = array_unique($all_tags_arr); //REMOVES DUPLICATES
?>	<div class="currentsTags"><strong>Currents tags</strong> | <a href="<?php echo get_tag_link($tag_id); ?>"><?php echo implode("</a> <a>",$tags_arr); ?></a> </div>
						<?php 
					wp_reset_query();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("post_type=post&order=DESC&cat=5&posts_per_page=2&paged=".$paged);
				while (have_posts()) : the_post(); 
					?>
						<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
							if($fimage) {	?>					
							<div class="outer_brdr"><div class="post_img"><img src="<?php echo $fimage; ?>" alt="" /></div></div>
								<?php }?>
					    <div class="desc">
						    <h3 class="news_hdng"><?php the_title();?></h3>
					    	<span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_time('M. j, Y'); ?></span>
						    <div class="tags"> <strong>Tags |</strong> <?php  echo get_the_tag_list('',' ','');  ?></div>
						</div>
                        <p class="para"><?php 
					$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . '..'; 
						?></p>
						<a href="<?php the_permalink(); ?>" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
						<i class="clear_0"></i>
						<span class="dotted_divider"></span>
					<?php 
						endwhile; 
						?>
						
					</div>
					<div class="pagination">
					<?php 
							if(function_exists('wp_paginate')) 
							{
								wp_paginate();
							}
					?>
                <div class="clear"></div>
            </div>
				</div>
		<div class="clearBoth"></div>
	</section>	
		
<?php

get_footer(team);
?>