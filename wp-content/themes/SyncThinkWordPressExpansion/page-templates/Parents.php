<?php
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
	$i = 0;
	query_posts('category_name=patents');
	if (have_posts()) : 
		while (have_posts()) : 
			the_post();
			$posttags = get_the_tags();
			if ($posttags) {
				
				foreach($posttags as $tag) {

					$all_tags_arr[$i][] = $tag -> name;
					$all_tags_arr[$i][] = $tag -> term_id;
						$all_tags_arr[$i][] = $tag -> slug;
					
					//USING JUST $tag MAKING $all_tags_arr A MULTI-DIMENSIONAL ARRAY, WHICH DOES WORK WITH array_unique
					$i =$i+1;
				}
			}
			
		endwhile; 
	endif; 

	$tags_arr = array_unique($all_tags_arr, SORT_REGULAR); //REMOVES DUPLICATES

	
?>	<div class="currentsTags">
		<strong>Currents tags</strong> |
			<a href="" id="" class="active">Select All</a> 
					<?php foreach( $tags_arr as $tag) :  ?>
			<a href="#" id="<?php echo $tag[2]; ?>" >

				<?php echo $tag[0]; ?>
			</a> 
		<?php endforeach; ?>
	</div>
				<?php 
				wp_reset_query();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("post_type=post&order=DESC&cat=5&posts_per_page=20&paged=".$paged);
				while (have_posts()) : the_post(); 
					?>
					<div Class="post <?php $tags = get_the_tags(get_the_id()); foreach($tags as $tag) { echo $tag->slug; echo " "; } ?>">
						<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
							if($fimage) {	?>					
							<div class="outer_brdr"><div class="post_img"><img src="<?php echo $fimage; ?>" alt="" /></div></div>
								<?php }?>
					    <div class="desc">
						    <h3 class="news_hdng"><?php the_title();?></h3>
					    	<span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_field('add_publication_date'); ?></span>
						    <div class="tags"> <strong>Tags |</strong> <?php  echo get_the_tag_list('',' ','');  ?></div>
						</div>
                        <p class="para"><?php 
					$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . '..'; 
						?></p>
						<a href="<?php the_field('add_view_link'); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
						<i class="clear_0"></i>
						<span class="dotted_divider"></span>
						</div>
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
